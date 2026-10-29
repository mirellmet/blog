<?php
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/buttons', [PublicController::class, 'buttons'])->name('buttons');
Route::get('/user/{user}', [PublicController::class, 'user'])->name('user');
Route::get('/post/{post}', [PublicController::class, 'post'])->name('post');

Route::post('/comment/{post}', [CommentController::class, 'store'])
    ->middleware('auth')
    ->name('comment');

Route::resource('/admin/posts', PostController::class)->middleware('auth');
Route::resource('/admin/tags', TagController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';