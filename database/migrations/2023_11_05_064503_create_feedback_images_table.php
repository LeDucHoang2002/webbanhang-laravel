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
        Schema::create('feedback_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_feedback');
            $table->unsignedBigInteger('id_image');
            $table->timestamps();

            $table->unique(['id_feedback', 'id_image']);

            $table->foreign('id_feedback')
            ->references('id')->on('feedback')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_image')
            ->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback_images');
    }
};