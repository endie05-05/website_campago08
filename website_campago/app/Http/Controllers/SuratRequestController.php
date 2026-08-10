<?php

namespace App\Http\Controllers;

use App\Models\SuratRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SuratRequestController extends Controller
{
    public function storeSku(Request $request): RedirectResponse
    {
        return $this->handle($request, 'sku', [
            'pemohon_nama' => ['required', 'string', 'max:150'],
            'pemohon_tempat_lahir' => ['required', 'string', 'max:100'],
            'pemohon_tanggal_lahir' => ['required', 'date'],
            'pemohon_jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'pemohon_agama' => ['required', 'string', 'max:50'],
            'pemohon_kewarganegaraan' => ['nullable', 'string', 'max:50'],
            'pemohon_pekerjaan' => ['required', 'string', 'max:150'],
            'pemohon_nik' => ['required', 'digits:16'],
            'pemohon_korong' => ['required', 'string', 'max:100'],
            'pemohon_alamat' => ['required', 'string'],
            'jenis_usaha' => ['required', 'string', 'max:100'],
            'uraian_usaha' => ['required', 'string', 'max:255'],
            'lama_usaha' => ['nullable', 'string', 'max:100'],
            'lokasi_usaha' => ['required', 'string'],
            'penjelasan_keperluan' => ['required', 'string'],
            'ktp' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
            'kk' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
        ], 'pemohon_nama');
    }

    public function storeSktm(Request $request): RedirectResponse
    {
        return $this->handle($request, 'sktm', [
            'jenis_sktm' => ['required', Rule::in([
                'SKTM Anak Sekolah',
                'SKTM Biasa',
                'SKTM Mahasiswa',
                'SKTM Pindah KK dan KTP',
                'SKTM, PMKS, BPJS',
            ])],
            'pemohon_nama' => ['required', 'string', 'max:150'],
            'pemohon_tempat_lahir' => ['required', 'string', 'max:100'],
            'pemohon_tanggal_lahir' => ['required', 'date'],
            'pemohon_jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'pemohon_suku' => ['nullable', 'string', 'max:100'],
            'pemohon_agama' => ['required', 'string', 'max:50'],
            'pemohon_kewarganegaraan' => ['nullable', 'string', 'max:50'],
            'pemohon_pekerjaan' => ['required', 'string', 'max:150'],
            'pemohon_korong' => ['required', 'string', 'max:100'],
            'pemohon_alamat' => ['required', 'string'],
            'ayah_nama' => ['nullable', 'string', 'max:150'],
            'ayah_tempat_lahir' => ['nullable', 'string', 'max:100'],
            'ayah_tanggal_lahir' => ['nullable', 'date'],
            'ayah_agama_suku' => ['nullable', 'string', 'max:150'],
            'ayah_pekerjaan' => ['nullable', 'string', 'max:150'],
            'ayah_alamat' => ['nullable', 'string'],
            'ibu_nama' => ['nullable', 'string', 'max:150'],
            'ibu_tempat_lahir' => ['nullable', 'string', 'max:100'],
            'ibu_tanggal_lahir' => ['nullable', 'date'],
            'ibu_agama_suku' => ['nullable', 'string', 'max:150'],
            'ibu_pekerjaan' => ['nullable', 'string', 'max:150'],
            'ibu_alamat' => ['nullable', 'string'],
            'penjelasan_keperluan' => ['required', 'string'],
            'ktp' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
            'kk' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
        ], 'pemohon_nama');
    }

    public function storeDomisili(Request $request): RedirectResponse
    {
        return $this->handle($request, 'domisili', [
            'jenis_permohonan' => ['required', Rule::in(['Perorangan', 'Organisasi atau Kelompok'])],
            'nama' => ['required', 'string', 'max:150'],
            'nik' => ['nullable', 'digits:16'],
            'no_hp' => ['required', 'string', 'max:30'],
            'tempat_lahir' => ['nullable', 'string', 'max:100'],
            'tanggal_lahir' => ['nullable', 'date'],
            'jenis_kelamin' => ['nullable', 'in:Laki-laki,Perempuan'],
            'suku_agama' => ['nullable', 'string', 'max:150'],
            'kewarganegaraan' => ['nullable', 'string', 'max:50'],
            'pekerjaan' => ['nullable', 'string', 'max:150'],
            'bentuk_organisasi' => ['nullable', 'string', 'max:150'],
            'jenis_kegiatan' => ['nullable', 'string', 'max:150'],
            'alamat_saat_ini' => ['required', 'string'],
            'korong_domisili' => ['required', 'string', 'max:100'],
            'wali_nama' => ['nullable', 'string', 'max:150'],
            'wali_nik' => ['nullable', 'digits:16'],
            'wali_no_hp' => ['nullable', 'string', 'max:30'],
            'penjelasan_keperluan' => ['required', 'string'],
            'ktp' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
            'kk' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
        ], 'nama');
    }

    public function updateStatus(Request $request, SuratRequest $suratRequest): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(array_keys(SuratRequest::STATUSES))],
        ]);

        $suratRequest->update(['status' => $validated['status']]);

        return redirect('/admin?panel=surat')->with('success', 'Status pengajuan surat berhasil diperbarui.');
    }

    public function destroy(SuratRequest $suratRequest): RedirectResponse
    {
        if ($suratRequest->ktp_path) {
            Storage::disk('public')->delete($suratRequest->ktp_path);
        }
        if ($suratRequest->kk_path) {
            Storage::disk('public')->delete($suratRequest->kk_path);
        }

        $suratRequest->delete();

        return redirect('/admin?panel=surat')->with('success', 'Pengajuan surat berhasil dihapus.');
    }

    private function handle(Request $request, string $type, array $rules, string $applicantNameField): RedirectResponse
    {
        $validated = $request->validate($rules);

        $ktpPath = $request->file('ktp')->store('surat-pengantar', 'public');
        $kkPath = $request->file('kk')->store('surat-pengantar', 'public');

        SuratRequest::create([
            'type' => $type,
            'applicant_name' => $validated[$applicantNameField],
            'keperluan' => $validated['penjelasan_keperluan'],
            'data' => collect($validated)->except(['ktp', 'kk', $applicantNameField, 'penjelasan_keperluan'])->toArray(),
            'ktp_path' => $ktpPath,
            'kk_path' => $kkPath,
        ]);

        return redirect()->route("formulir.$type")
            ->with('success', 'Pengajuan Anda berhasil dikirim. Data akan diverifikasi oleh Kantor Wali Nagari Campago sebelum surat diterbitkan.');
    }
}
