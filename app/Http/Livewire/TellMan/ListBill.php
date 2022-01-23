<?php

namespace App\Http\Livewire\TellMan;
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
use Exception;

class ListBill extends Component
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


    // public $name;
    // public $name;

 


    protected $customerInfo ;

   protected $billInfo ;
    public function edit($id)
    {
      $this->idform = $id;
     
      $this->billInfo = DB::table('bills')
                    ->join('bill_details', 'bills.id', '=', 'bill_details.bill_code')
                    ->leftJoin('products', 'bill_details.productCode', '=', 'products.productCode')
                    ->leftJoin('services', 'bill_details.service_id', '=', 'services.id')
                    ->where('bills.id', '=', $id)
                    ->select('bills.*', 'bill_details.*', 'products.productName as product_name','services.name as services_name','bills.noteReport1','bills.noteReport2','bill_details.id as bill_detailsID');
                    $billfake = clone $this->billInfo;
                    $billfake =$billfake->get();
        if(isset($billfake)){
        if($billfake[0]->channels == 2){
            $this->customerInfo = DB::table('customer_orders')
                ->join('bills', 'customer_orders.id', '=', 'bills.customer_id')
                ->select('customer_orders.*','bills.id as bill_id','bills.orderDate' ,'bills.total as bill_total',
                'bills.note as bill_note', 'bills.status as bill_status','bills.noteReport1',
                'bills.noteReport2','bills.note','bills.appointmenTime')
                ->where('bills.id', '=', $id);
               
        }else{
            $this->customerInfo = DB::table('customer_orders')
            ->join('bills', 'customer_orders.id', '=', 'bills.customer_id')
            ->join('customer_license_automakers', 'customer_orders.id', '=', 'customer_license_automakers.customer_id')
            ->join('auto_markers', 'customer_license_automakers.autoMaker_id', '=', 'auto_markers.id')
                            ->select('customer_orders.*','bills.id as bill_id','auto_markers.id as autoMarkers_id','customer_license_automakers.id as license_id','bills.orderDate' ,'bills.total as bill_total', 'bills.note as bill_note', 'bills.status as bill_status','auto_markers.name as auto_markers_name','customer_license_automakers.license_plates as license_plates','bills.noteReport1','bills.noteReport2','bills.note','bills.appointmenTime')
                            ->where('bills.id', '=', $id);


          

        }

    }

    //                     //   ->first();
                      

    }

    protected $rules = [

      'appointmenTime' => 'required|date',
     ];

    public function update(Request $request, $id)
    {
      $this->addError('appointmenTime', 'The appointmenTime field is invalid.');
        $this->validate();
        $cartInfor = Cart::instance('shopping3')->content() ;
        $cartInfor1 = Cart::instance('shopping2')->content();

   

        $bill = Bills::find($id);
      
     
        
        

      

        $customer = CustomerOrder::find($bill->customer_id);

        $customer->phone = $this->phone;
        $customer->address = $this->address;
        
     

        $customer->name = $this->name;
        $customer->save();
      


         
        if($this->license_id == null){
          // $bill -> status = 2;
      
          // $this->license_plates =  $customerInfo -> license_plates;
          // $this->auto_markers_name =  $customerInfo -> auto_markers_name;
          return false;
       
        }else{
        
          $licensePlates = CustomerLicenseAutomakers :: find($this->license_id);
                $licensePlates->license_plates =  $this->license_plates;
                $licensePlates->save();
               }
              
         
       
       
    
         if($this->autoMarkers_id == null){
          return false;
            }else{

         $autoMarker = AutoMarker::find($this->autoMarkers_id);
      
         $autoMarker->name = $this->auto_markers_name;
         $autoMarker->save();
         }




        

        $bill->note = $this->note;
        $bill->status = $this->status;
        $bill->noteReport1 = $this->noteReport1;
        $bill->noteReport2 = $this->noteReport2;
        $bill->appointmenTime = $this -> appointmenTime;
          
        
      
        $bill->total = $bill->total + str_replace( ',', '', Cart::instance('shopping2')->total() ) + str_replace( ',', '', Cart::instance('shopping3')->total() );
        
      

       if($bill->channels = 1) {
        if ( count($cartInfor) >0 ){
          $bill->channels = 1;  
        }else{
            
        
          $bill->channels = 1;
          
           
        
      }
    }elseif($bill->channels = 2){
        if ( count($cartInfor) >0 ){
            $bill->channels = 1;
            
          }else{
              
          
              $bill->channels = 2;
             
              
          
        } 
    }

        //  if($bill->channels = 2){
              
        //  }

    

        $bill->save();
        

      
        //product
        if (count($cartInfor1) >0 ) {
            foreach ($cartInfor1 as $key => $item) {
                $billDetail = new BillDetail; 
                $billDetail->bill_code = $id;
                $billDetail->productCode = $item->id;
                $billDetail->quantily_product = $item->qty;
                $billDetail->price_product  = $item->price;
                
                 $billDetail->save();
            }
        }
          
             //service
            
        if ( count($cartInfor) >0) {
          
            foreach ($cartInfor as $key => $item) {
               
                $billDetail = new BillDetail;
                $billDetail->bill_code = $id;
           
                $billDetail->service_id = $item->id;
            
                
                $billDetail->quantily_service = $item->qty;
                $billDetail->price_service = $item->price;
                
                $billDetail->save();
            }
           
        }


        Cart::instance('shopping3')->destroy();
        Cart::instance('shopping2')->destroy();

        Session::flash('message', "Successfully updated");
        $this->emit('bill_edit');
    }


         
     public function delete($id)
     {
       Bills::where('id',$id)->delete();
       session()->flash('Xoá thành công');
     }

     public function delete1($id)
     {
      
      
       $billDetail =  BillDetail::find($id);
  
       $bill = Bills::find($billDetail->bill_code);
    //    dd($billDetail->price_service);
   
       $bill->total =  $bill->total -  $billDetail->price_product - $billDetail->price_service;
    //    dd($bill->total);
       $bill->save();
       
       BillDetail::where('id',$id)->delete();
       session()->flash('Xoá thành công');
       
     

 

     
     }

   
    //  public function updating(){ 
    //     $this->resetPage();
    // }
    public $location;
    public $location1;

    public function render()
    {
     
     
        $searchTerm3 = '%'.$this->searchTerm3.'%';
       // dd(DB::table('customer_orders')->select('customer_orders.id','bills.id','customer_orders.name','customer_orders.phone','bills.orderDate','customer_orders.address','bills.status')->join('bills', 'customer_orders.id', '=', 'bills.customer_id')->where('customer_orders.name', 'like', $searchTerm3));
       $bills =DB::table('customer_orders')->select('customer_orders.id','bills.id','customer_orders.name','customer_orders.phone',
            'bills.orderDate','customer_orders.address','bills.status','bills.channels','bills.created_at')
            ->join('bills', 'customer_orders.id', '=', 'bills.customer_id')
       
            ->orderBy('bills.id', 'Desc')
      

           -> where(function($query)
    {
           $query->where('bills.id', 'like',  '%'.$this->searchTerm3.'%')
        ->orWhere('customer_orders.phone', 'like', '%'.$this->searchTerm3.'%')
        ->orWhere('customer_orders.name', 'like',  '%'.$this->searchTerm3.'%');
    })
    // ->toSql();

           
            ->when($this->location,function($query,$location){
                return $query->where('bills.status',$location);
           })->when($this->location1,function($query1,$location1){
            return $query1->where('bills.channels',$location1);
       })->paginate(5);
      
       if(is_null($this->customerInfo) || is_null($this->billInfo) ){
        return view('livewire.tell-man.list-bill' )->with(compact(['bills']));
       } 
       else{
           $customerInfo = $this->customerInfo->first();

        //    $this->name = $customerInfo -> name;
        //    $this->phone = $customerInfo -> phone;
        //    $this->address = $customerInfo -> address;
        //    $this->license_plates =  $customerInfo -> license_plates;
        //    $this->auto_markers_name =  $customerInfo -> auto_markers_name;
        //    $this-> note = $customerInfo -> note;
        //    $this-> appointmenTime = $customerInfo -> appointmenTime;
        //    $this->status = $customerInfo->bill_status;
        //    $this->noteReport1 = $customerInfo->noteReport1;
        //    $this->noteReport2 = $customerInfo->noteReport2;
        //    $this->autoMarkers_id = $customerInfo->autoMarkers_id;
        //    $this->license_id = $customerInfo->license_id;
        //    $this->total = $customerInfo->bill_total;
       
       }
           
           
           
        //    if($customerInfo->bill_status == 3){
        //     $this->license_id = null;
        //     $this->total = null;
        //     $this->license_plates =  null;
        //     $this->auto_markers_name =  null;
        //    }

          $this->name = $customerInfo -> name;
           $this->phone = $customerInfo -> phone;
           $this->address = $customerInfo -> address;
           
           $this-> note = $customerInfo -> note;
           $this-> appointmenTime = $customerInfo -> appointmenTime;
           $this->status = $customerInfo->bill_status;
           
           $this->noteReport1 = $customerInfo->noteReport1;
           $this->noteReport2 = $customerInfo->noteReport2;
        //    $this->autoMarkers_id = $customerInfo->autoMarkers_id;
       
          
          if($customerInfo -> bill_status!=1){
            //    try{
           $this->autoMarkers_id = $customerInfo->autoMarkers_id;
           $this->license_id = $customerInfo->license_id;
           $this->license_plates =  $customerInfo -> license_plates;
           $this->auto_markers_name =  $customerInfo -> auto_markers_name;
        // //      } catch (Exception $e) {
        //     echo $e->getMessage();
        // }
          }else{
            // try{

         
            $this->autoMarkers_id = null;
            $this->license_id = null;
            $this->license_plates =  null;
            $this->auto_markers_name = null;
        //  } catch (Exception $e) {
        //     echo $e->getMessage();
        // }
          }
           $this->total = $customerInfo->bill_total;

          
           
          
           $billInfo = $this->billInfo->get();
        //    $billInfo1 = $this->billInfo1->first();
           $array = json_decode(json_encode($customerInfo), true);
           $array1 = json_decode(json_encode($billInfo), true);
          
        //    dd( $array['name']);
    // dd( $array1);
            return view('livewire.tell-man.list-bill')->with(compact(['bills']))
            
        ->with(compact('array','array1'));
          
       
      
    }
}
  