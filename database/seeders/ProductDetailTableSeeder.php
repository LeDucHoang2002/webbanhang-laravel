<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('product_detail')->insert([
            [
                'id_product' => 1, 
                'color' => 'Màu xanh',
                'price' => '100000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 1, 
                'color' => 'Màu đỏ',
                'price' => '120000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 1, 
                'color' => 'Màu nâu',
                'price' => '130000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 1, 
                'color' => 'Màu vàng',
                'price' => '130000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


            [
                'id_product' => 2, 
                'color' => 'Màu đen',
                'price' => '100000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 3, 
                'color' => 'Màu trắng',
                'price' => '120000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 4, 
                'color' => 'Màu nâu',
                'price' => '200000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 5, 
                'color' => 'Màu trắng',
                'price' => '300000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 6, 
                'color' => 'Màu trắng',
                'price' => '120000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 7, 
                'color' => 'Màu đen',
                'price' => '100000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 8, 
                'color' => 'Màu xanh',
                'price' => '190000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 9, 
                'color' => 'Màu trắng',
                'price' => '150000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //12
            [
                'id_product' => 10, 
                'color' => 'Màu trắng',
                'price' => '125000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 10, 
                'color' => 'Màu hồng',
                'price' => '125000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 10, 
                'color' => 'Màu tím',
                'price' => '125000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 10, 
                'color' => 'Màu đen',
                'price' => '125000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //15
            
            [
                'id_product' => 11, 
                'color' => 'Màu xanh',
                'price' => '151000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 11, 
                'color' => 'Màu đen',
                'price' => '165000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 11, 
                'color' => 'Màu be',
                'price' => '151000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            //19
            [
                'id_product' => 12, 
                'color' => 'Màu trắng',
                'price' => '239000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product' => 12, 
                'color' => 'Màu đen',
                'price' => '239000', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
