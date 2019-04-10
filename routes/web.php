<?php

use App\Categoria;
use App\Produto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('tela_ini');
});

Route::get('/home',function(){
    return view('tela_ini');
});

Route::get('/cadastro/sala',function(){
    return view('cadastro_sala');
});

Route::get('/cadastro/departamento',function(){
    return view('cadastro_departamento');
});

Route::get('/listar/funcionario',function(){
    return view('listar_funcionario');
});

Route::get('/listar/sala',function(){
    return view('listar_sala');
});

Route::get('/listar/departamento',function(){
    return view('listar_departamento');
});


Route::resource('salas', 'SalaController');
Route::resource('departamentos', 'DepartamentoController');
Route::resource('funcionarios', 'FuncionarioController');
