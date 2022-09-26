<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index () {
        $news = News::all();

        return view('news.index', [
            'news' => $news->sortByDesc('fake_date')
        ]);
    }

    function show ($slug) {
        $news = News::where('slug', $slug)->firstOrFail();
        $allNews = News::all();
        
        return view('news.show', [
            'news' => $news,
            'other_news' => $allNews->where('slug', '<>', $slug)->sortByDesc('fake_date')->take(2),
            'body' => json_decode($news['body'])
        ]);
    }
}
