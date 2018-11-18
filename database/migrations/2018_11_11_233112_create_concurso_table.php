<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concursos', function (Blueprint $table) {
            //$table->engine = 'MyISAM';
            $table->integer('concurso')->unsigned();
            $table->integer('ano')->unsigned();
            $table->timestamps();
            $table->primary(['concurso', 'ano']);
            
       });
        //DB::statement('ALTER TABLE concurso MODIFY id INTEGER NOT NULL AUTO_INCREMENT');

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concursos');
        
    }
}
