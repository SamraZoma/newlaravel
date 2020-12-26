<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function show(){
        $product = product::all();
        return view('index', compact('product'));

    }
}
