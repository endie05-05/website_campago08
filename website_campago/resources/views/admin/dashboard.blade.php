<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Admin - Nagari Campago</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:400,600,700,400i|inter:400,500,600|manrope:400,500,600,700,800" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">

    <div class="admin-shell">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="admin-brand">
                <div class="admin-brand-logo">LOGO</div>
                <div>
                    Panel Admin
                    <span class="admin-brand-sub">Nagari Campago</span>
                </div>
            </div>

            <nav class="admin-nav" id="adminNav">
                <span class="admin-nav-group-label">Umum</span>
                <button type="button" class="admin-nav-link active" data-panel="dashboard" data-title="Dashboard" data-desc="Ringkasan konten website Nagari Campago.">
                    <span class="icon">🏠</span> Dashboard
                </button>

                <span class="admin-nav-group-label">Konten Beranda</span>
                <button type="button" class="admin-nav-link" data-panel="aparatur" data-title="Aparatur Nagari" data-desc="Kelola daftar perangkat/struktur Nagari Campago.">
                    <span class="icon">🏛️</span> Aparatur Nagari
                </button>
                <button type="button" class="admin-nav-link" data-panel="statistik" data-title="Statistik Nagari" data-desc="Kelola angka statistik yang ditampilkan di beranda.">
                    <span class="icon">📊</span> Statistik Nagari
                </button>
                <button type="button" class="admin-nav-link" data-panel="potensi" data-title="Potensi Nagari" data-desc="Kelola kartu potensi (pertanian, UMKM, budaya, wisata).">
                    <span class="icon">🌾</span> Potensi Nagari
                </button>
                <button type="button" class="admin-nav-link" data-panel="berita" data-title="Berita &amp; Kegiatan" data-desc="Kelola berita utama dan daftar berita terbaru.">
                    <span class="icon">📰</span> Berita
                </button>
                <button type="button" class="admin-nav-link" data-panel="peta" data-title="Peta Digital" data-desc="Kelola kategori dan daftar lokasi pada peta digital.">
                    <span class="icon">🗺️</span> Peta Digital
                </button>
                <button type="button" class="admin-nav-link" data-panel="umkm" data-title="UMKM Lokal" data-desc="Kelola daftar produk dan usaha masyarakat.">
                    <span class="icon">🛍️</span> UMKM Lokal
                </button>
                <button type="button" class="admin-nav-link" data-panel="galeri" data-title="Galeri Budaya" data-desc="Kelola foto budaya dan galeri kehidupan masyarakat.">
                    <span class="icon">🖼</span> Galeri
                </button>

                <span class="admin-nav-group-label">Lainnya</span>
                <button type="button" class="admin-nav-link" data-panel="kontak" data-title="Footer &amp; Kontak" data-desc="Kelola informasi kontak dan deskripsi singkat pada footer.">
                    <span class="icon">✉️</span> Footer &amp; Kontak
                </button>
            </nav>

            <div class="admin-sidebar-footer">
                <a href="/" class="admin-back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    Kembali ke Website
                </a>
            </div>
        </aside>

        <!-- Main -->
        <main class="admin-main">
            <header class="admin-topbar">
                <div style="display:flex; align-items:center; gap:1rem;">
                    <button type="button" class="admin-menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>
                    <div>
                        <h1 class="admin-topbar-title" id="panelTitle">Dashboard</h1>
                        <p class="admin-topbar-desc" id="panelDesc">Ringkasan konten website Nagari Campago.</p>
                    </div>
                </div>
                <span class="admin-badge">⚠ Mode UI &mdash; belum ada autentikasi &amp; penyimpanan data</span>
            </header>

            <div class="admin-content">

                <!-- ================= DASHBOARD ================= -->
                <section class="admin-panel active" id="panel-dashboard">
                    <div class="admin-stat-cards">
                        <div class="admin-stat-card"><div class="num">4</div><div class="label">Perangkat Aparatur</div></div>
                        <div class="admin-stat-card"><div class="num">4</div><div class="label">Kartu Potensi</div></div>
                        <div class="admin-stat-card"><div class="num">4</div><div class="label">Berita Terpublikasi</div></div>
                        <div class="admin-stat-card"><div class="num">4</div><div class="label">Produk UMKM</div></div>
                        <div class="admin-stat-card"><div class="num">5</div><div class="label">Foto Galeri</div></div>
                    </div>

                    <div class="admin-card">
                        <div class="admin-card-header">
                            <div>
                                <h2>Akses Cepat</h2>
                                <p>Pilih bagian konten beranda yang ingin dikelola.</p>
                            </div>
                        </div>
                        <div class="admin-shortcut-grid">
                            <button type="button" class="admin-shortcut-card" data-goto="aparatur">
                                <span class="icon">🏛️</span>
                                <div><div class="title">Aparatur Nagari</div><div class="desc">Nama, jabatan, dan foto perangkat.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="potensi">
                                <span class="icon">🌾</span>
                                <div><div class="title">Potensi Nagari</div><div class="desc">Kartu pertanian, UMKM, budaya, wisata.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="berita">
                                <span class="icon">📰</span>
                                <div><div class="title">Berita</div><div class="desc">Tambah dan kelola berita terbaru.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="umkm">
                                <span class="icon">🛍️</span>
                                <div><div class="title">UMKM Lokal</div><div class="desc">Produk dan usaha masyarakat.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="galeri">
                                <span class="icon">🖼</span>
                                <div><div class="title">Galeri</div><div class="desc">Foto budaya dan kehidupan warga.</div></div>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- ================= APARATUR ================= -->
                <section class="admin-panel" id="panel-aparatur">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Aparatur Nagari</h2><p>Daftar perangkat/struktur Nagari Campago yang tampil di beranda.</p></div>
                            </div>
                            <div class="form-grid" style="margin-bottom:1.5rem;">
                                <div class="form-group">
                                    <label class="form-label">Label Kecil</label>
                                    <input type="text" class="form-input" name="aparatur_header[label]" value="Pemerintahan">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Judul Bagian</label>
                                    <input type="text" class="form-input" name="aparatur_header[judul]" value="Aparatur Nagari">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Pengantar</label>
                                    <textarea class="form-textarea" name="aparatur_header[deskripsi]">Mengenal susunan perangkat Nagari Campago yang bertugas melayani masyarakat dan memajukan nagari.</textarea>
                                </div>
                            </div>

                            <div class="repeater-list" id="list-aparatur">
                                @php
                                    $aparaturDefaults = [
                                        ['nama' => 'Nama Wali Nagari', 'jabatan' => 'Wali Nagari'],
                                        ['nama' => 'Nama Sekretaris', 'jabatan' => 'Sekretaris Nagari'],
                                        ['nama' => 'Nama Kasi', 'jabatan' => 'Kasi Pemerintahan'],
                                        ['nama' => 'Nama Kaur', 'jabatan' => 'Kaur Keuangan'],
                                    ];
                                @endphp
                                @foreach ($aparaturDefaults as $i => $item)
                                <div class="repeater-item">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <div class="form-group full">
                                            <label class="form-label">Foto</label>
                                            <div class="form-file">
                                                <div class="preview-box">👤</div>
                                                <input type="file" name="aparatur[][foto]" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-input" name="aparatur[][nama]" value="{{ $item['nama'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Jabatan</label>
                                            <input type="text" class="form-input" name="aparatur[][jabatan]" value="{{ $item['jabatan'] }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn-add" data-repeater="list-aparatur">+ Tambah Perangkat Nagari</button>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <!-- Template untuk item baru Aparatur -->
                <template id="list-aparatur-template">
                    <div class="repeater-item">
                        <span class="repeater-item-index">Item baru</span>
                        <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                        <div class="form-grid">
                            <div class="form-group full">
                                <label class="form-label">Foto</label>
                                <div class="form-file">
                                    <div class="preview-box">👤</div>
                                    <input type="file" name="aparatur[][foto]" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-input" name="aparatur[][nama]" placeholder="Nama perangkat">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-input" name="aparatur[][jabatan]" placeholder="Jabatan">
                            </div>
                        </div>
                    </div>
                </template>

                <!-- ================= STATISTIK ================= -->
                <section class="admin-panel" id="panel-statistik">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Statistik Nagari</h2><p>Angka ringkas yang ditampilkan pada beranda.</p></div>
                            </div>

                            <div class="repeater-list" id="list-statistik">
                                @php
                                    $statDefaults = [
                                        ['angka' => '8', 'label' => 'Korong'],
                                        ['angka' => '9,86', 'label' => 'Luas Wilayah'],
                                        ['angka' => '—', 'label' => 'Penduduk'],
                                        ['angka' => 'V Koto Kampung Dalam', 'label' => 'Kecamatan'],
                                    ];
                                @endphp
                                @foreach ($statDefaults as $i => $item)
                                <div class="repeater-item">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <label class="form-label">Angka / Nilai</label>
                                            <input type="text" class="form-input" name="statistik[][angka]" value="{{ $item['angka'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Label</label>
                                            <input type="text" class="form-input" name="statistik[][label]" value="{{ $item['label'] }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn-add" data-repeater="list-statistik">+ Tambah Statistik</button>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <template id="list-statistik-template">
                    <div class="repeater-item">
                        <span class="repeater-item-index">Item baru</span>
                        <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Angka / Nilai</label>
                                <input type="text" class="form-input" name="statistik[][angka]" placeholder="Contoh: 8">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Label</label>
                                <input type="text" class="form-input" name="statistik[][label]" placeholder="Contoh: Korong">
                            </div>
                        </div>
                    </div>
                </template>

                <!-- ================= POTENSI ================= -->
                <section class="admin-panel" id="panel-potensi">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Potensi Nagari</h2><p>Kartu potensi alam, ekonomi, budaya, dan wisata pada beranda.</p></div>
                            </div>
                            <div class="form-grid" style="margin-bottom:1.5rem;">
                                <div class="form-group">
                                    <label class="form-label">Judul Bagian</label>
                                    <input type="text" class="form-input" name="potensi_header[judul]" value="Jelajahi Potensi Campago">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Pengantar</label>
                                    <textarea class="form-textarea" name="potensi_header[deskripsi]">Temukan berbagai potensi alam, ekonomi, budaya, dan kehidupan masyarakat Nagari Campago.</textarea>
                                </div>
                            </div>

                            <div class="repeater-list" id="list-potensi">
                                @php
                                    $potensiDefaults = [
                                        ['judul' => 'Pertanian', 'deskripsi' => 'Hamparan sawah dan ladang yang menjadi sumber kehidupan masyarakat.', 'ukuran' => 'besar'],
                                        ['judul' => 'UMKM Lokal', 'deskripsi' => 'Kerajinan dan kuliner khas Campago.', 'ukuran' => 'kecil'],
                                        ['judul' => 'Budaya Minangkabau', 'deskripsi' => 'Kesenian dan adat istiadat yang terus lestari.', 'ukuran' => 'kecil'],
                                        ['judul' => 'Wisata & Alam', 'deskripsi' => 'Keindahan alam Nagari Campago.', 'ukuran' => 'kecil'],
                                    ];
                                @endphp
                                @foreach ($potensiDefaults as $i => $item)
                                <div class="repeater-item">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <div class="form-group full">
                                            <label class="form-label">Gambar</label>
                                            <div class="form-file">
                                                <div class="preview-box">🌾</div>
                                                <input type="file" name="potensi[][gambar]" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Judul Kartu</label>
                                            <input type="text" class="form-input" name="potensi[][judul]" value="{{ $item['judul'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Ukuran Kartu</label>
                                            <select class="form-select" name="potensi[][ukuran]">
                                                <option value="besar" {{ $item['ukuran'] === 'besar' ? 'selected' : '' }}>Besar</option>
                                                <option value="kecil" {{ $item['ukuran'] === 'kecil' ? 'selected' : '' }}>Kecil</option>
                                            </select>
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Deskripsi Singkat</label>
                                            <textarea class="form-textarea" name="potensi[][deskripsi]">{{ $item['deskripsi'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn-add" data-repeater="list-potensi">+ Tambah Kartu Potensi</button>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <template id="list-potensi-template">
                    <div class="repeater-item">
                        <span class="repeater-item-index">Item baru</span>
                        <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                        <div class="form-grid">
                            <div class="form-group full">
                                <label class="form-label">Gambar</label>
                                <div class="form-file">
                                    <div class="preview-box">🌾</div>
                                    <input type="file" name="potensi[][gambar]" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Judul Kartu</label>
                                <input type="text" class="form-input" name="potensi[][judul]" placeholder="Judul potensi">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Ukuran Kartu</label>
                                <select class="form-select" name="potensi[][ukuran]">
                                    <option value="besar">Besar</option>
                                    <option value="kecil" selected>Kecil</option>
                                </select>
                            </div>
                            <div class="form-group full">
                                <label class="form-label">Deskripsi Singkat</label>
                                <textarea class="form-textarea" name="potensi[][deskripsi]" placeholder="Deskripsi singkat"></textarea>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- ================= BERITA ================= -->
                <section class="admin-panel" id="panel-berita">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Berita &amp; Kegiatan</h2><p>Berita utama dan daftar berita terbaru pada beranda.</p></div>
                            </div>
                            <div class="form-grid" style="margin-bottom:1.5rem;">
                                <div class="form-group">
                                    <label class="form-label">Judul Bagian</label>
                                    <input type="text" class="form-input" name="berita_header[judul]" value="Cerita dari Campago">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Deskripsi Pengantar</label>
                                    <input type="text" class="form-input" name="berita_header[deskripsi]" value="Berita, kegiatan, dan cerita terbaru dari masyarakat Nagari Campago.">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Teks Tautan "Lihat Semua"</label>
                                    <input type="text" class="form-input" name="berita_header[link_teks]" value="Lihat semua berita">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tujuan Tautan</label>
                                    <input type="text" class="form-input" name="berita_header[link_url]" value="#">
                                </div>
                            </div>

                            <div class="repeater-list" id="list-berita">
                                @php
                                    $beritaDefaults = [
                                        ['jenis' => 'utama', 'kategori' => 'Pemerintahan', 'tanggal' => '24 Juli 2026', 'judul' => 'Gotong Royong Bersama Membersihkan Saluran Irigasi di Korong Pasa', 'deskripsi' => 'Masyarakat Nagari Campago antusias mengikuti kegiatan gotong royong rutin yang diadakan setiap akhir bulan...'],
                                        ['jenis' => 'biasa', 'kategori' => '', 'tanggal' => '20 Juli 2026', 'judul' => 'Pelatihan Pembuatan Kerajinan Tangan untuk Ibu-ibu PKK', 'deskripsi' => ''],
                                        ['jenis' => 'biasa', 'kategori' => '', 'tanggal' => '15 Juli 2026', 'judul' => 'Penyaluran Bantuan Langsung Tunai (BLT) Tahap III Berjalan Lancar', 'deskripsi' => ''],
                                        ['jenis' => 'biasa', 'kategori' => '', 'tanggal' => '10 Juli 2026', 'judul' => 'Persiapan Menyambut Hari Kemerdekaan RI ke-81 di Tingkat Nagari', 'deskripsi' => ''],
                                    ];
                                @endphp
                                @foreach ($beritaDefaults as $i => $item)
                                <div class="repeater-item">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <div class="form-group full">
                                            <label class="form-label">Gambar Berita</label>
                                            <div class="form-file">
                                                <div class="preview-box">📰</div>
                                                <input type="file" name="berita[][gambar]" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Jenis Tampilan</label>
                                            <select class="form-select" name="berita[][jenis]">
                                                <option value="utama" {{ $item['jenis'] === 'utama' ? 'selected' : '' }}>Berita Utama</option>
                                                <option value="biasa" {{ $item['jenis'] === 'biasa' ? 'selected' : '' }}>Daftar Berita</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Kategori</label>
                                            <input type="text" class="form-input" name="berita[][kategori]" value="{{ $item['kategori'] }}" placeholder="Contoh: Pemerintahan">
                                            <span class="form-hint">Hanya tampil di beranda untuk Berita Utama.</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tanggal</label>
                                            <input type="text" class="form-input" name="berita[][tanggal]" value="{{ $item['tanggal'] }}">
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Judul Berita</label>
                                            <input type="text" class="form-input" name="berita[][judul]" value="{{ $item['judul'] }}">
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Deskripsi / Ringkasan</label>
                                            <textarea class="form-textarea" name="berita[][deskripsi]" placeholder="Hanya tampil di beranda untuk Berita Utama">{{ $item['deskripsi'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn-add" data-repeater="list-berita">+ Tambah Berita</button>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <template id="list-berita-template">
                    <div class="repeater-item">
                        <span class="repeater-item-index">Item baru</span>
                        <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                        <div class="form-grid">
                            <div class="form-group full">
                                <label class="form-label">Gambar Berita</label>
                                <div class="form-file">
                                    <div class="preview-box">📰</div>
                                    <input type="file" name="berita[][gambar]" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis Tampilan</label>
                                <select class="form-select" name="berita[][jenis]">
                                    <option value="utama">Berita Utama</option>
                                    <option value="biasa" selected>Daftar Berita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kategori</label>
                                <input type="text" class="form-input" name="berita[][kategori]" placeholder="Contoh: Pemerintahan">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tanggal</label>
                                <input type="text" class="form-input" name="berita[][tanggal]" placeholder="Contoh: 27 Juli 2026">
                            </div>
                            <div class="form-group full">
                                <label class="form-label">Judul Berita</label>
                                <input type="text" class="form-input" name="berita[][judul]" placeholder="Judul berita">
                            </div>
                            <div class="form-group full">
                                <label class="form-label">Deskripsi / Ringkasan</label>
                                <textarea class="form-textarea" name="berita[][deskripsi]" placeholder="Ringkasan singkat berita"></textarea>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- ================= PETA DIGITAL ================= -->
                <section class="admin-panel" id="panel-peta">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Peta Digital</h2><p>Kategori dan daftar lokasi yang tampil pada peta digital beranda.</p></div>
                            </div>
                            <div class="form-grid" style="margin-bottom:1.5rem;">
                                <div class="form-group">
                                    <label class="form-label">Judul Bagian</label>
                                    <input type="text" class="form-input" name="peta_header[judul]" value="Temukan Campago">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Pengantar</label>
                                    <textarea class="form-textarea" name="peta_header[deskripsi]">Jelajahi fasilitas umum, sekolah, tempat ibadah, UMKM, layanan kesehatan, dan lokasi penting lainnya melalui peta digital Nagari Campago.</textarea>
                                </div>
                            </div>

                            <!-- Kategori: Fasilitas Umum -->
                            <div class="repeater-item" style="margin-bottom:1.5rem;">
                                <span class="repeater-item-index">Kategori: Fasilitas Umum</span>
                                <div class="form-grid">
                                    <div class="form-group full">
                                        <label class="form-label">Deskripsi Kategori</label>
                                        <textarea class="form-textarea" name="peta[fasilitas_umum][deskripsi]">Kumpulan tempat umum penting seperti balai, sekolah, pasar, dan fasilitas sosial yang mendukung keseharian warga Campago.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Jumlah Lokasi</label>
                                        <input type="number" class="form-input" name="peta[fasilitas_umum][jumlah]" value="6">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Area Utama</label>
                                        <input type="text" class="form-input" name="peta[fasilitas_umum][area]" value="Balai, Sekolah, Pasar, Kantor Pelayanan">
                                    </div>
                                    <div class="form-group full">
                                        <label class="form-label">Daftar Lokasi</label>
                                        <div class="repeater-list" id="list-fasum">
                                            @foreach (['Balai Pertemuan Nagari - Korong Pasa', 'SD Negeri 01 Campago - Korong Tarok', 'Pasar Campago - Korong Koto', 'Posyandu Melati - Korong Mudik', 'Lapangan Serbaguna - Korong Pasa', 'Kantor Wali Nagari - Korong Koto'] as $lokasi)
                                            <div class="repeater-item" style="padding: 0.75rem 3rem 0.75rem 1rem;">
                                                <button type="button" class="repeater-remove" aria-label="Hapus lokasi">&times;</button>
                                                <input type="text" class="form-input" name="peta[fasilitas_umum][lokasi][]" value="{{ $lokasi }}">
                                            </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn-add" data-repeater="list-fasum">+ Tambah Lokasi</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Kategori: UMKM -->
                            <div class="repeater-item">
                                <span class="repeater-item-index">Kategori: UMKM</span>
                                <div class="form-grid">
                                    <div class="form-group full">
                                        <label class="form-label">Deskripsi Kategori</label>
                                        <textarea class="form-textarea" name="peta[umkm][deskripsi]">Usaha mikro, kecil, dan menengah yang menampung produk lokal khas Campago seperti kuliner, kerajinan, dan pertanian.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Jumlah Lokasi</label>
                                        <input type="number" class="form-input" name="peta[umkm][jumlah]" value="4">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Area Utama</label>
                                        <input type="text" class="form-input" name="peta[umkm][area]" value="Kuliner, Kerajinan, Pertanian">
                                    </div>
                                    <div class="form-group full">
                                        <label class="form-label">Daftar Lokasi</label>
                                        <div class="repeater-list" id="list-peta-umkm">
                                            @foreach (['Keripik Singkong Balado - Korong Pasa', 'Anyaman Bambu - Korong Tarok', 'Beras Organik Campago - Korong Koto', 'Kue Sapik Tradisional - Korong Mudik'] as $lokasi)
                                            <div class="repeater-item" style="padding: 0.75rem 3rem 0.75rem 1rem;">
                                                <button type="button" class="repeater-remove" aria-label="Hapus lokasi">&times;</button>
                                                <input type="text" class="form-input" name="peta[umkm][lokasi][]" value="{{ $lokasi }}">
                                            </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn-add" data-repeater="list-peta-umkm">+ Tambah Lokasi</button>
                                    </div>
                                </div>
                            </div>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <template id="list-fasum-template">
                    <div class="repeater-item" style="padding: 0.75rem 3rem 0.75rem 1rem;">
                        <button type="button" class="repeater-remove" aria-label="Hapus lokasi">&times;</button>
                        <input type="text" class="form-input" name="peta[fasilitas_umum][lokasi][]" placeholder="Nama lokasi - Korong">
                    </div>
                </template>
                <template id="list-peta-umkm-template">
                    <div class="repeater-item" style="padding: 0.75rem 3rem 0.75rem 1rem;">
                        <button type="button" class="repeater-remove" aria-label="Hapus lokasi">&times;</button>
                        <input type="text" class="form-input" name="peta[umkm][lokasi][]" placeholder="Nama lokasi - Korong">
                    </div>
                </template>

                <!-- ================= UMKM ================= -->
                <section class="admin-panel" id="panel-umkm">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>UMKM Lokal</h2><p>Daftar produk dan usaha masyarakat pada beranda.</p></div>
                            </div>
                            <div class="form-grid" style="margin-bottom:1.5rem;">
                                <div class="form-group">
                                    <label class="form-label">Judul Bagian</label>
                                    <input type="text" class="form-input" name="umkm_header[judul]" value="Produk dari Campago">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Deskripsi Pengantar</label>
                                    <input type="text" class="form-input" name="umkm_header[deskripsi]" value="Kenali produk dan usaha lokal yang tumbuh bersama masyarakat Nagari Campago.">
                                </div>
                            </div>

                            <div class="repeater-list" id="list-umkm">
                                @php
                                    $umkmDefaults = [
                                        ['kategori' => 'Kuliner', 'judul' => 'Keripik Singkong Balado', 'pemilik' => 'Usaha Ibu Rohani', 'lokasi' => 'Korong Pasa'],
                                        ['kategori' => 'Kerajinan', 'judul' => 'Anyaman Bambu', 'pemilik' => 'Kelompok Tani Harapan', 'lokasi' => 'Korong Tarok'],
                                        ['kategori' => 'Pertanian', 'judul' => 'Beras Organik Campago', 'pemilik' => 'KUD Campago', 'lokasi' => 'Korong Koto'],
                                        ['kategori' => 'Kuliner', 'judul' => 'Kue Sapik Tradisional', 'pemilik' => 'Usaha Mande', 'lokasi' => 'Korong Mudik'],
                                    ];
                                @endphp
                                @foreach ($umkmDefaults as $i => $item)
                                <div class="repeater-item">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <div class="form-group full">
                                            <label class="form-label">Gambar Produk</label>
                                            <div class="form-file">
                                                <div class="preview-box">🛍️</div>
                                                <input type="file" name="umkm[][gambar]" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Kategori</label>
                                            <input type="text" class="form-input" name="umkm[][kategori]" value="{{ $item['kategori'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nama Produk / Usaha</label>
                                            <input type="text" class="form-input" name="umkm[][judul]" value="{{ $item['judul'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nama Pemilik</label>
                                            <input type="text" class="form-input" name="umkm[][pemilik]" value="{{ $item['pemilik'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Lokasi</label>
                                            <input type="text" class="form-input" name="umkm[][lokasi]" value="{{ $item['lokasi'] }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn-add" data-repeater="list-umkm">+ Tambah Produk UMKM</button>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <template id="list-umkm-template">
                    <div class="repeater-item">
                        <span class="repeater-item-index">Item baru</span>
                        <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                        <div class="form-grid">
                            <div class="form-group full">
                                <label class="form-label">Gambar Produk</label>
                                <div class="form-file">
                                    <div class="preview-box">🛍️</div>
                                    <input type="file" name="umkm[][gambar]" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kategori</label>
                                <input type="text" class="form-input" name="umkm[][kategori]" placeholder="Contoh: Kuliner">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama Produk / Usaha</label>
                                <input type="text" class="form-input" name="umkm[][judul]" placeholder="Nama produk">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama Pemilik</label>
                                <input type="text" class="form-input" name="umkm[][pemilik]" placeholder="Nama pemilik usaha">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Lokasi</label>
                                <input type="text" class="form-input" name="umkm[][lokasi]" placeholder="Korong">
                            </div>
                        </div>
                    </div>
                </template>

                <!-- ================= GALERI ================= -->
                <section class="admin-panel" id="panel-galeri">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Galeri Budaya</h2><p>Foto budaya dan kehidupan masyarakat pada beranda.</p></div>
                            </div>
                            <div class="form-grid" style="margin-bottom:1.5rem;">
                                <div class="form-group">
                                    <label class="form-label">Label Kecil</label>
                                    <input type="text" class="form-input" name="galeri_header[label]" value="Campago Punya Cerita">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Judul / Kutipan Galeri</label>
                                    <textarea class="form-textarea" name="galeri_header[judul]">Dari adat, budaya, kehidupan masyarakat, hingga berbagai cerita yang terus hidup dari generasi ke generasi.</textarea>
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Gambar Latar Galeri (Hero)</label>
                                    <div class="form-file">
                                        <div class="preview-box">🖼️</div>
                                        <input type="file" name="galeri_header[gambar]" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Teks Tautan</label>
                                    <input type="text" class="form-input" name="galeri_header[link_teks]" value="Jelajahi Galeri">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tujuan Tautan</label>
                                    <input type="text" class="form-input" name="galeri_header[link_url]" value="#">
                                </div>
                            </div>

                            <div class="repeater-list" id="list-galeri">
                                @php
                                    $galeriDefaults = ['besar', 'sedang', 'tinggi', 'sedang', 'lebar'];
                                @endphp
                                @foreach ($galeriDefaults as $i => $ukuran)
                                <div class="repeater-item">
                                    <span class="repeater-item-index">Foto #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <div class="form-group full">
                                            <label class="form-label">Foto</label>
                                            <div class="form-file">
                                                <div class="preview-box">📷</div>
                                                <input type="file" name="galeri[][gambar]" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Ukuran Grid</label>
                                            <select class="form-select" name="galeri[][ukuran]">
                                                <option value="besar" {{ $ukuran === 'besar' ? 'selected' : '' }}>Besar</option>
                                                <option value="sedang" {{ $ukuran === 'sedang' ? 'selected' : '' }}>Sedang</option>
                                                <option value="tinggi" {{ $ukuran === 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                                                <option value="lebar" {{ $ukuran === 'lebar' ? 'selected' : '' }}>Lebar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn-add" data-repeater="list-galeri">+ Tambah Foto</button>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <template id="list-galeri-template">
                    <div class="repeater-item">
                        <span class="repeater-item-index">Foto baru</span>
                        <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                        <div class="form-grid">
                            <div class="form-group full">
                                <label class="form-label">Foto</label>
                                <div class="form-file">
                                    <div class="preview-box">📷</div>
                                    <input type="file" name="galeri[][gambar]" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Ukuran Grid</label>
                                <select class="form-select" name="galeri[][ukuran]">
                                    <option value="besar">Besar</option>
                                    <option value="sedang" selected>Sedang</option>
                                    <option value="tinggi">Tinggi</option>
                                    <option value="lebar">Lebar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- ================= KONTAK / FOOTER ================= -->
                <section class="admin-panel" id="panel-kontak">
                    <form class="admin-form" onsubmit="return handleAdminSubmit(event)">
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Footer &amp; Kontak</h2><p>Informasi kontak dan deskripsi singkat yang tampil pada footer website.</p></div>
                            </div>
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Singkat Nagari</label>
                                    <textarea class="form-textarea" name="kontak[deskripsi]">Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat.</textarea>
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Alamat Kantor Wali Nagari</label>
                                    <textarea class="form-textarea" name="kontak[alamat]">[Placeholder Alamat Kantor Wali Nagari]</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-input" name="kontak[email]" value="info@campago.desa.id">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-input" name="kontak[telepon]" value="[Placeholder Nomor Telepon]">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Teks Hak Cipta (Copyright)</label>
                                    <input type="text" class="form-input" name="kontak[copyright]" value="© 2026 Pemerintah Nagari Campago. All Rights Reserved.">
                                </div>
                            </div>
                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.admin-nav-link');
            const panels = document.querySelectorAll('.admin-panel');
            const panelTitle = document.getElementById('panelTitle');
            const panelDesc = document.getElementById('panelDesc');
            const sidebar = document.getElementById('adminSidebar');
            const menuToggle = document.getElementById('menuToggle');

            function goToPanel(name) {
                const targetLink = document.querySelector('.admin-nav-link[data-panel="' + name + '"]');
                if (!targetLink) return;

                navLinks.forEach(l => l.classList.remove('active'));
                targetLink.classList.add('active');

                panels.forEach(p => p.classList.remove('active'));
                const targetPanel = document.getElementById('panel-' + name);
                if (targetPanel) targetPanel.classList.add('active');

                panelTitle.textContent = targetLink.dataset.title || targetLink.textContent.trim();
                panelDesc.textContent = targetLink.dataset.desc || '';

                sidebar.classList.remove('is-open');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            navLinks.forEach(link => {
                link.addEventListener('click', () => goToPanel(link.dataset.panel));
            });

            document.querySelectorAll('[data-goto]').forEach(btn => {
                btn.addEventListener('click', () => goToPanel(btn.dataset.goto));
            });

            menuToggle.addEventListener('click', () => sidebar.classList.toggle('is-open'));

            // Repeater: tambah item baru dari <template>
            document.querySelectorAll('.btn-add[data-repeater]').forEach(addBtn => {
                addBtn.addEventListener('click', () => {
                    const listId = addBtn.dataset.repeater;
                    const list = document.getElementById(listId);
                    const template = document.getElementById(listId + '-template');
                    if (!list || !template) return;
                    const fragment = template.content.cloneNode(true);
                    list.appendChild(fragment);
                    initPreviewBoxes(list);
                    refreshRepeaterIndexes(list);
                });
            });

            // Repeater: hapus item
            document.addEventListener('click', (e) => {
                const removeBtn = e.target.closest('.repeater-remove');
                if (!removeBtn) return;
                const item = removeBtn.closest('.repeater-item');
                const list = item.parentElement;
                item.remove();
                if (list && list.classList.contains('repeater-list')) {
                    refreshRepeaterIndexes(list);
                }
            });

            function refreshRepeaterIndexes(list) {
                list.querySelectorAll(':scope > .repeater-item > .repeater-item-index').forEach((badge, idx) => {
                    if (!badge.textContent.includes('Kategori')) {
                        badge.textContent = 'Item #' + (idx + 1);
                    }
                });
            }

            // Simpan ikon kosong asli tiap kotak preview supaya bisa dikembalikan saat reset/hapus file
            function initPreviewBoxes(scope) {
                scope.querySelectorAll('.preview-box').forEach(box => {
                    if (!box.dataset.emptyIcon) {
                        box.dataset.emptyIcon = box.textContent.trim();
                    }
                });
            }
            initPreviewBoxes(document);

            // Preview gambar saat file dipilih pada input upload manapun
            document.addEventListener('change', (e) => {
                const input = e.target;
                if (!(input.matches && input.matches('.form-file input[type="file"]'))) return;

                const wrapper = input.closest('.form-file');
                const box = wrapper.querySelector('.preview-box');
                let nameEl = wrapper.querySelector('.file-name');
                if (!nameEl) {
                    nameEl = document.createElement('span');
                    nameEl.className = 'file-name';
                    wrapper.appendChild(nameEl);
                }

                const file = input.files && input.files[0];
                if (file && file.type.startsWith('image/')) {
                    const url = URL.createObjectURL(file);
                    box.style.backgroundImage = `url('${url}')`;
                    box.style.backgroundSize = 'cover';
                    box.style.backgroundPosition = 'center';
                    box.textContent = '';
                    nameEl.textContent = file.name;
                } else if (file) {
                    box.style.backgroundImage = 'none';
                    box.textContent = box.dataset.emptyIcon || '📄';
                    nameEl.textContent = file.name;
                } else {
                    box.style.backgroundImage = 'none';
                    box.textContent = box.dataset.emptyIcon || '';
                    nameEl.textContent = '';
                }
            });

            // Kembalikan preview ke kondisi kosong saat form direset (tombol Batalkan)
            document.addEventListener('reset', (e) => {
                if (!(e.target.classList && e.target.classList.contains('admin-form'))) return;
                const form = e.target;
                setTimeout(() => {
                    form.querySelectorAll('.form-file').forEach(wrapper => {
                        const box = wrapper.querySelector('.preview-box');
                        box.style.backgroundImage = 'none';
                        box.textContent = box.dataset.emptyIcon || '';
                        const nameEl = wrapper.querySelector('.file-name');
                        if (nameEl) nameEl.textContent = '';
                    });
                });
            });
        });

        function handleAdminSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const panel = form.closest('.admin-panel');
            const heading = panel ? panel.querySelector('.admin-card-header h2') : null;
            const sectionName = heading ? heading.textContent.trim() : 'bagian ini';
            alert('Perubahan pada "' + sectionName + '" tervalidasi di sisi tampilan (UI). Backend penyimpanan data belum terhubung, jadi data belum benar-benar tersimpan.');
            return false;
        }
    </script>
</body>
</html>
