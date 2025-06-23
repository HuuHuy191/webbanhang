<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        
         return view('user_login');

    }
     public function show_dashboard(){
          return view('userlayout');
     }


public function login(Request $request)
{
    // Đăng nhập user dùng bcrypt
    if (Auth::guard('user')->attempt([
        'user_email' => $request->admin_email,
        'password' => $request->admin_password
    ])) {
        return redirect('/user-dashboard');
    } else {
        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }
}
public function logout()
{
    Auth::guard('user')->logout();
    
    return redirect('/user-login');
}
public function register(Request $request)
{
    $user = new \App\Models\User();
    $user->user_email = $request->user_email;
    $user->user_password = Hash::make($request->user_password); // mã hóa mật khẩu
    $user->save();

    return redirect('/user-login')->with('success', 'Đăng ký thành công!');
}

}

