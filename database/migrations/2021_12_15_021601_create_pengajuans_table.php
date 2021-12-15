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
            $table->string('pengajuan_id', 5)->primary();
            $table->index('pengajuan_id');
            $table->string('pengajuan_kategori_id', 5);
            $table->foreign('pengajuan_kategori_id')->references('kategori_id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tgl_tugas');
            $table->text('deskripsi');
            $table->text('upload_spj');
            $table->enum('status', ['y','n']);
            $table->string('claim_id', 10);
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
