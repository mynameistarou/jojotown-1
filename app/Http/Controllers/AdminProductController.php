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
    
    public function create()
    {
        return view('admin/product/create');
    }
    
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->product_name;
        $product->brand_id = 1; // TODO: 仮の値
        $product->price = $request->price;
        
        // DBに保存する
        $product->save();
        
        // TODO: 本来は商品一覧画面に遷移するが、まだないのでトップページに遷移するようにしておく。
        return redirect('/');
    }
}
