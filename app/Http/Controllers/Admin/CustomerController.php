<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use  GuzzleHttp\Client;

class CustomerController extends Controller
{
    public function index(Request $request){
        $client = new Client();
       $customer = getCustomers($client);
       //dd($customer);
       return view('layouts.admin.listCustomer',compact('customer'));
    }
    public function store(Request $request){

    }
    public function show($id){

    }
}
