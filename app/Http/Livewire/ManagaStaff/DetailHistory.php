<?php

namespace App\Http\Livewire\ManagaStaff;

use App\Models\Bill;
use App\Models\Bill_worker;
use App\Models\BillDetail;
use App\Models\Customer_license_automakers;
use App\Models\Worker;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DetailHistory extends Component
{
    public $license_plates;
    public $statusBefore;
    public $statusAfter;

    public $detailWorker = [];
    protected $listeners = ['show'];
    public function show($id){
        $this->detailWorker = Bill::where('id',$id)->first();
        $this->statusBefore = $this->detailWorker->statusBefore;
        $this->statusAfter = $this->detailWorker->statusAfter;
        $cus_license_automaker = Customer_license_automakers::where('customer_id','like',$this->detailWorker->customer_id)->first();
        $this->license_plates = $cus_license_automaker->license_plates;
    }

    public function updateStatus($id, Request $request){
        $detail_worker = Bill::where('id',$id)->first();
        $detail_worker->status = 8;
        $detail_worker->statusBefore = $this->statusBefore;
        $detail_worker->statusAfter = $this->statusAfter;
        $detail_worker->save();

        $cus_license_automaker = Customer_license_automakers::where('customer_id','like',$detail_worker->customer_id)->first();
        $cus_license_automaker->license_plates = $this->license_plates;
        $cus_license_automaker->save();
        Session::flash('message', "Successfully updated");
        $this->emit('bill_edit');
    }
    public function render()
    {
        $total = 0;
        $bill_workers = Bill_worker::all();
        $workers = Worker::all();
        $bill_details = BillDetail::all();
        $cus_license_automakers = Customer_license_automakers::all();

        return view('livewire.managa-staff.detail-history',['bill_workers' => $bill_workers,'workers' => $workers,'bill_details' => $bill_details,'cus_license_automakers' => $cus_license_automakers,'total' => $total]);
    }
}
