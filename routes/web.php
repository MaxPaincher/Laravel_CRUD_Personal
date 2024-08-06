<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('index.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.authenticate');
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('/home/create', [PostController::class, 'createPost'])->name('home.create');
Route::post('/home/create', [PostController::class, 'storePost'])->name('home.store');
Route::get('/home/show/{id?}', [PostController::class, 'showPost'])->name('home.show');
Route::get('/home/edit/{id}', [PostController::class, 'editPost'])->name('home.edit');
Route::put('/home/show/{id}', [PostController::class, 'updatePost'])->name('home.update');

