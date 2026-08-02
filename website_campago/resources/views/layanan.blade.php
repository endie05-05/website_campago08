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
                <li><a href="/" class="nav-link">Beranda</a></li>
                <li><a href="/#profil" class="nav-link">Profil</a></li>
                <li><a href="/#pemerintahan" class="nav-link">Struktur Nagari</a></li>
                <li><a href="/#potensi" class="nav-link">Potensi</a></li>
                <li><a href="/#peta" class="nav-link">Informasi</a></li>
                <li><a href="/#galeri" class="nav-link">Galeri</a></li>
                <li><a href="/layanan" class="nav-link current-page">Layanan</a></li>
            </ul>

            <div class="nav-actions">
                
                <button class="search-btn" type="button" aria-label="Cari di situs"><span>Cari</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
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

    <!-- 2. Layanan & Informasi -->
    <section class="service-intro section-padding">
        <div class="container">
            <div class="service-intro-heading animate-on-scroll">
                <span class="small-label">Pelayanan Publik</span>
                <h1 class="section-heading">Layanan Nagari</h1>
                <p class="potensi-desc">Pusat layanan administrasi, kependudukan, dan pengaduan bagi masyarakat Nagari Campago. Untuk jam operasional dan kontak kantor, lihat bagian <a href="/#peta" class="btn-link">Informasi</a> di beranda.</p>
            </div>

            <div class="service-overview-grid animate-on-scroll delay-1">
                <article class="service-overview-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg></div>
                    <h2 class="info-title">Surat Pengantar</h2>
                    <p class="info-desc text-justify">Layanan pembuatan surat pengantar KTP, KK, SKCK, dan keperluan administrasi lainnya.</p>
                </article>
                <article class="service-overview-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"></path><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"></path></svg></div>
                    <h2 class="info-title">Legalisir Dokumen</h2>
                    <p class="info-desc text-justify">Legalisir surat dan dokumen kependudukan yang memerlukan pengesahan dari nagari.</p>
                </article>
                <article class="service-overview-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"></path><path d="m8.09 9.91 1.27-1.27"></path></svg></div>
                    <h2 class="info-title">Pengaduan</h2>
                    <p class="info-desc text-justify">Saluran komunikasi bagi masyarakat untuk menyampaikan aspirasi dan pengaduan layanan.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. Daftar Layanan -->
    <section class="service-details section-padding bg-cream-light">
        <div class="container">
            <div class="service-details-heading">
                <span class="small-label">Administrasi Nagari</span>
                <h2 class="section-heading">Daftar Layanan</h2>
            </div><div class="info-grid animate-on-scroll delay-1">
                <div class="info-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
                    <h3 class="info-title">Pembuatan KTP & KK</h3>
                    <p class="info-desc text-justify">Persyaratan pembuatan KTP baru, perpanjangan, atau perubahan data Kartu Keluarga.</p>
                    <a href="#" class="btn-link" style="margin-top: 1rem; display: inline-block;">Lihat Syarat</a>
                </div>
                <div class="info-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></div>
                    <h3 class="info-title">Surat Keterangan Usaha</h3>
                    <p class="info-desc text-justify">Prosedur pengurusan SKU untuk keperluan perbankan dan izin usaha UMKM.</p>
                    <a href="#" class="btn-link" style="margin-top: 1rem; display: inline-block;">Lihat Syarat</a>
                </div>
                <div class="info-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div>
                    <h3 class="info-title">Pengaduan Masyarakat</h3>
                    <p class="info-desc text-justify">Saluran komunikasi bagi masyarakat untuk menyampaikan aspirasi dan pengaduan layanan.</p>
                    <a href="#" class="btn-link" style="margin-top: 1rem; display: inline-block;">Buat Laporan</a>
                </div>
                <div class="info-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                    <h3 class="info-title">Surat Pengantar Nikah</h3>
                    <p class="info-desc text-justify">Informasi dokumen administrasi untuk pengurusan pernikahan di KUA.</p>
                    <a href="#" class="btn-link" style="margin-top: 1rem; display: inline-block;">Lihat Syarat</a>
                </div>
            </div>
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
