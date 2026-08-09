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
                <button type="button" class="admin-nav-link" data-panel="surat" data-title="Pengajuan Surat Pengantar" data-desc="Lihat dan proses pengajuan SKU, SKTM, dan Surat Domisili yang masih berjalan.">
                    <span class="icon">📝</span> Surat Pengantar
                    @if ($newSuratRequestsCount > 0)
                        <span class="admin-nav-count">{{ $newSuratRequestsCount }}</span>
                    @endif
                </button>
                <button type="button" class="admin-nav-link" data-panel="riwayat-surat" data-title="Riwayat Surat Pengantar" data-desc="Arsip pengajuan surat yang sudah selesai atau ditolak.">
                    <span class="icon">🗂️</span> Riwayat Surat
                </button>
                <button type="button" class="admin-nav-link" data-panel="pengaduan" data-title="Pengaduan Masyarakat" data-desc="Lihat dan tindak lanjuti pengaduan/aspirasi yang masuk dari masyarakat.">
                    <span class="icon">📮</span> Pengaduan
                    @if ($newContactMessagesCount > 0)
                        <span class="admin-nav-count">{{ $newContactMessagesCount }}</span>
                    @endif
                </button>
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
                <div style="display:flex; align-items:center; gap:1rem;">
                    <span style="font-weight:600; color: var(--color-green-dark, #1f4037);">{{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" style="margin:0;">
                        @csrf
                        <button type="submit" class="btn-ghost" style="cursor:pointer;">Keluar</button>
                    </form>
                </div>
            </header>

            <div class="admin-content">

                @if (session('success'))
                <div style="background: rgba(47, 93, 80, 0.12); border: 1px solid rgba(47, 93, 80, 0.3); color: var(--color-green-dark); padding: 0.9rem 1.25rem; border-radius: 10px; margin-bottom: 1.5rem; font-weight: 600;">
                    ✓ {{ session('success') }}
                </div>
                @endif

                <!-- ================= DASHBOARD ================= -->
                <section class="admin-panel active" id="panel-dashboard">
                    <div class="admin-stat-cards">
                        <div class="admin-stat-card"><div class="num">{{ $officials->count() }}</div><div class="label">Perangkat Aparatur</div></div>
                        <div class="admin-stat-card"><div class="num">{{ $potentials->count() }}</div><div class="label">Kartu Potensi</div></div>
                        <div class="admin-stat-card"><div class="num">{{ $posts->where('status', 'published')->count() }}</div><div class="label">Berita Terpublikasi</div></div>
                        <div class="admin-stat-card"><div class="num">{{ $umkms->count() }}</div><div class="label">Produk UMKM</div></div>
                        <div class="admin-stat-card"><div class="num">{{ $galleryImages->count() }}</div><div class="label">Foto Galeri</div></div>
                        <div class="admin-stat-card"><div class="num">{{ $newContactMessagesCount }}</div><div class="label">Pengaduan Baru</div></div>
                        <div class="admin-stat-card"><div class="num">{{ $newSuratRequestsCount }}</div><div class="label">Pengajuan Surat Baru</div></div>
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
                            <button type="button" class="admin-shortcut-card" data-goto="surat">
                                <span class="icon">📝</span>
                                <div><div class="title">Surat Pengantar</div><div class="desc">Pengajuan SKU, SKTM, dan Domisili masuk.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="pengaduan">
                                <span class="icon">📮</span>
                                <div><div class="title">Pengaduan</div><div class="desc">Aduan dan aspirasi masyarakat masuk.</div></div>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- ================= APARATUR ================= -->
                <section class="admin-panel" id="panel-aparatur">
                    <form class="admin-form" method="POST" action="{{ route('admin.aparatur.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Aparatur Nagari</h2><p>Daftar perangkat/struktur Nagari Campago yang tampil di beranda.</p></div>
                            </div>

                            @error('aparatur')
                                <p style="color:#B3453D; font-weight:600; margin-bottom:1rem;">{{ $message }}</p>
                            @enderror

                            <div class="removed-ids-container"></div>

                            <div class="repeater-list" id="list-aparatur">
                                @foreach ($officials as $i => $official)
                                <div class="repeater-item" data-id="{{ $official->id }}">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <input type="hidden" name="aparatur[{{ $i }}][id]" value="{{ $official->id }}">
                                        <div class="form-group full">
                                            <label class="form-label">Foto</label>
                                            <div class="form-file">
                                                <div class="preview-box" @if($official->photo_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($official->photo_path) }}'); background-size:cover; background-position:center;" @endif>@unless($official->photo_path)👤@endunless</div>
                                                <input type="file" name="aparatur[{{ $i }}][foto]" accept="image/*">
                                            </div>
                                            <span class="form-hint">Biarkan kosong jika tidak ingin mengganti foto.</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-input" name="aparatur[{{ $i }}][nama]" value="{{ $official->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Jabatan</label>
                                            <input type="text" class="form-input" name="aparatur[{{ $i }}][jabatan]" value="{{ $official->position }}" required>
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
                            <input type="hidden" name="aparatur[][id]" value="">
                            <div class="form-group full">
                                <label class="form-label">Foto</label>
                                <div class="form-file">
                                    <div class="preview-box">👤</div>
                                    <input type="file" name="aparatur[][foto]" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-input" name="aparatur[][nama]" placeholder="Nama perangkat" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-input" name="aparatur[][jabatan]" placeholder="Jabatan" required>
                            </div>
                        </div>
                    </div>
                </template>

                <!-- ================= STATISTIK ================= -->
                <section class="admin-panel" id="panel-statistik">
                    <form class="admin-form" method="POST" action="{{ route('admin.statistik.update') }}">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Statistik Nagari</h2><p>Angka ringkas yang ditampilkan pada beranda.</p></div>
                            </div>

                            <div class="form-grid">
                                <div class="form-group">
                                    <label class="form-label">Jumlah Korong</label>
                                    <input type="text" class="form-input" value="{{ $korongCount }}" disabled>
                                    <span class="form-hint">Dihitung otomatis dari data Korong, tidak bisa diubah di sini.</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Luas Wilayah (km&sup2;)</label>
                                    <input type="text" class="form-input" name="area_km2" value="{{ $villageProfile->area_km2 }}" placeholder="Contoh: 9.86">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jumlah Penduduk</label>
                                    <input type="number" class="form-input" name="population" value="{{ $villageProfile->population }}" placeholder="Contoh: 12750">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" class="form-input" name="district" value="{{ $villageProfile->district }}">
                                </div>
                            </div>

                            <div class="admin-card-actions">
                                <button type="reset" class="btn-ghost">Batalkan</button>
                                <button type="submit" class="btn-save">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </section>

                <!-- ================= POTENSI ================= -->
                <section class="admin-panel" id="panel-potensi">
                    <form class="admin-form" method="POST" action="{{ route('admin.potensi.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Potensi Nagari</h2><p>Kartu potensi alam, ekonomi, budaya, dan wisata pada beranda.</p></div>
                            </div>

                            @error('potensi')
                                <p style="color:#B3453D; font-weight:600; margin-bottom:1rem;">{{ $message }}</p>
                            @enderror

                            <div class="removed-ids-container"></div>

                            <div class="repeater-list" id="list-potensi">
                                @php
                                    $kategoriPotensi = ['pertanian' => 'Pertanian', 'wisata' => 'Wisata', 'budaya' => 'Budaya', 'kerajinan' => 'Kerajinan/UMKM', 'kuliner' => 'Kuliner', 'lainnya' => 'Lainnya'];
                                @endphp
                                @foreach ($potentials as $i => $potential)
                                <div class="repeater-item" data-id="{{ $potential->id }}">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <input type="hidden" name="potensi[{{ $i }}][id]" value="{{ $potential->id }}">
                                        <div class="form-group full">
                                            <label class="form-label">Gambar</label>
                                            <div class="form-file">
                                                <div class="preview-box" @if($potential->featured_image_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($potential->featured_image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($potential->featured_image_path)🌾@endunless</div>
                                                <input type="file" name="potensi[{{ $i }}][gambar]" accept="image/*">
                                            </div>
                                            <span class="form-hint">Biarkan kosong jika tidak ingin mengganti gambar.</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Judul Kartu</label>
                                            <input type="text" class="form-input" name="potensi[{{ $i }}][judul]" value="{{ $potential->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Kategori</label>
                                            <select class="form-select" name="potensi[{{ $i }}][kategori]">
                                                @foreach ($kategoriPotensi as $value => $label)
                                                    <option value="{{ $value }}" {{ $potential->category === $value ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Ukuran Kartu</label>
                                            <select class="form-select" name="potensi[{{ $i }}][ukuran]">
                                                <option value="besar" {{ $potential->card_size === 'besar' ? 'selected' : '' }}>Besar</option>
                                                <option value="kecil" {{ $potential->card_size === 'kecil' ? 'selected' : '' }}>Kecil</option>
                                            </select>
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Deskripsi Singkat</label>
                                            <textarea class="form-textarea" name="potensi[{{ $i }}][deskripsi]">{{ $potential->short_description }}</textarea>
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
                            <input type="hidden" name="potensi[][id]" value="">
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
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="potensi[][kategori]">
                                    <option value="pertanian">Pertanian</option>
                                    <option value="wisata">Wisata</option>
                                    <option value="budaya">Budaya</option>
                                    <option value="kerajinan" selected>Kerajinan/UMKM</option>
                                    <option value="kuliner">Kuliner</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
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
                    <form class="admin-form" method="POST" action="{{ route('admin.berita.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Berita &amp; Kegiatan</h2><p>Berita utama dan daftar berita terbaru pada beranda.</p></div>
                            </div>

                            @error('berita')
                                <p style="color:#B3453D; font-weight:600; margin-bottom:1rem;">{{ $message }}</p>
                            @enderror

                            <div class="removed-ids-container"></div>

                            <div class="repeater-list" id="list-berita">
                                @foreach ($posts as $i => $post)
                                <div class="repeater-item" data-id="{{ $post->id }}">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <input type="hidden" name="berita[{{ $i }}][id]" value="{{ $post->id }}">
                                        <div class="form-group full">
                                            <label class="form-label">Gambar Berita</label>
                                            <div class="form-file">
                                                <div class="preview-box" @if($post->featured_image_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($post->featured_image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($post->featured_image_path)📰@endunless</div>
                                                <input type="file" name="berita[{{ $i }}][gambar]" accept="image/*">
                                            </div>
                                            <span class="form-hint">Biarkan kosong jika tidak ingin mengganti gambar.</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Jenis Tampilan</label>
                                            <select class="form-select" name="berita[{{ $i }}][jenis]">
                                                <option value="utama" {{ $post->is_featured ? 'selected' : '' }}>Berita Utama</option>
                                                <option value="biasa" {{ ! $post->is_featured ? 'selected' : '' }}>Daftar Berita</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Kategori</label>
                                            <select class="form-select" name="berita[{{ $i }}][kategori_id]">
                                                <option value="">Tanpa kategori</option>
                                                @foreach ($postCategories as $cat)
                                                    <option value="{{ $cat->id }}" {{ $post->category_id === $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tanggal</label>
                                            <input type="date" class="form-input" name="berita[{{ $i }}][tanggal]" value="{{ $post->published_at?->format('Y-m-d') }}">
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Judul Berita</label>
                                            <input type="text" class="form-input" name="berita[{{ $i }}][judul]" value="{{ $post->title }}" required>
                                        </div>
                                        <div class="form-group full">
                                            <label class="form-label">Deskripsi / Ringkasan</label>
                                            <textarea class="form-textarea" name="berita[{{ $i }}][deskripsi]">{{ $post->excerpt }}</textarea>
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
                            <input type="hidden" name="berita[][id]" value="">
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
                                <select class="form-select" name="berita[][kategori_id]">
                                    <option value="">Tanpa kategori</option>
                                    @foreach ($postCategories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-input" name="berita[][tanggal]">
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
                    <form class="admin-form" method="POST" action="{{ route('admin.peta.update') }}">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Peta Digital</h2><p>Kategori Fasilitas Umum yang tampil pada peta digital beranda. Untuk kategori UMKM, kelola lewat menu "UMKM Lokal".</p></div>
                            </div>

                            @error('lokasi')
                                <p style="color:#B3453D; font-weight:600; margin-bottom:1rem;">{{ $message }}</p>
                            @enderror

                            <div class="form-grid" style="margin-bottom:1.5rem;">
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Kategori Fasilitas Umum</label>
                                    <textarea class="form-textarea" name="deskripsi">{{ $peta['fasum_deskripsi'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jumlah Lokasi</label>
                                    <input type="text" class="form-input" value="{{ $fasilitasUmumList->count() }}" disabled>
                                    <span class="form-hint">Dihitung otomatis dari daftar lokasi di bawah.</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Area Utama</label>
                                    <input type="text" class="form-input" name="area" value="{{ $peta['fasum_area'] }}">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Daftar Lokasi</label>
                                    <div class="repeater-list" id="list-fasum">
                                        @foreach ($fasilitasUmumList as $lokasi)
                                        <div class="repeater-item" style="padding: 0.75rem 3rem 0.75rem 1rem;">
                                            <button type="button" class="repeater-remove" aria-label="Hapus lokasi">&times;</button>
                                            <input type="text" class="form-input" name="lokasi[]" value="{{ $lokasi->name }}">
                                        </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn-add" data-repeater="list-fasum">+ Tambah Lokasi</button>
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
                        <input type="text" class="form-input" name="lokasi[]" placeholder="Nama lokasi - Korong">
                    </div>
                </template>

                <!-- ================= UMKM ================= -->
                <section class="admin-panel" id="panel-umkm">
                    <form class="admin-form" method="POST" action="{{ route('admin.umkm.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>UMKM Lokal</h2><p>Daftar produk dan usaha masyarakat pada beranda.</p></div>
                            </div>

                            @error('umkm')
                                <p style="color:#B3453D; font-weight:600; margin-bottom:1rem;">{{ $message }}</p>
                            @enderror

                            <div class="removed-ids-container"></div>

                            <div class="repeater-list" id="list-umkm">
                                @foreach ($umkms as $i => $umkm)
                                <div class="repeater-item" data-id="{{ $umkm->id }}">
                                    <span class="repeater-item-index">Item #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <input type="hidden" name="umkm[{{ $i }}][id]" value="{{ $umkm->id }}">
                                        <div class="form-group full">
                                            <label class="form-label">Gambar Produk</label>
                                            <div class="form-file">
                                                <div class="preview-box" @if($umkm->featured_image_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($umkm->featured_image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($umkm->featured_image_path)🛍️@endunless</div>
                                                <input type="file" name="umkm[{{ $i }}][gambar]" accept="image/*">
                                            </div>
                                            <span class="form-hint">Biarkan kosong jika tidak ingin mengganti gambar.</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Kategori</label>
                                            <input type="text" class="form-input" name="umkm[{{ $i }}][kategori]" value="{{ $umkm->category }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nama Produk / Usaha</label>
                                            <input type="text" class="form-input" name="umkm[{{ $i }}][judul]" value="{{ $umkm->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nama Pemilik</label>
                                            <input type="text" class="form-input" name="umkm[{{ $i }}][pemilik]" value="{{ $umkm->owner_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Lokasi</label>
                                            <input type="text" class="form-input" name="umkm[{{ $i }}][lokasi]" value="{{ $umkm->address }}" placeholder="Contoh: Korong Bukik Gonggang">
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
                            <input type="hidden" name="umkm[][id]" value="">
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
                    <form class="admin-form" method="POST" action="{{ route('admin.galeri.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Galeri Budaya</h2><p>Foto budaya dan kehidupan masyarakat pada beranda.</p></div>
                            </div>

                            @error('galeri')
                                <p style="color:#B3453D; font-weight:600; margin-bottom:1rem;">{{ $message }}</p>
                            @enderror

                            <div class="removed-ids-container"></div>

                            <div class="repeater-list" id="list-galeri">
                                @foreach ($galleryImages as $i => $image)
                                <div class="repeater-item" data-id="{{ $image->id }}">
                                    <span class="repeater-item-index">Foto #{{ $i + 1 }}</span>
                                    <button type="button" class="repeater-remove" aria-label="Hapus item">&times;</button>
                                    <div class="form-grid">
                                        <input type="hidden" name="galeri[{{ $i }}][id]" value="{{ $image->id }}">
                                        <div class="form-group full">
                                            <label class="form-label">Foto</label>
                                            <div class="form-file">
                                                <div class="preview-box" style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($image->image_path) }}'); background-size:cover; background-position:center;"></div>
                                                <input type="file" name="galeri[{{ $i }}][gambar]" accept="image/*">
                                            </div>
                                            <span class="form-hint">Biarkan kosong jika tidak ingin mengganti foto.</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Ukuran Grid</label>
                                            <select class="form-select" name="galeri[{{ $i }}][ukuran]">
                                                <option value="besar" {{ $image->size === 'besar' ? 'selected' : '' }}>Besar</option>
                                                <option value="sedang" {{ $image->size === 'sedang' ? 'selected' : '' }}>Sedang</option>
                                                <option value="tinggi" {{ $image->size === 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                                                <option value="lebar" {{ $image->size === 'lebar' ? 'selected' : '' }}>Lebar</option>
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
                            <input type="hidden" name="galeri[][id]" value="">
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

                <!-- ================= SURAT PENGANTAR (AKTIF) ================= -->
                <section class="admin-panel" id="panel-surat">
                    <div class="admin-card">
                        <div class="admin-card-header">
                            <div><h2>Pengajuan Surat Pengantar</h2><p>Pengajuan SKU, SKTM, dan Surat Domisili yang masih berjalan, terbaru di atas.</p></div>
                            <div class="admin-table-filter">
                                <label class="form-label" for="filterJenisSuratAktif" style="margin: 0;">Jenis Surat</label>
                                <select id="filterJenisSuratAktif" class="form-select">
                                    <option value="">Semua Jenis</option>
                                    @foreach (\App\Models\SuratRequest::TYPES as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="admin-table-wrap">
                            <table class="admin-table" id="tableSuratAktif">
                                <thead>
                                    <tr>
                                        <th>Nama Pemohon</th>
                                        <th>Jenis Surat</th>
                                        <th>Tanggal Diajukan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($activeSuratRequests as $pengajuan)
                                    @include('admin.partials.surat-row', ['pengajuan' => $pengajuan])
                                    @empty
                                    <tr><td colspan="5" class="admin-table-empty">Belum ada pengajuan surat yang masih berjalan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- ================= RIWAYAT SURAT ================= -->
                <section class="admin-panel" id="panel-riwayat-surat">
                    <div class="admin-card">
                        <div class="admin-card-header">
                            <div><h2>Riwayat Surat Pengantar</h2><p>Arsip pengajuan surat yang sudah selesai atau ditolak, terbaru di atas.</p></div>
                            <div class="admin-table-filter">
                                <label class="form-label" for="filterJenisSuratRiwayat" style="margin: 0;">Jenis Surat</label>
                                <select id="filterJenisSuratRiwayat" class="form-select">
                                    <option value="">Semua Jenis</option>
                                    @foreach (\App\Models\SuratRequest::TYPES as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="admin-table-wrap">
                            <table class="admin-table" id="tableSuratRiwayat">
                                <thead>
                                    <tr>
                                        <th>Nama Pemohon</th>
                                        <th>Jenis Surat</th>
                                        <th>Tanggal Diajukan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($suratHistory as $pengajuan)
                                    @include('admin.partials.surat-row', ['pengajuan' => $pengajuan])
                                    @empty
                                    <tr><td colspan="5" class="admin-table-empty">Belum ada riwayat pengajuan surat yang selesai diproses.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- ================= PENGADUAN ================= -->
                <section class="admin-panel" id="panel-pengaduan">
                    <div class="admin-card">
                        <div class="admin-card-header">
                            <div><h2>Pengaduan Masyarakat</h2><p>Daftar pengaduan/aspirasi yang dikirim masyarakat lewat formulir online, terbaru di atas.</p></div>
                        </div>

                        <div class="repeater-list pengaduan-list">
                            @forelse ($contactMessages as $pesan)
                            <div class="repeater-item">
                                <div class="pengaduan-item-head">
                                    <div>
                                        <strong>{{ $pesan->name }}</strong>
                                        <span class="status-pill status-{{ $pesan->status }}">
                                            @switch($pesan->status)
                                                @case('new') Baru @break
                                                @case('read') Dibaca @break
                                                @case('replied') Ditindaklanjuti @break
                                                @case('closed') Selesai @break
                                            @endswitch
                                        </span>
                                    </div>
                                    <span class="pengaduan-date">{{ $pesan->created_at->translatedFormat('d M Y, H:i') }}</span>
                                </div>
                                <div class="pengaduan-contact">
                                    <span>📞 {{ $pesan->phone }}</span>
                                    @if ($pesan->email)
                                        <span>✉️ {{ $pesan->email }}</span>
                                    @endif
                                </div>
                                <p class="pengaduan-subject">{{ $pesan->subject }}</p>
                                <p class="pengaduan-message">{{ $pesan->message }}</p>
                                @if ($pesan->photo_path)
                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($pesan->photo_path) }}" target="_blank" rel="noopener">
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($pesan->photo_path) }}" alt="Foto pendukung dari {{ $pesan->name }}" class="pengaduan-photo">
                                    </a>
                                @endif

                                <div class="pengaduan-actions">
                                    <form method="POST" action="{{ route('admin.pengaduan.status', $pesan) }}">
                                        @csrf
                                        <select name="status" class="form-select" onchange="this.form.submit()">
                                            <option value="new" {{ $pesan->status === 'new' ? 'selected' : '' }}>Baru</option>
                                            <option value="read" {{ $pesan->status === 'read' ? 'selected' : '' }}>Dibaca</option>
                                            <option value="replied" {{ $pesan->status === 'replied' ? 'selected' : '' }}>Ditindaklanjuti</option>
                                            <option value="closed" {{ $pesan->status === 'closed' ? 'selected' : '' }}>Selesai</option>
                                        </select>
                                    </form>
                                    <form method="POST" action="{{ route('admin.pengaduan.destroy', $pesan) }}" onsubmit="return confirm('Hapus pengaduan dari ' + {{ Js::from($pesan->name) }} + '?');">
                                        @csrf
                                        <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus pengaduan">&times;</button>
                                    </form>
                                </div>
                            </div>
                            @empty
                            <p style="color: var(--color-text-muted);">Belum ada pengaduan yang masuk.</p>
                            @endforelse
                        </div>
                    </div>
                </section>

                <!-- ================= KONTAK / FOOTER ================= -->
                <section class="admin-panel" id="panel-kontak">
                    <form class="admin-form" method="POST" action="{{ route('admin.kontak.update') }}">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Footer &amp; Kontak</h2><p>Informasi kontak dan deskripsi singkat yang tampil pada footer website.</p></div>
                            </div>
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Singkat Nagari</label>
                                    <textarea class="form-textarea" name="deskripsi">{{ $kontak['deskripsi'] }}</textarea>
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Alamat Kantor Wali Nagari</label>
                                    <textarea class="form-textarea" name="alamat">{{ $kontak['alamat'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-input" name="email" value="{{ $kontak['email'] }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-input" name="telepon" value="{{ $kontak['telepon'] }}">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Teks Hak Cipta (Copyright)</label>
                                    <input type="text" class="form-input" name="copyright" value="{{ $kontak['copyright'] }}">
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

            {{-- Modal detail Surat Pengantar dirender di sini (di luar tabel) lewat @@push di
                 admin/partials/surat-row.blade.php, supaya position:fixed-nya tidak kejebak di
                 dalam struktur <table>. --}}
            @stack('surat-modals')
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

            // Filter tabel Surat Pengantar & Riwayat Surat berdasarkan jenis surat
            function setupJenisSuratFilter(selectId, tableId) {
                const select = document.getElementById(selectId);
                const table = document.getElementById(tableId);
                if (!select || !table) return;
                select.addEventListener('change', () => {
                    const jenis = select.value;
                    table.querySelectorAll('tbody tr[data-type]').forEach(row => {
                        row.style.display = (!jenis || row.dataset.type === jenis) ? '' : 'none';
                    });
                });
            }
            setupJenisSuratFilter('filterJenisSuratAktif', 'tableSuratAktif');
            setupJenisSuratFilter('filterJenisSuratRiwayat', 'tableSuratRiwayat');

            // Buka tab sesuai parameter ?panel= di URL (dipakai setelah redirect simpan data)
            const requestedPanel = new URLSearchParams(window.location.search).get('panel');
            if (requestedPanel) {
                goToPanel(requestedPanel);
            }

            // Beberapa repeater (aparatur, potensi, dst) pakai input array bracket "prefix[][x]".
            // PHP ternyata mengelompokkan input semacam itu berdasarkan urutan kemunculan tiap NAMA
            // field, bukan per baris -- jadi id/nama/foto milik baris yang sama bisa "tercecer" ke
            // indeks yang berbeda-beda. Untuk itu tiap baris harus punya indeks eksplisit
            // ("prefix[0][x]", "prefix[1][x]", dst) yang disegarkan ulang setiap kali baris
            // ditambah/dihapus.
            const indexedRepeaters = {
                'list-aparatur': 'aparatur',
                'list-potensi': 'potensi',
                'list-galeri': 'galeri',
                'list-umkm': 'umkm',
                'list-berita': 'berita',
            };

            function reindexRepeaterNames(listId) {
                const prefix = indexedRepeaters[listId];
                const list = document.getElementById(listId);
                if (!prefix || !list) return;
                list.querySelectorAll(':scope > .repeater-item').forEach((item, idx) => {
                    item.querySelectorAll(`[name^="${prefix}["]`).forEach(input => {
                        const match = input.name.match(new RegExp(`^${prefix}\\[[^\\]]*\\]\\[(\\w+)\\]$`));
                        if (match) {
                            input.name = `${prefix}[${idx}][${match[1]}]`;
                        }
                    });
                });
            }
            Object.keys(indexedRepeaters).forEach(reindexRepeaterNames);

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
                    reindexRepeaterNames(listId);
                });
            });

            // Repeater: hapus item
            document.addEventListener('click', (e) => {
                const removeBtn = e.target.closest('.repeater-remove');
                if (!removeBtn) return;
                const item = removeBtn.closest('.repeater-item');
                const list = item.parentElement;

                // Jika item ini sudah tersimpan di database (punya data-id), catat agar dihapus saat form disimpan
                const savedId = item.dataset.id;
                if (savedId) {
                    const form = item.closest('form');
                    if (form) {
                        const hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'removed_ids[]';
                        hiddenInput.value = savedId;
                        form.querySelector('.removed-ids-container')?.appendChild(hiddenInput) || form.appendChild(hiddenInput);
                    }
                }

                item.remove();
                if (list && list.classList.contains('repeater-list')) {
                    refreshRepeaterIndexes(list);
                    reindexRepeaterNames(list.id);
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
