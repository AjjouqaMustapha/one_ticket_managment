<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\EmployerIssues;
use App\Models\EmployerRole;
use App\Models\Issues;
use App\Models\User;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    //
    public function index()
    {
        $issues = Issues::with(['user', 'police'])->get();

        return view('admin.dashboard.issue.index', compact('issues'));
    }
    public function solved($id)
    {
        Issues::where('id', $id)->update(['status' => 1]);

        return redirect()->back();
    }

    public function detail($id)
    {
        $issue = Issues::with(['user', 'police'])->where('id', $id)->first();
        $employer_list = Employer::query()->where('role', $issue->role)->get();
        if ($issue->status == 0) {
            return view('admin.dashboard.issue.detail', compact('issue', 'employer_list'));
        } else {
            
            $forwarded_employer = EmployerIssues::where('id_issue', $issue->id)
                ->with('employer')
                ->first();
            return view('admin.dashboard.issue.detail', compact('issue', 'employer_list', 'forwarded_employer'));
        }
    }
}
