<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BankAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('bank_account')->insert([
            ['username' => 'leduchoang', 
            'bank' => 'Viettinbank', 
            'account_number' => '0912768911', 
            'beneficiary_name' => 'LE DUC HOANG', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()],
        ]);
    }
}
