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
            $table->string('name'); // Product name
            $table->decimal('price', 10, 2); // Product price
            $table->text('description'); // Product description
            $table->enum('product_status', ['active', 'inactive'])->default('active'); // Status
            $table->foreignId('category_id')
                ->nullable() // Make it nullable
                ->default(1) // Default category ID (ensure this category exists)
                ->constrained('categories')
                ->onDelete('cascade'); // Foreign key to categories
            $table->json('images')->nullable(); // JSON column for multiple image paths
            $table->timestamps(); // Created_at and updated_at
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
