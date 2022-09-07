<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;



Route::get('/home', function () {
    return view('welcome');
});






Route::middleware("auth")->group(function()
{
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/list', function () {
        return view('list');
    });
    Route::get('/profile', function () {
        return view('profile');
    });


});
Route::middleware("guest")->group(function()
{
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');


    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
});



Route::get('/{pathMatch}', function (){

    return view ('list');
})->where('pathMatch',".*");
