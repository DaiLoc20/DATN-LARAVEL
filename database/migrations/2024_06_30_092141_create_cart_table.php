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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID')->nullable();
            $table->unsignedBigInteger('ProductDetaillsID')->nullable();
            $table->integer('quantity');

            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ProductDetaillsID')->references('id')->on('product_detaills')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
