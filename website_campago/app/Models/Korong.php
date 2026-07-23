<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Korong extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'head_name',
        'population', 'area_km2',
        'latitude', 'longitude',
        'image_path', 'sort_order', 'is_active',
    ];

    protected $casts = [
        'is_active'  => 'boolean',
        'area_km2'   => 'decimal:2',
        'latitude'   => 'decimal:7',
        'longitude'  => 'decimal:7',
        'population' => 'integer',
        'sort_order' => 'integer',
    ];

    public function potentials()
    {
        return $this->hasMany(Potential::class);
    }

    public function umkms()
    {
        return $this->hasMany(Umkm::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function populationStatistics()
    {
        return $this->hasMany(PopulationStatistic::class);
    }
}
