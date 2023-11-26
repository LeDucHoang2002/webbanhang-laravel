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
            ['image' => 'https://4menshop.com/images/thumbs/2017/06/ao-thun-co-tron-xanh-at716-8801-slide-2.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://4menshop.com/images/thumbs/2017/10/ao-thun-soc-xanh-at718-9143.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://4menshop.com/images/thumbs/2017/10/ao-thun-do-do-at716-9144.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['image' => 'https://salt.tikicdn.com/cache/w1200/ts/product/c8/6f/64/bd8afb8f2b55004077dc58ab04fef5d0.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://kinhdoanhthoitrang.com.vn/wp-content/uploads/2020/10/9e087ac384826ddc3493.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://vpfashion.vn/wp-content/uploads/2021/06/mau-vay-cong-so-dep-nhat-moi-nhat.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['image' => 'https://4men.com.vn/images/thumbs/2017/09/tong-hop-nhung-mau-quan-jogger-nam-dep-nhat-hien-nay-news-245.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://tmluxury.vn/wp-content/uploads/quan-tay-thun-nam-dep-tmqt02.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://dony.vn/wp-content/uploads/2021/09/quan-tay-nam-dep-ban-chay-1.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            ['image' => 'https://static2.yan.vn/YanNews/2167221/202002/5-mau-ao-thun-nam-dep-khong-nen-bo-qua-nam-2020-f7263123.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://aoxuanhe.com/upload/product/axh-162/ao-thun-nam-cotton-co-tron-trang.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //12
            ['image' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lm1l3cl6k25ba4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lm1l3cl7eyn3b9', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lm1l3cl6k2cf5f', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //15
            ['image' => 'https://down-vn.img.susercontent.com/file/tw-11134201-23030-q2f9ktee79nva8', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/ph-11134201-23020-rrml54mlcynv66', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/my-11134201-23030-p3lkevd9j9nve7', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/ph-11134201-23020-4cvb8ftlcynvf4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //19
            ['image' => 'https://down-vn.img.susercontent.com/file/9eb4cd685dbee2fac7d24d9eafc51142', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/1b8625fd4c19eee0b362b652b2bee164', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/47a0665f49b23e820b1d9e91b6f608e4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/fa3fcdeffbbb4cfac0e4be4a737a556a', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/7da66f64eb02b970636a52c6c17a5069', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://down-vn.img.susercontent.com/file/sg-11134201-22100-u37i57rrqriv92', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
        ]);
    }
}
