<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\product;

class storeController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('store.index', compact('products'));
    }
}
