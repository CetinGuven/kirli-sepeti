<?php

use App\Http\Controllers\AdminAyarlarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HizmetlerController;
use App\Http\Controllers\HizmetUrunImage;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteAyarController;
use App\Http\Controllers\UrunlerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::prefix('admin')->middleware('role:admin')->group(function () {

    //Ajax İslemleri
Route::get('/etiket-getir',[HizmetlerController::class, 'etiketGetir'])->name('admin.etiketGetir');
Route::get('/get-ilceler/{il}',[HizmetlerController::class, 'getİlceler'])->name('admin.getİlceler');

Route::get('/uyeler',[AdminController::class, 'uyeShow'])->name('admin.uyeShow');
Route::post('/uyeler',[AdminController::class, 'uyeCreate'])->name('admin.uyeCreate');
Route::get('/uye-update/{id}',[AdminController::class, 'uyeUpdate'])->name('admin.uyeUpdate');
Route::post('/uye-update-post/{id}',[AdminController::class, 'uyeUpdatePost'])->name('admin.uyeUpdatePost');
Route::get('/uye-sil',[AdminController::class, 'uyeDestroy'])->name('admin.uyeDestroy');
Route::get('uye-ayrinti/{id}',[AdminController::class, 'uyeAyrinti'])->name('admin.uyeAyrinti');

Route::get('/bayiler',[AdminController::class, 'bayiShow'])->name('admin.bayiShow');
Route::post('/bayiler',[AdminController::class, 'bayiCreate'])->name('admin.bayiCreate');
Route::get('/bayiler/{id}',[AdminController::class, 'bayiUpdate'])->name('admin.bayiUpdate');
Route::post('/bayiler-post/{id}',[AdminController::class, 'bayiUpdatePost'])->name('admin.bayiUpdatePost');
Route::get('/bayiler-sil/{id}',[AdminController::class, 'bayiDestroy'])->name('admin.bayiDestroy');
Route::get('bayi-ayrinti/{id}',[AdminController::class, 'bayiAyrinti'])->name('admin.bayiAyrinti');

Route::get('/hizmet-kategori',[HizmetlerController::class, 'hizmetKategoriShow'])->name('admin.hizmetKategoriShow');
Route::post('/hizmet-kategori',[HizmetlerController::class, 'hizmetKategoriCreate'])->name('admin.hizmetKategoriCreate');
Route::get('/hizmet-kategori/{id}',[HizmetlerController::class, 'hizmetKategoriUpdate'])->name('admin.hizmetKategoriUpdate');
Route::post('/hizmet-kategori-post/{id}',[HizmetlerController::class, 'hizmetKategoriUpdatePost'])->name('admin.hizmetKategoriUpdatePost');
Route::get('/hizmet-sil',[HizmetlerController::class, 'hizmetKategoriDestroy'])->name('admin.hizmetKategoriDestroy');

Route::get('/hizmet-etiket',[HizmetlerController::class, 'hizmetEtiketShow'])->name('admin.hizmetEtiketShow');
Route::post('/hizmet-etiket',[HizmetlerController::class, 'hizmetEtiketCreate'])->name('admin.hizmetEtiketCreate');
Route::get('/hizmet-etiket/{id}',[HizmetlerController::class, 'hizmetEtiketUpdate'])->name('admin.hizmetEtiketUpdate');
Route::post('/hizmet-etiket-post/{id}',[HizmetlerController::class, 'hizmetEtiketUpdatePost'])->name('admin.hizmetEtiketUpdatePost');
Route::get('/hizmet-etiket-sil/{id}',[HizmetlerController::class, 'hizmetEtiketDestroy'])->name('admin.hizmetEtiketDestroy');

Route::get('/hizmetler',[HizmetlerController::class, 'hizmetShow'])->name('admin.hizmetShow');
Route::post('/hizmetler',[HizmetlerController::class, 'hizmetCreate'])->name('admin.hizmetCreate');
Route::get('/hizmetler/{id}',[HizmetlerController::class, 'hizmetUpdate'])->name('admin.hizmetUpdate');
Route::post('/hizmetler-post/{id}',[HizmetlerController::class, 'hizmetUpdatePost'])->name('admin.hizmetUpdatePost');
Route::get('/hizmetler-sil/{id}',[HizmetlerController::class, 'hizmetDestroy'])->name('admin.hizmetDestroy');

Route::get('/hizmet-urun',[HizmetlerController::class, 'hizmetUrunShow'])->name('admin.hizmetUrunShow');
Route::post('/hizmet-urun',[HizmetlerController::class, 'hizmetUrunCreate'])->name('admin.hizmetUrunCreate');
Route::get('/hizmet-urun/{id}',[HizmetlerController::class, 'hizmetUrunUpdate'])->name('admin.hizmetUrunUpdate');
Route::post('/hizmet-urun-post/{id}',[HizmetlerController::class, 'hizmetUrunUpdatePost'])->name('admin.hizmetUrunUpdatePost');
Route::get('/hizmet-urun-sil/{id}',[HizmetlerController::class, 'hizmetUrunDestroy'])->name('admin.hizmetUrunDestroy');

Route::get('/hizmet-urun-resim',[HizmetUrunImage::class, 'hizmetUrunImageShow'])->name('admin.hizmetUrunImageShow');
Route::post('/hizmet-urun-resim',[HizmetUrunImage::class, 'hizmetUrunImageCreate'])->name('admin.hizmetUrunImageCreate');
//Route::get('/hizmet-urun-resim/{id}',[HizmetUrunImage::class, 'hizmetUrunImageUpdate'])->name('admin.hizmetUrunImageUpdate');
Route::post('/hizmet-urun-resim-post/{id}',[HizmetUrunImage::class, 'hizmetUrunImageUpdatePost'])->name('admin.hizmetUrunImageUpdatePost');
Route::get('/hizmet-urun-resim-sil',[HizmetUrunImage::class, 'hizmetUrunImageDestroy'])->name('admin.hizmetUrunImageDestroy');

Route::get('/servis-bolgeleri',[HizmetlerController::class, 'servisBolgeShow'])->name('admin.servisBolgeShow');
Route::post('/servis-bolgeleri',[HizmetlerController::class, 'servisBolgeCreate'])->name('admin.servisBolgeCreate');
Route::get('/servis-bolgeleri/{id}',[HizmetlerController::class, 'servisBolgeUpdate'])->name('admin.servisBolgeUpdate');
Route::post('/servis-bolgeleri-post/{id}',[HizmetlerController::class, 'servisBolgeUpdatePost'])->name('admin.servisBolgeUpdatePost');
Route::get('/servis-bolgeleri-sil/{id}',[HizmetlerController::class, 'servisBolgeDestroy'])->name('admin.servisBolgeDestroy');

Route::get('/hizmet-urun-yorum',[HizmetlerController::class, 'hizmetYorumShow'])->name('admin.hizmetYorumShow');
Route::post('/hizmet-urun-yorum',[HizmetlerController::class, 'hizmetYorumCreate'])->name('admin.hizmetYorumCreate');
Route::post('/hizmet-urun-yorum/{id}',[HizmetlerController::class, 'hizmetYorumUpdate'])->name('admin.hizmetYorumUpdate');
Route::get('/hizmet-urun-yorum/{id}',[HizmetlerController::class, 'hizmetYorumDestroy'])->name('admin.hizmetYorumDestroy');


});
Route::prefix('ayarlar')->group(function () {

Route::get('/sss',[AdminAyarlarController::class, 'sssShow'])->name('admin.sssShow');
Route::post('/sss',[AdminAyarlarController::class, 'sssCreate'])->name('admin.sssCreate');
Route::get('/sss/{id}',[AdminAyarlarController::class, 'sssUpdate'])->name('admin.sssUpdate');
Route::post('/sss-post/{id}',[AdminAyarlarController::class, 'sssUpdatePost'])->name('admin.sssUpdatePost');
Route::get('/sss-sil/{id}',[AdminAyarlarController::class, 'sssDestroy'])->name('admin.sssDestroy');

Route::get('/referanslar',[AdminAyarlarController::class, 'referansShow'])->name('admin.referansShow');
Route::post('/referanslar',[AdminAyarlarController::class, 'referansCreate'])->name('admin.referansCreate');
Route::post('/referanslar/{id}',[AdminAyarlarController::class, 'referansUpdate'])->name('admin.referansUpdate');
Route::get('/referanslar/{id}',[AdminAyarlarController::class, 'referansDestroy'])->name('admin.referansDestroy');

Route::get('/menu',[AdminAyarlarController::class, 'menuShow'])->name('admin.menuShow');
Route::post('/menu',[AdminAyarlarController::class, 'menuCreate'])->name('admin.menuCreate');
Route::post('/menu/{id}',[AdminAyarlarController::class, 'menuUpdate'])->name('admin.menuUpdate');
Route::get('/menu/{id}',[AdminAyarlarController::class, 'menuDestroy'])->name('admin.menuDestroy');

Route::get('/slider',[AdminAyarlarController::class, 'sliderShow'])->name('admin.sliderShow');
Route::post('/slider',[AdminAyarlarController::class, 'sliderCreate'])->name('admin.sliderCreate');
Route::post('/slider/{id}',[AdminAyarlarController::class, 'sliderUpdate'])->name('admin.sliderUpdate');
Route::get('/slider/{id}',[AdminAyarlarController::class, 'sliderDestroy'])->name('admin.sliderDestroy');

Route::get('/site-ayarlar',[SiteAyarController::class, 'siteAyarlarShow'])->name('admin.siteAyarlarShow');
Route::post('/site-ayarlar',[SiteAyarController::class, 'siteAyarlarCreate'])->name('admin.siteAyarlarCreate');
Route::post('/site-ayarlar/{id}',[SiteAyarController::class, 'siteAyarlarUpdate'])->name('admin.siteAyarlarUpdate');

Route::get('/admin-site-ayar',[SiteAyarController::class, 'adminSiteAyarShow'])->name('admin.adminSiteAyarShow');
Route::post('/admin-site-ayar',[SiteAyarController::class, 'adminSiteAyarCreate'])->name('admin.adminSiteAyarCreate');
Route::post('/admin-site-ayar/{id}',[SiteAyarController::class, 'adminSiteAyarUpdate'])->name('admin.adminSiteAyarUpdate');

Route::get('/bayi-site-ayar',[SiteAyarController::class, 'bayiSiteAyarShow'])->name('admin.bayiSiteAyarShow');
Route::post('/bayi-site-ayar',[SiteAyarController::class, 'bayiSiteAyarCreate'])->name('admin.bayiSiteAyarCreate');
Route::post('/bayi-site-ayar/{id}',[SiteAyarController::class, 'bayiSiteAyarUpdate'])->name('admin.bayiSiteAyarUpdate');

Route::get('/sosyal-medya',[AdminAyarlarController::class, 'sosyalMedyaShow'])->name('admin.sosyalMedyaShow');
Route::post('/sosyal-medya',[AdminAyarlarController::class, 'sosyalMedyaCreate'])->name('admin.sosyalMedyaCreate');
Route::post('/sosyal-medya/{id}',[AdminAyarlarController::class, 'sosyalMedyaUpdate'])->name('admin.sosyalMedyaUpdate');

Route::get('/haberler',[AdminAyarlarController::class, 'haberlerShow'])->name('admin.haberlerShow');
Route::post('/haberler',[AdminAyarlarController::class, 'haberlerCreate'])->name('admin.haberlerCreate');
Route::post('/haberler/{id}',[AdminAyarlarController::class, 'haberlerUpdate'])->name('admin.haberlerUpdate');
Route::get('/haberler/{id}',[AdminAyarlarController::class, 'haberlerDestroy'])->name('admin.haberlerDestroy');

Route::get('/banka-hesap',[AdminAyarlarController::class, 'bankaHesapShow'])->name('admin.bankaHesapShow');
Route::post('/banka-hesap',[AdminAyarlarController::class, 'bankaHesapCreate'])->name('admin.bankaHesapCreate');
Route::post('/banka-hesap/{id}',[AdminAyarlarController::class, 'bankaHesapUpdate'])->name('admin.bankaHesapUpdate');
Route::get('/banka-hesap/{id}',[AdminAyarlarController::class, 'bankaHesapDestroy'])->name('admin.bankaHesapDestroy');

Route::get('/İl',[AdminAyarlarController::class, 'ilShow'])->name('admin.ilShow');
Route::get('/il-update/{id}',[AdminAyarlarController::class, 'ilUpdate'])->name('admin.ilUpdate');
Route::post('/il-update-post/{id}',[AdminAyarlarController::class, 'ilUpdatePost'])->name('admin.ilUpdatePost');

Route::get('/İlce',[AdminAyarlarController::class, 'ilceShow'])->name('admin.ilceShow');
Route::get('/ilce-update/{id}',[AdminAyarlarController::class, 'ilceUpdate'])->name('admin.ilceUpdate');
Route::post('/ilce-update-post/{id}',[AdminAyarlarController::class, 'ilceUpdatePost'])->name('admin.ilceUpdatePost');

});

