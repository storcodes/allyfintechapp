<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $referrals = Auth::user()->referrals;
        $transfers = Auth::user()->transfers;
        return view('User.dashboard', compact('referrals', 'transfers'));
    }

    public function profile()
    {
      return view('User.profile');
    }
    public function editDetails(Request $req)
    {

        $req->validate([
            'phone' => 'required|string',
            'image' => 'nullable',
        ]);



        $user = Auth::user();
         //deleting initial photos if it exits
         if ($user->image != NULL  && $req->file('image')) {
            Storage::delete('/public/user_images' . '/' . $user->image);
        }

        if ($req->file('image')) {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = \Str::slug($user->name) . uniqid().'.'.$ext;
            $file->storePubliclyAs('/public/user_image', $filename);
            Storage::put('/public/user_image/' . $filename, fopen($file, 'r+'));

            $user->image = $filename.$ext;
            $user->save();
        }

        $user->name = $user->name;
        $user->phone = $user->phone;
        $user->image = $req->image;
        $user->save();

        return back()->with(['success' => 'Details Uploaded succesfully']);
    }
    public function referrals()
    {
        $referrals = Auth::user()->referrals;
        return view('User.referrals', compact('referrals'));
    }
}
