<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'image_path',
        'button_text', 'button_url',
        'sort_order', 'is_active',
        'start_at', 'end_at',
    ];

    protected $casts = [
        'is_active'  => 'boolean',
        'sort_order' => 'integer',
        'start_at'   => 'datetime',
        'end_at'     => 'datetime',
    ];
}
