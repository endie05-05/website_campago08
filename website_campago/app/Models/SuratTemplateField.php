<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratTemplateField extends Model
{
    public const TYPES = [
        'text' => 'Teks Singkat',
        'textarea' => 'Teks Panjang',
        'number' => 'Angka',
        'date' => 'Tanggal',
        'select' => 'Pilihan Dropdown',
        'radio' => 'Pilihan Tombol',
        'file' => 'Unggah File',
    ];

    protected $fillable = [
        'surat_template_id', 'label', 'field_key', 'type', 'options', 'is_required', 'is_applicant_name', 'sort_order',
    ];

    protected $casts = [
        'is_required' => 'boolean',
        'is_applicant_name' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function template()
    {
        return $this->belongsTo(SuratTemplate::class, 'surat_template_id');
    }

    public function optionList(): array
    {
        return array_filter(array_map('trim', explode(',', (string) $this->options)));
    }
}
