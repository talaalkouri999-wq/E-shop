<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::all();
        return [
            'success'=>true,
            'message'=>"all product",
            'data'=>$products,
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $products=product::create($request->all());
        return  [
            'success'=>true,
            'message'=>'product added succefuly',
            'data'=>$products,
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return [ 
            'success'=>true,
            'message'=>'one added',
            'data'=>$product,
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, product $product)
    {
        $product->update ($request-> all());
        return  [
            'success'=>true,
            'message'=>'category updated succeflly',
            'data'=>$product,
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return [
            'success'=>true,
            'message'=>'category deleted succeflly',
            'data'=>null,
        ];
    }
}
