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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductID')->nullable();
            $table->unsignedBigInteger('CategoryID')->nullable();
            $table->unsignedBigInteger('BrandID')->nullable();
            $table->unsignedBigInteger('UserID')->nullable();
            $table->string('path');

            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ProductID')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('CategoryID')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('BrandID')->references('id')->on('brands')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
