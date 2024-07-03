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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('resi');
            $table->string('cabang');
            $table->date('tanggal_pengiriman');
            $table->integer('jumlah_pengiriman');
            $table->integer('insentif')->nullable(); // Will be calculated based on jumlah_pengiriman
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
