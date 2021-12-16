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
            $table->id();
            $table->string('rincian_id', 5);
            $table->index('rincian_id');
            $table->string('kategori_id', 5);
            $table->foreign('kategori_id')->references('kategori_id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_rincian', 50);
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
