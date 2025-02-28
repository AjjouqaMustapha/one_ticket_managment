<?php

namespace App\Http\Controllers;

use App\Models\EmployerIssues;
use Illuminate\Http\Request;

class EmployerIssueController extends Controller
{
    //

    public function store (Request $request){
       
        EmployerIssues::create([
            'id_issue' => $request->issue_id,
            'id_employer' => $request->employer_id,
        ]);
        return redirect()->route('issue.detail',$request->issue_id);
    }
}
