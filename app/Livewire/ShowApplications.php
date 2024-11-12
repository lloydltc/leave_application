<?php

namespace App\Livewire;

use App\Models\LeaveApplication;
use Livewire\Component;

class ShowApplications extends Component
{
    public function render()
    {

        $applications = LeaveApplication::all();
        return view('livewire.show-applications', compact('applications'));
    }
}
