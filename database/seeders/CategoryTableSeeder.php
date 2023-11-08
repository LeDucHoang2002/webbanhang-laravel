<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('category')->insert([
            ['name_category' => 'Áo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name_category' => 'Váy ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name_category' => 'Quần', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
