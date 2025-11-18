<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('resources/views/authentication/bl');
});
Route::get('/admin/login', function () {
    return view('authentication.login');
});
