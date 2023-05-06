<?php

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


Route::prefix('admin')->group(function () {
    Route::get('/create', [AdminNewsController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminNewsController::class, 'store'])->name('admin.store');
    Route::get('/{news}/edit', [AdminNewsController::class, 'edit'])->name('admin.edit');
    Route::post('/update/{id}', [AdminNewsController::class, 'update'])->name('admin.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
