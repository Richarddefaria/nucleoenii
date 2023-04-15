<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/proyectos', function () {
    return view('proyectos');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/iniciodesesion', function () {
    return view('iniciodesesion');
});
Route::get('/registrarse', function () {
    return view('registrarse');
});
