<?php

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
    $gigs = Gig::all();
    $news = News::all();
    return view('gigs.index', [
        'gigs' => $gigs->sortBy('date')->take(10),
        'news' => $news->sortByDesc('fake_date')->take(3)
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



