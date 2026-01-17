<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoresController;




Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/abut', function () {
    return view('frontend.abut');
});




Route::get('/off', function () {
    return view('frontend.Offerspage');
});


// Route::get('/', [StoresController::class, 'index']);


// هذا السطر سينشئ تلقائياً مسارات باسم stor.index, stor.store, stor.create إلخ
Route::resource('stor', StoresController::class);

// ثم أضف مسارات الأقسام التي طلبتها سابقاً
Route::get('/electronics', [StoresController::class, 'showElectronics'])->name('electronics.show');
Route::get('/beauty', [StoresController::class, 'showBeauty'])->name('beauty.show');
Route::get('/magic', [StoresController::class, 'magic'])->name('magic.show');






Auth::routes();

Route::get('/home/stor', [App\Http\Controllers\HomeController::class, 'storess'])->name('frontend.main.layout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/contr', [App\Http\Controllers\HomeController::class, 'contr'])->name('contr.index');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'contr'])->name('auth.register');



