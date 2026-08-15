<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratTemplate extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'is_active', 'is_builtin', 'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_builtin' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function fields()
    {
        return $this->hasMany(SuratTemplateField::class)->orderBy('sort_order');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
