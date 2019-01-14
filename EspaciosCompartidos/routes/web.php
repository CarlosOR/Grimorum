<?php

Route::get('/', 'LoginController@usuarioLoged');

Route::get('/buscar', function () {
    return view('yields.search');
});

Route::get('/sigin', function () {
    return view('yields.sigin', ['msError' => ""]);
});

Route::get('/login', function () {

    return view('yields.login', [
        'sigin' => false,
        'error' => false,
        'msError' => ""
    ]);
});

Route::post('/sigin', 'UsuarioController@Create');

Route::post('/iniciar', 'LoginController@Login');

Route::get('/logout', 'LoginController@LogOut');

Route::get('/publicar', function(){
    return view('yields.publicar');
});

Route::post('/publicar','EspacioController@Create');

Route::get('/iniciar', 'LoginController@usuarioLoged');
