<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\EmployerIssues;
use App\Models\Issues;
use App\Notifications\IssueAssigned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Runner\Baseline\Issue;


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
        $tickets = EmployerIssues::query()->where('id_employer', Auth::user()->id)->count();
        $tickets_pending = EmployerIssues::whereHas('issue', function ($query) {
            $query->where('status', 0);
        })
            ->where('id_employer', Auth::user()->id)
            ->count();

        $tickets_solved = EmployerIssues::whereHas('issue', function ($query) {
            $query->where('status', 1);
        })
            ->where('id_employer', Auth::user()->id)
            ->count();
        return view('employer/dashboard/index', compact('tickets', 'tickets_solved', 'tickets_pending'));
    }




    public function Tickets()
    {

        $issues = EmployerIssues::whereHas('issue', function ($query) {
            $query->whereColumn('id', 'id_issue');
        })
            ->where('id_employer', Auth::user()->id)
            ->with(['issue.user'])
            ->get();


        return view('employer/dashboard/tickets/index', compact('issues'));
    }


    





    public function Logout()
    {
        Auth::guard('employer')->logout();
        return redirect('employer/login');
    }
}
