<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RepairStaff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $staffQuery = RepairStaff::query();
        if ($keyword) {
            $staffQuery->where('name', 'like', "%{$keyword}%");
        }
        $staffs = $staffQuery->paginate(3);
        return view('layouts.admin.listRepairStaff',compact('staffs'));
    }
    public function store(Request $request){
        $name = $request->input('name');
        $role = $request->input('role');
        $phoneNumber = $request->input('phoneNumber');
        $email = $request->input('email');
        $address = $request->input('address');
        $staff = new RepairStaff;
        $staff->name = $name;
        $staff->role = $role;
        $staff->phoneNumber = $phoneNumber;
        $staff->email = $email;
        $staff->address = $address;
        $staff->save();

        return redirect()->route('staff.index');
    }
    public function update($id, Request $request){
        $staff = RepairStaff::find($id);
        $name = $request->input('name');
        $role = $request->input('role');
        $phoneNumber = $request->input('phoneNumber');
        $email = $request->input('email');
        $address = $request->input('address');

        $staff->name = $name;
        $staff->role = $role;
        $staff->phoneNumber = $phoneNumber;
        $staff->email = $email;
        $staff->address = $address;
        $staff->save();

        return redirect()->route('staff.index',compact('staff'));
    }
    public function destroy($id){
        $staff = RepairStaff::find($id);
        $staff->delete();
        return redirect()->route('staff.index');
    }
}
