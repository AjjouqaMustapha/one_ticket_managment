<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function Index()
    {
        return view('admin/login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function Dashboard()
    {
        return view('admin/dashboard/index');
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
