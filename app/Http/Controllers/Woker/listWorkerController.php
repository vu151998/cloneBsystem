<?php

namespace App\Http\Controllers\Woker;

use App\Http\Controllers\Controller;
use App\Models\Group_worker;
use App\Models\Worker;
use Illuminate\Http\Request;


class listWorkerController extends Controller
{
    public function index(){
       $workers = Worker::all();
       $groupWorkers = Group_worker::all();
       return view('layouts.manageStaff.listStaff',compact('workers','groupWorkers'));
    }
    public function store(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $age = $request->input('age');
        $status = $request->input('status');
        $group_workerID = $request->input('group_workerID');

        $worker = new Worker;
        $worker->name = $name;
        $worker->phone = $phone;
        $worker->address = $address;
        $worker->age = $age;
        $worker->status = $status;
        $worker->group_workerID = $group_workerID;

        $worker->save();
        return redirect()->route('worker.index');
    }
    public function update(Request $request, $id){
         $worker = Worker::find($id);

        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $age = $request->input('age');
        $status = $request->input('status');
        $group_workerID = $request->input('group_workerID');

        $worker->name = $name;
        $worker->phone = $phone;
        $worker->address = $address;
        $worker->age = $age;
        $worker->status = $status;
        $worker->group_workerID = $group_workerID;

        $worker->save();
        return redirect()->route('worker.index');
    }
    public function destroy($id){
       $worker = Worker::find($id);
       $worker->delete($id);
       return redirect()->route('worker.index');
    }
}
