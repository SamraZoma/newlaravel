<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;



class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }
    // $products=  product::where('departmentNAME','فلاتر')->first();
    //            return  $products;
}
