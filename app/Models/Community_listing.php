<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Community_listing extends Model
{
    use HasFactory,HasSlug;
    protected $table='community_listing';
    protected $primaryKey = 'community_listing_id';

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('community_listing_name')
            ->saveSlugsTo('community_listing_slug');
    }
}
