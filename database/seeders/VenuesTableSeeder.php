<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venue;
use App\Models\Location;
use App\Models\EventType;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = Location::all();
        $eventTypes = EventType::all();

        for ($i=1; $i <= 4; $i++) {
            $venue = Venue::create([
                'name' => 'Venue ' . $i,
                'slug' => 'venue-' . $i,
                'location_id' => $locations->first()->id,
                'description' => 'Description for venue ' . $i,
                'address' => 'Address ' . $i,
                'people_minimum' => rand(1, 5),
                'people_maximum' => rand(5, 100),
                'price_per_hour' => rand(100, 1000),
                'is_featured' => $i <= 2 ? 1 : 0, // Make first 2 venues featured
            ]);

            // $venue->event_types()->attach($eventTypes->first()->id);

            $venue->addMedia(public_path('images/img_' . $i . '.jpg'))->toMediaCollection('main_photo');
        }
    }
}
