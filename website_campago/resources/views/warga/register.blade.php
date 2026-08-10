<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun Masyarakat - Nagari Campago</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:600,700|inter:400,500,600|manrope:400,500,600,700" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <style>
        /* Specific overrides for Login/Register Page */
        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(47, 93, 80, 0.15);

            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 440px;
            padding: 3rem 2.5rem;
            position: relative;
            z-index: 10;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-logo {
            width: 64px;
            height: 64px;
            background: var(--color-green-dark);
            color: var(--color-white);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-heading);
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1.25rem;
            box-shadow: 0 8px 20px rgba(31, 64, 55, 0.2);
        }

        .login-title {
            font-family: var(--font-heading);
            font-size: 2rem;
            color: var(--color-green-dark);
            margin-bottom: 0.5rem;
        }

        .login-subtitle {
            color: var(--color-text-muted);
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--color-green-dark);
            font-size: 0.9rem;
        }

        .form-hint-text {
            display: block;
            margin-top: 0.4rem;
            font-size: 0.8rem;
            color: var(--color-text-muted);
        }

        .form-input {
            width: 100%;
            padding: 0.85rem 1rem;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(47, 93, 80, 0.2);
            border-radius: 10px;
            font-family: var(--font-body);
            font-size: 1rem;
            color: var(--color-text-main);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--color-green-soft);
            box-shadow: 0 0 0 4px rgba(110, 136, 120, 0.15);
            background: #ffffff;
        }

        .login-btn {
            width: 100%;
            padding: 1rem;
            background: var(--color-green-dark);
            color: var(--color-white);
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            box-shadow: 0 4px 15px rgba(31, 64, 55, 0.2);
        }

        .login-btn:hover {
            background: var(--color-green-secondary);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(31, 64, 55, 0.25);
        }

        .login-switch {
            text-align: center;
            margin-top: 1.75rem;
            font-size: 0.9rem;
            color: var(--color-text-muted);
        }

        .login-switch a {
            color: var(--color-green-dark);
            font-weight: 600;
            text-decoration: underline;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            margin-top: 1.5rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: var(--color-green-dark);
        }

        /* Dekorasi tambahan agar tampilannya semakin elegan */
        .decor-circle {
            position: absolute;
            border-radius: 50%;
            z-index: 1;
            filter: blur(50px);
        }

        .circle-1 {
            width: 350px;
            height: 350px;
            background: rgba(218, 191, 132, 0.5); /* Gold */
            top: -100px;
            right: -100px;
        }

        .circle-2 {
            width: 300px;
            height: 300px;
            background: rgba(168, 193, 165, 0.5); /* Sage */
            bottom: -50px;
            left: -80px;
        }
    </style>
</head>
<body class="antialiased login-page">

    <!-- Dekorasi di belakang Card -->
    <div class="decor-circle circle-1"></div>
    <div class="decor-circle circle-2"></div>

    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">LOGO</div>
            <h1 class="login-title">Daftar Akun</h1>
            <p class="login-subtitle">Buat akun masyarakat untuk pengajuan surat pengantar online</p>
        </div>

        @if ($errors->any())
        <div class="form-group" style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #b02a2a;">
            {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('warga.register.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kk_number" class="form-label">Nomor Kartu Keluarga (KK)</label>
                <input type="text" inputmode="numeric" id="kk_number" name="kk_number" class="form-input" value="{{ old('kk_number') }}" placeholder="16 digit Nomor KK" maxlength="16" required autofocus>
            </div>

            <div class="form-group">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" inputmode="numeric" id="nik" name="nik" class="form-input" value="{{ old('nik') }}" placeholder="16 digit Nomor Induk Kependudukan" maxlength="16" required>
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-input" value="{{ old('name') }}" placeholder="Sesuai KTP/KK" required>
                <span class="form-hint-text">Gunakan nama yang sama setiap kali login.</span>
            </div>

            <button type="submit" class="login-btn">Daftar</button>
        </form>

        <div class="login-switch">
            Sudah punya akun? <a href="{{ route('warga.login') }}">Masuk di sini</a>
        </div>

        <div style="text-align: center;">
            <a href="/" class="back-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>

</body>
</html>
