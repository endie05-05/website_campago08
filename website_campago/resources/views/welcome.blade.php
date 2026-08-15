<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nagari Campago - Website Resmi</title>
    <meta name="description" content="Website Resmi Nagari Campago, Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman. Jelajahi potensi, budaya, dan kehidupan masyarakat.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:400,600,700,400i|inter:400,500,600|manrope:400,500,600,700,800" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body class="antialiased">

    <!-- 1. Navbar -->
    <nav class="navbar" id="navbar" aria-label="Navigasi utama">
        <div class="container nav-container">
            <a href="/" class="nav-brand">
                @if ($villageProfile->logo_path ?? null)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($villageProfile->logo_path) }}" alt="Logo Nagari Campago" class="nav-logo-img">
                @else
                <div class="nav-logo-placeholder">LOGO</div>
                @endif
                Nagari Campago
            </a>

            <ul class="nav-links" id="primary-navigation">
                <li><a href="#" class="nav-link active">Beranda</a></li>
                <li><a href="#profil" class="nav-link">Profil</a></li>
                <li><a href="#pemerintahan" class="nav-link">Struktur Nagari</a></li>
                <li><a href="#potensi" class="nav-link">Potensi</a></li>
                <li><a href="#berita" class="nav-link">Informasi</a></li>
                <li><a href="#galeri" class="nav-link">Galeri</a></li>
                <li><a href="/layanan" class="nav-link">Layanan</a></li>
            </ul>

            <div class="nav-actions">

                <button class="search-btn" type="button" id="searchTrigger" aria-label="Cari di situs" aria-haspopup="dialog" aria-controls="searchOverlay"><span>Cari</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </button>
                <a href="/login" class="nav-login">Login sebagai Pengelola</a>
            </div>

            <button class="mobile-menu-btn" type="button" aria-label="Buka menu navigasi" aria-controls="primary-navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Overlay Pencarian Situs -->
    <div class="search-overlay" id="searchOverlay" role="dialog" aria-modal="true" aria-label="Pencarian situs">
        <div class="search-box">
            <div class="search-box-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="searchInput" class="search-input" placeholder="Cari halaman, berita, potensi, UMKM..." autocomplete="off">
                <button type="button" class="search-close" id="searchClose" aria-label="Tutup pencarian">&times;</button>
            </div>
            <div class="search-results" id="searchResults"></div>
        </div>
    </div>

    <!-- 2. Hero Section -->
    @php
        // Slide foto beranda diambil langsung dari foto Berita dan foto produk UMKM
        // (digabung di HomeController), jadi admin cukup upload sekali lewat menu itu.
        $heroSlideItems = $heroSlides;
        $featuredSlide = $heroSlideItems->first();
    @endphp
    <header class="hero">
        <div class="hero-card">
            <div class="hero-grid">
                <div class="hero-content animate-on-scroll">
                    <span class="small-label">Website Resmi</span>
                    <h1 class="hero-headline">NAGARI<br>CAMPAGO</h1>
                    <h2 class="hero-subheadline">Kecamatan V Koto Kampung Dalam<br>Kabupaten Padang Pariaman</h2>
                    <p class="hero-desc">Menjelajahi potensi, budaya, dan kehidupan masyarakat Nagari Campago.</p>

                    <div class="hero-actions">
                        <a href="#potensi" class="btn btn-primary">Jelajahi Campago</a>
                    </div>
                </div>

                <div class="hero-photo animate-on-scroll delay-1">
                    <div class="hero-photo-frame" id="heroSlideFrame">
                        <div class="hero-slide-track" id="heroSlideTrack">
                            @forelse ($heroSlideItems as $slide)
                                <div class="hero-slide" data-title="{{ $slide['title'] }}" data-label="{{ $slide['label'] }}">
                                    <img src="{{ $slide['url'] }}" alt="{{ $slide['title'] }}" class="hero-photo-img">
                                </div>
                            @empty
                                <div class="hero-slide" data-title="Nagari Campago" data-label="Website Resmi">
                                    <img src="{{ asset('images/ngaricampago.jpeg') }}" alt="Nagari Campago" class="hero-photo-img">
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="hero-photo-caption" id="heroSlideCaption">
                        <span class="hero-photo-caption-label" id="heroSlideCaptionLabel">{{ $featuredSlide['label'] ?? 'Website Resmi' }}</span>
                        <span class="hero-photo-caption-title" id="heroSlideCaptionTitle">{{ $featuredSlide['title'] ?? 'Nagari Campago' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 3. Section "Mengenal Campago" -->
    <section id="profil" class="section-padding">
        <div class="container about-grid">
            <div class="about-content animate-on-scroll delay-1">
                <span class="small-label">Tentang Nagari</span>
                <h2 class="section-heading">Mengenal Nagari Campago</h2>
                <blockquote class="about-desc text-justify">
                    Nagari Campago merupakan salah satu nagari yang berada di Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat. Nagari ini memiliki kehidupan masyarakat yang kuat dengan nilai kebersamaan, budaya Minangkabau, serta potensi pertanian dan ekonomi lokal.
                </blockquote>
                <a href="#" class="btn-link">Selengkapnya tentang Campago</a>
            </div>
            <x-peta-nagari class="about-img animate-on-scroll" />
        </div>
    </section>

    <!-- 4. Struktur Nagari -->
    <section id="pemerintahan" class="section-padding bg-cream-light org-section">
        <div class="container">
            <div class="potensi-header animate-on-scroll org-header" style="text-align: center; margin: 0 auto 0.85rem; max-width: 700px;">
                <span class="small-label" style="justify-content: center; display: flex; margin-bottom: 0.35rem;">Pemerintahan</span>
                <h2 class="section-heading org-heading-marked" style="font-size: clamp(2.3rem, 3.8vw, 3.3rem); margin-bottom: 0.4rem;">Aparatur Nagari</h2>
                <p class="potensi-desc" style="text-align: center; font-size: 0.85rem;">Mengenal susunan perangkat Nagari Campago yang bertugas melayani masyarakat dan memajukan nagari.</p>
            </div>

            @php
                $posLower = fn ($o) => strtolower($o->position);
                $waliNagari = $officials->first(fn ($o) => str_contains($posLower($o), 'wali nagari'));
                $sekretaris = $officials->first(fn ($o) => str_contains($posLower($o), 'sekretaris'));
                $kasiKaur = $officials->filter(fn ($o) => str_starts_with($posLower($o), 'kasi') || str_starts_with($posLower($o), 'kaur'));
                $waliKorong = $officials->filter(fn ($o) => str_contains($posLower($o), 'wali korong') || str_contains($posLower($o), 'wali jorong'));
                $staf = $officials->filter(fn ($o) => str_starts_with($posLower($o), 'staf'));

                $terpetakanIds = collect([$waliNagari, $sekretaris])->filter()->pluck('id')
                    ->merge($kasiKaur->pluck('id'))
                    ->merge($waliKorong->pluck('id'))
                    ->merge($staf->pluck('id'));
                $lainnya = $officials->reject(fn ($o) => $terpetakanIds->contains($o->id));

                // Setiap baris dipecah eksplisit per beberapa item supaya tidak ke-wrap acak oleh
                // flexbox (yang bikin garis penghubung jadi salah arah kalau jumlah kotaknya banyak).
                $baguskanBaris = fn ($items, $maks, $compact = false) => $items->isEmpty()
                    ? []
                    : $items->chunk($maks)->map(fn ($c) => ['items' => $c->values()->all(), 'compact' => $compact])->values()->all();

                $strukturBaris = array_merge(
                    $waliNagari ? [['items' => [$waliNagari], 'compact' => false]] : [],
                    $sekretaris ? [['items' => [$sekretaris], 'compact' => false]] : [],
                    $baguskanBaris($kasiKaur, 5),
                    $baguskanBaris($waliKorong, 8, true),
                    $baguskanBaris($staf, 8, true),
                    $baguskanBaris($lainnya, 5)
                );
            @endphp

            <div class="org-chart animate-on-scroll delay-1">
                @if ($officials->isEmpty())
                    <p class="text-muted" style="text-align: center;">Data aparatur belum tersedia.</p>
                @else
                    @foreach ($strukturBaris as $baris)
                        @continue(empty($baris['items']))
                        <ul class="org-row @if($baris['compact']) org-row-compact @endif">
                            @foreach ($baris['items'] as $official)
                            <li class="org-node @if($official->is($waliNagari)) org-node-highlight @endif">
                                <div class="org-box @if($baris['compact']) org-box-sm @endif">
                                    @if ($official->photo_path)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($official->photo_path) }}" alt="{{ $official->name }}" class="org-photo" style="object-fit: cover;">
                                    @else
                                        <div class="org-photo">FOTO</div>
                                    @endif
                                    <div class="org-info">
                                        <div class="org-position">{{ $official->position }}</div>
                                        <div class="org-name">{{ $official->name }}</div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- 5. Statistik Nagari -->
    <section id="statistik" class="stats">
        @php
            $korongIconSvgPath = '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>';
            $luasWilayahText = $villageProfile->area_km2 ? number_format($villageProfile->area_km2, 2, ',', '.') : '—';
            $pendudukText = $villageProfile->population ? number_format($villageProfile->population, 0, ',', '.') : '—';

            $korongList = $korongs->map(function ($korong) {
                return [
                    'nama' => $korong->name,
                ];
            });
        @endphp
        <input type="checkbox" id="toggle-korong" class="modal-toggle" hidden>
        <div class="container stats-grid">
            <label class="stat-item stat-item-clickable animate-on-scroll" for="toggle-korong">
                <div class="stat-number">{{ $korongCount }}</div>
                <div class="stat-label">Korong</div>
                <span class="stat-item-hint">Lihat daftar</span>
            </label>
            <div class="stat-item animate-on-scroll delay-1">
                <div class="stat-number">{{ $luasWilayahText }}</div>
                <div class="stat-label">Luas Wilayah</div>
            </div>
            <div class="stat-item animate-on-scroll delay-2">
                <div class="stat-number">{{ $pendudukText }}</div>
                <div class="stat-label">Penduduk</div>
            </div>
        </div>

        <div class="modal-overlay modal-korong">
            <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="categoryTitleKorong">
                <label class="modal-close" for="toggle-korong" aria-label="Tutup informasi">×</label>
                <div class="modal-header modal-header-korong">
                    <div class="modal-icon-badge"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                    <div>
                        <span class="small-label">Wilayah Administratif</span>
                        <h2 id="categoryTitleKorong">Korong di Nagari Campago</h2>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="modal-quick-stats">
                        <div class="modal-quick-stat">
                            <span class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                            <div><span class="value">{{ count($korongList) }}</span><span class="label">Korong</span></div>
                        </div>
                        <div class="modal-quick-stat">
                            <span class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="3"></rect></svg></span>
                            <div><span class="value">{{ $luasWilayahText }} km²</span><span class="label">Luas wilayah</span></div>
                        </div>
                    </div>
                    <div class="modal-list">
                        <h3>Daftar Korong</h3>
                        <div class="location-grid">
                            @foreach ($korongList as $korong)
                            <div class="location-card">
                                <span class="icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $korongIconSvgPath !!}</svg></span>
                                <div>
                                    <div class="name">{{ $korong['nama'] }}</div>
                                    <div class="korong">Nagari Campago</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Potensi Nagari -->
    <section id="potensi" class="section-padding">
        <div class="container">
            <div class="potensi-header animate-on-scroll">
                <h2 class="section-heading">Jelajahi Potensi Campago</h2>
                <p class="potensi-desc text-justify">Temukan berbagai potensi alam, ekonomi, budaya, dan kehidupan masyarakat Nagari Campago.</p>
            </div>

            <div class="bento-grid">
                @forelse ($potentials as $i => $potential)
                <div class="bento-item @if($potential->card_size === 'besar') bento-item-large @endif animate-on-scroll delay-{{ min($i, 3) }}">
                    @if ($potential->featured_image_path)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($potential->featured_image_path) }}" alt="{{ $potential->name }}" class="bento-img">
                    @else
                        <div class="bento-img-placeholder">IMAGE PLACEHOLDER</div>
                    @endif
                    <div class="bento-content">
                        <h3 class="bento-title">{{ $potential->name }}</h3>
                        <p class="bento-desc">{{ $potential->short_description }}</p>
                    </div>
                </div>
                @empty
                <p class="text-muted">Data potensi belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- 7. Berita Terkini -->
    <section id="berita" class="section-padding bg-cream-light">
        <div class="container">
            <div class="news-header animate-on-scroll">
                <div>
                    <span class="small-label">Informasi Nagari</span>
                    <h2 class="section-heading" style="margin-bottom: 0.5rem;">Berita Terkini dari Campago</h2>
                    <p class="potensi-desc">Berita, kegiatan, dan cerita terbaru dari masyarakat Nagari Campago.</p>
                </div>
                <a href="#berita" class="btn-link">Lihat semua berita</a>
            </div>

            <div class="news-grid">
                @if ($mainPost)
                <a href="{{ route('berita.show', $mainPost) }}" class="news-main animate-on-scroll">
                    @if ($mainPost->featured_image_path)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($mainPost->featured_image_path) }}" alt="{{ $mainPost->title }}" class="placeholder-img" style="object-fit: cover;">
                    @else
                        <div class="placeholder-img">NEWS IMAGE PLACEHOLDER</div>
                    @endif
                    <div class="news-meta">
                        @if ($mainPost->category)
                            <span class="news-meta-cat">{{ $mainPost->category->name }}</span>
                        @endif
                        <span>{{ $mainPost->published_at?->locale('id')->translatedFormat('d F Y') }}</span>
                    </div>
                    <h3 class="news-main-title">{{ $mainPost->title }}</h3>
                    <p class="news-main-desc text-justify">{{ \Illuminate\Support\Str::limit(strip_tags($mainPost->content ?: ($mainPost->excerpt ?? '')), 170) }}</p>
                    <span class="btn-link">Baca selengkapnya</span>
                </a>
                @else
                <div class="news-main animate-on-scroll">
                    <p class="text-muted">Belum ada berita.</p>
                </div>
                @endif

                <div class="news-list animate-on-scroll delay-1">
                    @forelse ($otherPosts as $post)
                    <a href="{{ route('berita.show', $post) }}" class="news-item">
                        @if ($post->featured_image_path)
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}" class="placeholder-img" style="object-fit: cover;">
                        @else
                            <div class="placeholder-img">IMAGE PLACEHOLDER</div>
                        @endif
                        <div>
                            <div class="news-meta">{{ $post->published_at?->locale('id')->translatedFormat('d F Y') }}</div>
                            <h4 class="news-item-title">{{ $post->title }}</h4>
                            <p class="news-item-desc">{{ \Illuminate\Support\Str::limit(strip_tags($post->content ?: ($post->excerpt ?? '')), 85) }}</p>
                        </div>
                    </a>
                    @empty
                    <p class="text-muted">Belum ada berita lainnya.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Peta Digital -->
    <section id="peta" class="section-padding map-section">
        <div class="container map-grid">
            <input type="checkbox" id="toggle-fasilitas-umum" class="modal-toggle" hidden>
            <input type="checkbox" id="toggle-umkm" class="modal-toggle" hidden>
            <div class="map-info animate-on-scroll">
                <h2 class="section-heading">Temukan Campago</h2>
                <p class="potensi-desc text-justify" style="margin-bottom: 2rem;">Jelajahi fasilitas umum, sekolah, tempat ibadah, UMKM, layanan kesehatan, jam operasional, dan lokasi penting lainnya melalui peta digital Nagari Campago.</p>
                <div class="map-filters">
                    <label class="filter-btn" for="toggle-fasilitas-umum">Fasilitas Umum</label>
                    <label class="filter-btn" for="toggle-umkm">UMKM</label>
                </div>
            </div>

            @php
                $umkmKategoriList = $umkms->pluck('category')->unique()->values();
            @endphp

            <div class="map-placeholder animate-on-scroll delay-1" id="mapPlaceholder">
                @if ($peta['foto_path'] ?? null)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($peta['foto_path']) }}" alt="Temukan Campago" class="map-placeholder-img">
                @else
                <span class="map-placeholder-empty">Foto belum diunggah</span>
                @endif
            </div>

            <div class="modal-overlay modal-fasilitas-umum">
                <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="categoryTitle">
                    <label class="modal-close" for="toggle-fasilitas-umum" aria-label="Tutup informasi">×</label>
                    <div class="modal-header modal-header-fasum">
                        <div class="modal-icon-badge"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></div>
                        <div>
                            <span class="small-label">Informasi Kategori</span>
                            <h2 id="categoryTitle">Fasilitas Umum Campago</h2>
                            <p id="categoryDescription">{{ $peta['fasum_deskripsi'] }}</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-list">
                            <h3>Daftar Lokasi</h3>
                            <div class="location-grid">
                                @forelse ($fasilitasUmumList as $lokasi)
                                <div class="location-card">
                                    <span class="icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                                    <div>
                                        <div class="name">{{ $lokasi->name }}</div>
                                    </div>
                                </div>
                                @empty
                                <p class="text-muted">Data fasilitas umum belum tersedia.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-overlay modal-umkm">
                <div class="modal-content modal-content-wide" role="dialog" aria-modal="true" aria-labelledby="categoryTitleUmkm">
                    <label class="modal-close" for="toggle-umkm" aria-label="Tutup informasi">×</label>
                    <div class="modal-header modal-header-umkm">
                        <div class="modal-icon-badge">🛍️</div>
                        <div>
                            <span class="small-label">Informasi Kategori</span>
                            <h2 id="categoryTitleUmkm">UMKM Lokal Campago</h2>
                            <p id="categoryDescriptionUmkm">Usaha mikro, kecil, dan menengah yang menampung produk lokal khas Campago seperti kuliner, kerajinan, dan pertanian.</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-quick-stats">
                            <div class="modal-quick-stat">
                                <span class="icon">🏪</span>
                                <div><span class="value">{{ $umkms->count() }}</span><span class="label">Produk unggulan</span></div>
                            </div>
                            <div class="modal-quick-stat">
                                <span class="icon">🗂️</span>
                                <div><span class="value">{{ $umkmKategoriList->count() }}</span><span class="label">Kategori usaha</span></div>
                            </div>
                        </div>
                        <div class="modal-tags">
                            @foreach ($umkmKategoriList as $kategori)
                            <span class="modal-tag">{{ $kategori }}</span>
                            @endforeach
                        </div>
                        <div class="modal-list">
                            <h3>Produk dari Campago</h3>
                            <div class="modal-umkm-grid">
                                @forelse ($umkms as $produk)
                                <div class="umkm-card">
                                    @if ($produk->featured_image_path)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($produk->featured_image_path) }}" alt="{{ $produk->name }}" class="umkm-img" style="object-fit: cover;">
                                    @else
                                        <div class="placeholder-img umkm-img">UMKM IMAGE PLACEHOLDER</div>
                                    @endif
                                    <span class="umkm-cat">{{ $produk->category }}</span>
                                    <h3 class="umkm-title">{{ $produk->name }}</h3>
                                    <div class="umkm-owner">{{ $produk->owner_name }}</div>
                                    <div class="umkm-location">{{ $produk->address }}</div>
                                </div>
                                @empty
                                <p class="text-muted">Data UMKM belum tersedia.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $jamOperasional = [
                    ['icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>', 'nama' => 'Senin - Jumat', 'keterangan' => '08.00 - 16.00 WIB'],
                    ['icon' => '<path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line>', 'nama' => 'Istirahat', 'keterangan' => '12.00 - 13.00 WIB'],
                    ['icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>', 'nama' => 'Sabtu - Minggu', 'keterangan' => 'Libur'],
                ];
            @endphp
        </div>
    </section>

    <!-- 9. Culture / Gallery -->
    <section id="galeri" class="section-padding">
        <div class="container gallery-split animate-on-scroll">
            <div class="gallery-text">
                <div class="gallery-hero-label">Campago Punya Cerita</div>
                <div class="gallery-hero-content">
                    <p class="gallery-title">"Setiap sudut Nagari Campago menyimpan cerita — dari adat istiadat dan gotong royong, hingga warna kehidupan sehari-hari yang terus hidup lintas generasi."</p>
                    <a href="#" class="btn-link">Lihat Galeri Selengkapnya</a>
                </div>
            </div>

            @php
                // Galeri Utama diutamakan, sisa slot kolase diisi foto produk UMKM
                // supaya kolase tetap terasa penuh walau foto galeri masih sedikit.
                $collagePhotos = $galleryImages->map(fn ($img) => [
                        'url' => \Illuminate\Support\Facades\Storage::url($img->image_path),
                        'alt' => $img->caption ?? 'Galeri Nagari Campago',
                    ])
                    ->concat(
                        $umkms->whereNotNull('featured_image_path')->map(fn ($produk) => [
                            'url' => \Illuminate\Support\Facades\Storage::url($produk->featured_image_path),
                            'alt' => $produk->name,
                        ])
                    )
                    ->take(5);
            @endphp
            <div class="gallery-collage">
                @forelse ($collagePhotos as $i => $photo)
                    <div class="collage-item collage-item-{{ $i + 1 }}">
                        <img src="{{ $photo['url'] }}" alt="{{ $photo['alt'] }}">
                    </div>
                @empty
                    <div class="gallery-collage-empty">Belum ada foto galeri.<br>Nantikan cerita Nagari Campago selanjutnya.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- 10. Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="footer-brand-header">
                        @if ($villageProfile->logo_path ?? null)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($villageProfile->logo_path) }}" alt="Logo Nagari Campago" class="nav-logo-img">
                        @else
                        <div class="nav-logo-placeholder">LOGO</div>
                        @endif
                        <h3>Pemerintah Nagari Campago</h3>
                    </div>
                    <div class="footer-brand-body">
                        <p class="footer-tagline">{{ $kontak['deskripsi'] }}</p>
                        <p class="footer-address">{{ $kontak['alamat'] }}</p>
                        @if ($kontak['kode_wilayah'])
                            <p class="footer-kode-wilayah"><strong>Kode Wilayah:</strong> {{ $kontak['kode_wilayah'] }}</p>
                        @endif
                    </div>
                </div>

                <div>
                    <h4 class="footer-heading">Hubungi Kami</h4>
                    <ul class="footer-contact">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <a href="tel:{{ $kontak['telepon'] }}">{{ $kontak['telepon'] }}</a>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <a href="mailto:{{ $kontak['email'] }}">{{ $kontak['email'] }}</a>
                        </li>
                    </ul>
                    @if ($kontak['facebook_url'] || $kontak['youtube_url'])
                        <div class="footer-social">
                            @if ($kontak['facebook_url'])
                                <a href="{{ $kontak['facebook_url'] }}" target="_blank" rel="noopener" aria-label="Facebook" class="footer-social-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06C2 17.08 5.66 21.23 10.44 22v-7.03H7.9v-2.91h2.54V9.85c0-2.51 1.49-3.9 3.77-3.9 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.89h2.78l-.45 2.91h-2.33V22C18.34 21.23 22 17.08 22 12.06z"></path></svg>
                                </a>
                            @endif
                            @if ($kontak['youtube_url'])
                                <a href="{{ $kontak['youtube_url'] }}" target="_blank" rel="noopener" aria-label="YouTube" class="footer-social-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.19a3.02 3.02 0 0 0-2.12-2.14C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.38.55A3.02 3.02 0 0 0 .5 6.19 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.81 3.02 3.02 0 0 0 2.12 2.14C4.5 20.5 12 20.5 12 20.5s7.5 0 9.38-.55a3.02 3.02 0 0 0 2.12-2.14A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.81zM9.6 15.5v-7l6.3 3.5-6.3 3.5z"></path></svg>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>

                <div>
                    <h4 class="footer-heading">Jam Pelayanan</h4>
                    <ul class="footer-schedule">
                        @foreach ($jamOperasional as $jadwal)
                        <li>
                            <span class="footer-schedule-day"><svg class="footer-schedule-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $jadwal['icon'] !!}</svg>{{ $jadwal['nama'] }}</span>
                            <span class="footer-schedule-time">{{ $jadwal['keterangan'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                {{ $kontak['copyright'] }}
            </div>
        </div>
    </footer>

    <!-- Scripts for simple interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Slide foto hero -- foto berikutnya masuk dari kanan lalu bergeser ke kiri,
            // berjalan otomatis selama ada lebih dari 1 foto di panel admin Foto Beranda.
            const heroSlideTrack = document.getElementById('heroSlideTrack');
            const heroSlideCaptionLabel = document.getElementById('heroSlideCaptionLabel');
            const heroSlideCaptionTitle = document.getElementById('heroSlideCaptionTitle');
            if (heroSlideTrack) {
                const originalSlides = Array.from(heroSlideTrack.querySelectorAll('.hero-slide'));
                if (originalSlides.length > 1) {
                    // Klon slide pertama ditaruh di akhir supaya transisi dari slide terakhir
                    // kembali ke yang pertama tetap terasa bergeser ke kiri, bukan meluncur mundur.
                    heroSlideTrack.appendChild(originalSlides[0].cloneNode(true));
                    const totalReal = originalSlides.length;
                    let slideIndex = 0;

                    setInterval(() => {
                        slideIndex++;
                        heroSlideTrack.style.transform = `translateX(-${slideIndex * 100}%)`;
                        const captionSlide = originalSlides[slideIndex % totalReal];
                        if (heroSlideCaptionTitle) {
                            heroSlideCaptionTitle.textContent = captionSlide.dataset.title;
                        }
                        if (heroSlideCaptionLabel) {
                            heroSlideCaptionLabel.textContent = captionSlide.dataset.label;
                        }
                        if (slideIndex === totalReal) {
                            setTimeout(() => {
                                heroSlideTrack.style.transition = 'none';
                                slideIndex = 0;
                                heroSlideTrack.style.transform = 'translateX(0)';
                                heroSlideTrack.offsetHeight; // force reflow
                                heroSlideTrack.style.transition = '';
                            }, 720);
                        }
                    }, 4500);
                }
            }

            // Navbar Scroll Effect
            const navbar = document.getElementById('navbar');
            const mobileMenuButton = document.querySelector('.mobile-menu-btn');
            const navLinksMenu = document.querySelector('.nav-links');

            mobileMenuButton.addEventListener('click', () => {
                const isOpen = navLinksMenu.classList.toggle('is-open');
                mobileMenuButton.setAttribute('aria-expanded', isOpen);
                mobileMenuButton.setAttribute('aria-label', isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi');
            });

            navLinksMenu.addEventListener('click', (event) => {
                if (event.target.matches('a')) {
                    navLinksMenu.classList.remove('is-open');
                    mobileMenuButton.setAttribute('aria-expanded', 'false');
                    mobileMenuButton.setAttribute('aria-label', 'Buka menu navigasi');
                }
            });

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Smooth Scroll for anchor links
            function smoothScrollToHash(hash) {
                const targetElement = document.querySelector(hash);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                        return;
                    }
                    smoothScrollToHash(targetId);
                });
            });

            // Pencarian Situs
            const searchTrigger = document.getElementById('searchTrigger');
            const searchOverlay = document.getElementById('searchOverlay');
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');
            const searchClose = document.getElementById('searchClose');

            const searchIndex = [
                { title: 'Beranda', desc: 'Halaman utama Website Resmi Nagari Campago', category: 'Halaman', url: '/' },
                { title: 'Mengenal Nagari Campago', desc: 'Profil dan sekilas tentang Nagari Campago', category: 'Profil', url: '#profil' },
                { title: 'Aparatur Nagari', desc: 'Struktur perangkat Nagari Campago', category: 'Pemerintahan', url: '#pemerintahan' },
                { title: 'Wali Nagari', desc: 'Aparatur Nagari - Wali Nagari', category: 'Pemerintahan', url: '#pemerintahan' },
                { title: 'Sekretaris Nagari', desc: 'Aparatur Nagari - Sekretaris Nagari', category: 'Pemerintahan', url: '#pemerintahan' },
                { title: 'Kasi Pemerintahan', desc: 'Aparatur Nagari - Kasi Pemerintahan', category: 'Pemerintahan', url: '#pemerintahan' },
                { title: 'Kaur Keuangan', desc: 'Aparatur Nagari - Kaur Keuangan', category: 'Pemerintahan', url: '#pemerintahan' },
                { title: 'Statistik Nagari', desc: 'Jumlah korong, luas wilayah, dan penduduk', category: 'Statistik', url: '#statistik' },
                { title: 'Potensi Nagari', desc: 'Jelajahi potensi alam, ekonomi, budaya, dan wisata', category: 'Potensi', url: '#potensi' },
                { title: 'Pertanian', desc: 'Potensi Nagari - Hamparan sawah dan ladang', category: 'Potensi', url: '#potensi' },
                { title: 'Budaya Minangkabau', desc: 'Potensi Nagari - Kesenian dan adat istiadat', category: 'Potensi', url: '#potensi' },
                { title: 'Wisata & Alam', desc: 'Potensi Nagari - Keindahan alam Nagari Campago', category: 'Potensi', url: '#potensi' },
                { title: 'Berita Terkini dari Campago', desc: 'Berita dan kegiatan terbaru masyarakat', category: 'Berita', url: '#berita' },
                { title: 'Gotong Royong Bersama Membersihkan Saluran Irigasi di Korong Pasa', desc: 'Berita - Pemerintahan', category: 'Berita', url: '#berita' },
                { title: 'Pelatihan Pembuatan Kerajinan Tangan untuk Ibu-ibu PKK', desc: 'Berita terbaru', category: 'Berita', url: '#berita' },
                { title: 'Penyaluran Bantuan Langsung Tunai (BLT) Tahap III', desc: 'Berita terbaru', category: 'Berita', url: '#berita' },
                { title: 'Persiapan Menyambut Hari Kemerdekaan RI ke-81', desc: 'Berita terbaru', category: 'Berita', url: '#berita' },
                { title: 'Peta Digital', desc: 'Fasilitas umum dan UMKM pada peta digital Campago', category: 'Peta', url: '#peta' },
                { title: 'Produk dari Campago', desc: 'Produk dan usaha lokal UMKM - lihat lewat popup UMKM di Peta Digital', category: 'UMKM', url: '#peta' },
                { title: 'Keripik Singkong Balado', desc: 'UMKM Kuliner - Usaha Ibu Rohani, Korong Pasa', category: 'UMKM', url: '#peta' },
                { title: 'Anyaman Bambu', desc: 'UMKM Kerajinan - Kelompok Tani Harapan, Korong Tarok', category: 'UMKM', url: '#peta' },
                { title: 'Beras Organik Campago', desc: 'UMKM Pertanian - KUD Campago, Korong Koto', category: 'UMKM', url: '#peta' },
                { title: 'Kue Sapik Tradisional', desc: 'UMKM Kuliner - Usaha Mande, Korong Mudik', category: 'UMKM', url: '#peta' },
                { title: 'Galeri Budaya', desc: 'Campago Punya Cerita - foto adat dan kehidupan masyarakat', category: 'Galeri', url: '#galeri' },
                { title: 'Layanan Informasi', desc: 'Layanan dan informasi untuk masyarakat Nagari Campago', category: 'Halaman', url: '/layanan' },
                { title: 'Login Pengelola', desc: 'Masuk sebagai pengelola website Nagari Campago', category: 'Halaman', url: '/login' },
                { title: 'Login Masyarakat Campago', desc: 'Masuk untuk pengajuan surat pengantar online', category: 'Halaman', url: '/warga/login' },
                { title: 'Daftar Akun Masyarakat', desc: 'Buat akun masyarakat dengan Nomor KK, NIK, dan nama', category: 'Halaman', url: '/warga/daftar' }
            ];

            function openSearch() {
                searchOverlay.classList.add('is-open');
                document.body.style.overflow = 'hidden';
                renderSearchResults('');
                setTimeout(() => searchInput.focus(), 50);
            }

            function closeSearch() {
                searchOverlay.classList.remove('is-open');
                document.body.style.overflow = '';
                searchInput.value = '';
            }

            function renderSearchResults(query) {
                const trimmed = query.trim().toLowerCase();
                const matches = trimmed === ''
                    ? searchIndex
                    : searchIndex.filter(item =>
                        item.title.toLowerCase().includes(trimmed) ||
                        item.desc.toLowerCase().includes(trimmed) ||
                        item.category.toLowerCase().includes(trimmed)
                    );

                if (matches.length === 0) {
                    searchResults.innerHTML = '<div class="search-empty">Tidak ada hasil untuk pencarian tersebut.</div>';
                    return;
                }

                searchResults.innerHTML = matches.slice(0, 12).map(item => `
                    <a href="${item.url}" class="search-result-item" data-url="${item.url}">
                        <span class="search-result-cat">${item.category}</span>
                        <span class="search-result-title">${item.title}</span>
                        <span class="search-result-desc">${item.desc}</span>
                    </a>
                `).join('');
            }

            if (searchTrigger) {
                searchTrigger.addEventListener('click', openSearch);
                searchClose.addEventListener('click', closeSearch);

                searchOverlay.addEventListener('click', (e) => {
                    if (e.target === searchOverlay) closeSearch();
                });

                searchInput.addEventListener('input', (e) => renderSearchResults(e.target.value));

                searchResults.addEventListener('click', (e) => {
                    const resultLink = e.target.closest('.search-result-item');
                    if (!resultLink) return;
                    e.preventDefault();
                    const url = resultLink.dataset.url;
                    closeSearch();
                    if (url.startsWith('#')) {
                        setTimeout(() => smoothScrollToHash(url), 50);
                    } else {
                        window.location.href = url;
                    }
                });

                document.addEventListener('keydown', (e) => {
                    if (e.key === '/' && document.activeElement.tagName !== 'INPUT' && document.activeElement.tagName !== 'TEXTAREA') {
                        e.preventDefault();
                        openSearch();
                    }
                    if (e.key === 'Escape' && searchOverlay.classList.contains('is-open')) {
                        closeSearch();
                    }
                });
            }

            // Intersection Observer for animations
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observerClean = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationName = 'fadeUp';
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                 el.style.animationName = 'none'; // reset initial
                 observerClean.observe(el);
            });

            // ScrollSpy for Active Menu Items
            const sections = document.querySelectorAll('section, header.hero');
            const navLinks = document.querySelectorAll('.nav-link');

            const scrollSpyOptions = {
                root: null,
                rootMargin: '-40% 0px -60% 0px',
                threshold: 0
            };

            const scrollSpyObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        let currentId = entry.target.getAttribute('id');
                        if (entry.target.classList.contains('hero')) {
                            currentId = ''; // For Beranda (href="#")
                        }

                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            const href = link.getAttribute('href');
                            if (currentId === '' && (href === '#' || href === '/')) {
                                link.classList.add('active');
                            } else if (currentId && href === `#${currentId}`) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, scrollSpyOptions);

            sections.forEach(sec => {
                if (sec.id || sec.classList.contains('hero')) {
                    scrollSpyObserver.observe(sec);
                }
            });

        });
    </script>
</body>
</html>
