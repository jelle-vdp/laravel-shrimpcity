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

        $showsSlider = Show::all()->take(10);
        $showsOv = Show::all()->take(5);

        if($agent->isMobile()){
            $news = News::all()->take(2);
            $isMobile = true;
        } else {
            $news = News::all()->take(3);
            $isMobile = false;
        }

        return view('index', [
            'showsSlider' => $showsSlider->sortBy('date'),
            'showsOv' => $showsOv->sortBy('date'),
            'news' => $news->sortByDesc('fake_date'),
            'isMobile' => $isMobile
        ]);
    }
}
