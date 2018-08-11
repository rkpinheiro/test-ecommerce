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
}
