<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopulationStatistic extends Model
{
    protected $fillable = [
        'year', 'korong_id', 'total_population',
        'male', 'female', 'households', 'children',
        'productive_age', 'elderly', 'source', 'verified_at',
    ];

    protected $casts = [
        'year'             => 'integer',
        'total_population' => 'integer',
        'male'             => 'integer',
        'female'           => 'integer',
        'households'       => 'integer',
        'children'         => 'integer',
        'productive_age'   => 'integer',
        'elderly'          => 'integer',
        'verified_at'      => 'datetime',
    ];

    public function korong()
    {
        return $this->belongsTo(Korong::class);
    }
}
