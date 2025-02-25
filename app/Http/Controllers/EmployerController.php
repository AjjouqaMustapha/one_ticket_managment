<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EmployerController extends Controller
{
    //
    public function Index()
    {
        return view('employer/login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('employer')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('employer/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function Dashboard()
    {
        return view('employer/dashboard/index');
    }






    public function Logout()
    {
        Auth::guard('employer')->logout();
        return redirect('employer/login');
    }
}
