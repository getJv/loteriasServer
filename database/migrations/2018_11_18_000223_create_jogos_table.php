<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jogo_tipo_id')->unsigned();
            $table->integer('concurso')->unsigned();
            $table->integer('jogador_id')->unsigned();
            $table->char('jogo_vercedor',1);
            $table->timestamps();

            $table->foreign('concurso')->references('concurso')->on('concursos')->onDelete('cascade');
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
        Schema::dropIfExists('jogos');
    }
}
