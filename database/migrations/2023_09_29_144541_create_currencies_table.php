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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique()->comment('Name of the currency');
            $table->decimal('exchange_rate', 10, 2)->nullable()->default(1)->comment('Exchange rate relative to base currency');
            $table->decimal('selling_rate', 10, 2)->nullable()->comment('Selling rate for this currency');
            $table->decimal('buying_rate', 10, 2)->nullable()->comment('Buying rate for this currency');
            $table->decimal('min_selling_rate', 10, 2)->nullable()->comment('Minimum selling rate for this currency');
            $table->decimal('max_buying_rate', 10, 2)->nullable()->comment('Maximum buying rate for this currency');
            $table->string('currency_symbol', 100)->comment('Symbol of the currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
