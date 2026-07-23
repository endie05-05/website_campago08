<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicDocument extends Model
{
    protected $fillable = [
        'title', 'category', 'description', 'file_path',
        'document_date', 'year', 'is_public', 'download_count',
        'uploaded_by',
    ];

    protected $casts = [
        'document_date'  => 'date',
        'is_public'      => 'boolean',
        'download_count' => 'integer',
        'year'           => 'integer',
    ];

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
