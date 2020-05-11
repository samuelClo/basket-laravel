<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts =  Product::orderBy('created_at', 'desc')->get();

        return view('index',['products' => $allProducts]);
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
     * @param  \App\product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(product $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(product $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $products)
    {
        //
    }
}
