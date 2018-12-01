<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMegaSenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mega_senas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->integer('jogo_tipo_id')->unsigned();
            $table->integer('concurso')->unique();
            $table->date('data_sorteio');
            $table->integer('1_dezena');
            $table->integer('2_dezena');
            $table->integer('3_dezena');
            $table->integer('4_dezena');
            $table->integer('5_dezena');
            $table->integer('6_dezena');
            $table->double('arrecadacao_total');
            $table->integer('ganhadores_sena');
            $table->string('cidade');
            $table->string('uf');
            $table->double('rateio_sena');
            $table->integer('ganhadores_quina');
            $table->double('rateio_quina');
            $table->integer('ganhadores_quadra');
            $table->double('rateio_quadra');
            $table->string('acumulado');
            $table->double('valor_acumulado');
            $table->double('estimativa_prêmio');
            $table->double('acumulado_mega_da_virada');
            $table->foreign('jogo_tipo_id')->references('id')->on('jogo_tipos')->onDelete('cascade');
        });

        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mega_senas');
    }
}
