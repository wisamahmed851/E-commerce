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
        Schema::create('table_transactions', function (Blueprint $table) {
            $table->id();
            $table->float('total_amount', 8, 2); // Total transaction amount
            $table->enum('payment_method', ['cash', 'card', 'online']); // Payment type
            $table->timestamps(); // Created at, updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_transactions');
    }
};
