<?php

namespace App\Http\Controllers;

use App\Models\DepartmentOffDaysTrack;
use App\Models\DynamicValue;
use Illuminate\Http\Request;
use App\Http\Requests\Department\StoreDepartmentRequest;
use App\Http\Requests\Department\UpdateDepartmentRequest;
use App\Models\Branch;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index()
    {
        $page = "Department";
        $data['records'] = Department::all();
        return view('department.index', $data, compact('page'));
    }

    public function create()
    {
        $page = "Department";
        $branch = Branch::all();
        return view('department.create', compact('page', 'branch'));
    }

    public function store(StoreDepartmentRequest $request, Department $department)
    {
        try {
            $data = getObject($department, $request);
            $data['branch_id'] = $request->branch_id;
            $data->save();
            return back()->with('success', 'New Department has been added');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Department $department)
    {
        $page = "Department";
        $branch = Branch::all();
        $data = $department;
        return view('department.edit', compact('page', 'data', 'branch'));
    }

    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $data = getObject($department, $request);
        $data['branch_id'] = $request->branch_id;
        $data->update();
        return back()->with('success', 'Department has been updated');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return to_route('department.index')->with('success', 'Department has been deleted');
    }

    public function assingOffDays(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->getMessages()]);
        }
        try {
            DB::beginTransaction();
            $value = [
                'off_days' => $request->days,
            ];
            DynamicValue::updateOrCreate([
                'id' => $request->id,
                'key' => $request->key,
            ], [
                'key' => $request->key,
                'name' => $request->key,
                'value' => $value,
                'status' => 1
            ]);
            DepartmentOffDaysTrack::updateOrCreate([
                'department_id' => $request->department_id,
                'date' => date('Y-m-d'),
            ], [
                'department_id' => $request->department_id,
                'days' => $request->days,
                'date' => date('y-m-d'),
                'date_time' => date('Y-m-d h:i:s')
            ]);
            DB::commit();
            return response()->json(['message' => 'Successfully assigned']);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendDbError($e->getMessage());
        }
    }

    public function departmentOffDays(Request $request, $id)
    {
        $off_days = DynamicValue::where('key', 'department_' . $id)->first();
        if ($off_days) {
            return response()->json([
                'dynamic_id' => $off_days->id,
                'off_days' => $off_days->value['off_days'],
                'status' => true,
                'message' => 'Off Days fetched !!!'
            ]);
        }
        return response()->json([
            'message' => 'No data found !!!',
            'status' => false,
        ]);
    }
}
