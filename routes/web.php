<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoresController;

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/', function () {
    // يجب التأكد من مسار الملف هنا
    // إذا كان index داخل مجلد main
    return view('frontend.main.index'); 
});




Route::resource('stor',StoresController::class);



Auth::routes();

Route::get('/home/stor', [App\Http\Controllers\HomeController::class, 'storess'])->name('frontend.main.layout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/contr', [App\Http\Controllers\HomeController::class, 'contr'])->name('contr.index');


