<?php

namespace App\Http\Controllers;

use App\Jogo;
use Illuminate\Http\Request;


class JogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogos = Jogo::with('concurso','jogotipo')->get();
        //dd($jogos);
        return view('jogos.index', ['jogos' => $jogos ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function show(Jogo $jogo)
    {
        return Jogo::find($jogo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Jogo $jogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jogo $jogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jogo $jogo)
    {
        //
    }
}
