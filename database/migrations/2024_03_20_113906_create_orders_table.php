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
        Schema::create('orders', function (Blueprint $table) {
        
        
                $table->id();
                $table->unsignedBigInteger('client_id');
                $table->foreign('client_id')->references('id')->on('users');
                // $table->unsignedBigInteger('product_id');
                // $table->foreign('product_id')->references('id')->on('products');
                $table->string('quantity');
                $table->string('shopping_method');
                $table->string('telephone');
                $table->string ('delvery_address');
                $table->string ('status');
                $table->string('total');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
