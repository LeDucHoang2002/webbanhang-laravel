<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('product')->insert([
            [
                'name_product' => 'Áo thun', 
                'image_product' => 'https://dongphuctienbao.com/wp-content/uploads/2021/06/ao-polo-dep-2.jpg',
                'id_category' => '1', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Áo thun', 
                'image_product' => 'https://static2.yan.vn/YanNews/2167221/202002/5-mau-ao-thun-nam-dep-khong-nen-bo-qua-nam-2020-f7263123.jpg',
                'id_category' => '1', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Áo thun', 
                'image_product' => 'https://aoxuanhe.com/upload/product/axh-162/ao-thun-nam-cotton-co-tron-trang.jpg',
                'id_category' => '1', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Váy ', 
                'image_product' => 'https://blogcaodep.com/wp-content/uploads/2020/03/vay-dam-maxi-voan-tre-vai-di-bien-dep-2018.jpg',
                'id_category' => '2', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Váy ', 
                'image_product' => 'https://kinhdoanhthoitrang.com.vn/wp-content/uploads/2020/10/9e087ac384826ddc3493.jpg',
                'id_category' => '2', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Váy ', 
                'image_product' => 'https://vpfashion.vn/wp-content/uploads/2021/06/mau-vay-cong-so-dep-nhat-moi-nhat.png',
                'id_category' => '2', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Quần Tây', 
                'image_product' => 'https://static2.yan.vn/YanNews/2167221/202002/4-loai-quan-tay-nam-dep-nen-co-cho-ban-nam-nam-2020-51d46f12.jpg',
                'id_category' => '2', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Quần Tây', 
                'image_product' => 'https://4men.com.vn/images/thumbs/2017/08/nhung-mau-quan-kaki-nam-dep-nhat-hien-nay-tai-4men-news-240.jpg',
                'id_category' => '2', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Quần Tây', 
                'image_product' => 'https://dony.vn/wp-content/uploads/2021/09/quan-tay-nam-dep-ban-chay-1.jpg',
                'id_category' => '2', 
                'description' => 'Áo Polo thời trang nam, áo polo cà phê, áo thun có cổ Nam chất liệu bền, co giãn tốt, thoáng mát. Giao Hàng tận nơi – Miễn phí vận chuyển HĐ 499K – Đổi trả …', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
