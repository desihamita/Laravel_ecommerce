<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('cart.index', compact('cart'));
    }

    public function store(Request $request)
    {
        $duplicate = Cart::where('product_id', $request->product_id)->first();

        if($duplicate){
            return redirect('/cart')->with('error', 'The item is already in the cart!');
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'quantity' => 1
        ]);

        return redirect('/cart')->with('success', 'Successfuly added cart items');
    }

    public function update(Request $request, $id)
    {
        Cart::where('id', $id)->update([
            'quantity' => $request->quantity
        ]);

        return response()->json([
            'Success' => true
        ]);
    }
}
