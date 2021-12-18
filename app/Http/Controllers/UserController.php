<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;
        $isValid = auth()->attempt(['email'=>$email,'password'=>$password]);

        if($isValid){
            if($remember){
                Cookie::queue('email',$email,10080);
                Cookie::queue('password',$password,10080);
            }
            return redirect('/');
        }else{
            return back()->withErrors(new MessageBag(['Invalid email/password']));
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    // public function showUser(){
    //     $user = User::all();
    //     return view('layout',compact('user'));
    // }
}
