<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $isValid = auth()->attempt(['email'=>$email,'password'=>$password]);

        if($isValid){
            return redirect('/');
        }else{
            return back();
        }
    }
}
