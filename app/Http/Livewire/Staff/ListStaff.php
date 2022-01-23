<?php

namespace App\Http\Livewire\Staff;

use App\Models\Worker;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;


class ListStaff extends Component
{
    public $searchTerm;
    protected $staffInfo;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function updating(){
        $this->resetPage();
    }

    public function detail($id)
    {
      $this->idfor = $id;
        $this->staffInfo = DB::table('customer_orders')
        ->join('bills', 'customer_orders.id', '=', 'bills.customer_id')
        ->join('customer_license_automakers', 'customer_orders.id', '=', 'customer_license_automakers.customer_id')
        ->join('auto_markers', 'customer_license_automakers.autoMaker_id', '=', 'auto_markers.id')
        ->join('bill_workers', 'bills.id', '=', 'bill_workers.bill_code')
        ->join('workers', 'bill_workers.worker_id', '=', 'workers.id')
        ->join('group_workers', 'workers.group_workerID', '=', 'group_workers.id')
                        ->select('customer_orders.*','customer_orders.name as customer_orders_name ','customer_orders.address as customer_orders_address ','bills.id as bill_id','bills.appointmenTime','bill_workers.time_start','workers.name as workers_name','workers.id as workers_id','group_workers.name_group as name_group','bills.status as bill_status')
                        ->where('workers.id','=', $id);
                    //    ->get();
                    //    dd($this->staffInfo);
                     
    }



    

    public function AddCartStaff($id){
  
        $worker = Worker::find($id);
            
             $this->cartStaffs = Cart::instance('shopping4')->content();
             if (!is_null($this->cartStaffs)){
             foreach($this->cartStaffs as $cartStaff){
                if($cartStaff->name == $worker->name){
                   return 0;
                }
             }
            }
            Cart::instance('shopping4')->add([
                'id' => $worker->id,
                'name' => $worker->name,
                'price' => 0,
                'description' => '0',
                'weight' => 0,
                'qty' => 1,
                
            ]);
            $this->emit('staff_updated');
        }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $workers = Worker::where('name','like',$searchTerm)->orWhere('phone','like',$searchTerm)->paginate(5);
        if(is_null($this->staffInfo)){
            return view('livewire.staff.list-staff' )->with(compact(['workers']));
           } 
           else{
         
               
              
               $staffInfo = $this->staffInfo->get();
            //    $billInfo1 = $this->billInfo1->first();
               $array = json_decode(json_encode($staffInfo), true);
            
        return view('livewire.staff.list-staff',['workers' => $workers]) ->with(compact('array'));
    }
}
}
