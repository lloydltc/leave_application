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


        return view('dashboard', compact('leaveTypes','results'));

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

    public function showApplications(){

        return view('application');
    }

    public function approve($id)
    {
        $application = LeaveApplication::find($id);
        $application->status = 'Approved';
        $application->save();
        return redirect('/leave-applications')->with('success', 'Leave Application has been approved');
    }
    public function reject($id)
    {
        $application = LeaveApplication::find($id);
        $application->status = 'Rejected';
        $application->save();
        return redirect('/leave-applications')->with('success', 'Leave Application has been rejected');
    }

    public function cancelled($id)
    {
        $application = LeaveApplication::find($id);
        $application->status = 'Cancelled';
        $application->save();
        return redirect('/')->with('success', 'Leave Application has been cancelled');

    }

    public function search(Request $request) {
        $query = $request->input('search');
        $results = LeaveApplication::where('employee_id', 'LIKE', "%{$query}%")->get();
        return view('dashboard', compact('results'));
    }

}
