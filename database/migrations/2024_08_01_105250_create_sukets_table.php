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
