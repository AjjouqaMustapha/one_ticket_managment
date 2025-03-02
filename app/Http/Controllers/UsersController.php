<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employer;
use App\Models\Police;
use App\Models\User;
use Auth;
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









    public function dashboard () {
        $polices = Police::query()->where('id_card', Auth::user()->id_card)->get();
        return view('user.dashboard.index',compact('polices')); 
    }


    public function police ($id) {
        $id = decrypt($id);
        $polices = Police::query()->where('id_card', Auth::user()->id_card)->get();
        $user = Auth::user();
        $police_default = Police::where('id', $id)
        ->where('id_card', $user->id_card) // Vérification
        ->first();

        if (!$police_default) {
            return redirect()->back()->with('error', 'You are not authorized to access this police.');
        }
        return view('user.police.index',compact('polices','police_default'));
    }
}
