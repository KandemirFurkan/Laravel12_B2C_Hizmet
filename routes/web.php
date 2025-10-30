<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('anasayfa');
Route::get('/hizmetler', [PageController::class, 'hizmetler'])->name('hizmetler');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/kurumsal_kayit', [PageController::class, 'kurumsal_reg'])->name('kurumsal_reg');
Route::get('/bireysel_kayit', [PageController::class, 'bireysel_reg'])->name('bireysel_reg');
