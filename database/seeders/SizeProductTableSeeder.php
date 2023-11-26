<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SizeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('size_product')->insert([
            [
                'id_product_detail' => 1, 
                'id_size' => 'L',
                'stock' => 200, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 1, 
                'id_size' => 'M',
                'stock' => 200, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 1, 
                'id_size' => 'XL',
                'stock' => 200, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_product_detail' => 2, 
                'id_size' => 'L',
                'stock' => 220, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 2, 
                'id_size' => 'M',
                'stock' => 150, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 2, 
                'id_size' => 'XL',
                'stock' => 170, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_product_detail' => 3, 
                'id_size' => 'L',
                'stock' => 245, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 3, 
                'id_size' => 'M',
                'stock' => 211, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 3, 
                'id_size' => 'XL',
                'stock' => 135, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_product_detail' => 4, 
                'id_size' => 'L',
                'stock' => 325, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 5, 
                'id_size' => 'M',
                'stock' => 231, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 6, 
                'id_size' => 'XL',
                'stock' => 150, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 7, 
                'id_size' => 'L',
                'stock' => 200, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 8, 
                'id_size' => 'M',
                'stock' => 241, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 9, 
                'id_size' => 'XL',
                'stock' => 311, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 10, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 11, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //12
            [
                'id_product_detail' => 12, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 12, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //13
            [
                'id_product_detail' => 13, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 13, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //14
            [
                'id_product_detail' => 14, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 14, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //15
            [
                'id_product_detail' => 15, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 15, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //16
            [
                'id_product_detail' => 16, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 16, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //17
            [
                'id_product_detail' => 17, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 17, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //18
            [
                'id_product_detail' => 18, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 18, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //19
            [
                'id_product_detail' => 19, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 19, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //20
            [
                'id_product_detail' => 20, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 20, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //21
            [
                'id_product_detail' => 21, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 21, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //22
            [
                'id_product_detail' => 22, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 22, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //23
            [
                'id_product_detail' => 23, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 23, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //24
            [
                'id_product_detail' => 24, 
                'id_size' => 'L',
                'stock' => 115, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 24, 
                'id_size' => 'M',
                'stock' => 113, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
