<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('ecommerce.order.list');
    }
    //
    public function details(){
        return view('ecommerce.order.details');
    }
}
