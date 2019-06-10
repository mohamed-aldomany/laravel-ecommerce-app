<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.allProd')->with('product',$product);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addProd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->prod_name = $request->pname;
        $product->prod_code = $request->pcode;
        $product->prod_img = 1 ; 
        $product->prod_price = $request->price;   
        $product->cat_ID = $request->cat_id;
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.editProd',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $pid = $request->id;
        $product = Product::find($pid);
        $product->prod_name = $request->pname;
        $product->prod_price = $request->price;
        $product->prod_img = 1;
        $product->prod_code = $request->pcode;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function imageUpdate(Request $request,$id){

        $cover_image = $request->file('cover_image');
        if($cover_image){
            $cover_image_filesize = 100;
            $cover_image_filename = $cover_image->getClientOriginalName();
            $cover_image->move(public_path('images'),$cover_image_filename);
        }else {
           $cover_image_filename = "noimages.jpg";
            }
        $image = Product::find($id); 
        $image->prod_img = $cover_image_filename;
        $image->save();    
        return view('admin.addProd');    
    }







}
