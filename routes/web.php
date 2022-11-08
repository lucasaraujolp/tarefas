<?php

use Illuminate\Support\Facades\Route;
use App\Tarefas;

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



Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        $tarefas = Tarefas::get();

        return view('home', ["tarefas" => $tarefas]);
    });
    
    Auth::routes();
    
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/cadastrar', 'CrudController@index')->name('cadastrar');
Route::post('/crud/add', 'CrudController@add');
Route::get('{id}/editar', 'CrudController@editar');
Route::post('/crud/update/{id}', 'CrudController@update');
Route::delete('/crud/delete/{id}', 'CrudController@delete');
