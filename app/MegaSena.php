<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MegaSena extends Model
{
    
    
    
    
    
    public function jogoTipo(){

        return $this->belongsTo('App\JogoTipo');


    }
}
