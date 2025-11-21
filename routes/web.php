<?php

use Illuminate\Support\Facades\Route;

return view('home');
    #return view('resources/views/authentication/bl');
#});
#Route::get('/admin/login', function () {
  #  return view('authentication.login');
#});


route::get('register',[AuthController::class,'showRegister'])->name('register.form');
route::post('register',[AuthController::class,'register'])->name("register");


route::get('login',[AuthController::class,'showLogin'])->name('Login.form');
route::get('login',[AuthController::class,'login'])->name('Login.form');

Route::get('dashboard',function(){
  return view('dashboard');
})->middleware('auth')->name('dashboard');