<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'location_category_id', 'korong_id',
        'name', 'slug', 'description', 'address',
        'latitude', 'longitude',
        'phone', 'opening_hours', 'google_maps_url',
        'image_path', 'source', 'last_verified_at',
        'is_verified', 'status',
    ];

    protected $casts = [
        'latitude'         => 'decimal:7',
        'longitude'        => 'decimal:7',
        'is_verified'      => 'boolean',
        'last_verified_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function category()
    {
        return $this->belongsTo(LocationCategory::class, 'location_category_id');
    }

    public function korong()
    {
        return $this->belongsTo(Korong::class);
    }
}
