<?php

namespace App\Http\Controllers\teleSale;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CustomerOrder;
use App\Models\Service;
use App\Models\products;
use App\Models\Bills;
use App\Models\AutoMarker;
use App\Models\CustomerLicenseAutomakers;
use App\Models\BillDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\teleSale\Validator;
use Exception;


class TeleBillController extends Controller
{
    
    public function listService(Request $request){
       
        $cartServices = Cart::instance('shopping')->content();
        $totalPriceService = Cart::instance('shopping')->total();
    


        $cartProducts = Cart::instance('shopping1')->content();
        $totalPriceProduct = Cart::instance('shopping1')->total();
        
        $wl['service']['0'] = Cart::instance('shopping')->content();
        $wl['product']['0'] = Cart::instance('shopping1')->content();
       

        $this->data['cart'] = Cart::instance('shopping')->content() ;
        $this->data['cart1'] = Cart::instance('shopping1')->content();
        $total = str_replace( ',', '', Cart::instance('shopping1')->total() ) + str_replace( ',', '', Cart::instance('shopping')->total() );
        $total = number_format($total, 2, '.', ',');
        
        //  dd($wl['service']);
         
        return view('layouts.teleSales.billTeleSales',compact($this->data,'total','wl','totalPriceService','totalPriceProduct','cartServices','cartProducts'));
    }



    public function createBill(Request $request) {
        $cartInfor = Cart::instance('shopping')->content() ;
        $cartInfor1 = Cart::instance('shopping1')->content();
       
        
        try {
            // save
           
            $customer = new CustomerOrder();
            $customer->name = $request->input('fullName');
            $customer->email = $request->input('email');
            $customer->address = $request->input('address');
            $customer->phone = $request->input('phoneNumber');
            //$customer->note = $request->note;
             $customer->save();
             
        
            //  $licensePlates->autoMaker_id = 


             $autoMarker = new AutoMarker();
           
             $autoMarker->name = $request->input('autoMaker');
             $autoMarker->save();

             $licensePlates = new CustomerLicenseAutomakers();
             $licensePlates->customer_id = $customer->id ;
             $licensePlates->license_plates = $request->input('licence');
             $licensePlates->autoMaker_id =  $autoMarker->id;
             $licensePlates->save();



            
            $bill = new Bills;
            $bill->customer_id = $customer->id;
            $bill->orderDate = date('Y-m-d H:i:s');
            $bill->total = str_replace( ',', '', Cart::instance('shopping1')->total() ) + str_replace( ',', '', Cart::instance('shopping')->total() );
           
            $bill->note = $request->input('note');
            if ( count($cartInfor) >0 ){
              $bill->channels = 1;
              $bill->status = 2; 
            
            }else{
                
            
                $bill->channels = 2;
                $bill->status = 2;
               
            
          }

           


        

            $bill->save();
            

            //   dd($bill);
            //product
            if (count($cartInfor1) >0 ) {
                foreach ($cartInfor1 as $key => $item) {
                    $billDetail = new BillDetail; 
                    $billDetail->bill_code = $bill->id;
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
                    $billDetail->bill_code = $bill->id;
                   
                    $billDetail->service_id = $item->id;
                    $billDetail->quantily_service = $item->qty;
                    $billDetail->price_service = $item->price;
                    $billDetail->save();
                }
               
            }


       

         
          // del
          Cart::instance('shopping')->destroy();
          Cart::instance('shopping1')->destroy();
         
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      
            return back();
       
        
    }
  

    
}
