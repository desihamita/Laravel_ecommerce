<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index()
    {
        $product = Product::take(3)->get();
        return view('welcome', compact('product'));
    }
}
