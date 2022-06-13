<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Product.index',compact('products'));
    }
    public function create()
    {
        return view('Product.create');
    }
    public function store(Request $request)
    {   
        $this->validate($request,[
            'name' => 'required',
            'sku' => 'required',
            'description'=>'required',
            'available_quantity'=>'required',
            'purchase_price'=>'required'
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->available_quantity = $request->available_quantity;
        $product->purchase_price = $request->purchase_price;

        $product->save();

        return redirect()->route('product.index');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('Product.edit',compact('product'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'sku' => 'required',
            'description'=>'required',
            'available_quantity'=>'required',
            'purchase_price'=>'required'
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->available_quantity = $request->available_quantity;
        $product->purchase_price = $request->purchase_price;

        $product->save();
        return redirect()->route('product.index');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
