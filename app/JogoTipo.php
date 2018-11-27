<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JogoTipo extends Model
{
    
    //coloca o json pra ficar interavel.
    public $casts = ['valores' => 'json'];
}
