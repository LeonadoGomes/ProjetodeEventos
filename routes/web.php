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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); //mostra todos os registro
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); //criar o registro no banco
Route::get('/events/{id}', [EventController::class, 'show']); //mostra um dado especifico pegando pelo id
Route::post('/events', [EventController::class, 'store']); //enviar os dados para o banco
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth'); //lista os registro do banco
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth'); //Delete algum registro pelo id
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth'); //Edita algum registro pelo id
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth'); //Faz o update dos dados 
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth'); //Faz a juncao 
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth'); //Faz a remocao

Route::get('/contact', function () {
    return view('contact');
});
