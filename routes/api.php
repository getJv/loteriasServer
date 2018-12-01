<?php

use Illuminate\Http\Request;
use App\Jogo;
use App\Http\Resources\Jogo as JogoResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('cors:api')->get('/jogos', function (Request $request) {

    $jogos = Jogo::with(
                  'concurso:id,ano',
                  'jogotipo:id,nome,logo_cor',
                  'jogodetalhes:jogo_id,dezenas')
                //->select('id','concurso_id','jogo_tipo_id')
                ->get(); 
    
    $resource = new JogoResource($jogos);
    
    return $resource->toJson();
    
});

Route::middleware('cors:api')->get('/jogos/{jogo}', function (Request $request,$jogo) {

    $data = Jogo::with(
        'concurso:id,ano',
        'jogotipo:id,nome,logo_cor',
        'jogodetalhes:jogo_id,dezenas')
      ->select('id','concurso_id','jogo_tipo_id')
      ->where('id',$jogo)
      ->get();
    
    $resource = new JogoResource($data);
    
    return $resource->toJson();
    
});

Route::middleware('cors:api')->get('/megasenas/{concurso}', function (Request $request,$concurso) {

    $data = DB::table('mega_senas')
                ->select(   
                    'concurso',
                    'data_sorteio',
                    '1_dezena',
                    '2_dezena',
                    '3_dezena',
                    '4_dezena',
                    '5_dezena',
                    '6_dezena'
                        )
                ->where('concurso',$concurso)
                ->get();

    $resource = new JogoResource($data);
    
    return $resource->toJson();
    
});

Route::middleware('cors:api')->get('/megasenas', function (Request $request) {

    $data = DB::table('mega_senas')->get();

    $resource = new JogoResource($data);
    
    return $resource->toJson();
    
});
