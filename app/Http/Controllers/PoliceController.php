<?php

namespace App\Http\Controllers;

use App\Models\Police;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PoliceController extends Controller
{
    //
    public function index()
    {
        $polices = Police::query()->paginate(5);
        return view('admin.dashboard.police',compact('polices'));
    }



    public function show($id)
    {
        
        $police = Police::findOrFail($id);
        $user = User::where('id_card', $police->id_card)->first();
        if($user == null){
            return redirect()->route('admin.dashboard.police_show',compact('police'))->with('error', 'User not found');
        }else {
            return view('admin.dashboard.police_show',compact('police','user'));
        }
    }


    public function destroy($id)
    {
        $police = Police::findOrFail($id);
        $police->delete();

        return redirect()->route('polices.index')->with('success', 'Police record deleted successfully');
    }
}
