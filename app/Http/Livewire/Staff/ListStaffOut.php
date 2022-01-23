<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;
use App\Models\Worker;
use App\Models\Bills;
use App\Models\Group_worker;
use Illuminate\Support\Facades\DB;

class ListStaffOut extends Component
{
    protected $listeners = [
        'deleteStaffOut'=>'render'];
     public $bills;

    public function deleteStaffOut($id){
        $this->staffInfo = DB::table('bills')
        ->join('bill_workers', 'bills.id', '=', 'bill_workers.bill_code')
        ->join('workers', 'bill_workers.worker_id', '=', 'workers.id')
        ->where('bills.id','=',$id)
        ->where('workers.status','=',2)
        ->get();
       
        
    }

 
    // public function render()
    // {
       
    //     return view('livewire.staff.list-staff-out', $workers = Worker::where('status','like',2)->paginate(5))->with(compact(['workers']));
    // }
}
