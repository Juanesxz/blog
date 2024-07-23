<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\postController;
use App\Models\Data;
use App\Models\Post;

Route::get("/", [Home::class, "index"]);

Route::Resource("posts", postController::class);

// Route::get('posts/{post}/{category}', function ($post, $category) {
//     return 'post ' . $post . ' category ' . $category;
// });
