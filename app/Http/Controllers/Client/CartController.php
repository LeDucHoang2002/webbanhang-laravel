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
        $countCart=$carts->count('id');
        return view('client.cart.index', [
           'carts' => $carts,
           'countCart' => $countCart,
        ]);
    }
    public function removeCartItem($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return response()->json(['error' => 'Sản phẩm không tồn tại trong giỏ hàng.'], 404);
        }

        $cartItem->delete();

        return response()->json(['success' => 'Sản phẩm đã được xóa khỏi giỏ hàng.']);
    }

    public function updateCartItem($id, Request $request)
    {
        $quantity = $request->input('quantity', 0);

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return response()->json(['error' => 'Sản phẩm không tồn tại trong giỏ hàng.'], 404);
        }

        // Cập nhật số lượng trong cơ sở dữ liệu
        $cartItem->update(['quantity' => $quantity]);

        return response()->json(['success' => 'Số lượng sản phẩm đã được cập nhật thành công.']);
    }
    
}
