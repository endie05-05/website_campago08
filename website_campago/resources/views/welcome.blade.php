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
                <div class="nav-logo-placeholder">LOGO</div>
                Nagari Campago
            </a>
            
            <ul class="nav-links" id="primary-navigation">
                <li><a href="#" class="nav-link active">Beranda</a></li>
                <li><a href="#profil" class="nav-link">Profil</a></li>
                <li><a href="#pemerintahan" class="nav-link">Struktur Nagari</a></li>
                <li><a href="#potensi" class="nav-link">Potensi</a></li>
                <li><a href="#peta" class="nav-link">Informasi</a></li>
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
        // Foto slideshow beranda. Untuk menambah foto: taruh file gambarnya di folder
        // public/images/, lalu tambahkan nama filenya ke daftar di bawah ini.
        $heroSlides = [
            'ngaricampago.jpeg',
            'kegiatan-1.jpg',
        ];
    @endphp
    <header class="hero">
        <div class="hero-bg-slideshow" aria-hidden="true">
            @foreach ($heroSlides as $i => $slide)
            <div class="hero-bg-slide @if($i === 0) is-active @endif" style="background-image: url('{{ asset('images/'.$slide) }}')"></div>
            @endforeach
        </div>
        <div class="container">
            <div class="hero-content animate-on-scroll">
            <span class="small-label">Website Resmi</span>
            <h1 class="hero-headline">NAGARI<br>CAMPAGO</h1>
            <h2 class="hero-subheadline">Kecamatan V Koto Kampung Dalam<br>Kabupaten Padang Pariaman</h2>
            <p class="hero-desc">Menjelajahi potensi, budaya, dan kehidupan masyarakat Nagari Campago.</p>
            
            <div class="hero-actions">
                <a href="#potensi" class="btn btn-primary">Jelajahi Campago</a>
                <a href="#peta" class="btn-link">Lihat Peta Nagari</a>
            </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            Scroll to Explore
            <span class="scroll-arrow">↓</span>
        </div>
    </header>

    <!-- 4. Section "Mengenal Campago" -->
    <section id="profil" class="section-padding">
        <div class="container about-grid">
            <x-peta-nagari class="about-img animate-on-scroll" />
            <div class="about-content animate-on-scroll delay-1">
                <span class="small-label">Tentang Nagari</span>
                <h2 class="section-heading">Mengenal Nagari Campago</h2>
                <blockquote class="about-desc text-justify">
                    Nagari Campago merupakan salah satu nagari yang berada di Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat. Nagari ini memiliki kehidupan masyarakat yang kuat dengan nilai kebersamaan, budaya Minangkabau, serta potensi pertanian dan ekonomi lokal.
                </blockquote>
                <a href="#" class="btn-link">Selengkapnya tentang Campago</a>
            </div>
        </div>
    </section>

    <!-- 4.5 Struktur Nagari -->
    <section id="pemerintahan" class="section-padding bg-cream-light org-section">
        <div class="container">
            <div class="potensi-header animate-on-scroll org-header" style="text-align: center; margin: 0 auto 0.85rem; max-width: 700px;">
                <span class="small-label" style="justify-content: center; display: flex; margin-bottom: 0.35rem;">Pemerintahan</span>
                <h2 class="section-heading" style="font-size: clamp(1.4rem, 2.2vw, 1.9rem); margin-bottom: 0.35rem;">Aparatur Nagari</h2>
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
            $korongIcons = ['🛖', '🌾', '🏘️', '🌊', '💧', '🏛️', '🌱', '⛰️'];
            $luasWilayahText = $villageProfile->area_km2 ? number_format($villageProfile->area_km2, 2, ',', '.') : '—';
            $pendudukText = $villageProfile->population ? number_format($villageProfile->population, 0, ',', '.') : '—';

            $korongList = $korongs->map(function ($korong, $idx) use ($potentials, $korongIcons, $villageProfile) {
                $highlights = $potentials->where('korong_id', $korong->id)->pluck('name')->all();

                return [
                    'icon' => $korongIcons[$idx % count($korongIcons)],
                    'nama' => $korong->name,
                    'deskripsi' => $korong->description ?: 'Salah satu korong di Nagari Campago, ' . $villageProfile->district . '.',
                    'highlights' => $highlights,
                ];
            });
            $korongBadgeVariants = ['', 'modal-icon-badge-gold', 'modal-icon-badge-sky'];
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
                    <div class="modal-icon-badge">📍</div>
                    <div>
                        <span class="small-label">Wilayah Administratif</span>
                        <h2 id="categoryTitleKorong">Korong di Nagari Campago</h2>
                        <p>Nagari Campago terbagi menjadi {{ $korongCount }} korong yang tersebar di seluruh wilayah seluas {{ $luasWilayahText }} km².</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="modal-quick-stats">
                        <div class="modal-quick-stat">
                            <span class="icon">📍</span>
                            <div><span class="value">{{ count($korongList) }}</span><span class="label">Korong</span></div>
                        </div>
                        <div class="modal-quick-stat">
                            <span class="icon">📐</span>
                            <div><span class="value">{{ $luasWilayahText }} km²</span><span class="label">Luas wilayah</span></div>
                        </div>
                    </div>
                    <div class="modal-list">
                        <h3>Daftar Korong</h3>
                        <p class="modal-list-hint">Klik salah satu korong untuk melihat profil lengkapnya.</p>
                        <div class="location-grid">
                            @foreach ($korongList as $korong)
                            <label class="location-card location-card-clickable" for="toggle-korong-detail-{{ $loop->iteration }}">
                                <span class="icon">{{ $korong['icon'] }}</span>
                                <div>
                                    <div class="name">{{ $korong['nama'] }}</div>
                                    <div class="korong">Nagari Campago</div>
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($korongList as $korong)
        <div class="korong-detail-toggle">
            <input type="checkbox" id="toggle-korong-detail-{{ $loop->iteration }}" class="modal-toggle" hidden>
            <div class="modal-overlay modal-korong-detail">
                <div class="modal-content">
                    <label class="modal-close" for="toggle-korong-detail-{{ $loop->iteration }}" aria-label="Tutup informasi">×</label>
                    <div class="modal-header modal-header-korong">
                        <div class="modal-icon-badge {{ $korongBadgeVariants[$loop->iteration % 3] }}">{{ $korong['icon'] }}</div>
                        <div>
                            <span class="small-label">Profil Korong &middot; {{ $loop->iteration }} / {{ $loop->count }}</span>
                            <h2>{{ $korong['nama'] }}</h2>
                            <p>{{ $korong['deskripsi'] }}</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-tags">
                            <span class="modal-tag">Nagari Campago</span>
                            <span class="modal-tag">Wilayah Administratif</span>
                        </div>
                        <div class="modal-list">
                            <h3>Fasilitas &amp; Potensi Terkait</h3>
                            @if (count($korong['highlights']))
                            <div class="korong-highlight-list">
                                @foreach ($korong['highlights'] as $highlight)
                                <div class="korong-highlight-item">
                                    <span class="icon">✦</span>
                                    <span>{{ $highlight }}</span>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="korong-empty-state">
                                <span class="icon">🗂️</span>
                                <p>Informasi fasilitas &amp; potensi korong ini belum ditambahkan admin.</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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

    <!-- 7 & 8. Informasi (Berita & Peta Digital) -->
    <section id="informasi">
        <div class="section-padding bg-cream-light" id="berita">
        <div class="container">
            <div class="news-header animate-on-scroll">
                <div>
                    <h2 class="section-heading" style="margin-bottom: 0.5rem;">Cerita dari Campago</h2>
                    <p class="potensi-desc">Berita, kegiatan, dan cerita terbaru dari masyarakat Nagari Campago.</p>
                </div>
                <a href="#" class="btn-link">Lihat semua berita</a>
            </div>

            <div class="news-grid">
                @if ($mainPost)
                <div class="news-main animate-on-scroll">
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
                    <p class="news-main-desc text-justify">{{ $mainPost->excerpt }}</p>
                </div>
                @else
                <div class="news-main animate-on-scroll">
                    <p class="text-muted">Belum ada berita.</p>
                </div>
                @endif

                <div class="news-list animate-on-scroll delay-1">
                    @foreach ($otherPosts as $post)
                    <div class="news-item">
                        @if ($post->featured_image_path)
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}" class="placeholder-img" style="object-fit: cover;">
                        @else
                            <div class="placeholder-img">IMAGE PLACEHOLDER</div>
                        @endif
                        <div>
                            <a href="#"><h4 class="news-item-title">{{ $post->title }}</h4></a>
                            <div class="news-meta">{{ $post->published_at?->locale('id')->translatedFormat('d F Y') }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>

        <!-- 8. Peta Digital -->
        <div class="section-padding map-section" id="peta">
        <div class="container map-grid">
            <input type="checkbox" id="toggle-fasilitas-umum" class="modal-toggle" hidden>
            <input type="checkbox" id="toggle-umkm" class="modal-toggle" hidden>
            <input type="checkbox" id="toggle-info-pelayanan" class="modal-toggle" hidden>
            <div class="map-info animate-on-scroll">
                <h2 class="section-heading">Temukan Campago</h2>
                <p class="potensi-desc text-justify" style="margin-bottom: 2rem;">Jelajahi fasilitas umum, sekolah, tempat ibadah, UMKM, layanan kesehatan, jam operasional, dan lokasi penting lainnya melalui peta digital Nagari Campago.</p>
                <div class="map-filters">
                    <label class="filter-btn" for="toggle-fasilitas-umum">Fasilitas Umum</label>
                    <label class="filter-btn" for="toggle-umkm">UMKM</label>
                    <label class="filter-btn" for="toggle-info-pelayanan">Jam &amp; Kontak Pelayanan</label>
                </div>
            </div>
            
            <div class="map-placeholder placeholder-img animate-on-scroll delay-1" id="mapPlaceholder">
                Pilih kategori untuk melihat ringkasan lokasi.
            </div>

            @php
                $umkmKategoriList = $umkms->pluck('category')->unique()->values();
                $fasumAreaTags = array_filter(array_map('trim', explode(',', $peta['fasum_area'])));
            @endphp

            <div class="modal-overlay modal-fasilitas-umum">
                <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="categoryTitle">
                    <label class="modal-close" for="toggle-fasilitas-umum" aria-label="Tutup informasi">×</label>
                    <div class="modal-header modal-header-fasum">
                        <div class="modal-icon-badge">🏘️</div>
                        <div>
                            <span class="small-label">Informasi Kategori</span>
                            <h2 id="categoryTitle">Fasilitas Umum Campago</h2>
                            <p id="categoryDescription">{{ $peta['fasum_deskripsi'] }}</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-quick-stats">
                            <div class="modal-quick-stat">
                                <span class="icon">📍</span>
                                <div><span class="value">{{ $fasilitasUmumList->count() }}</span><span class="label">Lokasi tersebar</span></div>
                            </div>
                            <div class="modal-quick-stat">
                                <span class="icon">🗂️</span>
                                <div><span class="value">{{ count($fasumAreaTags) }}</span><span class="label">Kategori area utama</span></div>
                            </div>
                        </div>
                        <div class="modal-tags">
                            @foreach ($fasumAreaTags as $tag)
                            <span class="modal-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <div class="modal-list">
                            <h3>Daftar Lokasi</h3>
                            <div class="location-grid">
                                @forelse ($fasilitasUmumList as $lokasi)
                                <div class="location-card">
                                    <span class="icon">📍</span>
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
                    ['icon' => '🕗', 'nama' => 'Senin - Jumat', 'keterangan' => '08.00 - 16.00 WIB'],
                    ['icon' => '☕', 'nama' => 'Istirahat', 'keterangan' => '12.00 - 13.00 WIB'],
                    ['icon' => '🚫', 'nama' => 'Sabtu - Minggu', 'keterangan' => 'Libur'],
                ];
                $kontakPelayanan = [
                    ['icon' => '📍', 'nama' => 'Alamat Kantor', 'keterangan' => $kontak['alamat']],
                    ['icon' => '✉️', 'nama' => 'Email', 'keterangan' => $kontak['email']],
                    ['icon' => '📞', 'nama' => 'Telepon', 'keterangan' => $kontak['telepon']],
                ];
            @endphp

            <div class="modal-overlay modal-info-pelayanan">
                <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="categoryTitleInfo">
                    <label class="modal-close" for="toggle-info-pelayanan" aria-label="Tutup informasi">×</label>
                    <div class="modal-header modal-header-info">
                        <div class="modal-icon-badge modal-icon-badge-sky">🕒</div>
                        <div>
                            <span class="small-label">Informasi Kategori</span>
                            <h2 id="categoryTitleInfo">Jam &amp; Kontak Pelayanan</h2>
                            <p>Informasi jam operasional dan kontak Kantor Wali Nagari Campago untuk keperluan administrasi masyarakat.</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-quick-stats">
                            <div class="modal-quick-stat">
                                <span class="icon">📅</span>
                                <div><span class="value">5 Hari</span><span class="label">Hari kerja</span></div>
                            </div>
                            <div class="modal-quick-stat">
                                <span class="icon">🕗</span>
                                <div><span class="value">08.00–16.00</span><span class="label">Jam operasional</span></div>
                            </div>
                        </div>
                        <div class="modal-tags">
                            <span class="modal-tag">Senin</span>
                            <span class="modal-tag">Selasa</span>
                            <span class="modal-tag">Rabu</span>
                            <span class="modal-tag">Kamis</span>
                            <span class="modal-tag">Jumat</span>
                        </div>
                        <div class="modal-list">
                            <h3>Jam Operasional</h3>
                            <div class="location-grid">
                                @foreach ($jamOperasional as $jadwal)
                                <div class="location-card">
                                    <span class="icon">{{ $jadwal['icon'] }}</span>
                                    <div>
                                        <div class="name">{{ $jadwal['nama'] }}</div>
                                        <div class="korong">{{ $jadwal['keterangan'] }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="modal-list">
                            <h3>Kontak Kantor Wali Nagari</h3>
                            <div class="location-grid">
                                @foreach ($kontakPelayanan as $kp)
                                <div class="location-card">
                                    <span class="icon">{{ $kp['icon'] }}</span>
                                    <div>
                                        <div class="name">{{ $kp['nama'] }}</div>
                                        <div class="korong">{{ $kp['keterangan'] }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- 10. Culture / Gallery -->
    <section id="galeri" class="section-padding" style="padding-top: 0;">
        <div class="gallery-hero animate-on-scroll">
            <div class="placeholder-img">CULTURAL IMAGE PLACEHOLDER</div>
            <div class="gallery-hero-label">Campago Punya Cerita</div>
            <div class="gallery-hero-content">
                <h2 class="gallery-title">Dari adat, budaya, kehidupan masyarakat, hingga berbagai cerita yang terus hidup dari generasi ke generasi.</h2>
                <a href="#" class="btn-link">Jelajahi Galeri</a>
            </div>
        </div>

        @php
            $galeriUkuranClass = ['besar' => 'g-item-1', 'sedang' => 'g-item-2', 'tinggi' => 'g-item-3', 'lebar' => 'g-item-4'];
        @endphp
        <div class="container gallery-grid animate-on-scroll delay-1">
            @forelse ($galleryImages as $image)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($image->image_path) }}" alt="{{ $image->caption ?? 'Galeri Nagari Campago' }}" class="gallery-photo gallery-item {{ $galeriUkuranClass[$image->size] ?? 'g-item-2' }}">
            @empty
                <p class="text-muted">Belum ada foto galeri.</p>
            @endforelse
        </div>
    </section>

    <!-- 11. Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="nav-logo-placeholder">LOGO</div>
                    <h3>Nagari Campago</h3>
                    <p>{{ $kontak['deskripsi'] }}</p>
                </div>
                
                <div>
                    <h4 class="footer-heading">Navigasi</h4>
                    <ul class="footer-links">
                        <li><a href="#profil">Profil</a></li>
                        <li><a href="#pemerintahan">Pemerintahan</a></li>
                        <li><a href="#potensi">Potensi</a></li>
                        <li><a href="#peta">Informasi</a></li>
                        <li><a href="#berita">Berita</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="footer-heading">Informasi</h4>
                    <ul class="footer-links">
                        <li><a href="#peta">Peta</a></li>
                        <li><a href="#galeri">Galeri</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="footer-heading">Kontak</h4>
                    <ul class="footer-contact" style="list-style: none;">
                        <li><strong>Alamat:</strong> <br> {{ $kontak['alamat'] }}</li>
                        <li><strong>Email:</strong> <br> {{ $kontak['email'] }}</li>
                        <li><strong>Telepon:</strong> <br> {{ $kontak['telepon'] }}</li>
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
            // Slideshow Foto Hero -- ganti foto aktif setiap beberapa detik (crossfade)
            const heroSlides = document.querySelectorAll('.hero-bg-slide');
            if (heroSlides.length > 1 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                let heroSlideIndex = 0;
                setInterval(() => {
                    heroSlides[heroSlideIndex].classList.remove('is-active');
                    heroSlideIndex = (heroSlideIndex + 1) % heroSlides.length;
                    heroSlides[heroSlideIndex].classList.add('is-active');
                }, 5000);
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
                    if (targetId === '#') return;
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
                { title: 'Cerita dari Campago', desc: 'Berita dan kegiatan terbaru masyarakat', category: 'Berita', url: '#berita' },
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
                { title: 'Login Pengelola', desc: 'Masuk sebagai pengelola website Nagari Campago', category: 'Halaman', url: '/login' }
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
