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
        Schema::create('tblMatricula', function (Blueprint $table) {
            $table->id('idMatricula'); // Cria um campo 'idMatricula' como chave primária auto-incremental
            $table->date('dataInicioMatricula'); // Cria um campo de data para 'dataInicioMatricula'
            $table->date('dataFimMatricula'); // Cria um campo de data para 'dataFimMatricula'
            $table->string('statusMatricula'); // Cria um campo de string para 'statusMatricula'
            $table->unsignedBigInteger('idCursos'); // Cria um campo unsignedBigInteger para 'idCursos'
            $table->unsignedBigInteger('idAluno'); // Cria um campo unsignedBigInteger para 'idAluno'
            $table->timestamps(); // Cria os campos 'created_at' e 'updated_at'

            // Opcional: Definir chaves estrangeiras
            $table->foreign('idCursos')->references('id')->on('tblCursos')->onDelete('cascade');
            $table->foreign('idAluno')->references('id')->on('tblAlunos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblMatricula');
    }
};
