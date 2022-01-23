<?php

namespace App\Http\Controllers\teleSale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListBillController extends Controller
{
    public function index()
    {
        return view('layouts.teleSales.updateBillTeleSales');
    }
}
