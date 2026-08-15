<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Mendaftarkan SKU, SKTM, dan Domisili (yang formulirnya sudah dikoding manual sejak awal)
     * sebagai baris di tabel surat_templates juga, supaya admin bisa melihat SEMUA jenis surat
     * -- bawaan sistem maupun buatan sendiri -- dalam satu tabel yang sama di panel "Jenis Surat".
     * Kolom-kolom di bawah ini murni informatif (menunjukkan isi formulir aslinya), formulir
     * publiknya sendiri tetap memakai view & controller khusus yang sudah ada, tidak diubah.
     */
    public function up(): void
    {
        $templates = [
            [
                'slug' => 'sku',
                'name' => 'Surat Keterangan Usaha (SKU)',
                'description' => 'Untuk keperluan perbankan dan izin usaha UMKM.',
                'fields' => [
                    ['label' => 'Nama Lengkap', 'type' => 'text', 'is_required' => true, 'is_applicant_name' => true],
                    ['label' => 'Tempat Lahir', 'type' => 'text', 'is_required' => true],
                    ['label' => 'Tanggal Lahir', 'type' => 'date', 'is_required' => true],
                    ['label' => 'Jenis Kelamin', 'type' => 'radio', 'options' => 'Laki-laki,Perempuan', 'is_required' => true],
                    ['label' => 'Agama', 'type' => 'select', 'options' => 'Islam,Kristen Protestan,Katolik,Hindu,Buddha,Konghucu,Lainnya', 'is_required' => true],
                    ['label' => 'Kewarganegaraan', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Pekerjaan', 'type' => 'text', 'is_required' => true],
                    ['label' => 'NIK', 'type' => 'text', 'is_required' => true],
                    ['label' => 'Korong', 'type' => 'select', 'options' => 'Korong Pasa,Korong Tarok,Korong Koto,Korong Mudik,Korong Ampang,Korong Balai,Korong Sawah,Korong Bukit', 'is_required' => true],
                    ['label' => 'Alamat Sesuai KTP', 'type' => 'textarea', 'is_required' => true],
                    ['label' => 'Jenis Usaha', 'type' => 'select', 'options' => 'Pertanian / Perkebunan,Peternakan,Perikanan,Perdagangan / Kuliner,Kerajinan,Jasa,Lainnya', 'is_required' => true],
                    ['label' => 'Nama / Uraian Usaha', 'type' => 'text', 'is_required' => true],
                    ['label' => 'Lama Usaha Berjalan', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Lokasi Usaha', 'type' => 'textarea', 'is_required' => true],
                ],
            ],
            [
                'slug' => 'sktm',
                'name' => 'Surat Keterangan Tidak Mampu (SKTM)',
                'description' => 'Untuk bantuan sosial, beasiswa, atau keringanan biaya.',
                'fields' => [
                    ['label' => 'Jenis SKTM', 'type' => 'select', 'options' => 'SKTM Anak Sekolah,SKTM Biasa,SKTM Mahasiswa,SKTM Pindah KK dan KTP,SKTM PMKS BPJS', 'is_required' => true],
                    ['label' => 'Nama Lengkap', 'type' => 'text', 'is_required' => true, 'is_applicant_name' => true],
                    ['label' => 'Tempat Lahir', 'type' => 'text', 'is_required' => true],
                    ['label' => 'Tanggal Lahir', 'type' => 'date', 'is_required' => true],
                    ['label' => 'Jenis Kelamin', 'type' => 'radio', 'options' => 'Laki-laki,Perempuan', 'is_required' => true],
                    ['label' => 'Suku', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Agama', 'type' => 'select', 'options' => 'Islam,Kristen Protestan,Katolik,Hindu,Buddha,Konghucu,Lainnya', 'is_required' => true],
                    ['label' => 'Kewarganegaraan', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Pekerjaan', 'type' => 'text', 'is_required' => true],
                    ['label' => 'Korong', 'type' => 'select', 'options' => 'Korong Pasa,Korong Tarok,Korong Koto,Korong Mudik,Korong Ampang,Korong Balai,Korong Sawah,Korong Bukit', 'is_required' => true],
                    ['label' => 'Alamat', 'type' => 'textarea', 'is_required' => true],
                    ['label' => 'Nama Ayah', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Nama Ibu', 'type' => 'text', 'is_required' => false],
                ],
            ],
            [
                'slug' => 'domisili',
                'name' => 'Surat Keterangan Domisili',
                'description' => 'Untuk perorangan maupun organisasi/kelompok.',
                'fields' => [
                    ['label' => 'Jenis Permohonan', 'type' => 'radio', 'options' => 'Perorangan,Organisasi atau Kelompok', 'is_required' => true],
                    ['label' => 'Nama', 'type' => 'text', 'is_required' => true, 'is_applicant_name' => true],
                    ['label' => 'NIK', 'type' => 'text', 'is_required' => false],
                    ['label' => 'No. HP', 'type' => 'text', 'is_required' => true],
                    ['label' => 'Tempat Lahir', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Tanggal Lahir', 'type' => 'date', 'is_required' => false],
                    ['label' => 'Jenis Kelamin', 'type' => 'radio', 'options' => 'Laki-laki,Perempuan', 'is_required' => false],
                    ['label' => 'Suku / Agama', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Pekerjaan', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Bentuk Organisasi', 'type' => 'text', 'is_required' => false],
                    ['label' => 'Alamat Saat Ini', 'type' => 'textarea', 'is_required' => true],
                    ['label' => 'Korong Domisili', 'type' => 'select', 'options' => 'Korong Pasa,Korong Tarok,Korong Koto,Korong Mudik,Korong Ampang,Korong Balai,Korong Sawah,Korong Bukit', 'is_required' => true],
                    ['label' => 'Data Wali (Nama/NIK/No. HP)', 'type' => 'text', 'is_required' => false],
                ],
            ],
        ];

        foreach ($templates as $i => $tpl) {
            if (DB::table('surat_templates')->where('slug', $tpl['slug'])->exists()) {
                continue;
            }

            $templateId = DB::table('surat_templates')->insertGetId([
                'name' => $tpl['name'],
                'slug' => $tpl['slug'],
                'description' => $tpl['description'],
                'is_active' => true,
                'is_builtin' => true,
                'sort_order' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($tpl['fields'] as $j => $field) {
                DB::table('surat_template_fields')->insert([
                    'surat_template_id' => $templateId,
                    'label' => $field['label'],
                    'field_key' => \Illuminate\Support\Str::slug(str_replace(['/', '\\'], ' ', $field['label']), '_'),
                    'type' => $field['type'],
                    'options' => $field['options'] ?? null,
                    'is_required' => $field['is_required'],
                    'is_applicant_name' => $field['is_applicant_name'] ?? false,
                    'sort_order' => $j,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    public function down(): void
    {
        $templateIds = DB::table('surat_templates')
            ->whereIn('slug', ['sku', 'sktm', 'domisili'])
            ->where('is_builtin', true)
            ->pluck('id');

        DB::table('surat_template_fields')->whereIn('surat_template_id', $templateIds)->delete();
        DB::table('surat_templates')->whereIn('id', $templateIds)->delete();
    }
};
