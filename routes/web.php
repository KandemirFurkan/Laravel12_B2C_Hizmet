<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('anasayfa');
Route::get('/hizmetler', [PageController::class, 'hizmetler'])->name('hizmetler');
Route::get('/hizmetler/{slug}', [PageController::class, 'hizmetler_detay'])->name('hizmetler_detay');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blog_detay'])->name('blog_detay');
Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'login_post'])->name('login.post');

Route::post('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/kurumsal_kayit', [PageController::class, 'kurumsal_reg'])->name('kurumsal_reg');
Route::post('/kurumsal_kayit', [PageController::class, 'kurumsal_kayit'])->name('kurumsal_kayit');
Route::get('/bireysel_kayit', [PageController::class, 'bireysel_reg'])->name('bireysel_reg');
Route::post('/bireysel_kayit', [PageController::class, 'bireysel_kayit'])->name('bireysel_kayit');
Route::get('/api/hizmet-ara', [PageController::class, 'hizmet_ara'])->name('hizmet_ara');
Route::post('/iletisim-gonder', [PageController::class, 'iletisim_gonder'])->name('iletisim_gonder');

Route::middleware('auth')->group(function () {
    Route::get('/tekliflerim', [PageController::class, 'tekliflerim'])->name('tekliflerim');
    Route::get('/tekliflerim/{id}', [PageController::class, 'teklif_detay'])->name('teklif_detay');
    Route::get('/talepler', [PageController::class, 'talepler'])->name('talepler');
    Route::get('/talepler/{id}', [PageController::class, 'talep_detay'])->name('talep_detay');
    Route::get('/firma_ayarlari', [PageController::class, 'firma_ayarlari'])->name('firma_ayarlari');
    Route::get('/hesap_ayarlari', [PageController::class, 'hesap_ayarlari'])->name('hesap_ayarlari');
    Route::post('/talep-gonder', [PageController::class, 'talep_gonder'])->name('talep_gonder');
    Route::post('/teklif-gonder', [PageController::class, 'teklif_gonder'])->name('teklif_gonder');
    Route::post('/teklif-onayla', [PageController::class, 'teklif_onayla'])->name('teklif_onayla');
    Route::post('/hesap-bilgi-guncelle', [PageController::class, 'hesap_bilgi_guncelle'])->name('hesap_bilgi_guncelle');
    Route::post('/firma-bilgi-guncelle', [PageController::class, 'firma_bilgi_guncelle'])->name('firma_bilgi_guncelle');
    Route::post('/sifre-guncelle', [PageController::class, 'sifre_guncelle'])->name('sifre_guncelle');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'login'])->name('login');
    Route::post('/login', [DashboardController::class, 'authenticate'])->name('authenticate');
    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/sliders', [DashboardController::class, 'sliders'])->name('sliders');
        Route::post('/sliders', [DashboardController::class, 'slider_store'])->name('sliders.store');
        Route::get('/slider_ekle', [DashboardController::class, 'slider_add'])->name('slider_add');
        Route::get('/sliders/edit/{id}', [DashboardController::class, 'slider_edit'])->name('slider_edit');
        Route::put('/sliders/{id}', [DashboardController::class, 'slider_update'])->name('sliders.update');
        Route::delete('/sliders/{id}', [DashboardController::class, 'slider_destroy'])->name('sliders.destroy');
        Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
        Route::get('/categories/create', [DashboardController::class, 'category_add'])->name('category_add');
        Route::post('/categories', [DashboardController::class, 'category_store'])->name('categories.store');
        Route::get('/categories/edit/{id}', [DashboardController::class, 'category_edit'])->name('category_edit');
        Route::put('/categories/{id}', [DashboardController::class, 'category_update'])->name('categories.update');
        Route::delete('/categories/{id}', [DashboardController::class, 'category_destroy'])->name('categories.destroy');
        Route::get('/blogs', [DashboardController::class, 'blogs'])->name('blogs');
        Route::get('/blogs/create', [DashboardController::class, 'blog_add'])->name('blog_add');
        Route::post('/blogs', [DashboardController::class, 'blog_store'])->name('blogs.store');
        Route::get('/blogs/edit/{id}', [DashboardController::class, 'blog_edit'])->name('blog_edit');
        Route::put('/blogs/{id}', [DashboardController::class, 'blog_update'])->name('blogs.update');
        Route::delete('/blogs/{id}', [DashboardController::class, 'blog_destroy'])->name('blogs.destroy');
        Route::get('/members', [DashboardController::class, 'members'])->name('members');
        Route::get('/corp_members', [DashboardController::class, 'corp_members'])->name('corp_members');
        Route::get('/requestforms', [DashboardController::class, 'requestforms'])->name('requestforms');
        Route::get('/general_set', [DashboardController::class, 'general_set'])->name('general_set');
    });
});
