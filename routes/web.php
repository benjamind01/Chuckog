<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\newArticleController;

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

Route::get('/', [PostController::class, 'index'])->name('home.index');

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('newArticle', [newArticleController::class, 'index'])->middleware(['auth'])->name('newArticle.index');
Route::post('newArticle', [newArticleController::class, 'store'])->middleware(['auth'])->name('newArticle.store');

require __DIR__.'/auth.php';
