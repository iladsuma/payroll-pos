<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotonganGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potongan_gaji', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('cabang');
            $table->string('potongan');
            $table->integer('jumlah');
            $table->integer('total_potongan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potongan_gaji');
    }
}
