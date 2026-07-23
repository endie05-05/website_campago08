<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Potential extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'korong_id', 'name', 'slug', 'category',
        'short_description', 'description', 'address',
        'latitude', 'longitude',
        'contact_name', 'contact_phone',
        'featured_image_path', 'status',
    ];

    protected $casts = [
        'latitude'  => 'decimal:7',
        'longitude' => 'decimal:7',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function korong()
    {
        return $this->belongsTo(Korong::class);
    }

    public function images()
    {
        return $this->hasMany(PotentialImage::class)->orderBy('sort_order');
    }
}
