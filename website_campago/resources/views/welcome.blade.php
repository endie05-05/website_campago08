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
    <header class="hero">
        <div class="container hero-content animate-on-scroll">
            <span class="small-label">Website Resmi</span>
            <h1 class="hero-headline">NAGARI<br>CAMPAGO</h1>
            <h2 class="hero-subheadline">Kecamatan V Koto Kampung Dalam<br>Kabupaten Padang Pariaman</h2>
            <p class="hero-desc">Menjelajahi potensi, budaya, dan kehidupan masyarakat Nagari Campago.</p>
            
            <div class="hero-actions">
                <a href="#potensi" class="btn btn-primary">Jelajahi Campago</a>
                <a href="#peta" class="btn-link">Lihat Peta Nagari</a>
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
            <img src="{{ asset('images/petanagari.png') }}" alt="Peta Nagari Campago" class="about-img animate-on-scroll" style="object-fit: cover; border-radius: 4px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
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
    <section id="pemerintahan" class="section-padding bg-cream-light">
        <div class="container">
            <div class="potensi-header animate-on-scroll" style="text-align: center; margin: 0 auto 4rem; max-width: 700px;">
                <span class="small-label" style="justify-content: center; display: flex;">Pemerintahan</span>
                <h2 class="section-heading">Aparatur Nagari</h2>
                <p class="potensi-desc text-justify" style="text-align: center;">Mengenal susunan perangkat Nagari Campago yang bertugas melayani masyarakat dan memajukan nagari.</p>
            </div>
            
            <div class="aparatur-grid animate-on-scroll delay-1">
                <div class="aparatur-card">
                    <div class="aparatur-img">FOTO</div>
                    <h3 class="aparatur-name">Nama Wali Nagari</h3>
                    <div class="aparatur-title">Wali Nagari</div>
                </div>
                <div class="aparatur-card">
                    <div class="aparatur-img">FOTO</div>
                    <h3 class="aparatur-name">Nama Sekretaris</h3>
                    <div class="aparatur-title">Sekretaris Nagari</div>
                </div>
                <div class="aparatur-card">
                    <div class="aparatur-img">FOTO</div>
                    <h3 class="aparatur-name">Nama Kasi</h3>
                    <div class="aparatur-title">Kasi Pemerintahan</div>
                </div>
                <div class="aparatur-card">
                    <div class="aparatur-img">FOTO</div>
                    <h3 class="aparatur-name">Nama Kaur</h3>
                    <div class="aparatur-title">Kaur Keuangan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Statistik Nagari -->
    <section id="statistik" class="stats">
        <div class="container stats-grid">
            <div class="stat-item animate-on-scroll">
                <div class="stat-number">8</div>
                <div class="stat-label">Korong</div>
            </div>
            <div class="stat-item animate-on-scroll delay-1">
                <div class="stat-number">9,86</div>
                <div class="stat-label">Luas Wilayah</div>
            </div>
            <div class="stat-item animate-on-scroll delay-2">
                <div class="stat-number">&mdash;</div>
                <div class="stat-label">Penduduk</div>
            </div>
            <div class="stat-item animate-on-scroll delay-3">
                <div class="stat-number" style="font-size: clamp(1.5rem, 3vw, 2.5rem); margin-top: 1rem;">V Koto Kampung Dalam</div>
                <div class="stat-label">Kecamatan</div>
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
                <div class="bento-item bento-item-large animate-on-scroll">
                    <div class="bento-img-placeholder">IMAGE PLACEHOLDER</div>
                    <div class="bento-content">
                        <h3 class="bento-title">Pertanian</h3>
                        <p class="bento-desc">Hamparan sawah dan ladang yang menjadi sumber kehidupan masyarakat.</p>
                    </div>
                </div>
                <div class="bento-item animate-on-scroll delay-1">
                    <div class="bento-img-placeholder">IMAGE PLACEHOLDER</div>
                    <div class="bento-content">
                        <h3 class="bento-title">UMKM Lokal</h3>
                        <p class="bento-desc">Kerajinan dan kuliner khas Campago.</p>
                    </div>
                </div>
                <div class="bento-item animate-on-scroll delay-2">
                    <div class="bento-img-placeholder">IMAGE PLACEHOLDER</div>
                    <div class="bento-content">
                        <h3 class="bento-title">Budaya Minangkabau</h3>
                        <p class="bento-desc">Kesenian dan adat istiadat yang terus lestari.</p>
                    </div>
                </div>
                <div class="bento-item animate-on-scroll delay-3">
                    <div class="bento-img-placeholder">IMAGE PLACEHOLDER</div>
                    <div class="bento-content">
                        <h3 class="bento-title">Wisata & Alam</h3>
                        <p class="bento-desc">Keindahan alam Nagari Campago.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Berita -->
    <section id="berita" class="section-padding bg-cream-light">
        <div class="container">
            <div class="news-header animate-on-scroll">
                <div>
                    <h2 class="section-heading" style="margin-bottom: 0.5rem;">Cerita dari Campago</h2>
                    <p class="potensi-desc">Berita, kegiatan, dan cerita terbaru dari masyarakat Nagari Campago.</p>
                </div>
                <a href="#" class="btn-link">Lihat semua berita</a>
            </div>

            <div class="news-grid">
                <div class="news-main animate-on-scroll">
                    <div class="placeholder-img">NEWS IMAGE PLACEHOLDER</div>
                    <div class="news-meta">
                        <span class="news-meta-cat">Pemerintahan</span>
                        <span>24 Juli 2026</span>
                    </div>
                    <h3 class="news-main-title">Gotong Royong Bersama Membersihkan Saluran Irigasi di Korong Pasa</h3>
                    <p class="news-main-desc text-justify">Masyarakat Nagari Campago antusias mengikuti kegiatan gotong royong rutin yang diadakan setiap akhir bulan...</p>
                </div>

                <div class="news-list animate-on-scroll delay-1">
                    <div class="news-item">
                        <div class="placeholder-img">IMAGE PLACEHOLDER</div>
                        <div>
                            <a href="#"><h4 class="news-item-title">Pelatihan Pembuatan Kerajinan Tangan untuk Ibu-ibu PKK</h4></a>
                            <div class="news-meta">20 Juli 2026</div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="placeholder-img">IMAGE PLACEHOLDER</div>
                        <div>
                            <a href="#"><h4 class="news-item-title">Penyaluran Bantuan Langsung Tunai (BLT) Tahap III Berjalan Lancar</h4></a>
                            <div class="news-meta">15 Juli 2026</div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="placeholder-img">IMAGE PLACEHOLDER</div>
                        <div>
                            <a href="#"><h4 class="news-item-title">Persiapan Menyambut Hari Kemerdekaan RI ke-81 di Tingkat Nagari</h4></a>
                            <div class="news-meta">10 Juli 2026</div>
                        </div>
                    </div>
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
                <p class="potensi-desc text-justify" style="margin-bottom: 2rem;">Jelajahi fasilitas umum, sekolah, tempat ibadah, UMKM, layanan kesehatan, dan lokasi penting lainnya melalui peta digital Nagari Campago.</p>
                <div class="map-filters">
                    <label class="filter-btn" for="toggle-fasilitas-umum">Fasilitas Umum</label>
                    <label class="filter-btn" for="toggle-umkm">UMKM</label>
                </div>
            </div>
            
            <div class="map-placeholder placeholder-img animate-on-scroll delay-1" id="mapPlaceholder">
                Pilih kategori untuk melihat ringkasan lokasi.
            </div>

            @php
                $fasilitasUmumList = [
                    ['icon' => '🏛️', 'nama' => 'Balai Pertemuan Nagari', 'korong' => 'Korong Pasa'],
                    ['icon' => '🏫', 'nama' => 'SD Negeri 01 Campago', 'korong' => 'Korong Tarok'],
                    ['icon' => '🛒', 'nama' => 'Pasar Campago', 'korong' => 'Korong Koto'],
                    ['icon' => '🏥', 'nama' => 'Posyandu Melati', 'korong' => 'Korong Mudik'],
                    ['icon' => '⚽', 'nama' => 'Lapangan Serbaguna', 'korong' => 'Korong Pasa'],
                    ['icon' => '🏢', 'nama' => 'Kantor Wali Nagari', 'korong' => 'Korong Koto'],
                ];
                $umkmModalList = [
                    ['kategori' => 'Kuliner', 'judul' => 'Keripik Singkong Balado', 'pemilik' => 'Usaha Ibu Rohani', 'lokasi' => 'Korong Pasa'],
                    ['kategori' => 'Kerajinan', 'judul' => 'Anyaman Bambu', 'pemilik' => 'Kelompok Tani Harapan', 'lokasi' => 'Korong Tarok'],
                    ['kategori' => 'Pertanian', 'judul' => 'Beras Organik Campago', 'pemilik' => 'KUD Campago', 'lokasi' => 'Korong Koto'],
                    ['kategori' => 'Kuliner', 'judul' => 'Kue Sapik Tradisional', 'pemilik' => 'Usaha Mande', 'lokasi' => 'Korong Mudik'],
                ];
            @endphp

            <div class="modal-overlay modal-fasilitas-umum">
                <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="categoryTitle">
                    <label class="modal-close" for="toggle-fasilitas-umum" aria-label="Tutup informasi">×</label>
                    <div class="modal-header modal-header-fasum">
                        <div class="modal-icon-badge">🏘️</div>
                        <div>
                            <span class="small-label">Informasi Kategori</span>
                            <h2 id="categoryTitle">Fasilitas Umum Campago</h2>
                            <p id="categoryDescription">Kumpulan tempat umum penting seperti balai, sekolah, pasar, dan fasilitas sosial yang mendukung keseharian warga Campago.</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-quick-stats">
                            <div class="modal-quick-stat">
                                <span class="icon">📍</span>
                                <div><span class="value">{{ count($fasilitasUmumList) }}</span><span class="label">Lokasi tersebar</span></div>
                            </div>
                            <div class="modal-quick-stat">
                                <span class="icon">🗂️</span>
                                <div><span class="value">4</span><span class="label">Kategori area utama</span></div>
                            </div>
                        </div>
                        <div class="modal-tags">
                            <span class="modal-tag">Balai</span>
                            <span class="modal-tag">Sekolah</span>
                            <span class="modal-tag">Pasar</span>
                            <span class="modal-tag">Kantor Pelayanan</span>
                        </div>
                        <div class="modal-list">
                            <h3>Daftar Lokasi</h3>
                            <div class="location-grid">
                                @foreach ($fasilitasUmumList as $lokasi)
                                <div class="location-card">
                                    <span class="icon">{{ $lokasi['icon'] }}</span>
                                    <div>
                                        <div class="name">{{ $lokasi['nama'] }}</div>
                                        <div class="korong">{{ $lokasi['korong'] }}</div>
                                    </div>
                                </div>
                                @endforeach
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
                                <div><span class="value">{{ count($umkmModalList) }}</span><span class="label">Produk unggulan</span></div>
                            </div>
                            <div class="modal-quick-stat">
                                <span class="icon">🗂️</span>
                                <div><span class="value">3</span><span class="label">Kategori usaha</span></div>
                            </div>
                        </div>
                        <div class="modal-tags">
                            <span class="modal-tag">Kuliner</span>
                            <span class="modal-tag">Kerajinan</span>
                            <span class="modal-tag">Pertanian</span>
                        </div>
                        <div class="modal-list">
                            <h3>Produk dari Campago</h3>
                            <div class="modal-umkm-grid">
                                @foreach ($umkmModalList as $produk)
                                <div class="umkm-card">
                                    <div class="placeholder-img umkm-img">UMKM IMAGE PLACEHOLDER</div>
                                    <span class="umkm-cat">{{ $produk['kategori'] }}</span>
                                    <h3 class="umkm-title">{{ $produk['judul'] }}</h3>
                                    <div class="umkm-owner">{{ $produk['pemilik'] }}</div>
                                    <div class="umkm-location">{{ $produk['lokasi'] }}</div>
                                </div>
                                @endforeach
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
            <div class="gallery-hero-content">
                <span class="small-label" style="margin-bottom: 0.5rem;">Campago Punya Cerita</span>
                <h2 class="gallery-title">Dari adat, budaya, kehidupan masyarakat, hingga berbagai cerita yang terus hidup dari generasi ke generasi.</h2>
                <a href="#" class="btn-link">Jelajahi Galeri</a>
            </div>
        </div>

        <div class="container gallery-grid animate-on-scroll delay-1">
            <div class="placeholder-img gallery-item g-item-1">PHOTO</div>
            <div class="placeholder-img gallery-item g-item-2">PHOTO</div>
            <div class="placeholder-img gallery-item g-item-3">PHOTO</div>
            <div class="placeholder-img gallery-item g-item-2">PHOTO</div>
            <div class="placeholder-img gallery-item g-item-4">PHOTO</div>
        </div>
    </section>

    <!-- 11. Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="nav-logo-placeholder">LOGO</div>
                    <h3>Nagari Campago</h3>
                    <p>Kecamatan V Koto Kampung Dalam,<br>Kabupaten Padang Pariaman,<br>Sumatera Barat.</p>
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
                        <li><strong>Alamat:</strong> <br> [Placeholder Alamat Kantor Wali Nagari]</li>
                        <li><strong>Email:</strong> <br> info@campago.desa.id</li>
                        <li><strong>Telepon:</strong> <br> [Placeholder Nomor Telepon]</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; 2026 Pemerintah Nagari Campago. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts for simple interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
