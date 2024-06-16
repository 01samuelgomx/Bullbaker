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
        Schema::create('tblCurso', function (Blueprint $table) {
            $table->id('idCurso');
            $table->string('nomeCurso', 255);
            $table->text('descricaoCurso'); 
            $table->decimal('precoCurso', 8, 2);
            $table->integer('vagasDisponiveisCurso');
            $table->string('fotoCurso', 255);
            $table->boolean('statusCurso')->default(true);
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
        Schema::dropIfExists('tblCurso');
    }
};
