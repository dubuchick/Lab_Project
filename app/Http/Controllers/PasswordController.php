<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CheckOldPassword;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth;

class PasswordController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function view(){
        return view('password');
    }

    public function changePass(Request $request){
        $request->validate([
            'current_pass' => ['required', new CheckOldPassword],
            'new_pass' => ['required'],
            'new_confirm_pass'=>['same:new_pass'],
        ]);
        User::find(auth()->user()->id)->update(['password'=>Hash::make($request->new_pass)]);
        return redirect()->back();
    }
}
