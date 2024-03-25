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
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_booking');
            $table->foreign('id_booking')->references('id')->on('bookings');
            
            $table->string('testimoni',1000);
            $table->string('rating',10);
            
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
