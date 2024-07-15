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
        Schema::create('tblnotificacao', function (Blueprint $table) {

            $table->id('idNotificacao');
            $table->string('tituloNotificacao',35);
            $table->string('mensagemNotificacao',55);
            $table->string('fotoNotificacao', 255);
            $table->string('statusNotificacao', 255);

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
        Schema::dropIfExists('tblnotificacao');
    }
};
