<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\News;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index () {
        $gigs = Gig::all()->take(10);
        $news = News::all()->take(3);
        return view('index', [
            'gigs' => $gigs->sortBy('date'),
            'news' => $news->sortByDesc('fake_date')
        ]);
    }
}
