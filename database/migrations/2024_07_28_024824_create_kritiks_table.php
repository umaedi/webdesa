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
        Schema::create('kritiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('kritik');
            $table->string('status')->default('pending');
            $table->string('komentar')->nullable();
            $table->timestamps();
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritiks');
    }
};
