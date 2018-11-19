<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sorteio extends Model
{
    public function concurso(){

        return $this->belongsTo('App\Concurso');

    }
}
