<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSorteioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('concurso')->unsigned();
           // $table->integer('ano')->unsigned();
            $table->json('dezenas');
            $table->string('local');
            $table->timestamp('dia'); 
            $table->foreign('concurso')->references('concurso')->on('concursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorteios');
    }
}
