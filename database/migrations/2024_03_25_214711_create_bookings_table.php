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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('id_customer');
            $table->integer('id_katering');
            $table->integer('kuantitas_makanan');  
            $table->integer('id_dekorasi');
            $table->integer('id_dokumentasi');
            $table->integer('id_hiburan');  
            $table->integer('id_gedung'); 
            $table->integer('id_mua',);  
            $table->integer('id_souvenir');  
            $table->integer('kuantitas_souvenir');  
            $table->integer('id_undangan'); 
            $table->integer('kuantitas_undangan');
            $table->datetime('tanggal_booking');
            $table->datetime('tanggal_acara');
            $table->string('status_booking', 15);
            $table->integer('total_biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
