<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'slug', 'description',
        'requirements', 'procedure',
        'duration', 'cost', 'service_hours', 'contact',
        'downloadable_form_path',
        'is_online', 'external_url',
        'sort_order', 'is_active',
    ];

    protected $casts = [
        'is_online'  => 'boolean',
        'is_active'  => 'boolean',
        'sort_order' => 'integer',
    ];
}
