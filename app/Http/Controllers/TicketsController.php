<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    //
    
    public function Ticket()
    {
        return view('employer/dashboard/tickets');
    }

}
