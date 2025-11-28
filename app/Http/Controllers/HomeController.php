<?php

namespace App\Http\Controllers;

use App\Models\EventType;
use App\Models\Location;
use App\Models\Venue;

class HomeController extends Controller
{

    public function index()
    {
        $featuredVenues = Venue::where('is_featured', 1)->with('event_types', 'location')->get();

        $eventTypes = EventType::all();
        $locations = Location::all();

        $newestVenues = Venue::with('event_types', 'location')->latest()->take(3)->get();

        return view('home', compact('featuredVenues', 'eventTypes', 'locations', 'newestVenues'));
    }

}
