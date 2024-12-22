<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // id_order INTEGER,
    // id_product INTEGER,
    // quantity INTEGER,
    // price INTEGER
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            //generate order id from orders
            $table->foreignId('order_id')->constrained('orders');
            //generate product id from products
            $table->foreignId('product_id')->constrained('products');
            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
