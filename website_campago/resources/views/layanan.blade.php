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
                @if ($villageProfile->logo_path ?? null)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($villageProfile->logo_path) }}" alt="Logo Nagari Campago" class="nav-logo-img">
                @else
                <div class="nav-logo-placeholder">LOGO</div>
                @endif
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
                    <label for="toggle-surat-pengantar" class="card-stretched-label" aria-label="Pilih jenis surat pengantar yang ingin diajukan"></label>
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
                        @php
                            $suratIconsBySlug = [
                                'sku' => '<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>',
                                'sktm' => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>',
                                'domisili' => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle>',
                            ];
                            $suratIconDefault = '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line>';
                        @endphp
                        <div class="info-grid">
                            @foreach ($suratTemplates as $template)
                            <a href="{{ route('formulir.custom', $template) }}" class="info-card info-card-clickable">
                                <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $suratIconsBySlug[$template->slug] ?? $suratIconDefault !!}</svg></div>
                                <h3 class="info-title">{{ $template->name }}</h3>
                                <p class="info-desc text-justify">{{ $template->description ?: 'Ajukan '.$template->name.' secara online.' }}</p>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 11. Footer -->
    <footer class="footer">
        <div class="container">
            @php
                $jamOperasional = [
                    ['icon' => '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>', 'nama' => 'Senin - Jumat', 'keterangan' => '08.00 - 16.00 WIB'],
                    ['icon' => '<path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line>', 'nama' => 'Istirahat', 'keterangan' => '12.00 - 13.00 WIB'],
                    ['icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>', 'nama' => 'Sabtu - Minggu', 'keterangan' => 'Libur'],
                ];
            @endphp
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
