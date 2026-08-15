<?php

namespace App\Http\Controllers;

use App\Models\SuratRequest;
use App\Models\SuratTemplate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SuratRequestController extends Controller
{
    public function showCustom(SuratTemplate $suratTemplate)
    {
        abort_unless($suratTemplate->is_active, 404);

        $suratTemplate->load('fields');

        return view('formulir.custom', ['template' => $suratTemplate]);
    }

    public function storeCustom(Request $request, SuratTemplate $suratTemplate): RedirectResponse
    {
        abort_unless($suratTemplate->is_active, 404);

        $suratTemplate->load('fields');

        $rules = [
            'penjelasan_keperluan' => ['required', 'string'],
            'ktp' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
            'kk' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
        ];

        $applicantNameKey = null;
        foreach ($suratTemplate->fields as $field) {
            $inputName = 'kolom_'.$field->field_key;
            $fieldRules = [$field->is_required ? 'required' : 'nullable'];

            $fieldRules[] = match ($field->type) {
                'number' => 'numeric',
                'date' => 'date',
                'select', 'radio' => Rule::in($field->optionList()),
                'file' => 'file',
                default => 'string',
            };

            if ($field->type !== 'file') {
                $fieldRules[] = 'max:1000';
            } else {
                $fieldRules[] = 'mimes:jpg,jpeg,png,pdf';
                $fieldRules[] = 'max:4096';
            }

            $rules[$inputName] = $fieldRules;

            if ($field->is_applicant_name) {
                $applicantNameKey = $inputName;
            }
        }

        $validated = $request->validate($rules);

        $ktpPath = $request->file('ktp')->store('surat-pengantar', 'public');
        $kkPath = $request->file('kk')->store('surat-pengantar', 'public');

        $data = [];
        foreach ($suratTemplate->fields as $field) {
            $inputName = 'kolom_'.$field->field_key;
            if ($field->type === 'file') {
                $data[$field->field_key] = $request->hasFile($inputName)
                    ? $request->file($inputName)->store('surat-pengantar', 'public')
                    : null;
            } else {
                $data[$field->field_key] = $validated[$inputName] ?? null;
            }
        }

        SuratRequest::create([
            'type' => $suratTemplate->slug,
            'surat_template_id' => $suratTemplate->id,
            'applicant_name' => $applicantNameKey ? $validated[$applicantNameKey] : $suratTemplate->name,
            'keperluan' => $validated['penjelasan_keperluan'],
            'data' => $data,
            'ktp_path' => $ktpPath,
            'kk_path' => $kkPath,
        ]);

        return redirect()->route('formulir.custom', $suratTemplate)
            ->with('success', 'Pengajuan Anda berhasil dikirim. Data akan diverifikasi oleh Kantor Wali Nagari Campago sebelum surat diterbitkan.');
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
}
