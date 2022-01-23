<?php

namespace App\Http\Controllers\SaleMan;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ListOrderController extends Controller
{
    public function store(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $licensePlate = $request->input('licensePlate');
        $vehicle = $request->input('vehicle');
        $address = $request->input('address');

        // khach hang cua
        $checkCount =0;
        $customers = Customer::all();
        foreach ($customers as $cus){
            if($cus->phone == $phone){
                $checkCount++;
            }
        }
        if($checkCount == 0){
            // khach hang moi
            $customer = new Customer;
            $customer->name = $name;
            $customer->phone = $phone;
            $customer->licensePlate = $licensePlate;
            $customer->vihicle = $vehicle;
            $customer->address = $address;
            $customer->save();
        }else{

        }

    }

    public function AddCartService($id){
        $service = Service::find($id);
        Cart::add([
            'id' => $service->id,
           'name' => $service->name,
           'price' => $service->price,
           'description' => $service->description,
            'weight' => 0,
            'qty' => 1,
        ]);
        return back();
    }
    // public function listService(Request $request){
    //     $keyword = $request->input('keyword');
    //     $serviceQuery = Service::query();
    //     if ($keyword) {
    //         $serviceQuery->where('name', 'like', "%{$keyword}%");
    //     }
    //     $services = $serviceQuery->paginate(5);

    //     $cartServices = Cart::content();
    //     $total = Cart::total();


    //     return view('layouts.saleMan.listOderManSale',compact('services','cartServices','total'));
    // }
    // public function deleteCartService($rowId){
    //     Cart::remove($rowId);
    //     return back();
    // }
}
