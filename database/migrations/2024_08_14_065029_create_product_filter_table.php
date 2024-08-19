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
        Schema::create('product_fillter', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductID');
            $table->unsignedBigInteger('FillterID');
            $table->timestamps();

            $table->foreign('ProductID')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('FillterID')->references('id')->on('fillters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_fillter');
    }
};
