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
        Schema::create('tblProdutos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeProduto', 255);
            $table->string('descricaoProduto', 255);
            $table->string('ingredienteProduto', 255);
            $table->decimal('precoProduto', 8, 2);

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
        Schema::dropIfExists('produtos_controllers');
    }
};
