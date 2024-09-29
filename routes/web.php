<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/acceuil', function () {
    return view('acceuil');
});
Route::get('/layourts', function(){
    return view('layourts.header');
});
Route::get('/question', [QuestionController::class,'liste_question'])->name('question');
    
