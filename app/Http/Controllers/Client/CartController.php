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
        $username = session('username');
        if(!$username) {
            return redirect()->route('client.home');
        }
        $carts=Cart::Where('username',$username);
        $countCart=$carts->count('id');
        session()->put('countCart', $countCart);
        if (session()->has('username')) {
            $username = session('username');
            $carts = Cart::join('product_detail', 'cart.id_product_detail', '=', 'product_detail.id')
            ->join('product_images', 'product_detail.id', '=', 'product_images.id_product_detail')
            ->join('images', 'images.id', '=', 'product_images.id_image')
            ->join('product', 'product_detail.id_product', '=', 'product.id')
            ->select('cart.*', 'product.name_product', 'product_detail.color', 'product_detail.price', 'images.image')
            ->where('username',$username)
            ->get();
            return view('client.cart.index', [
            'carts' => $carts,
            ]);
        } else {

            return redirect()->route('login')->with('error', 'Please log in first.');
        }
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
    
    public function addToCart(Request $request)
    {
        if (session()->has('username')) {
            $username = session('username');
            $selectedColorId = $request->input('color');

            $size = $request->input('size');
            $quantity = $request->input('quantity');

            Cart::create([
                'username' => $username,
                'id_product_detail' => $selectedColorId, 
                'quantity' => $quantity,
                'id_size' => $size,
            ]);
        // Redirect back or to the cart page
        return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
        } else {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }    
    }
}
