<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'event_date',
        'cover_image_path', 'status',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    public function images()
    {
        return $this->hasMany(GalleryImage::class)->orderBy('sort_order');
    }
}
