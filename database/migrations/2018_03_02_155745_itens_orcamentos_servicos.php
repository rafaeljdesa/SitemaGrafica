<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItensOrcamentosServicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_orcamentos_servicos', function (Blueprint $table){
            $table->increments('id');
            $table->integer('orcamento_id')->unsigned();
            $table->foreign('orcamento_id')->references('id')->on('orcamentos');
            $table->integer('servico_id')->unsigned();
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->decimal('preco', 8, 3);
            $table->decimal('desconto', 8, 3);
            $table->integer('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_orcamentos_servicos');
    }
}
