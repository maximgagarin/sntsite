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




Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/meeting', function () {
    return view('meeting');
})->name('meeting');



Route::get('/works', function () {
    return view('works');
})->name('works');



Route::get('/bus', [App\Http\Controllers\BusController::class, 'index'])->name('bus');

Route::get('/document', [App\Http\Controllers\DocsController::class, 'index'])->name('document');

Route::get('/water', [App\Http\Controllers\WaterController::class, 'index'])->name('water');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/bank-details', function () {
    return view('bank-details');
})->name('bank-details');

//Route::get('/admin-news', function () {
//    return view('admin/news');
//})->name('admin-news');





Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::post('/admin/bus/edit', [App\Http\Controllers\AdminController::class, 'editBus'])->name('edit.bus');
    Route::post('/admin/water/edit', [App\Http\Controllers\AdminController::class, 'editWater'])->name('edit.water');

    Route::get('/admin/docs', function () {
        return view('admin.docs');
    })->name('admin.docs');


    Route::get('/admin/bus', [App\Http\Controllers\AdminController::class, 'bus'])->name('admin.bus');
    Route::get('/admin/water', [App\Http\Controllers\AdminController::class, 'water'])->name('admin.water');


    Route::post('/post/add', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::delete('/post/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');

    Route::post('upload', [App\Http\Controllers\AdminController::class, 'upload'])->name('docs.upload');

});





Route::get('/admin3', [App\Http\Controllers\HomeController::class, 'index'])->name('registr');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');




Auth::routes([
    'confirm' => false,
    'forgot' => false,
    'login' => true,
    'register' =>true,
    'reset' => false,
]);

//Route::get('/homeadmin', [App\Http\Controllers\AdminController::class, 'index'])->name('homeadmin');





