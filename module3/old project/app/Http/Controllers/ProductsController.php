<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Products;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        // dd($products);
        foreach ($products as $product)
            // dd($product->product_name);
            return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Products();
        $product->product_name = $request->product_name;
        $product->uses = $request->uses;
        $product->price = $request->price;
        $product->expiry = $request->expiry;
        $product->manufacture_day = $request->manufacture_day;
        $product->category_id = $request->category_id;
        // dd($product->product_name);
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // dd($id);
        return view('admin.products.show', ['product' => Products::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        $id = $product->id;
        // dd($product);
        return view('admin.products.edit', compact('id', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        // dd(123);
        $product->product_name = $request->name;
        $product->uses = $request->uses;
        $product->price = $request->price;
        $product->expiry = $request->expiry;
        $product->manufacture_day = $request->manufacture_day;
        $product->category_id = $request->category_id;
        // dd($request)->toArray();
        try {

            $product->save();
            return redirect()->route('product.index');
        } catch (\Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}