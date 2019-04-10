<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('listar_funcionario', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::All();
        return view('cadastro_funcionario', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->input("nome");
        $funcionario->sexo = $request->input("sexo");
        $funcionario->endereco = $request->input("endereco");
        $funcionario->RUB = $request->input("RUB");
        $funcionario->departamento_id = $request->input("departamento_id");
        $path = $request->file("foto")->store('images', 'public');
        $funcionario->foto = $path;
        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionario  $Funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        $departamentos = Departamento::all();
        return view('editar_funcionario', compact(['departamentos', 'funcionario']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario  $funcionario)
    {
        $funcionario->nome = $request->input("nome");
        $funcionario->endereco = $request->input("endereco");
        $funcionario->departamento_id = $request->input("departamento_id");
        $path = $request->file("foto")->store('images', 'public');
        $funcionario->foto = $path;
        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario  $funcionario)
    {
        $funcionario -> delete();
        return redirect()->route('funcionarios.index');
    }
}