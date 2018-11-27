<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JogoDetalhe extends Model
{

    //coloca o json pra ficar interavel.
    public $casts = ['dezenas' => 'json'];

    public function jogo(){

        return $this->belongsTo('App\Jogo');

    }
}
