<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('permission')->insert([
            ['name_permission' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name_permission' => 'Nhanvien', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name_permission' => 'KhachHang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
