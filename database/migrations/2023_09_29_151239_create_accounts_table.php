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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100)->nullable();
            $table->string('name', 500)->nullable();
            $table->integer('account_number')->unsigned()->unique();
            $table->string('currency', 100)->nullable();
            $table->decimal('balance', 15, 3)->nullable(); // Changed decimal precision and scale
            $table->boolean('is_group')->nullable()->default(false);
            $table->unsignedBigInteger('parent_account_id')->nullable(); // Changed to a foreign key
            $table->boolean('is_frozen')->nullable()->default(false);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('parent_account_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('set null'); // Set the appropriate action when a parent account is deleted
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
