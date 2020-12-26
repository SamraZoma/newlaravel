<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertproduact()
    {
      
      return view('admin/insert_product');  
  
    }
	
	public function index()
    {
        $products=  product::where('departmentNAME','فلاتر')->first();
            return  $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new product();
      $p->order_products=$request->order_products;
      $p->prodcut_name=$request->prodcut_name;  
      $p->prodcut_cat=$request->prodcut_cat;
      $p->departmentNAME=$request->departmentNAME;
      $p->prodcut_price=$request->prodcut_price;
      $p->discount=$request->discount;  
      $p->prodcut_wasf=$request->prodcut_wasf;
      $p->prodcut_info=$request->prodcut_info;
      $p->prodcut_img=$request->prodcut_img;
          $p->save();
     return redirect()->back();
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
