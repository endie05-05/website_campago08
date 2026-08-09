<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pengaduan Masyarakat - Nagari Campago</title>

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
        .form-textarea { resize: vertical; min-height: 140px; }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--color-green-soft);
            box-shadow: 0 0 0 4px rgba(110, 136, 120, 0.15);
            background: #ffffff;
        }

        .form-hint {
            display: block;
            margin-top: 0.35rem;
            font-size: 0.75rem;
            color: var(--color-text-muted);
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
            <h1>Pengaduan &amp; Aspirasi Masyarakat</h1>
            <p>Sampaikan pengaduan, keluhan, atau aspirasi Anda terkait pelayanan dan lingkungan Nagari Campago. Laporan akan diverifikasi dan ditindaklanjuti oleh Kantor Wali Nagari.</p>
            <div class="gform-required-note">Kolom bertanda <span class="required">*</span> wajib diisi.</div>
        </div>

        @if (session('success'))
        <div class="gform-alert gform-alert-success">✓ {{ session('success') }}</div>
        @endif

        @if ($errors->any())
        <div class="gform-alert gform-alert-error">Formulir belum bisa dikirim, periksa kembali isian di bawah ini.</div>
        @endif

        <form method="POST" action="{{ route('pengaduan.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Data Pelapor -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">1</span> Data Pelapor</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" class="form-input" name="name" value="{{ old('name') }}" placeholder="Nama sesuai KTP" required>
                        @error('name')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor HP / WhatsApp <span class="required">*</span></label>
                        <input type="tel" class="form-input" name="phone" value="{{ old('phone') }}" placeholder="Contoh: 08xxxxxxxxxx" required>
                        @error('phone')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email <span class="optional-tag">(opsional)</span></label>
                        <input type="email" class="form-input" name="email" value="{{ old('email') }}" placeholder="nama@email.com">
                        @error('email')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <!-- Isi Pengaduan -->
            <div class="gform-card">
                <h2 class="gform-section-title"><span class="gform-section-badge">2</span> Isi Pengaduan</h2>
                <div class="gform-grid">
                    <div class="form-group full">
                        <label class="form-label">Subjek Pengaduan <span class="required">*</span></label>
                        <input type="text" class="form-input" name="subject" value="{{ old('subject') }}" placeholder="Contoh: Lampu jalan mati di Korong Pasa" required>
                        @error('subject')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Uraian Pengaduan <span class="required">*</span></label>
                        <textarea class="form-textarea" name="message" placeholder="Jelaskan pengaduan Anda selengkap mungkin: lokasi kejadian, waktu, dan kondisi yang dilaporkan." required>{{ old('message') }}</textarea>
                        @error('message')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group full">
                        <label class="form-label">Foto Pendukung <span class="optional-tag">(opsional)</span></label>
                        <div class="form-file">
                            <input type="file" name="photo" accept="image/*">
                        </div>
                        <span class="form-hint">Opsional: foto sebagai bukti pendukung, maksimal 2MB.</span>
                        @error('photo')<span class="form-error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="gform-actions">
                <button type="submit" class="gform-submit-btn">Kirim Pengaduan</button>
            </div>
        </form>
    </div>
</body>
</html>
