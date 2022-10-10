<?php

namespace App\Http\Controllers;

use App\Models\Show;
use App\Models\News;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class HomepageController extends Controller
{
    public function index () {
        $agent = new Agent();

        $showsSlider = Show::all()->sortBy('date')->take(10);
        $showsOv = Show::all()->sortBy('date')->take(5);

        if($agent->isMobile()){
            $news = News::all()->sortByDesc('date')->take(2);
            $isMobile = true;
        } else {
            $news = News::all()->sortByDesc('date')->take(3);
            $isMobile = false;
        }

        return view('index', [
            'showsSlider' => $showsSlider,
            'showsOv' => $showsOv,
            'news' => $news,
            'isMobile' => $isMobile
        ]);
    }
}
