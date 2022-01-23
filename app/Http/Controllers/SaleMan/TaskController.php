<?php

namespace App\Http\Controllers\SaleMan;

use App\Http\Controllers\Controller;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $orderQuery = OrderProduct::query();
        if ($keyword) {
            $orderQuery->customer->where('name', 'like', "%{$keyword}%");
        }
        $orderProducts = $orderQuery->paginate(5);
        return view('layouts.saleMan.listTaskSaleMan',compact('orderProducts'));
    }
    public function show($id){
        $orderProduct = OrderProduct::find($id);
        return redirect()->route('saleMan.TaskIndex',compact('orderProduct'));
    }
    public function history(Request $request){
        $keyword = $request->input('keyword');
        $orderQuery = OrderProduct::query();
        if ($keyword) {
            $orderQuery->customer->where('name', 'like', "%{$keyword}%");
        }
        $orderProducts = $orderQuery->paginate(5);
        return view('layouts.saleMan.historySaleMan',compact('orderProducts'));
    }
}
