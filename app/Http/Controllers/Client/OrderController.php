<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_Detail;
use App\Models\User;
use App\Models\Product;
use App\Models\Product_Images;
use App\Models\Images;

class OrderController extends Controller
{
    public function ProcessOrder(Request $request)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (session()->has('username')) {
            $username = session('username');
            
            // Lấy dữ liệu từ request
            $size = $request->input('size');
            $quantity = $request->input('quantity');
            $user = User::where('username', $username)->first();
            $selectedColorId = $request->input('color');
            $productDetail = Product_Detail::find($selectedColorId);

            $productId = $productDetail->id_product;

            $product = Product::find($productId);
            $product_Images = Product_Images::where('id_product_detail', $selectedColorId)->get();
            
            $firstImageId = $product_Images->pluck('id_image')->first();
            $imageUrl = Images::where('id', $firstImageId)->value('image');

                // Truyền dữ liệu đến view mà không lưu vào cơ sở dữ liệu
                return view('client.order.orderProduct', [
                    'user' => $user,
                    'productDetail' => $productDetail,
                    'product' => $product,  // Pass the product to the view
                    'size' => $size,
                    'quantity' => $quantity,
                    'imageUrl' => $imageUrl,
                ]);
        } else {
            // Handle the case when the product detail is not found
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    }
}