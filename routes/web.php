<?php

use Illuminate\Support\Facades\Route;

#return view('home');
    #return view('resources/views/authentication/bl');
#});
#Route::get('/admin/login', function () {
  #  return view('authentication.login');
#});
Route::get('/', function () {
   return view('authentication.login');
});
