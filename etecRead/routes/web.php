<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acessar-conta', function () {
    return view('login-page');
});
Route::get('/portal-estudante', function () {
    return view('portal-student');
});
