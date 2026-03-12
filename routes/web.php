<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [MainController::class, 'dashboardAdmin'])->name('dashboard.admin');
});


Route::prefix('guru')->group(function () {
    Route::get('/kelola-tugas', [GuruController::class, 'kelolaTugasGuru'])->name('guru.kelola-tugas');
    Route::get('/detail-tugas', [GuruController::class, 'detailTugasGuru'])->name('guru.detail-tugas');
    Route::get('/create-tugas', [GuruController::class, 'createTugasGuru'])->name('guru.create-tugas');
    Route::get('/add-tugas', [GuruController::class, 'addTugasGuru'])->name('guru.add-tugas');
});
