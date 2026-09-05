<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Home';
});


/*
Route::get('/nosotros/', function ($id) {
    return 'Nosotros';
});

Route::get('/contacto', function () {
    return 'Contacto';
});
*/

Route::prefix('/company')->group(function () {

    Route::get('/nosotros/', function () {
        return 'Nosotros';
    });
        
    Route::get('/contacto', function () {
        return 'Contacto';s
    });

});
