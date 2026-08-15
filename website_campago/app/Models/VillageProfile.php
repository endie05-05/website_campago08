<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VillageProfile extends Model
{
    protected $fillable = [
        'name', 'district', 'regency', 'province', 'postal_code',
        'address', 'description', 'history', 'vision', 'mission',
        'area_km2', 'population', 'population_year',
        'latitude', 'longitude',
        'phone', 'email',
        'logo_path', 'logo_admin_path', 'hero_image_path',
    ];

    protected $casts = [
        'area_km2'        => 'decimal:2',
        'latitude'        => 'decimal:7',
        'longitude'       => 'decimal:7',
        'population'      => 'integer',
        'population_year' => 'integer',
    ];
}
