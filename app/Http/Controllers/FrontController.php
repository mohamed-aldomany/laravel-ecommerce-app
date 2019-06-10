<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;
use App\UserProduct;
use Auth;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexprod()
    {
        $product = Product::all();
        return view('front.prod',compact('product'));
    }

    public function indexcat()
    {
        $cat = Category::all();
        return view('front.cat',compact('cat'));
    }

    public function catprod($id)
    {
        $product = Product::where('cat_id',$id)->get();
        return view('front.catprod',compact('product'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $product = Product::where('prod_name','like','%'.$search.'%')->get();
        $product2 = Product::where('prod_code','like','%'.$search.'%')->get();   
        return view('front.prod',compact('product'))->with('product2',$product2);
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
        //
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


    public function addCart($id){

        $cart = new UserProduct();
        $cart->u_id = Auth::user()->id;
        $cart->p_id = $id;
        $cart->save(); 
        return redirect('/front/prod');
    }
    public function cart(){
        $user_id = Auth::user()->id;
        $cart = UserProduct::where('u_id',$user_id)->get();
        return view('front.cart',compact('cart'));
    }


}