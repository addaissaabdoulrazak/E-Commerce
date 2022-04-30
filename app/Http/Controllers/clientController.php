<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    //cart
    public function panier()
    {
        return view('client.cart');
    }

    //checkOut
    public function paiyement()
    {
        return view('client.checkout');
    }
    public function shop()
    {
        return view('client.shop');
    }
    public function client_login()
    {
        return view('client.login');
    }
    public function register()
    {
        return view('client.register');
    }
}
