<tr data-type="{{ $pengajuan->type }}">
    <td>{{ $pengajuan->applicant_name }}</td>
    <td>{{ $pengajuan->typeLabel() }}</td>
    <td>{{ $pengajuan->created_at->translatedFormat('d M Y, H:i') }}</td>
    <td>
        <form method="POST" action="{{ route('admin.surat.status', $pengajuan) }}">
            @csrf
            <select name="status" class="form-select admin-table-status" onchange="this.form.submit()">
                @foreach (\App\Models\SuratRequest::STATUSES as $value => $label)
                <option value="{{ $value }}" {{ $pengajuan->status === $value ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </form>
    </td>
    <td>
        <div class="admin-table-actions">
            <label for="toggle-surat-{{ $pengajuan->id }}" class="btn-link" style="font-size: 0.82rem;">Detail</label>

            <form method="POST" action="{{ route('admin.surat.destroy', $pengajuan) }}" data-confirm="Hapus pengajuan surat dari {{ $pengajuan->applicant_name }}?">
                @csrf
                <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus pengajuan">&times;</button>
            </form>
        </div>
    </td>
</tr>

{{-- Modal dirender di luar tabel (lewat stack) supaya position:fixed-nya tidak
     kejebak konteks apa pun dari struktur <table>/<td>. Trigger-nya tetap di
     dalam tabel lewat <label for="..."> yang menunjuk checkbox ini dari jauh. --}}
@push('surat-modals')
<div class="detail-toggle">
    <input type="checkbox" id="toggle-surat-{{ $pengajuan->id }}" hidden>
    <div class="admin-modal-overlay">
        <div class="admin-modal-content" role="dialog" aria-modal="true">
            <label class="admin-modal-close" for="toggle-surat-{{ $pengajuan->id }}" aria-label="Tutup">&times;</label>

            <div class="admin-modal-body">
                <span class="status-pill status-type">{{ $pengajuan->typeLabel() }}</span>
                <span class="status-pill status-{{ $pengajuan->status }}">{{ $pengajuan->statusLabel() }}</span>
                <h2 style="margin-top: 0.75rem;">{{ $pengajuan->applicant_name }}</h2>
                <p style="color: var(--color-text-muted); font-size: 0.82rem; margin-bottom: 1.25rem;">Diajukan {{ $pengajuan->created_at->translatedFormat('d M Y, H:i') }}</p>

                <p class="pengaduan-subject">Keperluan</p>
                <p class="pengaduan-message">{{ $pengajuan->keperluan }}</p>

                @if ($pengajuan->attachment_path)
                    <a href="{{ \Illuminate\Support\Facades\Storage::url($pengajuan->attachment_path) }}" target="_blank" rel="noopener" class="btn-link" style="display: inline-block; margin-top: 0.85rem; font-size: 0.85rem;">Lihat Lampiran</a>
                @endif

                @if (! empty($pengajuan->data))
                <div class="surat-detail-grid" style="margin-top: 1.25rem;">
                    @foreach ($pengajuan->data as $key => $value)
                        @if (filled($value))
                        @php
                            // Prefix "pemohon_" cuma pengulangan (modal ini memang tentang pemohon),
                            // jadi dibuang. Prefix ayah_/ibu_/wali_ dipertahankan karena itu yang
                            // membedakan field itu punya siapa.
                            $label = str_starts_with($key, 'pemohon_') ? substr($key, 8) : $key;
                            $label = \Illuminate\Support\Str::title(str_replace('_', ' ', $label));
                        @endphp
                        <div class="surat-detail-item">
                            <span class="label">{{ $label }}</span>
                            <span class="value">{{ $value }}</span>
                        </div>
                        @endif
                    @endforeach
                </div>
                @endif

                <div class="admin-modal-footer">
                    <label for="toggle-surat-{{ $pengajuan->id }}" class="btn-link">&larr; Kembali ke Tabel</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endpush
