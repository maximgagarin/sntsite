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

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/meeting', function () {
    return view('meeting');
})->name('meeting');



Route::get('/works', function () {
    return view('works');
})->name('works');

Route::get('/document', function () {
    return view('document');
})->name('document');

Route::get('/bus', function () {
    return view('bus');
})->name('bus');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/water', function () {
    return view('water');
})->name('water');

Route::get('/bank-details', function () {
    return view('bank-details');
})->name('bank-details');

//Route::get('/admin-news', function () {
//    return view('admin/news');
//})->name('admin-news');





Route::middleware(['admin'])->group(function () {
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});


//Route::get('/admin2', [App\Http\Controllers\HomeController::class, 'index'])->name('main');


Route::get('/admin3', [App\Http\Controllers\HomeController::class, 'index'])->name('registr');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');



Auth::routes();

//Route::get('/homeadmin', [App\Http\Controllers\AdminController::class, 'index'])->name('homeadmin');

Route::get('/post/add', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::delete('/post/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');

Route::post('upload', [App\Http\Controllers\AdminController::class, 'upload'])->name('upload');



