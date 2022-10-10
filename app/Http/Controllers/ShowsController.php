<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function index() {
        $shows = Show::all()->sortBy('date');
        
        return view('shows.index', [ 
            'shows' => $shows
        ]);
    }

    public function show($slug) {
        $show = Show::where('slug', $slug)->firstOrFail();

        return view('shows.show', [
            'show' => $show
        ]);
    }
}
