<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            ['image' => 'https://product.hstatic.net/1000162482/product/e509dcc0cbb41aea43a55_90c7ee69e0b3410e8fcb40e48fe7a0bc.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/a1c5a30bb47f65213c6e19_eb1d57cbc1ec4baea40cde5b56420230.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/9607e8ccffb82ee677a914_4c2614dc274d43b49f3eb899d52fd00b.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/c5e0e47a92564108184750_96c7522ae7534c2bba82f23331ff9b74.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['image' => 'https://product.hstatic.net/1000162482/product/17ba65e27598a4c6fd892_b60bb65399334b17b1e6841b7e283651.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            ['image' => 'https://product.hstatic.net/1000162482/product/19270867181dc943900c10_919a1efbb2174d3790b7991d0b0c20bd.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            ['image' => 'https://product.hstatic.net/1000162482/product/d1e793e99c9d4dc3148c138_e56c289c248a43839773fc330d36c496.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            
            ['image' => 'https://product.hstatic.net/1000162482/product/5ea21dca1ebecfe096af59_8cbeca3628944f10ae1ef3f347461ffb.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            
            ['image' => 'https://product.hstatic.net/1000162482/product/6bcc4eda4dae9cf0c5bf64_91b00a1efc48478b96e316b9a15ffe91.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['image' => 'https://product.hstatic.net/1000162482/product/5928dc6e9814494a100558_7d5c8a86940848b1bce4a0a8c9b32025.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            ['image' => 'https://product.hstatic.net/1000162482/product/a096ee87cf821edc479331_d0080743be1c43cf951b6a834b169a7d.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            
            ['image' => 'https://product.hstatic.net/1000162482/product/50f1b6a8b5dc64823dcd49_cb1251f8f0a246629694f380f7850ebd.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

          
            ['image' => 'https://product.hstatic.net/1000162482/product/b31964118664573a0e75167_1b03e93810084a1e81faac01bf4938cf.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/ad4e092721b40c2e57321be85631e034_4826bbf8d2254ed5a1791cd9acde0410.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/4ee41e82fcf72da974e6162_ee9ac1c379cf4c429229d82d740ddafb.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/318a294fbf849acb4b8b38f9dd84e6d8_910bc16859794b58b9916e95510103ff.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            ['image' => 'https://product.hstatic.net/1000162482/product/6f4ea7248621577f0e3035_a0f3b5029c2c409baf2fc38668d71ab8.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/3ad7fbbddab80be652a937_31ebbb6a2f4343f09d5c9301b9352273.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/43a408b529b0f8eea1a133_48a9f6da75a9461dbe2f78e754e421b9.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            
            ['image' => 'https://product.hstatic.net/1000162482/product/331f062d2728f676af392_b48774463ddb4080bca610dcec95a5c7.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://product.hstatic.net/1000162482/product/f98f092c7f00ac5ef51190_b6112feb5d3c4564aed6a608ba25e732.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
