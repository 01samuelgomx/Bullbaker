

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
        Schema::create('tblAdministrador', function (Blueprint $table) {
            $table->id('idAdmin'); // ID auto-incrementável
            $table->string('nomeAdmin');
            $table->string('emailAdmin')->unique(); // Email único
            $table->string('telefoneAdmin');
            $table->timestamp('dataCadAdmin')->useCurrent(); // Data de cadastro com valor padrão como timestamp atual
            $table->boolean('statusAdmin')->default(true); // Status com valor padrão verdadeiro
            $table->string('fotoAdmin')->nullable(); // Campo foto, pode ser nulo
            $table->enum('tipoAdministrador', ['super', 'normal']); // Campo tipo com valores específicos
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










