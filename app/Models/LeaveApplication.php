<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LeaveApplication extends Model
{
    use HasFactory;
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    public function employee(){

        return $this->belongsTo(Employee::class);
    }
}
