<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\postController;

Route::get('/', [Home::class, 'index']);
Route::get('posts', [postController::class, 'index']);

Route::get('posts/create',[postController::class, 'create']);


Route::get('posts/{post}', [postController::class, 'show']);



// Route::get('posts/{post}/{category}', function ($post, $category) {
//     return 'post ' . $post . ' category ' . $category;
// });
