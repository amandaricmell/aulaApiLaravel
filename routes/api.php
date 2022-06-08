<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/**
 * PESSOAS
 */
Route::get('pessoas', 'App\http\Controllers\ApiController@getPessoas');
Route::get('pessoa/{$id}', 'App\http\Controllers\ApiController@getPessoa');
Route::post('pessoa', 'App\http\Controllers\ApiController@createPessoa');
Route::put('pessoa/{$id}', 'App\http\Controllers\ApiController@updatePessoa');
Route::delete('pessoa/{$id}', 'App\http\Controllers\ApiController@deletePessoa');

/**
 * DISCIPLINAS
 */
Route::get('disciplinas', 'App\http\Controllers\ApiController@getDisciplinas');
Route::get('disciplina/{$id}', 'App\http\Controllers\ApiController@getDisciplina');
Route::post('disciplina', 'App\http\Controllers\ApiController@createDisciplina');
Route::put('disciplina/{$id}', 'App\http\Controllers\ApiController@updateDisciplina');
Route::delete('disciplina/{$id}', 'App\http\Controllers\ApiController@deleteDisciplina');