<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class HolidayAssignmentController extends Controller
{
    public function employeeHolidayAssignment()
    {
        dd(request()->all());
        $employee = User::where('branch_id', request()->branch_id)->when(isset(request()->department_id) && request()->department_id)->get();
        return $employee;
    }
}
