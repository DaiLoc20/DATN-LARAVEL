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
        Schema::create('product_detaills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductID');
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->text('desc')->nullable();
            $table->string('quantity');
            $table->boolean('status')->default(true);
            $table->bigInteger('rating');
            $table->timestamps();

            $table->foreign('ProductID')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_detaills');
    }
};
