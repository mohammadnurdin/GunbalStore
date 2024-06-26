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
        Schema::create('pencabutan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pengajuan');
            $table->integer('id_pelanggan');
            $table->integer('id_paket');
            $table->date('tgl_pencabutan');
            $table->integer('id_pegawai');
            $table->text('alasan');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencabutan');
    }
};
