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
                'avt' => 'https://phunugioi.com/wp-content/uploads/2020/01/anh-avatar-supreme-dep-lam-dai-dien-facebook.jpg',
                'email_verified' => 1,
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
                'email_verified' => 1,
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
                'avt' => 'https://tse1.mm.bing.net/th?id=OIP.Q2dDRKv9PWDyrnBJuYwtmAHaHa&pid=Api&P=0&h=180',
                'email_verified' => 1,
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
                'email_verified' => 1,
                'avt' => 'https://toigingiuvedep.vn/wp-content/uploads/2021/01/avatar-cho-con-trai-cuc-chat.jpg',
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
                'avt' => 'https://i.9mobi.vn/cf/Images/tt/2021/3/15/hinh-anh-dai-dien-dep-dung-cho-facebook-instagram-zalo-2.jpg',
                'email_verified' => 1,
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
                'email_verified' => 1,
                'avt' => 'https://1.bp.blogspot.com/-IYXsyTIazaU/XrP7T-DkUKI/AAAAAAAAkhY/mnBCxRQeOkkXdXhlUfs7IE9fO_3ZTYjzQCLcBGAsYHQ/s1600/Avatar-Nam%2B%252811%2529.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
