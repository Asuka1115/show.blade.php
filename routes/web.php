<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/user/{user_id}', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

#TEST
Route::get('show/dave',[HomeController::class,'show'])->name('show');
