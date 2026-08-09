<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratRequest extends Model
{
    protected $fillable = [
        'type', 'applicant_name', 'keperluan', 'data', 'attachment_path', 'status',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public const TYPES = [
        'sku' => 'Surat Keterangan Usaha (SKU)',
        'sktm' => 'Surat Keterangan Tidak Mampu (SKTM)',
        'domisili' => 'Surat Keterangan Domisili',
    ];

    public const STATUSES = [
        'diajukan' => 'Diajukan',
        'diproses' => 'Diproses',
        'selesai' => 'Selesai',
        'ditolak' => 'Ditolak',
    ];

    public function typeLabel(): string
    {
        return self::TYPES[$this->type] ?? $this->type;
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }
}
