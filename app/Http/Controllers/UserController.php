<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;


class UserController extends Controller
{
    public function getLogin()
    {
        return view('pages.login');
    }


    public function attemptLogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:users',
            'password'=>'required'
        ]);

        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();
//        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
//        {return Auth::user();}

            $c = $request->only('email','password');
        if(Auth::attempt($c,(bool)$request->remember_me))
        {
//            return Auth::user();
            return redirect('/home');
        }
        return back()->withErrors(['Wrong Password Or Email'])->withInput();
    }



    public function getUser()
    {
        if(Auth::check())
            return Auth::user();

        return "Not Auth";
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }

    public function getDashboard()
    {
//        if(Auth::check())
//            return view('login.dashboard');
//
//        return redirect('/auth/login');

        $user = Auth::user();

        return view('pages.order',compact('user'));
    }
}
