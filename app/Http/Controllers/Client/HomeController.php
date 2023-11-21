<?php
namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Detail;
use App\Models\Size_Product;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        $username = session('username');
        $carts=Cart::Where('username',$username);
        $countCart=$carts->count('id');
        session()->put('countCart', $countCart);
        $products = Product::all(); // Lấy tất cả dữ liệu từ bảng Fields
        $priceByProduct = [];
        foreach ($products as $product){
            $priceStats = Product_Detail::where('id_product', $product->id)
            ->selectRaw('MIN(price) as minPrice, MAX(price) as maxPrice')
            ->first();

            $minPrice = $priceStats->minPrice;
            $maxPrice = $priceStats->maxPrice;

            $priceByProduct[$product->id] = [
            'min' => $minPrice,
            'max' => $maxPrice,
            ];
        }
        
        return view('client.home.index', [
            'products' => $products, 
            'priceByProduct' => $priceByProduct, 
        ]);
    }
}
