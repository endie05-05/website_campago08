<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmkmProduct extends Model
{
    protected $fillable = [
        'umkm_id', 'name', 'slug', 'description',
        'price', 'unit', 'image_path',
        'is_available', 'sort_order',
    ];

    protected $casts = [
        'price'        => 'decimal:2',
        'is_available' => 'boolean',
        'sort_order'   => 'integer',
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
