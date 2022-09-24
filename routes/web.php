<?php

use Illuminate\Support\Facades\Route;
use League\Flysystem\DirectoryListing;

use App\Http\Controllers\GigsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');

Route::get('/shows', [GigsController::class, 'index'])->name('gigs.index');
Route::get('/shows/{slug}', [GigsController::class, 'show'])->name('gigs.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

