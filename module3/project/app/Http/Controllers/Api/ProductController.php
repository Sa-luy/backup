<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $products = Product::all();
        // $products= n 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $products = Product::all();
        $products = new Product;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->detail = $request->detail;
        $products->element = $request->element;
        try {
            $products->save();
            return response()->json($products, 201);
        } catch (\Exception $e) {
            $return = [
                'message' => ' khong thanh cong'
            ];
            return response()->json($return, 202);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->detail = $request->detail;
        $product->element = $request->element;
        try {
            $product->save();
            return response()->json($product, 201);
        } catch (\Exception $e) {
            $return = [
                'message' => ' khong thanh cong'
            ];
            return response()->json($return, 202);
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
        $product = Product::find($id);
        // dd($product);
        try {
            $product->delete();
            $return = [
                'message' => ' xoa thanh cong'
            ];
            return response()->json($return, 202);
        } catch (\Exception $e) {
            $return = [
                'message' => ' khong thanh cong'
            ];
            return response()->json($return, 202);
        }
    }
}