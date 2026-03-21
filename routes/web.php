<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/compras', function () {
    return view('compras');
});

Route::get('/perfil_admin',function(){
    return view('perfil_admin');

});
Route::get('/verproducto',function(){
    return view('verproducto');

});

Route::get('/iniciar',function(){

    return view('iniciar');
});

Route::get('/register',function(){

    return view('register');
});