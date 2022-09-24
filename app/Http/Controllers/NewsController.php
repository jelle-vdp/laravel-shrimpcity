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
        
        return view('news.show', [
            'news' => $news,
            'other_news' => News::all()->take(2),
            'body' => json_decode($news['body'])
        ]);
    }
}
