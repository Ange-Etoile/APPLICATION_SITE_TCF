<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/acceuil', function () {
    return view('acceuil');
});
Route::get('/layourts', function(){
    return view('layourts.header');
});
Route::get('/question', function(){
    return view('question');
});
