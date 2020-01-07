<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getSignUpPage()
    {
        if(Auth::check()){
            return redirect()->route('main');
        }
        return view('auth.signup');
    }

    public function getSignInPage()
    {
        return view('auth.signin');
    }

    public function postSignUp(Request $request)
    {
        // Kiểm tra tồn tại email
        $email = $request['email'];
        $phone = $request['phone'];
        $userCheck = User::where('email' , $email)->first();
        if(isset($userCheck->id)){
            $errors['email'] = 'Email đã tồn tại';
            return redirect()->back()->withErrors($errors);
        }
        $userCheckPhone = User::where('phone' , $phone)->first();
        if(isset($userCheckPhone->id)){
            $errors['phone'] = 'Số điện thoại đã tồn tại';
          return redirect()->back()->withErrors($errors);
        }
        // Kiểm tra mật khẩu
        if($request['password'] != $request['re-password']){
            $errors['password'] = 'Mật khẩu xác nhận không chính xác';
            return redirect()->back()->withErrors($errors);
        }
        $user = new User();
        $user->name = $request['full-name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
        Auth::login($user);
        return redirect()->back();
    }

    public function postSignIn(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('main');
        }
        return redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}