<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
Route::get('/news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('/news/create', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');

//Route::get('about', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
