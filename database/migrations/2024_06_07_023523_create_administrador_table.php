

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * @return void
     */

     public function up()
     {
         Schema::create('tblAdministrador', function (Blueprint $table) {
             $table->id('idAdmin'); // ID auto-incrementável
             $table->string('nomeAdmin');
             $table->string('emailAdmin')->unique(); // Email único
             $table->string('telefoneAdmin');
             $table->timestamp('dataCadAdmin')->useCurrent(); // Data de cadastro com valor padrão como timestamp atual
             $table->text('descricaoAdmin')->nullable(); // Cria um campo TEXT para a descrição da aula, podendo ser nulo
             $table->string('enderecoAdmin');
             $table->boolean('statusAdmin')->default(true); // Status com valor padrão verdadeiro
             $table->string('fotoAdmin')->nullable(); // Campo foto, pode ser nulo
             $table->enum('tipoAdministrador', ['Administrativo']); // Campo tipo com valores específicos
             // Novos campos
             $table->date('dataNascimentoAdmin'); // Data de nascimento
             $table->string('estadoCivilAdmin'); // Estado civil do administrador
             $table->string('cidadeAdmin'); // Cidade de residência
             $table->string('estadoAdmin'); // Estado de residência
             $table->timestamps(); // Adiciona os campos created_at e updated_at
     
         });
     }
     

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblAdministrador');
    }
};










