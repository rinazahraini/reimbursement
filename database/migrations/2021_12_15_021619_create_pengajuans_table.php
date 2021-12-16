<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('pengajuan_id', 5);
            $table->index('pengajuan_id');
            $table->string('user_id', 5);
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kategori_id', 5);
            $table->foreign('kategori_id')->references('kategori_id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->string('rincian_id', 5);
            $table->foreign('rincian_id')->references('rincian_id')->on('rincians')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tgl_kwitansi');
            $table->text('deskripsi');
            $table->text('upload_kwitansi');
            $table->enum('claim_status', ['n','y']);
            $table->string('claim_id', 10)->nullable();
            $table->integer('claim_biaya');
            $table->integer('biaya_approve')->nullable();
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
        Schema::dropIfExists('pengajuans');
    }
}
