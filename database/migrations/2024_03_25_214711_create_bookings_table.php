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
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customers');
            
            $table->unsignedBigInteger('id_katering');
            $table->foreign('id_katering')->references('id')->on('katerings');
            $table->integer('kuantitas_makanan');  
            
            $table->unsignedBigInteger('id_dekorasi');
            $table->foreign('id_dekorasi')->references('id')->on('dekorasis');
            
            $table->unsignedBigInteger('id_dokumentasi');
            $table->foreign('id_dokumentasi')->references('id')->on('dokumentasis');
            
            $table->unsignedBigInteger('id_hiburan');  
            $table->foreign('id_hiburan')->references('id')->on('hiburans');
            
            $table->unsignedBigInteger('id_gedung'); 
            $table->foreign('id_gedung')->references('id')->on('gedungs');
            
            $table->unsignedBigInteger('id_mua');  
            $table->foreign('id_mua')->references('id')->on('muas');
            
            $table->unsignedBigInteger('id_souvenir'); 
            $table->foreign('id_souvenir')->references('id')->on('souvenirs'); 
            $table->integer('kuantitas_souvenir');  
            
            $table->unsignedBigInteger('id_undangan'); 
            $table->foreign('id_undangan')->references('id')->on('undangans');
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
