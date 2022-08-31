<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string'],

        ]);




        if($request->ref != NULL){
            if($user_ref = User::where('referral_code', $request->ref)->first() == NULL ){
                return back()->with(['error' => 'wrong referral code']);
            }
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),
                ]);

                $user->referral_code = \Str::random(4) . rand(0 , 100) . $user->id;
                $user_ref = User::where('referral_code', $request->ref)->first();

                $ref_user_wallet = $user_ref->wallet;
                $ref_user_wallet->balance += 1000.00;
                $user->referral_user_id = $user_ref->id;
                $user->save();
                $ref_user_wallet->save();

                $user->wallet()->create();
                $user->account()->create([
                    'number' => random_int(2182142264, 9999999999),
                    'name' => $user->name,
                ]);
                $user->save();

                event(new Registered($user));

                Auth::login($user);

                return redirect(RouteServiceProvider::HOME);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $user->referral_code = \Str::random(4) . rand(0 , 100) . $user->id;
            $user->wallet()->create();
            $user->account()->create([
                'number' => random_int(2182142264, 9999999999),
                'name' => $user->name,
            ]);
            $user->save();

            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }




}
