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
        Schema::create('dumas_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pj_id')->nullable();
            $table->foreignId('pengaduan_id');
            $table->foreignId('statusBukti_id')->default(1);
            $table->integer('statusPengaduan_id')->default(1);
            $table->string('nama');
            $table->bigInteger('nik');
            $table->string('email');
            $table->text('alamat');
            $table->string('jenis_lainnya')->nullable();
            $table->text('isi_pengaduan');
            $table->text('saran_dan_masukkan');
            $table->string('bukti_pengaduan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dumas_forms');
    }
};
