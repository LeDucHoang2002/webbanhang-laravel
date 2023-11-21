<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->string('account_name');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth_day')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('avt');
            $table->string('email_verification_token')->nullable();
            $table->boolean('email_verified')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
