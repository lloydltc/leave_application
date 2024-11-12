<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaveApplicationRequest;
use App\Models\LeaveApplication;
use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    //
    public function index(){
        $leaveTypes = LeaveType::all();

        return view('dashboard', compact('leaveTypes'));

    }

    public function createApplication(LeaveApplicationRequest $request){
        $application = new LeaveApplication();
        $application->leave_type_id = $request->input('leave_type');
        $application->start_date = $request->input('start_date');
        $application->end_date = $request->input('end_date');
        $application->application_date = now();
        $application->employee_id = 1;
        $application->save();
        return redirect('/')->with('success', 'Leave Application has been created');


    }

}
