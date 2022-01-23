<?php

namespace App\Http\Controllers\Woker;

use App\Http\Controllers\Controller;

use App\Models\Bill;
use App\Models\Customer_license_automakers;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        //$cus_automaker = Customer_license_automakers::all();

        return view('layouts.manageStaff.historyFixStaff');
    }
}
