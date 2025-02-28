<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Issues;
use App\Models\Police;
use App\Models\User;
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
        $total_users = User::count();
        $total_issues = Issues::count();
        $total_employer = Employer::count();
        $total_polices = Police::count();
        $issus = Issues::query()->with('user')->orderBy('created_at', 'desc')->limit(5)->get();
        
        $issus_pending = Issues::query()->where('status', 0)->count();
        $issus_solved= Issues::query()->where('status', 1)->count();
        $total_issus = $issus_solved + $issus_pending;
        $solving_rate = $total_issus > 0 ? ($issus_solved / $total_issus) * 100 : 0;
        return view('admin/dashboard/index', compact('total_users', 'total_issues', 'total_employer', 'total_polices', 'issus', 'issus_solved', 'issus_pending', 'solving_rate'));
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
