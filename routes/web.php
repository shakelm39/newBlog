<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// --------------------------------Frontend Controller ----------------------------------------------------//

    Route::get('/',[FrontendController::class, 'index' ])->name('frontend.index');
    Route::get('/allpost/{id}',[FrontendController::class, 'show' ])->name('allPost.show');
    Route::get('/singlepost/{id}',[FrontendController::class, 'singlePost' ])->name('single.post');

// --------------------------------Backend Controller ----------------------------------------------------//
Route::get('/dashboard', function () {
    return view('backend.layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// --------------------------------Category Controller ----------------------------------------------------//

 Route::group(['prefix'=>'category'], function(){
    Route::get('/viewCategory',     [CategoryController::class,'index'])->name('category.view');
    Route::get('/addCategory',      [CategoryController::class,'create'])->name('category.create');
    Route::post('/store',           [CategoryController::class,'store'])->name('category.store');
    Route::get('/edit/{id}',        [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update/{id}',     [CategoryController::class,'update'])->name('category.update');
    Route::get('/delete/{id}',      [CategoryController::class,'destroy'])->name('category.destroy');
 });

 // --------------------------------Post Controller ----------------------------------------------------//
 Route::group(['prefix'=>'post'], function(){
    Route::get('/viewPost',         [PostController::class,'index'])->name('post.view');
    Route::get('/addPost',          [PostController::class,'create'])->name('post.create');
    Route::post('/store',           [PostController::class,'store'])->name('post.store');
    Route::get('/edit/{id}',        [PostController::class,'edit'])->name('post.edit');
    Route::post('/update/{id}',     [PostController::class,'update'])->name('post.update');
    Route::get('/delete/{id}',      [PostController::class,'destroy'])->name('post.destroy');
 });

