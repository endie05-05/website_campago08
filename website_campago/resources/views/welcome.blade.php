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
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="/" class="nav-brand">
                <div class="nav-logo-placeholder">LOGO</div>
                Nagari Campago
            </a>
            
            <ul class="nav-links">
                <li><a href="#" class="nav-link">Beranda</a></li>
                <li><a href="#profil" class="nav-link">Profil</a></li>
                <li><a href="#pemerintahan" class="nav-link">Pemerintahan</a></li>
                <li><a href="#informasi" class="nav-link">Informasi</a></li>
                <li><a href="#potensi" class="nav-link">Potensi</a></li>
                <li><a href="#umkm" class="nav-link">UMKM</a></li>
                <li><a href="#galeri" class="nav-link">Galeri</a></li>
            </ul>

            <div class="nav-actions">
                <button class="search-btn" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </button>
            </div>

            <button class="mobile-menu-btn" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

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

    <!-- 3. Quick Access -->
    <section class="quick-access">
        <div class="container qa-grid animate-on-scroll delay-1">
            <a href="#profil" class="qa-item">
                <div class="qa-content">
                    <svg class="qa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <span class="qa-title">Profil Nagari</span>
                </div>
                <span class="qa-arrow">→</span>
            </a>
            <a href="#peta" class="qa-item">
                <div class="qa-content">
                    <svg class="qa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"></polygon><line x1="9" y1="3" x2="9" y2="21"></line><line x1="15" y1="3" x2="15" y2="21"></line></svg>
                    <span class="qa-title">Peta Nagari</span>
                </div>
                <span class="qa-arrow">→</span>
            </a>
            <a href="#umkm" class="qa-item">
                <div class="qa-content">
                    <svg class="qa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    <span class="qa-title">UMKM Lokal</span>
                </div>
                <span class="qa-arrow">→</span>
            </a>
            <a href="#berita" class="qa-item">
                <div class="qa-content">
                    <svg class="qa-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                    <span class="qa-title">Berita Nagari</span>
                </div>
                <span class="qa-arrow">→</span>
            </a>
        </div>
    </section>

    <!-- 4. Section "Mengenal Campago" -->
    <section id="profil" class="section-padding">
        <div class="container about-grid">
            <img src="{{ asset('images/petanagari.png') }}" alt="Peta Nagari Campago" class="about-img animate-on-scroll" style="object-fit: cover; border-radius: 4px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
            <div class="about-content animate-on-scroll delay-1">
                <span class="small-label">Tentang Nagari</span>
                <h2 class="section-heading">Mengenal Nagari Campago</h2>
                <blockquote class="about-desc">
                    Nagari Campago merupakan salah satu nagari yang berada di Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat. Nagari ini memiliki kehidupan masyarakat yang kuat dengan nilai kebersamaan, budaya Minangkabau, serta potensi pertanian dan ekonomi lokal.
                </blockquote>
                <a href="#" class="btn-link">Selengkapnya tentang Campago</a>
            </div>
        </div>
    </section>

    <!-- 5. Statistik Nagari -->
    <section class="stats">
        <div class="container stats-grid">
            <div class="stat-item animate-on-scroll">
                <div class="stat-number">8</div>
                <div class="stat-label">Korong</div>
            </div>
            <div class="stat-item animate-on-scroll delay-1">
                <div class="stat-number">9,86</div>
                <div class="stat-label">Luas Wilayah (km²)</div>
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
                <p class="potensi-desc">Temukan berbagai potensi alam, ekonomi, budaya, dan kehidupan masyarakat Nagari Campago.</p>
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
                    <p class="news-main-desc">Masyarakat Nagari Campago antusias mengikuti kegiatan gotong royong rutin yang diadakan setiap akhir bulan...</p>
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
            <div class="map-info animate-on-scroll">
                <h2 class="section-heading">Temukan Campago</h2>
                <p class="potensi-desc" style="margin-bottom: 2rem;">Jelajahi fasilitas umum, sekolah, tempat ibadah, UMKM, layanan kesehatan, dan lokasi penting lainnya melalui peta digital Nagari Campago.</p>
                
                <div class="map-filters">
                    <button class="filter-btn active">Semua</button>
                    <button class="filter-btn">Fasilitas Umum</button>
                    <button class="filter-btn">UMKM</button>
                    <button class="filter-btn">Pendidikan</button>
                    <button class="filter-btn">Tempat Ibadah</button>
                    <button class="filter-btn">Kesehatan</button>
                </div>

                <a href="#" class="btn btn-primary" style="margin-top: 1rem;">Buka Peta Lengkap →</a>
            </div>
            
            <div class="map-placeholder placeholder-img animate-on-scroll delay-1">
                Interactive Map Placeholder
            </div>
        </div>
    </section>

    <!-- 9. UMKM Lokal -->
    <section id="umkm" class="section-padding">
        <div class="container">
            <div class="umkm-header animate-on-scroll">
                <h2 class="section-heading">Produk dari Campago</h2>
                <p class="potensi-desc">Kenali produk dan usaha lokal yang tumbuh bersama masyarakat Nagari Campago.</p>
            </div>

            <div class="umkm-showcase animate-on-scroll delay-1">
                <div class="umkm-card">
                    <div class="placeholder-img umkm-img">UMKM IMAGE PLACEHOLDER</div>
                    <span class="umkm-cat">Kuliner</span>
                    <h3 class="umkm-title">Keripik Singkong Balado</h3>
                    <div class="umkm-owner">Usaha Ibu Rohani</div>
                    <div class="umkm-location">Korong Pasa</div>
                </div>
                <div class="umkm-card">
                    <div class="placeholder-img umkm-img">UMKM IMAGE PLACEHOLDER</div>
                    <span class="umkm-cat">Kerajinan</span>
                    <h3 class="umkm-title">Anyaman Bambu</h3>
                    <div class="umkm-owner">Kelompok Tani Harapan</div>
                    <div class="umkm-location">Korong Tarok</div>
                </div>
                <div class="umkm-card">
                    <div class="placeholder-img umkm-img">UMKM IMAGE PLACEHOLDER</div>
                    <span class="umkm-cat">Pertanian</span>
                    <h3 class="umkm-title">Beras Organik Campago</h3>
                    <div class="umkm-owner">KUD Campago</div>
                    <div class="umkm-location">Korong Koto</div>
                </div>
                <div class="umkm-card">
                    <div class="placeholder-img umkm-img">UMKM IMAGE PLACEHOLDER</div>
                    <span class="umkm-cat">Kuliner</span>
                    <h3 class="umkm-title">Kue Sapik Tradisional</h3>
                    <div class="umkm-owner">Usaha Mande</div>
                    <div class="umkm-location">Korong Mudik</div>
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
                        <li><a href="#umkm">UMKM</a></li>
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
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Smooth Scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });

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
            
        });
    </script>
</body>
</html>
