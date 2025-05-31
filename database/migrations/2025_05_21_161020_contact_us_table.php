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
        //
       Schema::create('contact_us', function (Blueprint $table) {
           $table->id();
           $table->string('full_name');
           $table->string('phone_number');
           $table->enum('gender', ['male', 'female', 'other']);
           $table->string('email')->unique();
           $table->text('medical_description')->nullable();
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('contact_us');
    }
};
