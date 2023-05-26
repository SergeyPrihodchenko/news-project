<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\UsersController as AdminUsersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExportController;
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
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/show/{news}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/export', [ExportController::class, 'createJSON'])->name('exportJSON');


Route::prefix('admin')
->middleware('auth')
->group(function () {
    Route::get('/create', [AdminNewsController::class, 'create'])->name('admin.create');
    Route::get('/{news}/edit', [AdminNewsController::class, 'edit'])->name('admin.edit');
    Route::get('/index', [AdminCategoryController::class, 'index'])->name('admin.index');
    Route::get('/category/news/{news}', [AdminCategoryController::class, 'show'])->name('admin.category.news');

Route::middleware('checkIsAdmin')
->group(function () {
    Route::get('/users', [AdminUsersController::class, 'index'])->name('admin.users');
    Route::get('/users/edit/{user}', [AdminUsersController::class, 'show'])->name('admin.users.edit');
    Route::delete('/users/delete/{user}', [AdminUsersController::class, 'destroy'])->name('admin.users.delete');

    Route::post('/store', [AdminNewsController::class, 'store'])->name('admin.store');
    Route::put('/update/{news}', [AdminNewsController::class, 'update'])->name('admin.update');
    Route::delete('/delete{news}', [AdminNewsController::class, 'destroy'])->name('admin.delete');

    
    Route::get('/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [AdminCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/edit/{category}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/update/{category}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/category/delete/{category}', [AdminCategoryController::class, 'destroy'])->name('admin.category.delete');
});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');