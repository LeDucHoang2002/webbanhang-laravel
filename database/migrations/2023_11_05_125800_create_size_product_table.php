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
        Schema::create('size_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product_detail');
            $table->string('id_size');
            $table->integer('stock');
            $table->timestamps();

            $table->unique(['id_product_detail', 'id_size']);

            $table->foreign('id_product_detail')
            ->references('id')->on('product_detail')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_size')
            ->references('id_size')->on('size')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('size_product');
    }
};
