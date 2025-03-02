<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\EmployerIssues;
use App\Notifications\IssueAssigned;
use Illuminate\Http\Request;

class EmployerIssueController extends Controller
{
    //

    public function store (Request $request){
       
        EmployerIssues::create([
            'id_issue' => $request->issue_id,
            'id_employer' => $request->employer_id,
        ]);

        $employer = Employer::findOrFail($request->employer_id);
        $employer->notify(new IssueAssigned($request->issue_id));
        return redirect()->route('issue.detail',$request->issue_id);
    }
}
