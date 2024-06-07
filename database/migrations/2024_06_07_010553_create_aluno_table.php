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
        Schema::create('tblAluno', function (Blueprint $table) {
            $table->id('idAluno');
            $table->string('nomeAluno');
            $table->string('emailAluno')->unique();
            $table->string('telefoneAluno');
            $table->timestamp('dataCadAluno')->useCurrent();
            $table->boolean('statusAluno')->default(true);
            $table->string('fotoAluno')->nullable();
            $table->unsignedBigInteger('idCurso');
            $table->timestamps();

            // Se houver uma relação com a tabela de cursos
            $table->foreign('idCurso')->references('idCurso')->on('tblCurso')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblAluno');
    }
};
