<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::resource('/post',PostController::class)->parameters([
    'post' => 'id'
]);;
//Route::get('post/',[PostController::class, 'index'])->name('post.index');
//Route::get('post/create', [PostController::class, 'create'])->name('post.create');
//Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show');
//Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
//Route::post('post/', [PostController::class, 'store'])->name('post.store');
//Route::patch('post/show/{id}', [PostController::class, 'update'])->name('post.update');
//Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

Auth::routes();
