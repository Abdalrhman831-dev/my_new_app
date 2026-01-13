<?php

use Illuminate\Support\Facades\Route;


Route::apiResource('posts',\App\Http\Controllers\Api\PostController::class);
Route::get('/hello/{msg}',function($msg) {
    return response()->json([
        'massage'=>$msg
        ]);
});