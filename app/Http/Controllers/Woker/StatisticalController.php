<?php

namespace App\Http\Controllers\Woker;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Bill_worker;
use App\Models\Worker;
use Illuminate\Http\Request;

class StatisticalController extends Controller
{
    public function index(Request $request){
        $workers = Worker::all();
        $bills = Bill::all();
        $bill_workers = Bill_worker::all();

        $countComplete = 0;
        $countIncomplete = 0;
        $countCancel = 0;
        $timeComplete = 0;

        $arrComplete = [];
        $arrInComplete = [];
        $arrCancel = [];
        $arrTime = [];
        foreach ($workers as $worker){
            foreach ($bills as $bill){
                foreach ($bill_workers as $bill_worker){
                    // tim so hoa don da hoan thanh
                    if($worker->id == $bill_worker->worker_id && $bill->id == $bill_worker->bill_code && $bill->status == 1){
                        $countComplete++;
                        $timeComplete = $timeComplete + ((strtotime($bill_worker->time_end) - strtotime($bill_worker->time_start)) / (60 * 60 * 24));
                    }
                    // tim so hoa don chua hoan thanh
                    if($worker->id == $bill_worker->worker_id && $bill->id == $bill_worker->bill_code && $bill->status == 2){
                        $countIncomplete++;
                        $timeComplete += 0;
                    }
                    // tim so hoa don bi huy
                    if($worker->id == $bill_worker->worker_id && $bill->id == $bill_worker->bill_code && $bill->status == 3){
                        $countCancel++;
                        $timeComplete += 0;
                    }
                }
            }
            array_push($arrComplete,$countComplete);
            array_push($arrInComplete,$countIncomplete);
            array_push($arrCancel,$countCancel);
            array_push($arrTime,$timeComplete);

            $countComplete = 0;
            $countIncomplete = 0;
            $countCancel = 0;
            $timeComplete = 0;
        }
        $keyword = $request->input('keyword');
        $listWorkerQuery = Worker::query();
        if ($keyword) {
            $listWorkerQuery->where('name', 'like', "%{$keyword}%");
        }
        $listWorkers = $listWorkerQuery->paginate(5);
        return view('layouts.manageStaff.listTaskStaff',compact('listWorkers','arrComplete','arrInComplete','arrCancel','arrTime'));
    }
}
