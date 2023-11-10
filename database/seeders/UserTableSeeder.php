<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('user')->insert([
            [
                'username' => 'leduchoang', 
                'account_name' => 'Lê Đức Hoàng',
                'email' => 'hoang12345@gmail.com', 
                'phone_number' => '0123456789', 
                'gender' => 'nam',
                'birth_day' => '2002-08-11',
                'password' => bcrypt('ABC12345'),
                'address' => '41 Cao Thắng',
                'avt' => 'https://tse4.mm.bing.net/th?id=OIP.tS4o_QzG25ntuI90jWWWXQHaHa&pid=Api&P=0&h=180',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'nguyenhaily', 
                'account_name' => 'Nguyễn Hải Ly',
                'email' => 'ly12345@gmail.com', 
                'phone_number' => '0223456789', 
                'gender' => 'nữ',
                'birth_day' => '2002-05-11',
                'password' => bcrypt('ABC12345'),
                'address' => '41 Cao Thắng',
                'avt' => 'https://tse4.mm.bing.net/th?id=OIP.tS4o_QzG25ntuI90jWWWXQHaHa&pid=Api&P=0&h=180',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'phamdgoon', 
                'account_name' => 'Phạm Dgoon',
                'email' => 'dgoon12345@gmail.com', 
                'phone_number' => '0323456789', 
                'gender' => 'nam',
                'birth_day' => '2002-08-11',
                'password' => bcrypt('ABC12345'),
                'address' => '41 Cao Thắng',
                'avt' => 'https://tse4.mm.bing.net/th?id=OIP.tS4o_QzG25ntuI90jWWWXQHaHa&pid=Api&P=0&h=180',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'quochung', 
                'account_name' => 'Quốc Hùng',
                'email' => 'hung12345@gmail.com', 
                'phone_number' => '0423456789', 
                'gender' => 'nam',
                'birth_day' => '2002-08-11',
                'password' => bcrypt('ABC12345'),
                'address' => '41 Cao Thắng',
                'avt' => 'https://tse4.mm.bing.net/th?id=OIP.tS4o_QzG25ntuI90jWWWXQHaHa&pid=Api&P=0&h=180',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'ngochieu', 
                'account_name' => 'Ngọc Hiếu',
                'email' => 'hieu12345@gmail.com', 
                'phone_number' => '0523456789', 
                'gender' => 'nam',
                'birth_day' => '2002-08-11',
                'password' => bcrypt('ABC12345'),
                'address' => '41 Cao Thắng',
                'avt' => 'https://tse4.mm.bing.net/th?id=OIP.tS4o_QzG25ntuI90jWWWXQHaHa&pid=Api&P=0&h=180',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'username' => 'vothanhhai', 
                'account_name' => 'Võ Thanh Hải',
                'email' => 'hai12345@gmail.com', 
                'phone_number' => '0123456789', 
                'gender' => 'nam',
                'birth_day' => '2002-08-11',
                'password' => bcrypt('ABC12345'),
                'address' => '41 Cao Thắng',
                'avt' => 'https://tse4.mm.bing.net/th?id=OIP.tS4o_QzG25ntuI90jWWWXQHaHa&pid=Api&P=0&h=180',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
