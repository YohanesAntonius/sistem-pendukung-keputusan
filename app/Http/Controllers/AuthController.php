<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    // public function login() {
    //     return view('auth.login');
    // }

    // public function postlogin() {
    //     if (Auth::attempt($request->only('username', 'password'))) {
    //         return redirect('/');
    //     }
    //     return redirect('/login');
    // }

    public function logout(){
        Auth::logout();
            return redirect('/login');

    }
}
