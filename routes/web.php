<?php

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
    return view('welcome');
});



Route::get('/cadastro', 'App\Http\Controllers\CadastroController@cadastroForm')->name ('cadastroForm');
Route::get('/menu', 'App\Http\Controllers\CadastroController@menuForm')->name ('menuForm');
Route::get('/lista', 'App\Http\Controllers\CadastroController@listaForm')->name ('listaForm');
Route::get('/usuarioCadastrado', 'App\Http\Controllers\CadastroController@cadastradoForm')->name ('usuarioCadastradoForm');
Route::get('/editar/{id}', 'App\Http\Controllers\CadastroController@editarUsuario')->name ('editarUsuario');

Route::post('/editar/{id}', 'App\Http\Controllers\CadastroController@editarUsuario')->name ('editar_Usuario');
Route::post('/cadastrar-usuario','App\Http\Controllers\CadastroController@cadastroForm')->name ('cadastroCompleto');
Route::post('/visualizar-lista','App\Http\Controllers\CadastroController@listaForm')->name ('listaFormulario');
Route::post('/usuario-cadastrado','App\Http\Controllers\CadastroController@cadastradoForm')->name ('cadastradoForm');
Route::post('/deletar/{id}', 'App\Http\Controllers\CadastroController@deletarUsuario')->name ('deletar_Usuario');

Route::post('/salvar_edicao', 'App\Http\Controllers\CadastroController@salvarEdicao')->name ('salvarEdicao');

Route::get('/cadastroEndereco', 'App\Http\Controllers\CadastroController@cadastroEnd')->name ('cadastro_Endereco');
Route::post('/cadastro-Endereco', 'App\Http\Controllers\CadastroController@cadastroEnd')->name ('cadastroEndereco');