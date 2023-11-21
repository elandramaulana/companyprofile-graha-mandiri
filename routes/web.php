<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AllPortofolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage/index');
})->name('home');

Route::get('/portofolios', [PortofolioController::class, 'index'])->name('portofolios.index');
Route::get('/portofolios/{id}', [PortofolioController::class, 'show'])->name('portofolios.show');
Route::get('/allportofolio', [AllPortofolioController::class, 'index'])->name('allportofolio');

Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.details');

Route::get('/addpost', [PortfolioController::class, 'create'])->name('portfolios.create');
Route::post('/addpost', [PortfolioController::class, 'store'])->name('portfolios.store');

Route::get('/addcategory', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/addcategory', [KategoriController::class, 'store'])->name('kategori.store');

Route::get('/managepost', [PortfolioController::class, 'index'])->name('portfolios.index');
Route::get('/managepost/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolios.edit');
Route::patch('/managepost/update/{id}', [PortfolioController::class, 'update'])->name('portfolios.update');
Route::delete('/managepost/destroy/{id}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');

Route::get('/managecategory', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/managecategory/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::patch('/managecategory/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/managecategory/destroy/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
