<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginform()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //dd($request->all());
        $request->validate([

            'email'=>'required|email|max:50',
            'password'=>'required|string|min:6|max:20',
        ]);

        $islogin=Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        if($islogin)
        {
            return redirect(url("dashboard/"));
        }
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url("dashboard/login"));
    }
}
