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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);

            $table->unsignedBigInteger('CategoryID');
            $table->unsignedBigInteger('BrandID');
            $table->unsignedBigInteger('FillterID');

            $table->foreign('CategoryID')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('BrandID')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('FillterID')->references('id')->on('fillters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
