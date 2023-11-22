<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_Detail;
use App\Models\User;
use App\Models\Product;
use App\Models\Product_Images;
use App\Models\Images;
use App\Models\Order;
use App\Models\Order_Detail;

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

    public function SaveOrder(Request $request) {
        $user = $request->user();
        $productDetail = Product_Detail::find($request->input('color'));
        $quantity = $request->input('quantity');
        $size = $request->input('size');

        $order = new Order();
        $order->username = $user->username; 
        $order->day_order = now(); 
        $order->status = 'Thanh toán khi nhận hàng'; 
        $order->save();

        // Tạo một chi tiết đơn hàng mới
        $orderDetail = new Order_Detail();
        $orderDetail->id_order = $order->id; 
        $orderDetail->id_product_detail = $productDetail->id;
        $orderDetail->quantity = $quantity;
        $orderDetail->size = $size;
        $orderDetail->price = $productDetail->price * $quantity + 20000; 
        $orderDetail->status = 'Thanh toán khi nhận hàng'; 
        $orderDetail->save();

        return redirect()->route('view')->with('ok', 'Đã đặt hàng thành công');

        
    }
}