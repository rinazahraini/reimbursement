<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterauthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterauths', function (Blueprint $table) {
            $table->id();
            $table->string('masterauth_id');
            $table->index('masterauth_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('nik');
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
        Schema::dropIfExists('masterauths');
    }
}
