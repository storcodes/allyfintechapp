<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\Transfer;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Paystack;
use RealRashid\SweetAlert\Facades\Alert;

class AccountController extends Controller
{
    public function editAccntDetails(Request $req)
    {

       $req->validate([
        'type' => 'required',
        'pin' => 'required|max:4|min:4',
        'pin_confirmation' => 'required|max:4|min:4',
       ]);

       if($req->pin != $req->pin_confirmation){
        return back()->with(['error' => 'Incorrect Pin']);
       }
       $user = Auth::user();
       $account = $user->account;
        $account->user_id = $user->id;
        $account->name = $account->name;
        $account->number = $account->number;
        $account->type = $req->type;
        $account->pin = Hash::make($req->pin);
        $account->save();

        return back()->with(['success' => 'Details Uploaded succesfully']);
    }

    public function transfer()
    {
        return view('User.transfer');
    }

    public function deposit()
    {
        return view('User.deposit');
    }
    public function transferFunction(Request $r)
    {
       $r->validate([
        'name' => 'required|string',
        'type' => 'required',
        'number' => 'required',
        'amount' => 'required',
        'pin'   => 'required',
       ]);

       $account = Account::where('name', $r->name)->where('type', $r->type)->where('number', $r->number)->first();
       if($account == NULL ){
        Alert::error('Error', "Incorrect Account Details" );
        return back();
       }
       if($account->number == Auth::user()->account->number){
        Alert::error('Error', "You cannot Transfer to yourself" );
        return back();

       }

       //check user pin
       $account_pin = Account::where('pin', $r->pin)->get();
       if( $account_pin == NULL){
        Alert::error('Error', "Incorrent Pin" );
        return back();

       }

       $recepient_wallet = $account->user->wallet;

       //check user wallet
       $wallet = Auth::user()->wallet;
            if($wallet->balance < $r->amount){
                Alert::error('Error', "Insufficient Fund" );
                return back();

            }
       //deduct from wallet
       $wallet->balance -= $r->amount;
       $wallet->save();

       $recepient_wallet->balance+= $r->amount;
       $recepient_wallet->save();


       //create Transaction
       $transaction = new Transaction();
       $transaction->user_id = Auth::user()->id;
       $transaction->wallet_id = $wallet->id;
       $transaction->amount = $r->amount;
       $transaction->status_id = 1;
       $transaction->type = 'debit';
       $transaction->description = $r->description;
       $transaction->save();

         //create Transfer
         $tranfer = new Transfer();
         $tranfer->user_id = Auth::user()->id;
         $tranfer->recepient_id = $account->id;
         $tranfer->amount = $r->amount;
         $tranfer->status_id = 2;
         $tranfer->description = $r->description;
         $tranfer->save();

         Alert::success('Success', 'transfer made to '.$account->name. 'Successfully');
         return back();

    }

    public function redirectToGateway(Request $request)
    {


        $ref= Paystack::genTranxRef();

        $request->validate([
            'reference' => 'required',
            'type' => 'required',
        ]);

        if($request->type == ''){
            return back()->with(['error' => "Enter an account type if you don't have create one in your profile page"]);
        }

        $account = Auth::user()->account;

        $request->quantity = 100;
        $request->reference = $ref;
        $request->currency="NGN";
        $request->email = Auth::user()->email;

        $wallet = Auth::user()->wallet;


         $transaction = Auth::user()->transactions()->create([
                'type' => 'credit',
                'reference'=>$ref,
                'amount'=>$request->amount,
                'description' => $request->description,
                'status_id' => 1,
                'wallet_id' => $wallet->id,
              ]);


        try {
            return \Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            $transaction->status_id = 3;
            $transaction->save();
            Alert::error('Error', "You've Successfully Registered" );
            return back();
        }
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();


         $reference = $paymentDetails['data']['reference'];

        // //Get transaction from db
         $transaction = Transaction::where('reference', $reference)->first();

        // //check if txn has been paid
         if ($transaction->status_id == 3) {
            Alert::success('Success', 'You\'ve successfully deposited into your Account');
             return back()->with(['error' => 'Failed transaction, please try again']);
        }

        // //Update transaction
         $wallet =$transaction->wallet;
         $wallet->balance+=$transaction->amount;
         $transaction->status_id = 2;
         $transaction->save();
         $wallet->save();

        // //return success message
         return redirect(route('user.deposit'));
    }
}
