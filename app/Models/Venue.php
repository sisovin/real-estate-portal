<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Venue extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['name', 'slug', 'location_id', 'description', 'address', 'people_minimum', 'people_maximum', 'price_per_hour'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function event_types()
    {
        return $this->belongsToMany(EventType::class);
    }
}