<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentOfcommentController;
use App\Http\Controllers\PastaController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/index', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('profile.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Posts CRUD
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

//Pastas CRUD

Route::get('/pastas', [PastaController::class, 'index'])->name('pastas.index');

Route::get('/pastas/create', [PastaController::class, 'create'])->name('pastas.create');
Route::post('/pastas', [PastaController::class, 'store'])->name('pastas.store');
Route::get('/pastas/{id}/edit', [PastaController::class, 'edit'])->name('pastas.edit');
Route::put('/pastas/{id}', [PastaController::class, 'update'])->name('pastas.update');
Route::delete('/pasta/{id}', [PastaController::class, 'destroy'])->name('pastas.destroy');


//Comentário CRUD

Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

//Comentário do comentário CRUD

Route::get('/commentsOfcomments', [CommentOfcommentController::class, 'index'])->name('commentsOfcomments.index');

Route::get('/commentsOfcomments/create', [CommentOfcommentController::class, 'create'])->name('commentsOfcomments.create');
Route::post('/commentsOfcomments', [CommentOfcommentController::class, 'store'])->name('commentsOfcomments.store');
Route::get('/commentsOfcomments/{id}/edit', [CommentOfcommentController::class, 'edit'])->name('commentsOfcomments.edit');
Route::put('/commentsOfcomments/{id}', [CommentOfcommentController::class, 'update'])->name('commentsOfcomments.update');
Route::delete('/commentsOfcomments/{id}', [CommentOfcommentController::class, 'destroy'])->name('commentsOfcomments.destroy');

//Chat CRUD

Route::get('/chats', [ChatController::class, 'index'])->name('chats.index');

Route::get('/chats/create', [ChatController::class, 'create'])->name('chats.create');
Route::post('/chats', [ChatController::class, 'store'])->name('chats.store');
Route::get('/chats/{id}/edit', [ChatController::class, 'edit'])->name('chats.edit');
Route::put('/chats/{id}', [ChatController::class, 'update'])->name('chats.update');
Route::delete('/chats/{id}', [ChatController::class, 'destroy'])->name('chats.destroy');
