<?php

namespace App\Http\Controllers;

use App\Models\CartDetails;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id, Request $request)
    {
        $product = Product::find($id);
        $productName = $product->name;

        $session = $request->session();


        if ($request->isMethod('POST')) {

            $quantity = $request->get('quantity');

            $price = $product->price * $_POST['quantity'];

            $cartDetail = new CartDetails();

            $cartDetail->product_name = $productName;
            $cartDetail->price = $price;
            $cartDetail->quantity = htmlentities($_POST['quantity']);
            $cartDetail->setCreatedAt(new \DateTime());
            $cartDetail->setUpdatedAt(new \DateTime());

            $cartDetail->save();

            $cartDetailId  = $cartDetail->id;
            $request->session()->put('cartDetailId', $cartDetailId);
        }

        return redirect('cart/checkout', [
            'cartId' => $cartDetailId
        ]);
    }

    public function checkout(int $cartDetailId)
    {
        $cartDetail = CartDetails::find($cartDetailId);

        return view('cart/checkout', [
            'cartDetail' => $cartDetail
        ]);
    }
}
