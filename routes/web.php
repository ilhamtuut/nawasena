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

Route::get('/', function () {
    return view('pages.frontend.index');
});
Route::get('/contact-us', function () {
    return view('pages.frontend.contactus');
});

Route::get('/news', [App\Http\Controllers\BlogController::class, 'news'])->name('news');
Route::get('/news/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('show');
Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send')->middleware('xss');

// Auth::routes();
Auth::routes(['register' => false]);
Route::group(['middleware' => ['auth','xss']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'blogs', 'as' => 'blogs.'], function() {
        Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\BlogController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('destroy');

        Route::get('/category', [App\Http\Controllers\BlogController::class, 'category'])->name('category');
        Route::post('/category/create', [App\Http\Controllers\BlogController::class, 'category_store'])->name('category.create');
        Route::post('/category/update/{id}', [App\Http\Controllers\BlogController::class, 'category_update'])->name('category.update');
        Route::get('/category/delete/{id}', [App\Http\Controllers\BlogController::class, 'category_delete'])->name('category.delete');
    });
    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function() {
        Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name('index');
    });
});
