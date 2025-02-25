<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function Users () {
        $users = User::all();
        return view('admin.dashboard.users',compact('users'));
    }

    public function Admins () {
        $admins = Admin::all();
        return view('admin.dashboard.admins',compact('admins'));
    }

    public function Employers () {
        $employers = Employer::all();
        return view('admin.dashboard.employers',compact('employers'));
    }


    public function UsersDelete ($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.users')->with('success', 'User record deleted successfully');
    }
    public function AdminsDelete ($id) {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('users.admins')->with('success', 'User record deleted successfully');
    }
    public function EmployerDelete ($id) {
        $employer = Employer::findOrFail($id);
        $employer->delete();
        return redirect()->route('users.employers')->with('success', 'User record deleted successfully');
    }
}
