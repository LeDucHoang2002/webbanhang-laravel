<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('order_detail')->insert([
            [
                'id_order' => 1, 
                'id_product_detail' => 1,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đang giao',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 1, 
                'id_product_detail' => 2,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đã nhận hàng',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_order' => 3, 
                'id_product_detail' => 3,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đã giao hàng',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 3, 
                'id_product_detail' => 4,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đang giao',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 4, 
                'id_product_detail' => 5,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đã giao hàng',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_order' => 5, 
                'id_product_detail' => 6,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đang giao',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 5, 
                'id_product_detail' => 7,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đang giao',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 6, 
                'id_product_detail' => 8,
                'quantity' => 2,
                'size' =>'L',
                'price' => '200000',
                'status' => 'Đang giao',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
