<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
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
        
        if($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $filename = time() . '_' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $product->image_url = $filename;
        }

        $product->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function edit(Product $product)
    {
        return view('edit-product', compact('product'));
    }
    
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'name' => 'required|string|max:20',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'stock' => 'required|numeric',
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        
        if($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $filename = time() . '_' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $product->image_url = $filename;
        }

        $product->save();

        return redirect()->back()->with('message', 'Product Updated successfully');
    }


    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');
    }
}
