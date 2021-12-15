<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRinciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincians', function (Blueprint $table) {
            $table->string('rincian_id', 5)->primary();
            $table->index('rincian_id');
            $table->string('rincian_pengajuan_id', 5);
            $table->foreign('rincian_pengajuan_id')->references('pengajuan_id')->on('pengajuans')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_rincian', 50);
            $table->integer('harga');
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
        Schema::dropIfExists('rincians');
    }
}
