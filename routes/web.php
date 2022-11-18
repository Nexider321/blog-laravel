<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::resource('home/', HomeController::class);


Route::get('/link', function () {
    Artisan::call('storage:link');
});

Route::get('/', [HomeController::class, 'show']);

Route::get('/category/{slug}', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');

Route::get('/tag/{slug}', [\App\Http\Controllers\TagController::class, 'index'])->name('tag.index');

Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/search', [PostController::class, 'search']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
