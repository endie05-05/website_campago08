<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'author_id',
        'title', 'slug', 'excerpt', 'content',
        'featured_image_path', 'status', 'is_featured',
        'published_at', 'views',
        'meta_title', 'meta_description',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'views'        => 'integer',
        'is_featured'  => 'boolean',
    ];

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    // Relasi
    public function category()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
