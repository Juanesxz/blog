<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\postController;
use App\Models\Data;
use App\Models\Post;

// Route::get('/',  [Home::class]);
// Route::get('posts', [postController::class, 'index'])->name("posts.index");
// Route::get('posts/create', [postController::class, 'create'])->name("posts.create");
// Route::post('posts', [postController::class, 'store'])->name("posts.store");
// Route::get('posts/{post}', [postController::class, 'show'])->name("posts.show");
// Route::get('posts/{post}/edit', [postController::class, 'edit'])->name("posts.edit");
// Route::put('posts/{post}', [postController::class, 'update'])->name("posts.update");
// Route::delete('posts/{post}', [postController::class, 'destroy'])->name("posts.destroy");

Route::resource("posts", postController::class);

// Route::get('posts/{post}/{category}', function ($post, $category) {
//     return 'post ' . $post . ' category ' . $category;
// });

Route::get("prueba", function () {
    $post = Post::find(1);
    dd($post->is_active);
});



Route::get('data', function () {
    return  Data::get();
});
