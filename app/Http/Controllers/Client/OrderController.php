<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function OrderProduct(Request $request)
    {
        $productData = $request->session()->get('product_data');

        return view('client.order.product', $productData);
    }
}
