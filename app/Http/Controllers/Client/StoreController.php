<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $categories =  DB::table('categories') ->get()->toArray(); // lấy dữ liệu từ database
        $categories = json_decode(json_encode($categories), true); //  endcode -> json -> decode 
        $cat = $this->buildTree($categories);
        $categories = $cat;
        //dd($categories);
     return view('layouts.client.shophome',compact('categories'));
    }
    public function buildTree(Array $data, $parent = null) {
        $tree = array();
       foreach ($data as $d) {
            if ($d['parent_id'] == $parent) {
                $children = $this->buildTree($data, $d['category_id']); //danh sách con
                if (!empty($children)) { //nếu có con
                    $d['children'] = $children;
                }
                $tree[] = $d; 
            }
        }
       
        return $tree;
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
        //
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
