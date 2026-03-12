<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [MainController::class, 'dashboardAdmin'])->name('dashboard.admin');
});
