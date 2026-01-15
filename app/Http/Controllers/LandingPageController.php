<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function popularAttractions()
    {
        // Load JSON data
        $hotels = json_decode(file_get_contents(resource_path('data/popular_attractions.json')), true);

        // Pass data to Blade view
        return view('landing.popular_attractions', compact('hotels'));
    }
}
