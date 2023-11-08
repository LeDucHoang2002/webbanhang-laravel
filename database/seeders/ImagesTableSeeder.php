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
            ['image' => 'https://baoangiang.com.vn/image/fckeditor/upload/2022/20221124/images/Untitled%20(11).jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://bizweb.dktcdn.net/100/300/101/files/ao-dai-co-dau-do-tuoi-ket-hy-add208-2.jpg?v=1655304942486v', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['image' => 'https://static2.yan.vn/YanNews/2167221/202001/5-mau-ao-so-mi-nu-du-doan-hot-nam-2020-27d975e9.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
