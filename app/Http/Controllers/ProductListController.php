<?php

namespace App\Http\Controllers;

use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductList::paginate(10);
        return view("welcome", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function search(Request $request)
    {
        $input = $request->search;
        $products = ProductList::where('name', 'like', '%'.$input.'%')->paginate(10);
        return view("components.product-row", compact("products"));

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductList $productList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductList $productList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductList $productList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductList $productList)
    {
        //
    }
}
