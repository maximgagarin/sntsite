<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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


Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/works', function () {
    return view('works');
})->name('works');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');


Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/post/add', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
