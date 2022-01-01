<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Book;
use App\Models\TransactionDetail;
use App\Models\Transaction;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth;

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

    public function register(Request $request){
        $validation = [
            'email' => 'required|email',
            'fullname' => 'required',
            'vat_number' => 'max:13',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' =>'min:8'
        ];
        $user = new User();
        $user->roleid = 2;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->fullname = $request->fullname;
        // $user->password_confirmation = Hash::make($request->password_confirmation);
        $user->save();

        return redirect()->back();
    }

    public function registerPage(){
        return view('register');
    }

    public function displayUser(){
        $user = User::all();
        $role = Role::all();
        return view('manage_user',compact('user','role'));
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    
    public function profilePage(){
        $user = User::all();
        $role = Role::all();
        return view('profile',compact('user','role'));
    }
    
    public function userDetail($id){
        $user = User::find($id);
        $role = Role::all();
        return view('user_detail',compact('user','role'));
    }

    public function transactionHistory(){
        $transaction = Transaction::all();
        $user = User::all();
        return view('transaction_history',compact('transaction','user'));
    }

    public function transactionDetail(){
        $transDetail = TransactionDetail::all();
        $transaction = Transaction::all();
        $book = Book::all();
        $user = User::all();
        return view('transaction_detail',compact('transDetail','user','transaction','book'));
    }
    
    public function updateProfile(Request $request, $id){
        $user = User::find($id);
        $user->fullname = $request->fullname;

        $user->save();
        return redirect()->back();
    }

    public function changePass(Request $request, $id){
        $user = User::find($id);
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->back();
    }

    public function password(){
        $user = User::all();

        return view('password',compact('user'));
    }
}
