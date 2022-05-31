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
    return view('home');
});

//Index
Route::get( '/despesa', [ \App\Http\Controllers\DespesaController::class, 'index' ] );

//Show
Route::get( '/despesa/{Despesa}', [\App\Http\Controllers\DespesaController::class, 'show'] );

//Create
Route::get( '/despesa/create/post', [\App\Http\Controllers\DespesaController::class, 'create'] );
Route::post( '/despesa/create/post', [\App\Http\Controllers\DespesaController::class, 'store'] );

//Edit
Route::get( '/despesa/{Despesa}/edit', [\App\Http\Controllers\DespesaController::class, 'edit'] );
Route::put( '/despesa/{Despesa}/edit', [\App\Http\Controllers\DespesaController::class, 'update'] );

//Delete
Route::delete( '/despesa/{Despesa}', [\App\Http\Controllers\DespesaController::class, 'destroy'] );
