<?php

use App\Http\Controllers\ContactController;
use App\Models\Gig;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use League\Flysystem\DirectoryListing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $gigs = Gig::all()->take(10);
    $news = News::all()->take(3);
    return view('gigs.index', [
        'gigs' => $gigs->sortBy('date'),
        'news' => $news->sortByDesc('fake_date')
    ]);
});

Route::get('/shows/{slug}', function ($slug) {
    $gig = Gig::where('slug', $slug)->firstOrFail();
    return view('gigs.show', [
        'gig' => $gig,
        'description_headliner' => json_decode($gig['description_headliner_one']),
        'description_support' => json_decode($gig['description_first_support_band'])
    ]);
});

Route::get('/news', function () {
    $news = News::all();
    return view('news.index', [
        'news' => $news->sortByDesc('fake_date')
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

