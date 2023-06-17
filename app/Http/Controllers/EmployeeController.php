<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Branch;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Role;
use App\Models\SiteSetting;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        $data['employees'] = User::orderBy('id', 'desc')->get();
        return view('employee.index', $data);
    }

    public function create()
    {
        $companyName = SiteSetting::where('key', 'company_code')->first();
        if (!$companyName) {
            return redirect()->route('company.index')->with('info', 'Set Company\'s Name before creating employee');
        }
        $data['branch'] = Branch::all();
        $data['department'] = Department::all();
        $data['supervisors'] = User::all();
        $data['designation'] = Designation::all();
        $data['role'] = Role::all();
        return view('employee.create', $data);
    }

    public function store(StoreEmployeeRequest $request)
    {
        try {
            DB::beginTransaction();
            $extra = [
                'nepali_dob' => $request->nepali_dob,
                'nepali_join_date' => $request->nepali_join_date
            ];
            $request->request->add([
                'extra' => $extra,
                'password' => Str::random(7),
                'branch_id' => $request->branch,
                'department_id' => $request->department
            ]);
            $employee = User::create($request->only((new User())->getFillable()));
            if (isset($request->base64) && $request->base64 != null) {
                $employee->addMediaFromBase64($request->base64)->usingFilename(md5(Str::random(8) . time()) . '.' . explode('/', mime_content_type($request->base64))[1])->toMediaCollection('image');
            }
            DB::commit();
            return back()->with('success', 'Employee has been created');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit(User $employee)
    {
        $companyName = SiteSetting::where('key', 'company_code')->first();
        if (!$companyName) {
            return redirect()->route('company.index')->with('info', 'Set Company\'s Name before creating employee');
        }
        $data['branch'] = Branch::all();
        $data['department'] = Department::all();
        $data['supervisors'] = User::all();
        $data['designation'] = Designation::all();
        $data['role'] = Role::all();
        $data['employee'] = $employee;
        return view('employee.edit', $data);
    }

    public function update(UpdateEmployeeRequest $request, User $employee)
    {
        try {
            DB::beginTransaction();
            $extra = [
                'nepali_dob' => $request->nepali_dob,
                'nepali_join_date' => $request->nepali_join_date
            ];
            $request->request->add([
                'extra' => $extra,
                'branch_id' => $request->branch,
                'department_id' => $request->department
            ]);
            $employee->update($request->only((new User())->getFillable()));
            if (isset($request->base64) && $request->base64 != null) {
                if ($request->base64 == 1) {
                    $employee->clearMediaCollection('image');
                } else {
                    $employee->clearMediaCollection('image');
                    $employee->addMediaFromBase64($request->base64)->usingFilename(md5(Str::random(8) . time()) . '.' . explode('/', mime_content_type($request->base64))[1])->toMediaCollection('image');
                }
            }
            DB::commit();
            return back()->with('success', 'Employee has been updated');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(User $employee)
    {
        try {
            $employee->delete();
            return redirect()->route("employee.index")->with("success", "Employee has been deleted");
        } catch (Exception $e) {
            return redirect()->route("employee.index")->with("error", $e->getMessage());
        }
    }
}
