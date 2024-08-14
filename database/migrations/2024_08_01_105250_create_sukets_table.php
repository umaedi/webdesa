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
        Schema::create('sukets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategorisuket_id');
            $table->foreignId('user_id');
            $table->string('ktp');
            $table->string('kk');
            $table->string('nama_usaha')->nullable();
            $table->string('barang_hilang')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('nama_catin_pria')->nullable();
            $table->string('ttl_catin_pria')->nullable();
            $table->string('pekerjaan_catin_pria')->nullable();
            $table->string('alamat_catin_pria')->nullable();
            $table->string('nama_catin_wanita')->nullable();
            $table->string('ttl_catin_wanita')->nullable();
            $table->string('pekerjaan_catin_wanita')->nullable();
            $table->string('alamat_catin_wanita')->nullable();
            $table->string('nama_pemohon_dispenasasi')->nullable();
            $table->string('ttl_pemohon_dispenasasi')->nullable();
            $table->string('jenis_kelamin_pemohon_dispenasasi')->nullable();
            $table->string('pekerjaan_pemohon_dispenasasi')->nullable();
            $table->string('alamat_pemohon_dispenasasi')->nullable();
            $table->string('status')->default('pending');
            $table->string('file_suket')->nullable();
            $table->timestamps();
        });
    }

    public function kategorisuket()
    {
        return $this->belongsTo(Kategorisuket::class);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sukets');
    }
};
