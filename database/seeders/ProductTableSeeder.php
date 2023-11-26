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
                'name_product' => 'BIGLOGO SQUARE TEE™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/c5e0e47a92564108184750_96c7522ae7534c2bba82f23331ff9b74.jpg',
                'id_category' => '1', 
                'description' => '"Sản phẩm nằm trong bộ sưu tập /public icon/ NEW PRODUCT LINE™ aka DÒNG SẢN PHẨM MỚI sở hữu 15 PHỐI MÀU của một THIẾT KẾ KINH ĐIỂN, với mức GIÁ DỂ CHỊU & CHẤT LƯỢNG VẢI phù hợp với khí hậu NHIỆT ĐỚI ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'BAD & LAZY BABY TEE - COLOUR COFFEE', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/17ba65e27598a4c6fd892_b60bb65399334b17b1e6841b7e283651.jpg',
                'id_category' => '1', 
                'description' => ' LAZY THINK COLLECTION | FALL - WINTER 2023 ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'LETTER DROP SHOULDER TEE™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/19270867181dc943900c10_919a1efbb2174d3790b7991d0b0c20bd.jpg',
                'id_category' => '1', 
                'description' => '"Sản phẩm nằm trong bộ sản phẩm PUBLIC ICON™" 
                                - Áo thun tay ngắn 
                                - Logo chữ & hình /zig zag/ in mặt trước áo và Logo chữ 5THEWAY® in mặt sau áo 
                                - Dáng Drop Shoulder Tee aka Áo Đổ Vai 
                                Chất liệu: 100% Cotton | Định lượng: 190gsm ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => '/earthquake/ NEW TEE', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/d1e793e99c9d4dc3148c138_e56c289c248a43839773fc330d36c496.jpg',
                'id_category' => '2', 
                'description' => '"Sản phẩm nằm trong OFFICIAL™ YOUTH IS LIKE A CLOUD™" 
                - Áo thun tay ngắn 
                - Artword in Rubber mặt trước áo và mặt sau áo 
                - Dáng New Tee aka áo form mới 
                 
                Chất liệu: 100% cotton, định lượng: 190gsm ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => '/peace out/ NEW TEE™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/5ea21dca1ebecfe096af59_8cbeca3628944f10ae1ef3f347461ffb.jpg',
                'id_category' => '2', 
                'description' => '"Sản phẩm nằm trong bộ sưu tập đặc biệt DROP.002™ 
                - Áo thun tay ngắn 
                - Artwork mặt trước áo & mặt sau áo in Rubber 
                - Dáng New Tee aka áo form mới 
                 
                Chất liệu: 100% cotton, định lượng: 190gsm ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => '/faithless world/ NEW TEE', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/6bcc4eda4dae9cf0c5bf64_91b00a1efc48478b96e316b9a15ffe91.jpg',
                'id_category' => '2', 
                'description' => '"Sản phẩm nằm trong bộ sưu tập đặc biệt DROP.002" 
                - Áo thun tay ngắn 
                - Artwork mặt trước áo & mặt sau áo in Rubber 
                - Dáng New Tee aka áo form mới 
                 
                Chất liệu: 100% Cotton | Định lượng: 230gsm 
                 
                Với thành phần là 100% sợi cotton và không có sự pha trộn với các thành phần khác ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => '/street-voca/ FLEECE TROUSERS™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/5928dc6e9814494a100558_7d5c8a86940848b1bce4a0a8c9b32025.jpg',
                'id_category' => '2', 
                'description' => 'Fleece Trouser aka QUẦN NỈ DÀI TROUSER aka QUẦN DÀI: Có bạn nói: “Mua quần khó hơn mua áo và đã có 1 chiếc quần đẹp thì như là có được 10 chiếc áo đẹp”. Nên trong đợt này trouser sẽ được 5THEWAY chọn để “giải bài toán khó” ở trên. ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => '/public icon/ SKATER SHORT KHAKI™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/a096ee87cf821edc479331_d0080743be1c43cf951b6a834b169a7d.jpg',
                'id_category' => '2', 
                'description' => '"Sản phẩm nằm trong bộ sản phẩm PUBLIC ICON™" 
                - Quần short 
                - Logo chữ 5THEWAY® in mặt trước 
                - Dáng Skater Short aka short thể thao 
                 
                Chất liệu: Kaki', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => '/fruit & juice/ NEW TEE', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/50f1b6a8b5dc64823dcd49_cb1251f8f0a246629694f380f7850ebd.jpg',
                'id_category' => '2', 
                'description' => '"Sản phẩm nằm trong bộ sản phẩm THE---DROP™" 
                - Áo thun tay ngắn 
                - Artwork in mặt trước và mặt sau áo 
                - Dáng New Tee aka form mới 
                 
                Chất liệu: 100% cotton, định lượng: 190gsm ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //10
            [
                'name_product' => '/stroke/ BIG LOGO SQUARE SWEATER™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/b31964118664573a0e75167_1b03e93810084a1e81faac01bf4938cf.jpg',
                'id_category' => '1', 
                'description' => '"Sản phẩm nằm trong bộ sản phẩm THE---DROP™" 
                - Áo thun tay ngắn 
                - Artwork in mặt trước và mặt sau áo 
                - Dáng New Tee aka form mới 
                 
                Chất liệu: 100% cotton, định lượng: 190gsm ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //11
            [
                'name_product' => '/public icon/ ZIGZAG HOODED KHAKI JACKET™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/6f4ea7248621577f0e3035_a0f3b5029c2c409baf2fc38668d71ab8.jpg',
                'id_category' => '1', 
                'description' => '"Sản phẩm nằm trong bộ sản phẩm PUBLIC ICON™"
                - Áo khoác tay dài
                - Logo chữ 5THEWAY® in mặt trước áo và Logo hình in ZIGZAG mặt sau áo
                - Dáng HOODED JACKET
                
                Chất liệu: Kaki', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //12
            [
                'name_product' => '/public icon/ BIG LOGO SQUARE HOODIE™', 
                'image_product' => 'https://product.hstatic.net/1000162482/product/331f062d2728f676af392_b48774463ddb4080bca610dcec95a5c7.jpg',
                'id_category' => '1', 
                'description' => '"Sản phẩm nằm trong dòng sản phẩm 5THEWAY® 학교 EDITION ‘NEW UNIFORM" 
                - Áo khoác nỉ có mũ, RIB bo tay & bo lưng 
                - Logo chữ 5THEWAY® được thêu xù 
                - Dáng traditional fit aka form truyền thống 
                 
                Chất liệu: Brushed Fleece 80%Cotton | Định lượng: 370gsm 
                 ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
