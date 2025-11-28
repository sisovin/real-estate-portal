<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            'London',
            'Manchester',
            'Liverpool',
            'Birmingham',
        ];

        foreach ($locations as $location) {
            $slug = Str::slug($location);
            $locationObject = Location::create([
                'name' => $location,
                'slug' => $slug
            ]);

            $locationObject->addMedia(public_path('images/locations/' . $slug . '.jpg'))->toMediaCollection('photo');
        }
    }
}
