<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [
        'gallery_id', 'image_path', 'caption', 'size', 'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
