<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    public function sorteio(){

        return $this->hasOne('App\Sorteio');

    } 
}
