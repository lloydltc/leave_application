<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    //
    public function index(){
        $leaveTypes = LeaveType::all();

        return view('dashboard', compact('leaveTypes'));

    }

    public function createApplication(){

    }
    {

    }
}
