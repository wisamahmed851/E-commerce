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
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->decimal('discount', 8, 2)->nullable()->after('price'); // Discount for the product
            $table->decimal('total_price', 8, 2)->nullable()->after('discount'); // Final price after discount
            $table->enum('status', ['pending', 'completed', 'canceled'])->default('completed')->after('total_price'); // Optional: Status of transaction details
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->dropColumn('discount');
            $table->dropColumn('total_price');
            $table->dropColumn('status'); // Remove if added
        });
    }
};
