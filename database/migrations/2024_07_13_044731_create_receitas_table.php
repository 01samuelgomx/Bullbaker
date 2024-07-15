<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblreceitas', function (Blueprint $table) {
            $table->id('idReceita');
            $table->string('nomeReceita', 255);
            $table->string('ingredienteReceita', 255);
            $table->string('modoPreparoReceita', 255);
            $table->string('fotoReceita', 255);
            $table->string('statusReceita', 255);
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
        Schema::dropIfExists('tblreceitas');
    }
};
