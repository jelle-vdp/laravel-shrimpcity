<?php

use Illuminate\Support\Facades\Route;
use App\Models\Gig;
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
    return view('gigs.index', [
        'gigs' => Gig::all()
    ]);
});

Route::get('/shows/{slug}', function ($slug) {
    return view('gigs.show', [
        'gig' => Gig::where('slug', $slug)->firstOrFail()
    ]);
});



