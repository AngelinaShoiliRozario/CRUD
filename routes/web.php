<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'DatabaseController@register');
Route::post('/postregister', 'DatabaseController@saveregister_value');
Route::get('/datashow', 'DatabaseController@show_value');
Route::get('/delete/{id}', 'DatabaseController@delete');
Route::get('/edit/{id}', 'DatabaseController@edit');
Route::post('/edit_value/{id}', 'DatabaseController@edit_value');
