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

    <style>
        .service-overview-grid-duo {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .service-overview-card {
            position: relative;
        }

        .service-overview-card-action {
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-overview-card-action:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 32px rgba(31, 64, 55, 0.12);
        }

        .card-stretched-label {
            position: absolute;
            inset: 0;
            z-index: 2;
            cursor: pointer;
        }

        .modal-header-surat {
            background: linear-gradient(120deg, rgba(218, 191, 132, 0.24) 0%, rgba(47, 93, 80, 0.14) 100%);
        }
        .modal-header-surat::before { width: 170px; height: 170px; background: rgba(218, 191, 132, 0.5); top: -70px; right: 30px; }
        .modal-header-surat::after { width: 120px; height: 120px; background: rgba(47, 93, 80, 0.2); bottom: -75px; left: 30%; }

        #toggle-surat-pengantar:checked ~ .modal-overlay.modal-surat-pengantar {
            display: flex;
        }

        #toggle-surat-login-required:checked ~ .modal-overlay.modal-surat-login-required {
            display: flex;
        }

        @media (max-width: 768px) {
            .service-overview-grid-duo { grid-template-columns: 1fr; }
        }
    </style>
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
            <input type="checkbox" id="toggle-surat-pengantar" class="modal-toggle" hidden>
            <input type="checkbox" id="toggle-surat-login-required" class="modal-toggle" hidden>

            <div class="service-intro-heading animate-on-scroll">
                <span class="small-label">Pelayanan Publik</span>
                <h1 class="section-heading">Layanan Nagari</h1>
                <p class="potensi-desc">Pusat layanan administrasi, kependudukan, dan pengaduan bagi masyarakat Nagari Campago. Untuk jam operasional dan kontak kantor, lihat bagian <a href="/#peta" class="btn-link">Informasi</a> di beranda.</p>
            </div>

            @if (session('success'))
            <div style="background: rgba(47, 93, 80, 0.12); border: 1px solid rgba(47, 93, 80, 0.3); color: var(--color-green-dark); padding: 0.9rem 1.25rem; border-radius: 10px; margin-bottom: 1.5rem; font-weight: 600;">
                ✓ {{ session('success') }}
            </div>
            @endif

            <div class="service-overview-grid service-overview-grid-duo animate-on-scroll delay-1">
                <div class="service-overview-card service-overview-card-action">
                    <label for="{{ auth('resident')->check() ? 'toggle-surat-pengantar' : 'toggle-surat-login-required' }}" class="card-stretched-label" aria-label="Pilih jenis surat pengantar yang ingin diajukan"></label>
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg></div>
                    <h2 class="info-title">Surat Pengantar</h2>
                    <p class="info-desc text-justify">Layanan pembuatan surat pengantar KTP, KK, SKCK, dan keperluan administrasi lainnya.</p>
                    <span class="btn-link" style="margin-top: 1rem; display: inline-block;">Pilih Jenis Surat</span>
                </div>
                <a href="{{ route('pengaduan.form') }}" class="service-overview-card">
                    <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"></path><path d="m8.09 9.91 1.27-1.27"></path></svg></div>
                    <h2 class="info-title">Pengaduan</h2>
                    <p class="info-desc text-justify">Saluran komunikasi bagi masyarakat untuk menyampaikan aspirasi dan pengaduan layanan.</p>
                    <span class="btn-link" style="margin-top: 1rem; display: inline-block;">Buat Pengaduan</span>
                </a>
            </div>

            <div class="modal-overlay modal-surat-pengantar">
                <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="suratPengantarTitle">
                    <label class="modal-close" for="toggle-surat-pengantar" aria-label="Tutup pilihan surat">×</label>
                    <div class="modal-header modal-header-surat">
                        <div class="modal-icon-badge">📄</div>
                        <div>
                            <span class="small-label">Surat Pengantar</span>
                            <h2 id="suratPengantarTitle">Pilih Jenis Surat</h2>
                            <p>Pilih salah satu jenis surat di bawah ini, lalu isi formulir pengajuan secara online.</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="info-grid">
                            <a href="{{ route('formulir.sku') }}" class="info-card info-card-clickable">
                                <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></div>
                                <h3 class="info-title">Surat Keterangan Usaha (SKU)</h3>
                                <p class="info-desc text-justify">Untuk keperluan perbankan dan izin usaha UMKM.</p>
                            </a>
                            <a href="{{ route('formulir.sktm') }}" class="info-card info-card-clickable">
                                <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                                <h3 class="info-title">Surat Keterangan Tidak Mampu (SKTM)</h3>
                                <p class="info-desc text-justify">Untuk bantuan sosial, beasiswa, atau keringanan biaya.</p>
                            </a>
                            <a href="{{ route('formulir.domisili') }}" class="info-card info-card-clickable">
                                <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                                <h3 class="info-title">Surat Keterangan Domisili</h3>
                                <p class="info-desc text-justify">Untuk perorangan maupun organisasi/kelompok.</p>
                            </a>
                            <a href="/#peta" class="info-card info-card-clickable">
                                <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg></div>
                                <h3 class="info-title">Surat Lainnya</h3>
                                <p class="info-desc text-justify">Kelahiran, kematian, kehilangan — hubungi kantor nagari langsung.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-overlay modal-surat-login-required">
                <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="suratLoginRequiredTitle" style="max-width: 480px;">
                    <label class="modal-close" for="toggle-surat-login-required" aria-label="Tutup">×</label>
                    <div class="modal-header modal-header-surat">
                        <div class="modal-icon-badge"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></div>
                        <div>
                            <span class="small-label">Surat Pengantar</span>
                            <h2 id="suratLoginRequiredTitle">Silakan Masuk Dulu</h2>
                            <p>Layanan ini khusus untuk warga yang sudah terdaftar. Masuk pakai NIK dan nama sesuai KTP, atau daftar dulu kalau belum punya akun.</p>
                        </div>
                    </div>
                    <div class="modal-body" style="display: flex; flex-direction: column; gap: 0.85rem;">
                        <a href="{{ route('warga.login') }}" class="btn-primary" style="text-align: center; padding: 0.85rem 1.5rem; border-radius: 8px;">Masuk sebagai Masyarakat</a>
                        <a href="{{ route('warga.register') }}" class="btn-link" style="text-align: center;">Belum punya akun? Daftar di sini</a>
                    </div>
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
