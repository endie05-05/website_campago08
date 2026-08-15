<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\SuratTemplate;
use App\Models\SuratTemplateField;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SuratTemplateController extends Controller
{
    use GeneratesUniqueSlug;
    use ValidatesForPanel;

    private function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:150'],
            'deskripsi' => ['nullable', 'string', 'max:500'],
            'aktif' => ['nullable', 'boolean'],
            'kolom' => ['nullable', 'array'],
            'kolom.*.label' => ['required', 'string', 'max:150'],
            'kolom.*.type' => ['required', Rule::in(array_keys(SuratTemplateField::TYPES))],
            'kolom.*.options' => ['nullable', 'string', 'max:1000'],
            'kolom.*.wajib' => ['nullable', 'boolean'],
        ];
    }

    public function store(Request $request)
    {
        $validated = $this->validatePanel($request, 'surat-template', $this->rules());

        $template = new SuratTemplate();
        $template->name = $validated['nama'];
        $template->slug = $this->uniqueSlug(SuratTemplate::class, $validated['nama'], null);
        $template->description = $validated['deskripsi'] ?? null;
        $template->is_active = $request->boolean('aktif');
        $template->is_builtin = false;
        $template->sort_order = (SuratTemplate::max('sort_order') ?? 0) + 1;
        $template->save();

        $this->saveFields($template, $validated['kolom'] ?? []);

        return redirect('/admin?panel=surat-template')->with('success', 'Jenis surat berhasil dibuat.');
    }

    public function update(Request $request, SuratTemplate $suratTemplate)
    {
        abort_if($suratTemplate->is_builtin, 403, 'Jenis surat bawaan sistem tidak bisa diubah lewat sini.');

        $validated = $this->validatePanel($request, 'surat-template', $this->rules());

        $suratTemplate->name = $validated['nama'];
        $suratTemplate->description = $validated['deskripsi'] ?? null;
        $suratTemplate->is_active = $request->boolean('aktif');
        $suratTemplate->save();

        $this->saveFields($suratTemplate, $validated['kolom'] ?? []);

        return redirect('/admin?panel=surat-template')->with('success', 'Jenis surat berhasil diperbarui.');
    }

    public function destroy(SuratTemplate $suratTemplate)
    {
        abort_if($suratTemplate->is_builtin, 403, 'Jenis surat bawaan sistem tidak bisa dihapus.');

        $suratTemplate->delete();

        return redirect('/admin?panel=surat-template')->with('success', 'Jenis surat berhasil dihapus.');
    }

    private function saveFields(SuratTemplate $template, array $kolomList): void
    {
        $template->fields()->delete();

        $kolomList = array_values($kolomList);
        $applicantNameIndex = $this->guessApplicantNameFieldIndex($kolomList);

        $usedKeys = [];
        foreach ($kolomList as $i => $kolom) {
            // Ganti karakter pemisah kata (/, \) jadi spasi dulu sebelum di-slug, supaya
            // "Barang/Dokumen Hilang" jadi "barang_dokumen_hilang", bukan "barangdokumen_hilang".
            $baseKey = Str::slug(str_replace(['/', '\\'], ' ', $kolom['label']), '_') ?: 'kolom_'.($i + 1);
            $key = $baseKey;
            $suffix = 2;
            while (in_array($key, $usedKeys, true)) {
                $key = $baseKey.'_'.$suffix;
                $suffix++;
            }
            $usedKeys[] = $key;

            SuratTemplateField::create([
                'surat_template_id' => $template->id,
                'label' => $kolom['label'],
                'field_key' => $key,
                'type' => $kolom['type'],
                'options' => in_array($kolom['type'], ['select', 'radio'], true) ? ($kolom['options'] ?? null) : null,
                'is_required' => ! empty($kolom['wajib']),
                'is_applicant_name' => $i === $applicantNameIndex,
                'sort_order' => $i,
            ]);
        }
    }

    /**
     * Tebak kolom mana yang berisi nama pemohon (dipakai admin sebagai label
     * pengajuan di tabel), berdasarkan label kolom yang diawali kata "nama".
     */
    private function guessApplicantNameFieldIndex(array $kolomList): ?int
    {
        foreach ($kolomList as $i => $kolom) {
            if (Str::startsWith(Str::lower(trim($kolom['label'] ?? '')), 'nama')) {
                return $i;
            }
        }

        return null;
    }
}
