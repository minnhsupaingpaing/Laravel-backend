<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return redirect()->route('admin.index');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{admin}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

// Client Routes
Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/', [ClientController::class, 'store'])->name('client.store');
    Route::get('/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/{client}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
});
