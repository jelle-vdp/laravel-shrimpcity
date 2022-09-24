<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;

class GigsController extends Controller
{
    public function index() {
        $gigs = Gig::all();
        
        return view('gigs.index', [
            'gigs' => $gigs->sortBy('date')
        ]);
    }

    public function show($slug) {
        $gig = Gig::where('slug', $slug)->firstOrFail();

        return view('gigs.show', [
            'gig' => $gig,
            'description_headliner' => json_decode($gig['description_headliner_one']),
            'description_support' => json_decode($gig['description_first_support_band'])
        ]);
    }
}
