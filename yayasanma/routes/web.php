<?php

use App\Http\Controllers\CRUD\HomeController;
use App\Http\Controllers\CRUD\AnakController;
use App\Http\Controllers\CRUD\ContactController;
use App\Http\Controllers\CRUD\GaleryController;
use App\Http\Controllers\CRUD\NewsController;
use App\Http\Controllers\CRUD\PengurusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HubungiController;
use App\Models\Admin;
use App\Models\Children;
use App\Models\Galery;
use App\Models\News;
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

Route::get('/yayasanma', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    // Menghitung total data dari setiap kategori
    $totalAnak = Children::count();
    $totalPengurus = Admin::count();
    $totalGaleri = Galery::count();
    $totalBerita = News::count();

    return view('dashboard', compact('totalAnak', 'totalPengurus', 'totalGaleri', 'totalBerita'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

});

Route::middleware('auth')->group(function () {
    Route::resource('/anak', AnakController::class);
    Route::resource('/pengurus', PengurusController::class);
    Route::resource('/galeri', GaleryController::class);
    Route::resource('/berita', NewsController::class);
    Route::resource('/pesan', ContactController::class);
});

Route::get('/yayasanma', [RumahController::class, 'index'])->name('home');
Route::get('/yayasanma/profiles', [TampilanController::class, 'index'])->name('profiles');
Route::get('/yayasanmaktabulaitam/profiles/{id}', [TampilanController::class, 'show'])->name('profiles.show');

Route::get('/yayasanmaktabulaitam/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/yayasanmaktabulaitam/news', [BeritaController::class, 'index'])->name('news');
Route::get('/yayasanmaktabulaitam/news/{id}', [BeritaController::class, 'show'])->name('berita.show');


Route::get('/yayasanmaktabulaitam/hubungikami', [HubungiController::class, 'index'])->name('hubungi');
Route::post('/yayasanmaktabulaitam/hubungikami', [HubungiController::class, 'store'])->name('hubungi.store');

require __DIR__ . '/auth.php';
