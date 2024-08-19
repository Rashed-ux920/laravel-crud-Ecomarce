<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class directioncontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function shop(){
        return view('shop');
    }
    public function cart(){
        return view('cart');
    }
    public function index3(){
        return view('welcome');
    }
}
