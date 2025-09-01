<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::prefix('usuarios')->group(function () {
    Route::get('/', fn () => "Bienvenido al módulo de Usuarios");
    Route::get('/lista', fn () => "Listado de Usuarios");
});

Route::prefix('cursos')->group(function () {
    Route::get('/', fn () => "Bienvenido al módulo de Cursos");
    Route::get('/lista', fn () => "Listado de Cursos");
});
