<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'file_path',
        'start_date', 'end_date', 'is_pinned',
        'status', 'published_at', 'created_by',
    ];

    protected $casts = [
        'start_date'   => 'date',
        'end_date'     => 'date',
        'published_at' => 'datetime',
        'is_pinned'    => 'boolean',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->whereNotNull('published_at');
    }

    public function scopeActive($query)
    {
        return $query->published()
                     ->where(function ($q) {
                         $q->whereNull('end_date')
                           ->orWhere('end_date', '>=', now());
                     });
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
