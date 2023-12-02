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

Route::get('/', 'App\Http\Controllers\WebsiteController@home');
Route::get('/turmas', 'App\Http\Controllers\WebsiteController@turmas');
Route::get('/atividades', 'App\Http\Controllers\WebsiteController@atividades');
Route::get('/login', 'App\Http\Controllers\WebsiteController@login');
Route::get('/cadastro', 'App\Http\Controllers\WebsiteController@cadastro');
Route::get('/visualizar/{id}','App\Http\Controllers\WebsiteController@visualizar');




Route::post('/logar', 'App\Http\Controllers\WebsiteController@logar');
Route::get('/deslogar', 'App\Http\Controllers\WebsiteController@deslogar');

Route::prefix('/cadastrar')->group(function () {
    Route::post('/turma','App\Http\Controllers\WebsiteController@cadastrarTurma');
    Route::post('/professor','App\Http\Controllers\WebsiteController@cadastrarProfessor');
    Route::post('/atividade','App\Http\Controllers\WebsiteController@cadastrarAtividade');
   

});

Route::prefix('/excluir')->group(function () {
    Route::get('/turma/{id}','App\Http\Controllers\WebsiteController@excluirTurma');
    Route::get('/professor/{id}','App\Http\Controllers\WebsiteController@excluirProfessor');
    Route::get('/atividade/{id}','App\Http\Controllers\WebsiteController@excluirAtividade');
   

});
