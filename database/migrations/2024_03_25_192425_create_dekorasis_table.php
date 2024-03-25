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
        Schema::create('dekorasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dekorasi',100);
            $table->text('deskripsi_dekorasi');
            $table->integer('harga_dekorasi');
            $table->string('gambar_dekorasi', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dekorasis');
    }
};
