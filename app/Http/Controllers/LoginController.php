<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {

        if (Auth::check()){
            return redirect()->route('home', Auth::user()->username);
        } else{
            return view('login.login')->with('title', 'Login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)){
            return redirect()->route('home', Auth::user()->username);
        }else{
            session()->flash('error', 'Username atau password salah');
            return redirect('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
