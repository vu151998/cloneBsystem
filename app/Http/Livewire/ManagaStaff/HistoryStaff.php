<?php

namespace App\Http\Livewire\ManagaStaff;

use App\Models\Bill;
use App\Models\Customer_license_automakers;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

use App\Models\Bills;

class HistoryStaff extends Component
{
    public $searchTerm;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function updating(){
        $this->resetPage();
    }
    public $location1;
    public function render(Request $request)
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $cus_license_automakers = DB::table('customer_license_automakers')
            ->join('customer_orders','customer_license_automakers.customer_id','=','customer_orders.id')
            ->join('bills','customer_orders.id','=','bills.customer_id')
            ->join('auto_markers','customer_license_automakers.autoMaker_id','=','auto_markers.id')
            ->select('customer_license_automakers.*','auto_markers.name as autoMarker_name','bills.id as bill_id','bills.appointmenTime as bill_appointmenTime'
                ,'bills.orderDate as bill_orderDate','bills.status as bill_status')
            ->where('customer_license_automakers.license_plates','like',$searchTerm)
            ->when($this->location1,function($query1,$location1){
                return $query1->where('bills.status',$location1);
            })
            ->paginate(4);

        $bills = Bills::query()->when($this->location1,function($query1,$location1){
            return $query1->where('bills.status',$location1);
        })->get();
        return view('livewire.managa-staff.history-staff',['cus_license_automakers' => $cus_license_automakers,'bills' => $bills]);



    }
}
