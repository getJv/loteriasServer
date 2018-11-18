<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogo_detalhes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jogo_id')->unsigned();
            $table->json('dezenas');
            $table->timestamps();

            $table->foreign('jogo_id')->references('id')->on('jogos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogo_detalhes');
    }
}
