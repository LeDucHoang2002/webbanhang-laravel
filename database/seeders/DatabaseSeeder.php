<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            ProvinceTableSeeder::class,
            DistrictTableSeeder::class,
            WardTableSeeder::class,
            UserTableSeeder::class,
            BankAccountTableSeeder::class,
            PermissionTableSeeder::class,
            UserPermissionTableSeeder::class,
            ImagesTableSeeder::class,
            CategoryTableSeeder::class,
            ProductTableSeeder::class,
            ProductDetailTableSeeder::class,
            SizeTableSeeder::class,
            SizeProductTableSeeder::class,
            ProductImagesTableSeeder::class,
            OrderTableSeeder::class,
            OrderDetailTableSeeder::class,
            CartTableSeeder::class,
            FeedbackTableSeeder::class,
            FeedbackImagesTableSeeder::class,
        ]);
    }
}
