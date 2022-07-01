<?php

namespace App\Http\Controllers;

use App\Models\ProductImg;
use App\Http\Requests\StoreProductImgRequest;
use App\Http\Requests\UpdateProductImgRequest;

class ProductImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductImgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductImgRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductImg  $productImg
     * @return \Illuminate\Http\Response
     */
    public function show(ProductImg $productImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductImg  $productImg
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImg $productImg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductImgRequest  $request
     * @param  \App\Models\ProductImg  $productImg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductImgRequest $request, ProductImg $productImg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductImg  $productImg
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImg $productImg)
    {
        //
    }
}
