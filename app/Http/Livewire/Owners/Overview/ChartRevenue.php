<?php

namespace App\Http\Livewire\Owners\Overview;

use DateTime;
use Livewire\Component;
use DB;

class ChartRevenue extends Component
{
    public $selectReveneu ='3';
    public $listDateReveneu;
    public $listReveneu;
    public function mount(){
        
        $myArrDate = array();
        for ($i = 0; $i <3; $i++) {
            $currendate = new DateTime();
            array_push($myArrDate,$currendate->modify('- '.$i.' day')->format('Y-m-d'));
        }
        
        foreach($myArrDate as $date){
            
            $listReveneu[] = DB::table('bills')
            ->whereDate('created_at','=', $date)
            ->sum('total');
        }
       
        $this->listDateReveneu=json_encode($myArrDate);
        $this->listReveneu=json_encode($listReveneu);
    }
    public function updatedSelectReveneu($value){
        
        
        $myArrDate = array();
        for ($i = 0; $i <$value; $i++) {
            $currendate = new DateTime();
            array_push($myArrDate,$currendate->modify('- '.$i.' day')->format('Y-m-d'));
        }
        
        foreach($myArrDate as $date){
            $data[] = DB::table('bills')
            ->whereDate('created_at','=', $date)
            ->sum('total');
        }
    
        // $myArrDate
       // DB::raw('COUNT(*) as `total`')
        
        //->groupBy('date')
        // $this->emit('updateLabels',$myArrDate);
          //$this->dispatchBrowserEvent('updateLabels',['labels'=>'1']);
         
        $this->dispatchBrowserEvent('name-updated', ['datecount' => $myArrDate,'data'=>$data]);
        
    }
    public function render()
    {
        return view('livewire.owners.overview.chart-revenue');
    }
}
