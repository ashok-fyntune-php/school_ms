<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function student(){

        return view('auth.login');
    }
    public function relation(){
            //$user= User::first();
            $user =User ::with('contact')->first();
          //  return $user->all();
          //   return $user->contact;
             dd($user->toArray());

     }

    public function postLogin(Request $request)

    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}
