<?php

namespace App\Http\Livewire\Staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Bills;
use App\Models\CustomerOrder;
use App\Models\BillDetail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Service;
use App\Models\products;
use App\Models\CustomerLicenseAutomakers;
use App\Models\AutoMarker;
use App\Models\Bill_worker;
use App\Models\Group_worker;
use App\Models\Worker;

class ListBillStaff extends Component
{
    public $searchTerm3;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $valueid = '';
    public $idform;
    public $bill1;
    public $customer;
    public $name;
    public $phone;
    public $address;
    public $license_plates;
    public $auto_markers_name;
    public $status;
    public $note;
    public $appointmenTime;
    public $noteReport1;
    public $noteReport2;
    public $autoMarkers_id;
    public $license_id;
    public $total;
    public $idStaff;

    public $bill_workers_id;


    // public $name;
    // public $name;

 
    protected $staffOut;

    protected $customerInfo ;

   protected $billInfo ;
   protected $staffBill;
   protected $staffInfo;
    public function edit($id)
    {
      $this->idform = $id;
        $this->customerInfo = DB::table('customer_orders')
        ->join('bills', 'customer_orders.id', '=', 'bills.customer_id')
        ->join('customer_license_automakers', 'customer_orders.id', '=', 'customer_license_automakers.customer_id')
        ->join('auto_markers', 'customer_license_automakers.autoMaker_id', '=', 'auto_markers.id')
        ->leftJoin('bill_workers', 'bills.id', '=', 'bill_workers.bill_code')
                        ->select('customer_orders.*','bill_workers.id as bill_workers_id','bills.id as bill_id','auto_markers.id as autoMarkers_id','customer_license_automakers.id as license_id','bills.orderDate' ,'bills.total as bill_total', 'bills.note as bill_note', 'bills.status as bill_status','auto_markers.name as auto_markers_name','customer_license_automakers.license_plates as license_plates','bills.noteReport1','bills.noteReport2','bills.note','bills.appointmenTime')
                        ->where('bills.id', '=', $id);
                 
                   
                      
              

        $this->billInfo = DB::table('bills')
                    ->join('bill_details', 'bills.id', '=', 'bill_details.bill_code')
                    ->leftJoin('products', 'bill_details.productCode', '=', 'products.productCode')
                    ->leftJoin('services', 'bill_details.service_id', '=', 'services.id')
                    ->where('bills.id', '=', $id)
                    ->select('bills.*', 'bill_details.*', 'products.productName as product_name','services.name as services_name','bills.noteReport1','bills.noteReport2','bill_details.id as bill_detailsID');
                //    ->get();


                $this->staffOut = DB::table('bills')
                ->join('bill_workers', 'bills.id', '=', 'bill_workers.bill_code')
                ->join('workers', 'bill_workers.worker_id', '=', 'workers.id')
                ->where('bills.id','=',$id)
                ->where('workers.status','=',2)
                ->select('workers.id as workers_id','workers.name as workers_name','bill_workers.id as bill_workers_id');


                $this->staffBill = DB::table('bills')
                ->join('bill_workers', 'bills.id', '=', 'bill_workers.bill_code')
                ->join('workers', 'bill_workers.worker_id', '=', 'workers.id')
                ->where('bills.id','=',$id)
                ->select('workers.id as workers_id','workers.name as workers_name','bill_workers.id as bill_workers_id');

              


            
    }


    protected $rules = [

        'appointmenTime' => 'required|date',
       ];

    public function update(Request $request, $id)
    {
        $this->addError('appointmenTime', 'The appointmenTime field is invalid.');
        $this->validate();
        $cartStaffs = Cart::instance('shopping4')->content() ;


        $request->validate([
            
            'appointmenTime' => 'nullable|date',
        ]);
    

        $bill = Bills::find($id);
      
     
        
        

      

        $customer = CustomerOrder::find($bill->customer_id);

        $customer->phone = $this->phone;
        $customer->address = $this->address;
      
     

        $customer->name = $this->name;
        $customer->save();
      


         

         $licensePlates = CustomerLicenseAutomakers :: find($this->license_id);
        
                $licensePlates->license_plates =  $this->license_plates;
                $licensePlates->save();
         
       
       
    


         $autoMarker = AutoMarker::find($this->autoMarkers_id);
       
         $autoMarker->name = $this->auto_markers_name;
         $autoMarker->save();




        

        $bill->note = $this->note;
        $bill->status = $this->status;
        $bill->noteReport1 = $this->noteReport1;
        $bill->noteReport2 = $this->noteReport2;
        $bill->appointmenTime = $this -> appointmenTime;
          
        
      
        $bill->total = $bill->total + str_replace( ',', '', Cart::instance('shopping2')->initial() ) + str_replace( ',', '', Cart::instance('shopping3')->initial() );
        
    

      
         

    

        $bill->save();
        

      
        //product
        if (count($cartStaffs) >0 ) {
            foreach ($cartStaffs as $key => $item) {
                $bill_worker = new Bill_worker(); 
                $bill_worker->bill_code = $id;
                $bill_worker->worker_id = $item->id;
                // $bill_worker->quantily_product = $item->qty;
                // $bill_worker->price_product  = $item->price;
                $bill_worker->save();
            }
        }
          
          
             
        Cart::instance('shopping4')->destroy();

        Session::flash('message', "Successfully updated");
        $this->emit('bill_edit');
    }

    public function update1(Request $request, $id)
    {
        $bill = Bills::find($id);
        $bill->status = 6;
        $bill->save();
    }

    public function update2(Request $request, $id)
    {
        $bill = Bills::find($id);
        $bill->status = 4;

        $bill->save();
        // $bill_worker = Bill_worker::first($this->bill_workers_id);
        
        // $bill_worker->time_start = date('Y-m-d H:i:s');
        // $bill_worker->save();

        }



         
     public function delete($id)
     {
       Bills::where('id',$id)->delete();
       session()->flash('Xoá thành công');
     }

     public function delete1($id)
     {
      
       
       Bill_worker::where('id',$id)->delete();
      
       session()->flash('Xoá thành công');
      
      


     
     }

   
    //  public function updating(){ 
    //     $this->resetPage();
    // }
    public $location;
    public $location1;

    public function render()
    {
        
        // dd($this->location);
        $searchTerm3 = '%'.$this->searchTerm3.'%';
       // dd(DB::table('customer_orders')->select('customer_orders.id','bills.id','customer_orders.name','customer_orders.phone','bills.orderDate','customer_orders.address','bills.status')->join('bills', 'customer_orders.id', '=', 'bills.customer_id')->where('customer_orders.name', 'like', $searchTerm3));
       $bills =DB::table('customer_orders')->select('customer_orders.id','bills.id','customer_orders.name','customer_orders.phone',
            'bills.orderDate','customer_orders.address','bills.status','bills.channels','bills.appointmenTime')
            ->join('bills', 'customer_orders.id', '=', 'bills.customer_id')
            
        
          
             
           
            // ->orderBy('bills.id', 'Desc')
      

            -> where(function($query)
     {
        $query->where('bills.id', 'like',  '%'.$this->searchTerm3.'%')
        ->orWhere('customer_orders.phone', 'like', '%'.$this->searchTerm3.'%')
        ->orWhere('customer_orders.name', 'like',  '%'.$this->searchTerm3.'%');
         
     })
     ->Where('bills.channels','=',1)
            -> when($this->location,function($query,$location){
                return $query->where('bills.status',$location);
           
               
            // })->when($this->location1,function($query1,$location1){
            // return $query1->where('bills.channels',$location1);
       })->paginate(5);
      
    //    dd($bills);
      
       if(is_null($this->customerInfo) || is_null($this->billInfo) || is_null($this->staffOut) || is_null($this->staffBill) ){
        return view('livewire.staff.list-bill-staff' )->with(compact(['bills']));
       } 
       else{
           $customerInfo = $this->customerInfo->first();
           
           $this->name = $customerInfo -> name;
           $this->phone = $customerInfo -> phone;
           $this->address = $customerInfo -> address;
           $this->license_plates =  $customerInfo -> license_plates;
           $this->auto_markers_name =  $customerInfo -> auto_markers_name;
           $this-> note = $customerInfo -> note;
           $this-> appointmenTime = $customerInfo -> appointmenTime;
           $this->status = $customerInfo->bill_status;
           $this->noteReport1 = $customerInfo->noteReport1;
           $this->noteReport2 = $customerInfo->noteReport2;

           $this->autoMarkers_id = $customerInfo->autoMarkers_id;

           $this->license_id = $customerInfo->license_id;
           $this->total = $customerInfo->bill_total;

           $this->bill_workers_id = $customerInfo->bill_workers_id;
           
          
           $billInfo = $this->billInfo->get();
        //    $billInfo1 = $this->billInfo1->first();
           $staffOut = $this->staffOut->get();
           $staffBill = $this->staffBill->get();
           $array2 = json_decode(json_encode($staffOut), true);
           $array = json_decode(json_encode($customerInfo), true);
           $array1 = json_decode(json_encode($billInfo), true);
          
           $array3 = json_decode(json_encode($staffBill), true);
        //    $this->workers_id = $staffBill->workers_id;
          
        //    dd( $array['name']);
    // dd( $array1);
            return view('livewire.staff.list-bill-staff')->with(compact(['bills']))
            
        ->with(compact('array','array1','array2','array3'));
          
       }
      
    }
}
  