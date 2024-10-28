<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        //
    }

    public function showProductForm()
    {
        return view('product_details');
    }

    public function showAllProducts(){
        $products = Product::all();
        return view('products', compact('products'));
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'stock' => 'required|numeric',
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        
        $product->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
