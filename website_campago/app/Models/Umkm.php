<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Umkm extends Model
{
    use SoftDeletes;

    protected $table = 'umkms';

    protected $fillable = [
        'korong_id', 'name', 'slug', 'owner_name', 'category',
        'description', 'address',
        'latitude', 'longitude',
        'phone', 'whatsapp', 'instagram', 'facebook', 'tiktok',
        'marketplace_url', 'google_maps_url',
        'nib_status', 'halal_status', 'qris_status',
        'featured_image_path', 'status', 'is_verified',
    ];

    protected $casts = [
        'latitude'    => 'decimal:7',
        'longitude'   => 'decimal:7',
        'nib_status'  => 'boolean',
        'qris_status' => 'boolean',
        'is_verified' => 'boolean',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->where('is_verified', true);
    }

    public function korong()
    {
        return $this->belongsTo(Korong::class);
    }

    public function products()
    {
        return $this->hasMany(UmkmProduct::class)->orderBy('sort_order');
    }
}
