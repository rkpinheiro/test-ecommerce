<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function products()
    {
        $products = Product::all();

        return view('products')
            ->withProducts($products);
    }

    public function addToCart(Request $request)
    {
        $cart = json_decode($request->session()->get('cart'), true);
        $product = Product::findOrFail($request->input('id'));
        isset($cart[$product->id]) ?
            $cart[$product->id]['amount']++ :
            $cart[$product->id] = array_merge($product->toArray(), array('amount' => 1));
        $cart = json_encode($cart);
        $request->session()->put('cart', $cart);
        return response()->json($cart);
    }

    public function payment(Request $request)
    {
        $cart = json_decode($request->session()->get('cart'), true);
        return view('payment')
            ->withCart($cart);
    }
}
