<?php

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/history', [App\Http\Controllers\IndexController::class, 'history'])->name('history');
Route::get('/calendar', [App\Http\Controllers\IndexController::class, 'calendar'])->name('calendar');

Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts.index');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');