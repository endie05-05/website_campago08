<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pengajuan Surat Domisili - Nagari Campago</title>

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
        .form-label .optional-tag {
            font-weight: 500;
            color: var(--color-text-muted);
            font-size: 0.78rem;
        }

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
            <h1>Pengajuan Surat Keterangan Domisili</h1>
            <p>Satu formulir ini berlaku untuk pengajuan Surat Keterangan Domisili perorangan maupun organisasi/kelompok. Pilih jenis permohonan, lalu isi data yang sesuai. Data yang dikirim akan diverifikasi oleh Kantor Wali Nagari Campago sebelum surat diterbitkan.</p>
            <div class="gform-required-note">Kolom bertanda <span class="required">*</span> wajib diisi.</div>
        </div>

        <form onsubmit="return handleGformSubmit(event)">

            <!-- Jenis Permohonan -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">1</span> Jenis Permohonan</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Jenis Permohonan Domisili <span class="required">*</span></label>
                        <div class="form-radio-group">
                            <div class="form-radio-pill">
                                <input type="radio" id="jenis_perorangan" name="jenis_permohonan" value="Perorangan" required>
                                <label for="jenis_perorangan">Perorangan</label>
                            </div>
                            <div class="form-radio-pill">
                                <input type="radio" id="jenis_organisasi" name="jenis_permohonan" value="Organisasi atau Kelompok">
                                <label for="jenis_organisasi">Organisasi atau Kelompok</label>
                            </div>
                        </div>
                        <span class="form-hint">Pilih "Organisasi atau Kelompok" jika surat diajukan atas nama komunitas/kegiatan, bukan pribadi.</span>
                    </div>
                </div>
            </div>

            <!-- Data Pemohon -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">2</span> Data Pemohon</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Nama Pemohon / Nama Organisasi <span class="required">*</span></label>
                        <input type="text" class="form-input" name="nama" placeholder="Contoh: Ade Irma Suryani, atau BKMT Kecamatan V Koto" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIK <span class="optional-tag">(khusus perorangan)</span></label>
                        <input type="text" class="form-input" name="nik" placeholder="16 digit sesuai KTP" maxlength="16" pattern="[0-9]{16}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor HP / WhatsApp <span class="required">*</span></label>
                        <input type="tel" class="form-input" name="no_hp" placeholder="Contoh: 08xxxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tempat Lahir <span class="optional-tag">(khusus perorangan)</span></label>
                        <input type="text" class="form-input" name="tempat_lahir" placeholder="Contoh: Kampung Dalam">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tanggal Lahir <span class="optional-tag">(khusus perorangan)</span></label>
                        <input type="date" class="form-input" name="tanggal_lahir">
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Jenis Kelamin <span class="optional-tag">(khusus perorangan)</span></label>
                        <div class="form-radio-group">
                            <div class="form-radio-pill">
                                <input type="radio" id="jk_l" name="jenis_kelamin" value="Laki-laki">
                                <label for="jk_l">Laki-laki</label>
                            </div>
                            <div class="form-radio-pill">
                                <input type="radio" id="jk_p" name="jenis_kelamin" value="Perempuan">
                                <label for="jk_p">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Suku / Agama <span class="optional-tag">(khusus perorangan)</span></label>
                        <input type="text" class="form-input" name="suku_agama" placeholder="Contoh: Chaniago / Islam">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Kewarganegaraan</label>
                        <input type="text" class="form-input" name="kewarganegaraan" value="WNI">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pekerjaan <span class="optional-tag">(khusus perorangan)</span></label>
                        <input type="text" class="form-input" name="pekerjaan" placeholder="Contoh: Mengurus Rumah Tangga">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bentuk Organisasi <span class="optional-tag">(khusus organisasi)</span></label>
                        <input type="text" class="form-input" name="bentuk_organisasi" placeholder="Contoh: Organisasi Non Formal">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis Kegiatan <span class="optional-tag">(khusus organisasi)</span></label>
                        <input type="text" class="form-input" name="jenis_kegiatan" placeholder="Contoh: Keagamaan">
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Alamat Saat Ini <span class="required">*</span></label>
                        <textarea class="form-textarea" name="alamat_saat_ini" placeholder="Alamat tempat tinggal/kesekretariatan saat ini, boleh di luar Nagari Campago" required></textarea>
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Korong Domisili di Nagari Campago <span class="required">*</span></label>
                        <select class="form-select" name="korong_domisili" required>
                            <option value="">Pilih korong</option>
                            <option>Korong Pasa</option>
                            <option>Korong Tarok</option>
                            <option>Korong Koto</option>
                            <option>Korong Mudik</option>
                            <option>Korong Ampang</option>
                            <option>Korong Balai</option>
                            <option>Korong Sawah</option>
                            <option>Korong Bukit</option>
                        </select>
                        <span class="form-hint">Korong tempat pemohon/organisasi terdaftar berdomisili di Nagari Campago.</span>
                    </div>
                </div>
            </div>

            <!-- Data Wali -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">3</span> Data Wali <span class="optional-tag">(opsional)</span></h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <span class="form-hint" style="margin-top: 0;">Isi bagian ini hanya jika pemohon belum menikah / masih di bawah perwalian.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Wali</label>
                        <input type="text" class="form-input" name="wali_nama" placeholder="Nama lengkap wali">
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIK Wali</label>
                        <input type="text" class="form-input" name="wali_nik" placeholder="16 digit sesuai KTP" maxlength="16" pattern="[0-9]{16}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor HP Wali</label>
                        <input type="tel" class="form-input" name="wali_no_hp" placeholder="Contoh: 08xxxxxxxxxx">
                    </div>
                </div>
            </div>

            <!-- Keperluan -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">4</span> Keperluan Pengajuan</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Penjelasan Surat Ini Untuk Apa <span class="required">*</span></label>
                        <textarea class="form-textarea" name="penjelasan_keperluan" style="min-height: 130px;" placeholder="Contoh: Surat ini digunakan untuk keperluan bekerja di luar negeri (Jepang)." required></textarea>
                        <span class="form-hint">Jelaskan sejelas-jelasnya, misalnya untuk keperluan pekerjaan, administrasi organisasi, atau keperluan lain yang membutuhkan bukti domisili.</span>
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Lampiran Pendukung</label>
                        <div class="form-file">
                            <input type="file" name="lampiran" accept="image/*,.pdf">
                        </div>
                        <span class="form-hint">Opsional: scan/foto KTP, KK, atau dokumen organisasi yang relevan.</span>
                    </div>
                </div>
            </div>

            <div class="gform-actions">
                <button type="submit" class="gform-submit-btn">Kirim Pengajuan</button>
            </div>
        </form>
    </div>

    <script>
        function handleGformSubmit(event) {
            event.preventDefault();
            alert('Ini baru antarmuka (UI) formulir. Backend pengajuan Surat Domisili perlu ditambahkan nanti!');
            return false;
        }
    </script>
</body>
</html>
