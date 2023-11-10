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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product_detail');
            $table->unsignedBigInteger('id_image');
            $table->timestamps();

            $table->unique(['id_product_detail', 'id_image']);

            $table->foreign('id_product_detail')
            ->references('id')->on('product_detail')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_image')
            ->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
