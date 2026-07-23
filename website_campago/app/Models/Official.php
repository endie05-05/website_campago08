<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $fillable = [
        'name', 'position', 'nip', 'photo_path', 'bio',
        'phone', 'email',
        'start_period', 'end_period',
        'sort_order', 'is_active',
    ];

    protected $casts = [
        'is_active'    => 'boolean',
        'start_period' => 'date',
        'end_period'   => 'date',
        'sort_order'   => 'integer',
    ];
}
