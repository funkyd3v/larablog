<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/blog', [PostsController::class, 'index'])->name('blog');
Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [PostsController::class, 'store'])->name('blog.store');
Route::get('/blog/{slug}', [PostsController::class, 'show']);
Route::get('/blog/{slug}/edit', [PostsController::class, 'edit']);
Route::put('/blog/{slug}/update', [PostsController::class, 'update']);
Route::delete('/blog/{slug}/delete', [PostsController::class, 'destroy']);
