<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_Detail;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::join('product_detail', 'cart.id_product_detail', '=', 'product_detail.id')
        ->join('product', 'product_detail.id_product', '=', 'product.id')
        ->select('cart.*', 'product.name_product', 'product_detail.color', 'product_detail.price', 'product.image_product')
        ->get();
        
        return view('client.cart.index', [
           'carts' => $carts,
        ]);
    }

    public function removeCartItem($id)
    {
        // Tìm sản phẩm trong giỏ hàng
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->route('client.cart.index')->with('error', 'Sản phẩm không tồn tại trong giỏ hàng.');
        }

        // Xóa sản phẩm khỏi giỏ hàng
        $cartItem->delete();

        return redirect()->route('client.cart.index')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }
}
