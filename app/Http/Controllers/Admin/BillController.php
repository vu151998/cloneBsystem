<?php

namespace App\Http\Controllers\admin;

use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  GuzzleHttp\Client;
use PhpParser\JsonDecoder;

class BillController extends Controller
{
    public function index(){
         $client = new Client();
         $products = listProduct($client);
         $productObj = collect($products);
         dd($productObj);
    }
    public function store(Request $request){
      $phoneNumber = $request->input('phoneNumber');
      $product_id = $request->input('product_id');
      $timeDate = $request->input('time');
      $quantity = $request->input('quantity');
      $salePrice = $request->input('salePrice');
      $status = $request->input('status');

      $orderProduct = new OrderProduct;
      $orderProduct->phoneNumber = $phoneNumber;
      $orderProduct->product_id = $product_id;
      $orderProduct->finishDate = $timeDate;
      $orderProduct->quantity = $quantity;
    }
}
