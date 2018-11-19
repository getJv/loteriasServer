<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JogoDetalhe extends Model
{
    public function jogo(){

        return $this->belongsTo('App\Jogo');

    }
}
