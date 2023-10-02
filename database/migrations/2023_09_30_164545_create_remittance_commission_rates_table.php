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
        Schema::create('remittance_commission_rates', function (Blueprint $table) {
            $table->id();
            $table->dateTime('posting_date')->default(now());
            $table->string('customer_name', 100);
            $table->string('currency', 100);
            $table->decimal('outgoing_commission_percentage', 5, 2)->default(0);
            $table->decimal('outgoing_commission_on_every', 15, 2)->default(0);
            $table->decimal('outgoing_commission_amount', 10, 3)->default(0);
            $table->decimal('incoming_commission_percentage', 5, 2)->default(0);
            $table->decimal('incoming_commission_on_every', 15, 2)->default(0);
            $table->decimal('incoming_commission_amount', 10, 3)->default(0);
            $table->timestamps();

            // Add a unique constraint on 'customer_name' and 'currency' columns
            $table->unique(['customer_name', 'currency']);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remittance_commission_rates');
    }
};
