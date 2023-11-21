<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Detail;
use App\Models\Size_Product;
use App\Models\Product_Images;
use App\Models\Images;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Feedback;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id');
        $products = Product::find($id);
        $priceByProduct = [];
        $product_Details = Product_Detail::where('id_product', $id)->get();
        $priceStats = Product_Detail::where('id_product', $id)
            ->selectRaw('MIN(price) as minPrice, MAX(price) as maxPrice')
            ->first();

        $minPrice = $priceStats->minPrice;
        $maxPrice = $priceStats->maxPrice;

        $priceByProduct[$id] = [
            'min' => $minPrice,
            'max' => $maxPrice,
        ];

        $product_Images = Product_Images::whereIn('id_product_detail', $product_Details->pluck('id'))->get();
        $imageUrls = Images::whereIn('id', $product_Images->pluck('id_image'))->get();

        // Combine data from Product_Detail and Product_Images
        $productDetailsWithImages = $product_Details->map(function ($productDetail) use ($product_Images, $imageUrls) {
            $imagesForProductDetail = $product_Images->where('id_product_detail', $productDetail->id);
            $imageUrlsForProductDetail = $imageUrls->whereIn('id', $imagesForProductDetail->pluck('id_image'))->pluck('image')->toArray();

            return [
                'productDetail' => $productDetail,
                'imageUrls' => $imageUrlsForProductDetail,
            ];
        });

        $feedbackData = Feedback::join('order', 'feedback.id_order', '=', 'order.id')
            ->join('user', 'user.username', '=', 'order.username')
            ->join('order_detail', 'order.id', '=', 'order_detail.id_order')
            ->join('product_detail', 'order_detail.id_product_detail', '=', 'product_detail.id')
            ->join('feedback_images', 'feedback_images.id_feedback', '=', 'feedback.id')
            ->join('images', 'images.id', '=', 'feedback_images.id_image')
            ->where('product_detail.id_product', $id)
            ->select('user.account_name', 'user.avt', 'product_detail.color', 'order_detail.size', 'feedback.message', 'feedback.star', 'feedback.day_feedback', 'images.image')
            ->get();

        // Count total feedback
        $totalFeedback = $feedbackData->count();

        // Calculate average star rating
        $averageStarRating = $feedbackData->avg('star');

        foreach ($product_Details as $product_Detail) {
            $size_Product = Size_Product::where('id_product_detail', $product_Detail->id)->get();
        }

        return view('client.product.detail', [
            'ID' => $id,
            'products' => $products,
            'priceByProduct' => $priceByProduct,
            'productDetailsWithImages' => $productDetailsWithImages,
            'size_Product' => $size_Product,
            'product_Details' => $product_Details,
            'feedbackData' => $feedbackData,
            'totalFeedback' => $totalFeedback,
            'averageStarRating' => $averageStarRating,
        ]);
    }
}
