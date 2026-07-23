<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotentialImage extends Model
{
    protected $fillable = [
        'potential_id', 'image_path', 'caption', 'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];

    public function potential()
    {
        return $this->belongsTo(Potential::class);
    }
}
