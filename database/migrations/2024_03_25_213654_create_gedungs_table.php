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
        Schema::create('gedungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gedung',100);
            $table->string('alamat_gedung',1000);
            $table->integer('kapasitas_gedung');
            $table->integer('harga_sewa_gedung');
            $table->string('status_gedung',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gedungs');
    }
};
