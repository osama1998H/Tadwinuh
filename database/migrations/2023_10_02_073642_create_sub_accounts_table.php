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
        Schema::create('sub_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100);
            $table->string('account_name', 200);
            $table->unsignedBigInteger('account_id'); // Consider using an unsigned big integer for foreign keys.
            $table->string('mobile_number', 20)->nullable(); // Reduced the length, adjust as needed.
            $table->string('email', 100)->nullable();
            $table->text('address')->nullable(); // Adjusted data type.
            $table->decimal('credit_limit', 15, 3)->nullable();
            $table->text('note')->nullable();
            $table->decimal('discount_percentage', 5, 2)->nullable();
            $table->boolean('is_frozen')->default(false);
            $table->timestamps();

            $table->unique(['account_name', 'account_id']); // Adjusted to 'account_id'.

            // Define a foreign key relationship.
            // $table->foreign('account_id')->references('id')->on('account')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_accounts');
    }
};
