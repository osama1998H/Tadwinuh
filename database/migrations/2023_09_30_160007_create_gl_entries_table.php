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
        Schema::create('gl_entries', function (Blueprint $table) {
            $table->id();
            $table->dateTime('posting_date')->nullable()->default(now());
            $table->dateTime('transaction_date')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->string('account', 500);
            $table->decimal('debit_amount', 15, 3)->default(0);
            $table->decimal('credit_amount', 15, 3)->default(0);
            $table->string('account_currency', 100);
            $table->decimal('debit_amount_in_account_currency', 15, 3)->default(0);
            $table->decimal('credit_amount_in_account_currency', 15, 3)->default(0);
            $table->string('voucher_type', 100)->nullable();
            $table->string('voucher_number', 100)->nullable();
            $table->text('remarks')->nullable();
            $table->boolean('is_opening')->default(false);
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gl_entries');
    }
};
