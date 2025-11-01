<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('anasayfa');
Route::get('/hizmetler', [PageController::class, 'hizmetler'])->name('hizmetler');
Route::get('/hizmetler/{slug}', [PageController::class, 'hizmetler_detay'])->name('hizmetler_detay');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blog_detay'])->name('blog_detay');
Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/kurumsal_kayit', [PageController::class, 'kurumsal_reg'])->name('kurumsal_reg');
Route::get('/bireysel_kayit', [PageController::class, 'bireysel_reg'])->name('bireysel_reg');
Route::get('/api/hizmet-ara', [PageController::class, 'hizmet_ara'])->name('hizmet_ara');
Route::post('/iletisim-gonder', [PageController::class, 'iletisim_gonder'])->name('iletisim_gonder');
Route::post('/bireysel_kayit', [PageController::class, 'bireysel_kayit'])->name('bireysel_kayit');
Route::post('/kurumsal_kayit', [PageController::class, 'kurumsal_kayit'])->name('kurumsal_kayit');
Route::get('/hesabim', [PageController::class, 'hesabim'])->name('hesabim');
Route::get('/tekliflerim', [PageController::class, 'tekliflerim'])->name('tekliflerim');
Route::get('/tekliflerim/{id}', [PageController::class, 'tekliflerim_detay'])->name('tekliflerim_detay  ');
Route::get('/firmam', [PageController::class, 'firmam'])->name('firmam');
Route::get('/talepler', [PageController::class, 'talepler'])->name('talepler');
Route::get('/talepler/{id}', [PageController::class, 'talep_detay'])->name('talep_detay');
 