<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\LeaveType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Employee::create([
            'name' => 'Test Employee',
            'Position' => 'Employee',
            'hire_date' => '2019-01-01',
            'leave_days' => '30'
        ]);
        Employee::create([
            'name' => 'Test Supervisor',
            'Position' => 'Supervisor',
            'hire_date' => '2019-01-01',
            'leave_days' => '30'
        ]);

        LeaveType::create([
            'name' => 'Full Time',
            'max_days' => '30'
        ]);
        LeaveType::create([
            'name' => 'Sick Leave',
            'max_days' => '5'
        ]);
        LeaveType::create([
            'name' => 'Education',
            'max_days' => '60'
        ]);
    }
}
