<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{

    public $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
        
    ];

    
    public function jogoTipo(){

        return $this->belongsTo('App\JogoTipo');

    }

    public function jogoDetalhes(){

        return $this->hasOne('App\JogoDetalhe');

    }

}
