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
        Schema::create('senders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 300);
            $table->string('nationality', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->date('dob')->nullable();
            $table->string('id_type', 100)->nullable();
            $table->string('id_number', 100)->nullable();
            $table->date('date_of_issue')->nullable();
            $table->string('address', 300);
            $table->string('city', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senders');
    }
};
