<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shop()
    {
        $products = Product::all();

        return view('Product/products', [
            'products' => $products
        ]);
    }

    public function product(Request $request)
    {
        $product = Product::find($request->id);

        return view('Product/product', [
            'product' => $product
        ]);
    }
}
