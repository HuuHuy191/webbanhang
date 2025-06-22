<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        
         return view('admin_login');

    }
     public function show_dashboard(){
         return view('admin/dashboard');
    }


public function login(Request $request)
{
    // Đăng nhập admin dùng bcrypt
    if (Auth::guard('admin')->attempt([
        'admin_email' => $request->admin_email,
        'password' => $request->admin_password
    ])) {
        return redirect('/admin-dashboard');
    } else {
        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }
}
// public function login(Request $request)
// {
//     $admin = \App\Models\Admin::where('admin_email', $request->admin_email)
//         ->where('admin_password', $request->admin_password)
//         ->first();

//     if ($admin) {
//         // Đăng nhập thủ công
//         Auth::guard('admin')->login($admin);
//         return redirect('/admin-dashboard');
//     } else {
//         return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
//     }
// }

public function logout()
{
    Auth::guard('admin')->logout();
    
    return redirect('/admin-login');
}
}
