<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sobre-nos', 'SobreController@sobre')->name('sobre.sobre');
Route::get('/fale-conosco', 'ContatoController@contato')->name('contato.contato');