<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/sign-up', [AuthController::class, 'showSignup'])->name('auth.showSignup');
Route::post('/sign-up', [AuthController::class, 'signup'])->name('auth.signup');

// Route::middleware('auth')->group(function () {
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.list');
Route::get('/posts/{slug}', [PostController::class, 'detail'])->name('post.detail');
Route::post('/insert', [PostController::class, 'insert'])->name('post.insert');
Route::post('/comment/insert', [CommentController::class, 'insertComment'])->name('comment.insert');
// });
