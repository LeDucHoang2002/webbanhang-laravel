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
        ]);
    }
}
