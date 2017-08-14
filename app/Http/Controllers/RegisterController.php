<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:2',
            're_password'=>'required|same:password'
        ]);

        if($validator->fails())
            return back()->withErrors($validator->errors())->withInput();

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if($user->save())
        {
            $cred = $request->only('email','password');
            if(Auth::attempt($cred))
            {

                    return redirect('/home');
                }else{
                    return "Not Auth";
                }


        return abort(500);
    }
}}