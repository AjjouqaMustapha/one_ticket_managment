<?php

namespace App\Http\Controllers;

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

    public function detail($id)
    {
        $issue = Issues::with(['user', 'police'])->where('id', $id)->first();
        return view('admin.dashboard.issue.detail', compact('issue'));
    }
}
