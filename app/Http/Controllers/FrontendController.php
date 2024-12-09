<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){
        return view('frontEnd.Home.home');
    }
    public function about(){
        return view('frontEnd.Pages.about');
    }
    public function contact(){
        return view('frontEnd.Pages.contact');
    }
    public function notfound(){
        return view('frontEnd.Pages.404');
    }
    public function catalog(){
        return view('frontEnd.shop.catalog');
    }
    public function product(){
        return view('frontEnd.shop.product');
    }
    public function register(){
        return view('frontEnd.auth.register');
    }
    public function login(){
        return view('frontEnd.auth.login');
    }
    public function passwordRecovery(){
        return view('frontEnd.auth.password-recovery');
    }
    public function checkoutCart(){
        return view('frontEnd.order.checkoutCart');
    }
    public function checkoutDelivery(){
        return view('frontEnd.order.checkoutDelivery');
    }
    public function order(){
        return view('frontEnd.order.order');
    }
    public function wishlist(){
        return view('frontEnd.Pages.wishlist');
    }
    public function reviews(){
        return view('frontEnd.Pages.reviews');
    }
    public function help(){
        return view('frontEnd.Pages.help');
    }
}
