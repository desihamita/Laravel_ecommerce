<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $id = null)
    {
        $category = Category::all();
        $product = Product::where('product_name', 'LIKE', '%'.$request->search.'%')->paginate(6);
        return view('shop.index', compact('product', 'category', 'id'));
    }

    public function category($id)
    {
        $category = Category::all();
        $product = Product::where('category_id', $id)->paginate(6);
        return view('shop.index', compact('product', 'category', 'id'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.show', compact('product'));
    }
}
