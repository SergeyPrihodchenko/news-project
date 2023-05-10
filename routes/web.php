<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [NewsController::class, 'index'])->name('main');
Route::get('/show/{news}', [NewsController::class, 'show'])->name('showNews');


Route::prefix('admin')->group(function () {
    Route::get('/create', [AdminNewsController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminNewsController::class, 'store'])->name('admin.store');
    Route::get('/{news}/edit', [AdminNewsController::class, 'edit'])->name('admin.edit');
    Route::put('/update/{news}', [AdminNewsController::class, 'update'])->name('admin.update');
    Route::delete('/delete{news}', [AdminNewsController::class, 'destroy'])->name('admin.delete');

    Route::get('/index', [CategoryController::class, 'index'])->name('admin.index');
    Route::get('/category/news/{news}', [CategoryController::class, 'show'])->name('admin.category.news');
    Route::get('/category/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::get('/category/delete', [CategoryController::class, 'destroy'])->name('admin.category.delete');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
