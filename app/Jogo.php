<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    public function concurso(){

        return $this->belongsTo('App\Concurso');

    }

    public function jogoTipo(){

        return $this->belongsTo('App\JogoTipo');

    }

    public function jogoDetalhes(){

        return $this->hasOne('App\JogoDetalhe');

    }

}
