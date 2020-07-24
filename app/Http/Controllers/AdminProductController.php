<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin/product/index');
    }
    
    public function create()
    {
        return view('admin/product/detail', [
            'action' => '/admin/product/store'
        ]);
    }
    
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->product_name;
        $product->brand_id = 1;
        $product->price = $request->price;
        
        $product->explain = $request->product_explain;
        $product->url = $request->input('url');
        $product->image_url = $request->input('image_url');
        
        
        $product->save();
        
        return redirect('/admin/product');
    }
    
    public function edit(int $id, Request $request)
    {
        return view('admin/product/detail', [
            'action' => '/admin/product/update/' . $id
        ]);
    }
    
    public function update(int $id, Request $request)
    {
        return redirect('/admin/product');
    }
    
    public function destroy(int $id)
    {
        return redirect('/admin/product');
    }
}
