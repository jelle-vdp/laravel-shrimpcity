<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index () {
        $news = News::all()->sortByDesc('date');

        return view('news.index', [
            'news' => $news
        ]);
    }

    function show ($slug) {
        $news = News::where('slug', $slug)->firstOrFail();
        $otherNews = News::all()->where('slug', '<>', $slug)->sortByDesc('fake_date')->take(2);
        
        return view('news.show', [
            'news' => $news,
            'other_news' => $otherNews
        ]);
    }
}
