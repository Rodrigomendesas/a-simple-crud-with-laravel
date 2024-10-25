<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/read', [PostController::class, 'read']);
Route::get('posts/read-all', [PostController::class, 'readall']);
Route::get('posts/update', [PostController::class, 'update']);
Route::get('posts/delete', [PostController::class, 'delete']);
