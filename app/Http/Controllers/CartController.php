<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();
        //cek apakah udh ada di cart
        $cart_check = Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->count();
        if ($cart_check == 0) {
            Cart::insert([
                'user_id' => Auth::user()->id,
                'product_id' => $request->product_id,
                'qty' => 1,
                'total' => $product->price,
            ]);
        } else {
            $my_cart = Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->first();
            Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->update(['qty' => $my_cart->qty + 1, 'total' => $my_cart->total + $product->price]);
        }
        return redirect()->back();
    }
}
