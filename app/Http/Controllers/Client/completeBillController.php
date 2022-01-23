<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use DB;
use App\Models\VNlocation\tinhthanhpho;
use App\Models\VNlocation\quanhuyen;
use App\Models\VNlocation\xaphuongthitran;
use App\Http\Controllers\Controller;

class completeBillController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $bill = null;
        session_start();
        $bill = $_SESSION['data'];
        $count =0;
        foreach($bill['itemsinBill'] as $b){
            $name = [];
            $img = [];
            $name += array('productname' =>  DB::table('products')->where('id',$b['productId'])->pluck('productName')->first());
            $bill['itemsinBill'][$count] += $name;
            $img += ['image' => DB::table('image')->where('cate_pro_id',$b['productId'])->pluck('link')->first()];
            $bill['itemsinBill'][$count] += $img;
            $count ++;
        }
       //dd($bill);
        return view('layouts.client.complete')->with(compact('bill'));
    }
    public function view($data){
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
