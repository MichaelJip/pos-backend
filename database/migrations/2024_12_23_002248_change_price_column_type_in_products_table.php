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
        // Change 'price' column from decimal to integer
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price')->change();  // Convert to integer
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // If you want to revert, change the column back to decimal
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->change();
        });
    }
};
