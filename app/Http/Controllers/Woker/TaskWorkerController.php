<?php

namespace App\Http\Controllers\Woker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskWorkerController extends Controller
{
    public function index(){
        return view('layouts.manageStaff.listBillStaff');
    }
}
