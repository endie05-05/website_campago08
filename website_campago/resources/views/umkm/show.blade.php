<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $umkm->name }} - UMKM Campago</title>
    <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($umkm->description ?? ''), 160) }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:600,700|inter:400,500,600|manrope:400,500,600,700,800" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <style>
        body.article-body {
            padding: 3rem 1.5rem 6rem;
        }

        .article-shell {
            width: 100%;
            max-width: 760px;
            margin: 0 auto;
        }

        .article-back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-text-muted);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            transition: color 0.25s ease;
        }
        .article-back-link:hover { color: var(--color-green-dark); }

        .article-card {
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(47, 93, 80, 0.12);
            border-radius: 16px;
            box-shadow: 0 20px 45px rgba(31, 64, 55, 0.08);
            margin-bottom: 1.5rem;
        }

        .article-cover {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            display: block;
            background-color: var(--color-cream-alt);
        }

        .article-body-pad {
            padding: 2rem 2rem 2.25rem;
        }

        .umkm-detail-badge {
            display: inline-block;
            font-size: 0.78rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--color-green-secondary);
            font-weight: 700;
            margin-bottom: 0.6rem;
        }

        .article-title {
            font-family: var(--font-heading);
            font-size: clamp(1.6rem, 3.5vw, 2.2rem);
            color: var(--color-green-dark);
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .umkm-detail-owner {
            color: var(--color-text-muted);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .article-content {
            font-size: 1.02rem;
            line-height: 1.8;
            color: var(--color-text-main);
            white-space: pre-line;
            margin-bottom: 1.75rem;
        }

        .umkm-contact-title {
            font-family: var(--font-heading);
            font-size: 0.95rem;
            color: var(--color-green-dark);
            margin-bottom: 0.85rem;
        }

        .umkm-contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 0.85rem;
        }

        .umkm-contact-item {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.75rem 1rem;
            background-color: var(--color-cream-alt);
            border-radius: 10px;
            font-size: 0.88rem;
            color: var(--color-text-main);
        }
        .umkm-contact-item svg {
            flex-shrink: 0;
            color: var(--color-green-secondary);
        }
    </style>
</head>
<body class="antialiased article-body">

    <div class="article-shell">
        <a href="/#peta" class="article-back-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali ke Beranda
        </a>

        <div class="article-card">
            @if ($umkm->featured_image_path)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($umkm->featured_image_path) }}" alt="{{ $umkm->name }}" class="article-cover">
            @else
                <div class="article-cover"></div>
            @endif
            <div class="article-body-pad">
                <span class="umkm-detail-badge">{{ $umkm->korong->name ?? 'Nagari Campago' }}@if($umkm->category) &middot; {{ $umkm->category }}@endif</span>
                <h1 class="article-title">{{ $umkm->name }}</h1>
                @if ($umkm->owner_name)
                    <div class="umkm-detail-owner">Pemilik: {{ $umkm->owner_name }}</div>
                @endif

                @if ($umkm->description)
                    <div class="article-content">{{ $umkm->description }}</div>
                @else
                    <p class="text-muted" style="margin-bottom: 1.75rem;">Belum ada deskripsi untuk produk ini.</p>
                @endif

                <h2 class="umkm-contact-title">Kontak</h2>
                <div class="umkm-contact-grid">
                    @if ($umkm->address)
                    <div class="umkm-contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        {{ $umkm->address }}
                    </div>
                    @endif
                    @if ($umkm->phone)
                    <div class="umkm-contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        {{ $umkm->phone }}
                    </div>
                    @endif
                    @if ($umkm->whatsapp)
                    <div class="umkm-contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2z"></path></svg>
                        {{ $umkm->whatsapp }}
                    </div>
                    @endif
                    @if ($umkm->instagram)
                    <div class="umkm-contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        {{ $umkm->instagram }}
                    </div>
                    @endif
                    @if (!$umkm->address && !$umkm->phone && !$umkm->whatsapp && !$umkm->instagram)
                    <p class="text-muted">Kontak belum tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
