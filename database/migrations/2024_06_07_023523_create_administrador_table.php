

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
             $table->id('idAdmin'); 
             $table->string('nomeAdmin');
             $table->string('emailAdmin')->unique(); 
             $table->string('telefoneAdmin');
             $table->string('cidadeAdmin'); 
             $table->string('enderecoAdmin');
             $table->string('estadoAdmin'); 
             $table->text('descricaoAdmin')->nullable(); 
             $table->timestamp('dataCadAdmin')->useCurrent(); 
            //  -----------------------
            //  Campos de notificacao
            $table->string('tituloNotificacaoAdmin'); 
            $table->string('mensagemNotificacaoAdmin'); 
            //  -----------------------
             $table->enum('tipoAdministrador', ['Administrativo']); 
             $table->date('dataNascimentoAdmin'); 
             $table->string('estadoCivilAdmin'); 
             $table->string('fotoAdmin')->nullable(); 
             $table->boolean('statusAdmin')->default(true);
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
        Schema::dropIfExists('tblAdministrador');
    }
};










