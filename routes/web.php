<?php
use App\Http\Controllers\PostingController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
#return view('home');
    #return view('resources/views/authentication/bl');
#});
#Route::get('/admin/login', function () {
  #  return view('authentication.login');
#});

Route::get('/', function () {
    return view('home');
});

route::get('register',[AuthController::class,'showRegister'])->name('register.form');
route::post('register',[AuthController::class,'register'])->name("register");

route::get('login',[AuthController::class,'showLogin'])->name('login.form');
route::post('login',[AuthController::class,'login'])->name('login.form');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
// In web.php
Route::post('/login-submit', [AuthController::class, 'login'])->name('loginhome.form');

Route::get('/admin/login', function () {
    return view('authentication.AdminLogin'); 
})->name('admin.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [PostingController::class, 'index'])->name('dashboard');

    // Add this line:
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});




//newwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww

route ::get('/dashboard/create',[PostingController::class,'create'])->name('create.index');
route ::post('/dashboard',[PostingController::class,'store'])->name('create.store');