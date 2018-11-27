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
    $jogos = Jogo::with('concurso','jogotipo:id,nome','jogodetalhes')->get();
    $resource = new JogoResource($jogos);
    //dd($resource->toJson());
    return $resource->toJson();
});
