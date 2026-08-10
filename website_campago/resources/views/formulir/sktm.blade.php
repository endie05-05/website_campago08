<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pengajuan SKTM - Nagari Campago</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:600,700|inter:400,500,600|manrope:400,500,600,700,800" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <style>
        body.gform-body {
            min-height: 100vh;
            padding: 3rem 1.5rem 6rem;
        }

        .gform-shell {
            width: 100%;
            max-width: 760px;
            margin: 0 auto;
        }

        .gform-back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-text-muted);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            transition: color 0.25s ease;
        }
        .gform-back-link:hover { color: var(--color-green-dark); }

        .gform-topbar {
            height: 10px;
            border-radius: 10px 10px 0 0;
            background: linear-gradient(90deg, var(--color-green-dark), var(--color-green-secondary), var(--color-green-soft), var(--color-green-secondary));
        }

        .gform-card {
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(47, 93, 80, 0.12);
            border-radius: 16px;
            box-shadow: 0 20px 45px rgba(31, 64, 55, 0.08);
            padding: 2rem 2rem 2.25rem;
            margin-bottom: 1.5rem;
        }

        .gform-header-card {
            border-radius: 0 0 16px 16px;
        }

        .gform-header-card::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -40px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(218, 191, 132, 0.35) 0%, transparent 70%);
            pointer-events: none;
        }

        .gform-header-card h1 {
            font-family: var(--font-heading);
            font-size: clamp(1.6rem, 3.5vw, 2.2rem);
            color: var(--color-green-dark);
            margin: 0.6rem 0 0.85rem;
        }

        .gform-header-card p {
            color: var(--color-text-muted);
            font-size: 0.95rem;
            line-height: 1.7;
            max-width: 560px;
        }

        .gform-required-note {
            margin-top: 1.5rem;
            padding-top: 1.25rem;
            border-top: 1px solid rgba(47, 93, 80, 0.12);
            font-size: 0.82rem;
            color: var(--color-text-muted);
        }
        .gform-required-note .required { color: var(--color-danger, #B3453D); font-weight: 700; }

        .gform-section-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-family: var(--font-heading);
            font-size: 1.15rem;
            color: var(--color-green-dark);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(47, 93, 80, 0.12);
        }

        .gform-section-badge {
            flex-shrink: 0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-green-dark), var(--color-green-secondary));
            color: var(--color-white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: 700;
        }

        .gform-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.25rem;
        }

        .form-group { margin-bottom: 1.25rem; }
        .form-group.full { grid-column: 1 / -1; }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--color-green-dark);
            font-size: 0.88rem;
        }
        .form-label .required { color: var(--color-danger, #B3453D); }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 0.8rem 1rem;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(47, 93, 80, 0.2);
            border-radius: 10px;
            font-family: var(--font-body);
            font-size: 0.95rem;
            color: var(--color-text-main);
            transition: all 0.25s ease;
        }
        .form-textarea { resize: vertical; min-height: 90px; }

        .form-input:focus, .form-select:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--color-green-soft);
            box-shadow: 0 0 0 4px rgba(110, 136, 120, 0.15);
            background: #ffffff;
        }

        .form-radio-group {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .form-radio-pill {
            position: relative;
        }
        .form-radio-pill input {
            position: absolute;
            opacity: 0;
            inset: 0;
            cursor: pointer;
        }
        .form-radio-pill label {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.7rem 1.3rem;
            border: 1px solid rgba(47, 93, 80, 0.25);
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--color-green-dark);
            background: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: all 0.25s ease;
        }
        .form-radio-pill input:checked + label {
            background: var(--color-green-dark);
            border-color: var(--color-green-dark);
            color: var(--color-white);
        }
        .form-radio-pill input:focus-visible + label {
            box-shadow: 0 0 0 4px rgba(110, 136, 120, 0.25);
        }

        .form-file {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            padding: 0.9rem 1rem;
            background: rgba(255, 255, 255, 0.6);
            border: 1px dashed rgba(47, 93, 80, 0.35);
            border-radius: 10px;
        }
        .form-file input[type="file"] { font-size: 0.82rem; max-width: 100%; }
        .form-hint {
            display: block;
            margin-top: 0.35rem;
            font-size: 0.75rem;
            color: var(--color-text-muted);
        }

        .form-error {
            display: block;
            margin-top: 0.35rem;
            font-size: 0.78rem;
            color: #b02a2a;
            font-weight: 600;
        }

        .gform-alert {
            padding: 0.9rem 1.25rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            font-weight: 600;
            font-size: 0.9rem;
        }
        .gform-alert-success {
            background: rgba(47, 93, 80, 0.12);
            border: 1px solid rgba(47, 93, 80, 0.3);
            color: var(--color-green-dark);
        }
        .gform-alert-error {
            background: rgba(200, 60, 60, 0.1);
            border: 1px solid rgba(200, 60, 60, 0.3);
            color: #b02a2a;
        }

        .gform-actions {
            display: flex;
            justify-content: flex-end;
            gap: 0.85rem;
            margin-top: 0.5rem;
        }

        .gform-submit-btn {
            padding: 0.95rem 2.2rem;
            background: linear-gradient(90deg, var(--color-green-dark), var(--color-green-secondary), var(--color-green-soft), var(--color-green-secondary));
            background-size: 300% 100%;
            color: var(--color-white);
            border: none;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(31, 64, 55, 0.25);
            transition: all 0.3s ease;
        }
        .gform-submit-btn:hover {
            background-position: 100% 0;
            transform: translateY(-2px);
        }

        @media (max-width: 640px) {
            .gform-card { padding: 1.5rem; }
            .gform-actions { justify-content: stretch; }
            .gform-submit-btn { width: 100%; }
        }
    </style>
</head>
<body class="antialiased gform-body">

    <div class="gform-shell">
        <a href="/layanan" class="gform-back-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali ke Layanan
        </a>

        <div class="gform-topbar"></div>
        <div class="gform-card gform-header-card">
            <span class="small-label">Formulir Online</span>
            <h1>Pengajuan Surat Keterangan Tidak Mampu (SKTM)</h1>
            <p>Satu formulir ini berlaku untuk semua jenis SKTM (Anak Sekolah, Biasa, Mahasiswa, Pindah KK dan KTP, maupun PMKS/BPJS). Pilih jenis surat yang sesuai, lalu jelaskan keperluannya pada kolom yang tersedia. Data yang dikirim akan diverifikasi oleh Kantor Wali Nagari Campago sebelum surat diterbitkan.</p>
            <div class="gform-required-note">Kolom bertanda <span class="required">*</span> wajib diisi.</div>
        </div>

        @if (session('success'))
        <div class="gform-alert gform-alert-success">✓ {{ session('success') }}</div>
        @endif

        @if ($errors->any())
        <div class="gform-alert gform-alert-error">Formulir belum bisa dikirim, periksa kembali isian di bawah ini.</div>
        @endif

        <form method="POST" action="{{ route('formulir.sktm.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Data Pemohon -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">1</span> Data Pemohon</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Jenis Surat SKTM <span class="required">*</span></label>
                        <select class="form-select" name="jenis_sktm" required>
                            <option value="">Pilih jenis surat yang diajukan</option>
                            @foreach (['SKTM Anak Sekolah', 'SKTM Biasa', 'SKTM Mahasiswa', 'SKTM Pindah KK dan KTP', 'SKTM, PMKS, BPJS'] as $jenis)
                            <option {{ old('jenis_sktm', request('jenis')) === $jenis ? 'selected' : '' }}>{{ $jenis }}</option>
                            @endforeach
                        </select>
                        @error('jenis_sktm')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" class="form-input" name="pemohon_nama" value="{{ old('pemohon_nama') }}" placeholder="Contoh: Muhammad Naufal" required>
                        @error('pemohon_nama')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tempat Lahir <span class="required">*</span></label>
                        <input type="text" class="form-input" name="pemohon_tempat_lahir" value="{{ old('pemohon_tempat_lahir') }}" placeholder="Contoh: Pariaman" required>
                        @error('pemohon_tempat_lahir')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tanggal Lahir <span class="required">*</span></label>
                        <input type="date" class="form-input" name="pemohon_tanggal_lahir" value="{{ old('pemohon_tanggal_lahir') }}" required>
                        @error('pemohon_tanggal_lahir')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Jenis Kelamin <span class="required">*</span></label>
                        <div class="form-radio-group">
                            <div class="form-radio-pill">
                                <input type="radio" id="jk_l" name="pemohon_jenis_kelamin" value="Laki-laki" {{ old('pemohon_jenis_kelamin') === 'Laki-laki' ? 'checked' : '' }} required>
                                <label for="jk_l">Laki-laki</label>
                            </div>
                            <div class="form-radio-pill">
                                <input type="radio" id="jk_p" name="pemohon_jenis_kelamin" value="Perempuan" {{ old('pemohon_jenis_kelamin') === 'Perempuan' ? 'checked' : '' }}>
                                <label for="jk_p">Perempuan</label>
                            </div>
                        </div>
                        @error('pemohon_jenis_kelamin')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Suku</label>
                        <input type="text" class="form-input" name="pemohon_suku" value="{{ old('pemohon_suku') }}" placeholder="Contoh: Chaniago">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Agama <span class="required">*</span></label>
                        <select class="form-select" name="pemohon_agama" required>
                            <option value="">Pilih agama</option>
                            @foreach (['Islam', 'Kristen Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'] as $agama)
                            <option {{ old('pemohon_agama') === $agama ? 'selected' : '' }}>{{ $agama }}</option>
                            @endforeach
                        </select>
                        @error('pemohon_agama')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Kewarganegaraan</label>
                        <input type="text" class="form-input" name="pemohon_kewarganegaraan" value="{{ old('pemohon_kewarganegaraan', 'Indonesia') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status / Pekerjaan <span class="required">*</span></label>
                        <input type="text" class="form-input" name="pemohon_pekerjaan" value="{{ old('pemohon_pekerjaan') }}" placeholder="Contoh: Pelajar, Mahasiswa, Wiraswasta" required>
                        @error('pemohon_pekerjaan')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Korong <span class="required">*</span></label>
                        <select class="form-select" name="pemohon_korong" required>
                            <option value="">Pilih korong</option>
                            @foreach (['Korong Pasa', 'Korong Tarok', 'Korong Koto', 'Korong Mudik', 'Korong Ampang', 'Korong Balai', 'Korong Sawah', 'Korong Bukit'] as $korong)
                            <option {{ old('pemohon_korong') === $korong ? 'selected' : '' }}>{{ $korong }}</option>
                            @endforeach
                        </select>
                        @error('pemohon_korong')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Alamat Lengkap <span class="required">*</span></label>
                        <textarea class="form-textarea" name="pemohon_alamat" placeholder="Nama jalan, RT/RW, dan keterangan lain" required>{{ old('pemohon_alamat') }}</textarea>
                        @error('pemohon_alamat')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- Data Ayah -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">2</span> Data Ayah (Bapak)</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Nama Ayah</label>
                        <input type="text" class="form-input" name="ayah_nama" value="{{ old('ayah_nama') }}" placeholder="Nama lengkap ayah">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-input" name="ayah_tempat_lahir" value="{{ old('ayah_tempat_lahir') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-input" name="ayah_tanggal_lahir" value="{{ old('ayah_tanggal_lahir') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Agama / Suku</label>
                        <input type="text" class="form-input" name="ayah_agama_suku" value="{{ old('ayah_agama_suku') }}" placeholder="Contoh: Islam / Piliang">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-input" name="ayah_pekerjaan" value="{{ old('ayah_pekerjaan') }}" placeholder="Contoh: Buruh Tani/Perkebunan">
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-textarea" name="ayah_alamat" placeholder="Diisi jika berbeda dengan alamat anak">{{ old('ayah_alamat') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Data Ibu -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">3</span> Data Ibu</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-input" name="ibu_nama" value="{{ old('ibu_nama') }}" placeholder="Nama lengkap ibu">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-input" name="ibu_tempat_lahir" value="{{ old('ibu_tempat_lahir') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-input" name="ibu_tanggal_lahir" value="{{ old('ibu_tanggal_lahir') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Agama / Suku</label>
                        <input type="text" class="form-input" name="ibu_agama_suku" value="{{ old('ibu_agama_suku') }}" placeholder="Contoh: Islam / Chaniago">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-input" name="ibu_pekerjaan" value="{{ old('ibu_pekerjaan') }}" placeholder="Contoh: Mengurus Rumah Tangga">
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-textarea" name="ibu_alamat" placeholder="Diisi jika berbeda dengan alamat anak">{{ old('ibu_alamat') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Keperluan -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">4</span> Keperluan Pengajuan</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Penjelasan Surat Ini Untuk Apa <span class="required">*</span></label>
                        <textarea class="form-textarea" name="penjelasan_keperluan" style="min-height: 130px;" placeholder="Contoh: Surat ini digunakan untuk pengajuan Beasiswa Program Indonesia Pintar (PIP) atas nama anak saya yang bersekolah di SD Negeri 01 Campago kelas 5." required>{{ old('penjelasan_keperluan') }}</textarea>
                        <span class="form-hint">Jelaskan sejelas-jelasnya, termasuk data pendukung terkait jenis surat yang dipilih (misalnya nama sekolah &amp; kelas untuk SKTM Anak Sekolah, atau nomor KK lama/baru untuk SKTM Pindah KK dan KTP).</span>
                        @error('penjelasan_keperluan')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Upload KTP <span class="required">*</span></label>
                        <div class="form-file">
                            <input type="file" name="ktp" accept="image/*,.pdf" required>
                        </div>
                        <span class="form-hint">Scan/foto KTP untuk diverifikasi pengelola.</span>
                        @error('ktp')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Upload Kartu Keluarga (KK) <span class="required">*</span></label>
                        <div class="form-file">
                            <input type="file" name="kk" accept="image/*,.pdf" required>
                        </div>
                        <span class="form-hint">Scan/foto KK untuk diverifikasi pengelola.</span>
                        @error('kk')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="gform-actions">
                <button type="submit" class="gform-submit-btn">Kirim Pengajuan</button>
            </div>
        </form>
    </div>
</body>
</html>
