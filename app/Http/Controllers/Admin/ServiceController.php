<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $serviceQuery = Service::query();
        if ($keyword) {
            $serviceQuery->where('name', 'like', "%{$keyword}%");
        }
        $services = $serviceQuery->paginate(3);
        return view('layouts.admin.listService',compact('services'));
    }
    public function store(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $img = $request->input('img');

        $service = new Service;
        $service->name = $name;
        $service->price = $price;
        $service->description = $description;
        $service->img = $img;
        $service->save();
        return redirect()->route('service.index');
    }
    public function update(Request $request, $id){
        $service = Service::find($id);
        //dd($service);
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $img = $request->input('img');

        $service->name = $name;
        $service->price = $price;
        $service->description = $description;
        $service->img = $img;
        $service->save();
        return redirect()->route('service.index',compact('service'));
    }
    public function destroy($id){
        $service = Service::find($id);

        $service->delete();
        return redirect()->route('service.index');
    }
    public function edit($id){
        $service = Service::find($id);
        return view('layouts.admin.demo3',compact('service'));
    }
    public function action(Request $request){
        $keyword = $request->input('keyword');
        $cakes = Service::select('name')->where('name', 'LIKE', "%$keyword%")->get();
        return response()->json($cakes);
    }

}
