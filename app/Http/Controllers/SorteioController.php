<?php

namespace App\Http\Controllers;

use App\Sorteio;
use Illuminate\Http\Request;

class SorteioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sorteios = Sorteio::with('concurso')->get();
        //dd($sorteios);
        return view('sorteios.index', ['sorteios' => $sorteios ]);
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
     * @param  \App\Sorteio  $sorteio
     * @return \Illuminate\Http\Response
     */
    public function show(Sorteio $sorteio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sorteio  $sorteio
     * @return \Illuminate\Http\Response
     */
    public function edit(Sorteio $sorteio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sorteio  $sorteio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sorteio $sorteio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sorteio  $sorteio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sorteio $sorteio)
    {
        //
    }
}
