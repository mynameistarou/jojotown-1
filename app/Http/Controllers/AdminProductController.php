<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Trend;
use App\TrendProduct;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Product::query();
        if (!empty($request->brand_id)) {
            $query = $query->where('brand_id', $request->brand_id);
        }
        $products = $query->get();
        $brands = Brand::all();
        return view('admin/product/index', [
            'products' => $products,
            'brand_id' => $request->brand_id,
            'brands' => $brands,
        ]);
        
    }

    public function create()
    {
        $brands = Brand::all();
        $trends = Trend::all();
        return view('admin/product/detail', [
            'product_name' => '',
            'product_explain' => '',
            'price' => '',
            'url' => '',
            'image_url' => '',
            'brand_id' => count($brands) > 0 ? $brands[0]['id'] : 0,
            'trend_ids' => [],
            'action' => '/admin/product/store',
            'brands' => $brands,
            'trends' => $trends,
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->product_name;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;

        $product->explain = $request->product_explain;
        $product->url = $request->input('url');
        $product->image_url = $request->input('image_url');


        $product->save();
        
        foreach ($request->trend_ids as $trend_id) {
            $trend_product = new TrendProduct;
            $trend_product->product_id = $product->id;
            $trend_product->trend_id = $trend_id;
            
            $trend_product->save();
        }

        return redirect('/admin/product');
    }

    public function edit(int $id, Request $request)
    {
        $product = Product::find($id);
        $brands = Brand::all();
        $trends = Trend::all();
        $trend_ids = TrendProduct::where('product_id', $id)->pluck('trend_id')->all();
        return view('admin/product/detail', [
            'product_name' => $product['name'],
            'product_explain' => $product['explain'],
            'price' => $product['price'],
            'url' => $product['url'],
            'brand_id' => $product['brand_id'],
            'trend_ids' => $trend_ids,
            'image_url' => $product['image_url'],
            'action' => '/admin/product/update/' . $id,
            'brands' => $brands,
            'trends' => $trends,
        ]);
    }

    public function update(int $id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->product_name;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;

        $product->explain = $request->product_explain;
        $product->url = $request->input('url');
        $product->image_url = $request->input('image_url');

        $product->update();

        TrendProduct::where('product_id', $id)->delete();
        
        foreach ($request->trend_ids as $trend_id) {
            $trend_product = new TrendProduct;
            $trend_product->product_id = $product->id;
            $trend_product->trend_id = $trend_id;
            
            $trend_product->save();
        }

        return redirect('/admin/product');
    }

    public function destroy(int $id)
    {
        $product = Product::destroy($id);
        
        return redirect('/admin/product');
    }
}