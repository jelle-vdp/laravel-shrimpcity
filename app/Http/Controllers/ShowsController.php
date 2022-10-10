<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function index() {
        $shows = Show::all();
        
        return view('shows.index', [ 
            'shows' => $shows->sortBy('date')
        ]);
    }

    public function show($slug) {
        $show = Show::where('slug', $slug)->firstOrFail();

        return view('shows.show', [
            'show' => $show,
            'description_headliner' => json_decode($show['headliner_one_description']),
            'description_support' => json_decode($show['support_one_description']),
        ]);
    }
}
