<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        return view('ecommerce.customer.customer');
    }
    public function detail(){
        return view('ecommerce.customer.details');
    }
}
