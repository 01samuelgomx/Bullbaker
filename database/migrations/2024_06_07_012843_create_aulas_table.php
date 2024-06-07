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
        Schema::create('tblAulas', function (Blueprint $table) {
            $table->id('idAula'); // Cria um campo BIGINT com auto-incremento e chave primária
            $table->unsignedBigInteger('idCursos'); // Cria um campo BIGINT para relacionar com a tabela Cursos
            $table->string('nomeAula', 255); // Cria um campo VARCHAR para o nome da aula
            $table->text('descricaoAula')->nullable(); // Cria um campo TEXT para a descrição da aula, podendo ser nulo
            $table->integer('duracaoAula')->nullable(); // Cria um campo INTEGER para a duração da aula, podendo ser nulo
            $table->string('video_aulaAula', 255)->nullable(); // Cria um campo VARCHAR para o vídeo da aula, podendo ser nulo
            $table->timestamps(); // Cria os campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblAulas');
    }
};
