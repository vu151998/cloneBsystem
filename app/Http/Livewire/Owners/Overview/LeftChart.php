<?php

namespace App\Http\Livewire\Owners\Overview;

use DateTime;
use Livewire\Component;
use DB;

class LeftChart extends Component
{
    public $typeselect ='goods';
    public $dayofproduct ='3';
    public $typeofproduct = 'quantity';
    public $productList;
    public $lisname;
    public $count;

    public function mount(){
        
        $currendate = new DateTime();
        $to = $currendate->format('Y-m-d');
        $from =$currendate->modify('- '.$this->dayofproduct.' day')->format('Y-m-d');
        $this->productList = DB::table('bill_details') 
        ->join('products','products.id','=','bill_details.product_id')
        ->select('products.*',DB::raw('count(products.productCode) as total'))
        ->groupBy('productCode')
        ->whereBetween('bill_details.updated_at', [$from, $to])
        ->orderBy('total','desc')
        ->take(10)->get();
        $lisname = [];
        $count =[];
        
        foreach($this->productList as $p){
            array_push($lisname, $p->productName); 
            array_push($count,$p->total);
        }
        $this->lisname =json_encode($lisname);
        $this->count =json_encode($count);
    }
    public function updated(){
        
        $currendate = new DateTime();
        $to = $currendate->format('Y-m-d');
        $from =$currendate->modify('- '.$this->dayofproduct.' day')->format('Y-m-d');
        if($this->typeselect == 'goods'){
            $lisname = [];
            $count =[];
            if($this->typeofproduct == 'quantity'){
                $productList = DB::table('bill_details') 
                    ->selectRaw(' bill_details.product_id,count(bill_details.price_product) as total')
                    ->groupBy('bill_details.product_id')
                    ->whereBetween('bill_details.updated_at', [$from, $to])
                    ->orderBy('total','desc')
                    ->take(10)->get();
            }else{
                $productList = DB::table('bill_details') 
                    ->selectRaw(' bill_details.product_id,sum(bill_details.price_product) as total')
                    ->groupBy('bill_details.product_id')
                    ->whereBetween('bill_details.updated_at', [$from, $to])
                    ->orderBy('total','desc')
                    ->take(10)->get();
                }
              
        foreach($productList as $p){
            array_push($lisname, DB::table('products')->where('id',$p->product_id)->pluck('productName')->first()); 
            array_push($count,$p->total);
            } 
            $this->dispatchBrowserEvent('update-product', ['listproduct' =>$lisname,'countproduct'=>$count]);
        }
        else{
            $lisname = [];
            $count =[];
            if($this->typeofproduct == 'quantity'){
                $productList = DB::table('bill_details') 
                    ->selectRaw(' bill_details.service_id,count(bill_details.price_product) as total')
                    ->groupBy('bill_details.service_id')
                    ->whereBetween('bill_details.updated_at', [$from, $to])
                    ->orderBy('total','desc')
                    ->take(10)->get();
            }else{
                $productList = DB::table('bill_details') 
                    ->selectRaw(' bill_details.service_id,sum(bill_details.price_product) as total')
                    ->groupBy('bill_details.service_id')
                    ->whereBetween('bill_details.updated_at', [$from, $to])
                    ->orderBy('total','desc')
                    ->take(10)->get();
            }
            foreach($productList as $p){
                array_push($lisname, DB::table('services')->where('id',$p->service_id)->pluck('name')->first());
                if($p->total ==null) {
                    $p->total = 0;
                }
                array_push($count,$p->total);
            } 
            
            $this->dispatchBrowserEvent('update-product', ['listproduct' =>$lisname,'countproduct'=>$count]);
        }
        
    }
    public function render()
    {
        return view('livewire.owners.overview.left-chart');
    }
}
