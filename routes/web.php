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
Route::get( '/despesa/{despesa}', [\App\Http\Controllers\DespesaController::class, 'show'] );

//Create
Route::get( '/despesa/create/post', [\App\Http\Controllers\DespesaController::class, 'create'] );
Route::post( '/despesa/create/post', [\App\Http\Controllers\DespesaController::class, 'store'] );

//Edit
Route::get( '/despesa/{despesa}/edit', [\App\Http\Controllers\DespesaController::class, 'edit'] );
Route::put( '/despesa/{despesa}/edit', [\App\Http\Controllers\DespesaController::class, 'update'] );

//Delete
Route::delete( '/despesa/{despesa}', [\App\Http\Controllers\DespesaController::class, 'destroy'] );


//== Users ==
Route::group(['namespace'=>'App\Http\Controllers'],function(){

    Route::group( [ 'middleware' => ['guest'] ], function(){

        // Rotas para registar
        Route::get ('/register', 'RegisterController@show')     -> name('register.show');
        Route::post('/register', 'RegisterController@register') -> name('register.perform');

        // Rotas para login
        Route::get ('/login', 'LoginController@show')   -> name('login.show');
        Route::post('/login', 'LoginController@login')  -> name('login.perform');


    });


    Route::group( [ 'middleware' => ['auth'] ], function() {

        // Rotas para logout
        Route::get('/logout', 'LogoutController@logout') -> name('logout.perform');

        Route::group(['prefix'=>'users'], function(){
            Route::get('/','UsersController@index')                     ->name('users.index');
            Route::get('/create','UsersController@create')              ->name('users.create');
            Route::post('/create','UsersController@store')              ->name('users.store');
            Route::get('/{user}/show','UsersController@show')           ->name('users.show');
            Route::get('/{user}/edit','UsersController@edit')           ->name('users.edit');
            Route::patch('/{user}/update','UsersController@update')     ->name('users.update');
            Route::delete('/{user}/delete','UsersController@destroy')   ->name('users.destroy');
        });

    });

});
// == Fim Users ==
