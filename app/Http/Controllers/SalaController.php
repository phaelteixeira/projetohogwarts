<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::all();
        return view('listar_sala', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salas = Sala::all();
        return view('cadastro_sala', compact('salas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salas = new Sala;
        $salas->id = $request->input("id");
        $salas->nome = $request->input("nome");
        $salas -> save();
        return redirect()->route('salas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {
        return view('editar_sala', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala  $sala)
    {
        $sala->nome = $request->input("nome");
        $sala -> save();
        return redirect()->route('salas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala  $sala)
    {
        $sala -> delete();
        return redirect()->route('salas.index');
    }
}