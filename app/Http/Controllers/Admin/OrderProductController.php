<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OrderProduct;
use App\Models\OrderProductStaff;

use Illuminate\Http\Request;
use  GuzzleHttp\Client;

class OrderProductController extends Controller
{
    public function index(Request $request){
        $client = new Client();
        $keyword = $request->input('keyword');

//        $order = OrderProduct::find(1);
//        dd($order);
        $staffQuery = OrderProductStaff::query();

        if($keyword){
            $staffQuery->where('orderProduct_id','like',"%{$keyword}%");
        }
        $staffs = $staffQuery->paginate(5);

        return view('layouts.admin.listOderProduct',compact('client','staffs'));
    }


}
