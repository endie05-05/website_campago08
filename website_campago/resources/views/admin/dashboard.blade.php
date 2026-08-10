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
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span> Dashboard
                </button>

                <span class="admin-nav-group-label">Konten Beranda</span>
                <button type="button" class="admin-nav-link" data-panel="banner" data-title="Foto Beranda" data-desc="Kelola foto yang bergantian tampil di bagian atas (hero) beranda.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg></span> Foto Beranda
                </button>
                <button type="button" class="admin-nav-link" data-panel="aparatur" data-title="Aparatur Nagari" data-desc="Kelola daftar perangkat/struktur Nagari Campago.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span> Aparatur Nagari
                </button>
                <button type="button" class="admin-nav-link" data-panel="statistik" data-title="Statistik Nagari" data-desc="Kelola angka statistik yang ditampilkan di beranda.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg></span> Statistik Nagari
                </button>
                <button type="button" class="admin-nav-link" data-panel="potensi" data-title="Potensi Nagari" data-desc="Kelola kartu potensi (pertanian, UMKM, budaya, wisata).">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span> Potensi Nagari
                </button>
                <button type="button" class="admin-nav-link" data-panel="berita" data-title="Berita &amp; Kegiatan" data-desc="Kelola berita utama dan daftar berita terbaru.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg></span> Berita
                </button>
                <button type="button" class="admin-nav-link" data-panel="peta" data-title="Peta Digital" data-desc="Kelola kategori dan daftar lokasi pada peta digital.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg></span> Peta Digital
                </button>
                <button type="button" class="admin-nav-link" data-panel="umkm" data-title="UMKM Lokal" data-desc="Kelola daftar produk dan usaha masyarakat.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span> UMKM Lokal
                </button>
                <button type="button" class="admin-nav-link" data-panel="galeri" data-title="Galeri Budaya" data-desc="Kelola foto budaya dan galeri kehidupan masyarakat.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></span> Galeri
                </button>

                <span class="admin-nav-group-label">Lainnya</span>
                <button type="button" class="admin-nav-link" data-panel="surat" data-title="Pengajuan Surat Pengantar" data-desc="Lihat dan proses pengajuan SKU, SKTM, dan Surat Domisili yang masih berjalan.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span> Surat Pengantar
                    @if ($newSuratRequestsCount > 0)
                        <span class="admin-nav-count">{{ $newSuratRequestsCount }}</span>
                    @endif
                </button>
                <button type="button" class="admin-nav-link" data-panel="riwayat-surat" data-title="Riwayat Surat Pengantar" data-desc="Arsip pengajuan surat yang sudah selesai atau ditolak.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg></span> Riwayat Surat
                </button>
                <button type="button" class="admin-nav-link" data-panel="pengaduan" data-title="Pengaduan Masyarakat" data-desc="Lihat dan tindak lanjuti pengaduan/aspirasi yang masuk dari masyarakat.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></span> Pengaduan
                    @if ($newContactMessagesCount > 0)
                        <span class="admin-nav-count">{{ $newContactMessagesCount }}</span>
                    @endif
                </button>
                <button type="button" class="admin-nav-link" data-panel="kontak" data-title="Footer &amp; Kontak" data-desc="Kelola informasi kontak dan deskripsi singkat pada footer.">
                    <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span> Footer &amp; Kontak
                </button>
            </nav>

            <div class="admin-sidebar-footer">
                <form action="{{ route('logout') }}" method="POST" style="margin:0;">
                    @csrf
                    <button type="submit" class="admin-back-link" style="background:none; border:none; cursor:pointer; width:100%; text-align:left; font:inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        Logout
                    </button>
                </form>
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
                                <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
                                <div><div class="title">Aparatur Nagari</div><div class="desc">Nama, jabatan, dan foto perangkat.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="potensi">
                                <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span>
                                <div><div class="title">Potensi Nagari</div><div class="desc">Kartu pertanian, UMKM, budaya, wisata.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="berita">
                                <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg></span>
                                <div><div class="title">Berita</div><div class="desc">Tambah dan kelola berita terbaru.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="umkm">
                                <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                <div><div class="title">UMKM Lokal</div><div class="desc">Produk dan usaha masyarakat.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="galeri">
                                <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></span>
                                <div><div class="title">Galeri</div><div class="desc">Foto budaya dan kehidupan warga.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="surat">
                                <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span>
                                <div><div class="title">Surat Pengantar</div><div class="desc">Pengajuan SKU, SKTM, dan Domisili masuk.</div></div>
                            </button>
                            <button type="button" class="admin-shortcut-card" data-goto="pengaduan">
                                <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></span>
                                <div><div class="title">Pengaduan</div><div class="desc">Aduan dan aspirasi masyarakat masuk.</div></div>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- ================= FOTO BERANDA (BANNER) ================= -->
                <section class="admin-panel" id="panel-banner">
                    @php
                        $bannerEditingId = old('_target_id');
                        $bannerEditingItem = $bannerEditingId ? $heroSlides->firstWhere('id', (int) $bannerEditingId) : null;
                        $bannerShowForm = $errors->any() && request()->query('panel') === 'banner';
                    @endphp
                    <div class="admin-card crud-list-view" style="display: {{ $bannerShowForm ? 'none' : 'block' }};">
                        <div class="admin-card-header">
                            <div><h2>Foto Beranda</h2><p>Foto yang bergantian tampil (slideshow) di bagian paling atas beranda. Tambahkan beberapa foto supaya bergantian otomatis.</p></div>
                            <button type="button" class="btn-save btn-add-new">+ Tambah Foto</button>
                        </div>
                        <div class="admin-table-wrap">
                            <table class="admin-table">
                                <thead><tr><th>Foto</th><th>Judul</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    @forelse ($heroSlides as $slide)
                                    <tr>
                                        <td>
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($slide->image_path) }}" alt="Foto beranda" style="width:64px; height:44px; object-fit:cover; border-radius:8px; display:block;">
                                        </td>
                                        <td>{{ $slide->title ?: '—' }}</td>
                                        <td>
                                            <div class="admin-table-actions">
                                                <button type="button" class="admin-table-edit-btn btn-edit-item" aria-label="Edit foto"
                                                    data-update-url="{{ route('admin.banner.update', $slide) }}"
                                                    data-id="{{ $slide->id }}"
                                                    data-preview="{{ \Illuminate\Support\Facades\Storage::url($slide->image_path) }}"
                                                    data-item="{{ json_encode(['title' => $slide->title, 'subtitle' => $slide->subtitle, 'button_text' => $slide->button_text, 'button_url' => $slide->button_url]) }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
                                                <form method="POST" action="{{ route('admin.banner.destroy', $slide) }}" data-confirm="Hapus foto beranda ini?">
                                                    @csrf
                                                    <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus foto"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="3" class="admin-table-empty">Belum ada foto beranda. Klik "+ Tambah Foto" untuk menambahkan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="admin-card crud-form-view" style="display: {{ $bannerShowForm ? 'block' : 'none' }};">
                        <form method="POST" action="{{ $bannerEditingItem ? route('admin.banner.update', $bannerEditingItem) : route('admin.banner.store') }}" enctype="multipart/form-data" class="crud-form" data-store-url="{{ route('admin.banner.store') }}">
                            @csrf
                            <input type="hidden" name="_target_id" value="{{ $bannerEditingId }}">
                            <div class="admin-card-header">
                                <div><h2 class="crud-form-title">{{ $bannerEditingItem ? 'Edit Foto Beranda' : 'Tambah Foto Beranda' }}</h2><p>Foto ini tampil sebagai kartu ringkas di beranda, lengkap dengan judul, deskripsi singkat, dan tombol.</p></div>
                            </div>
                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Foto</label>
                                    <div class="form-file">
                                        <div class="preview-box crud-form-preview" @if($bannerEditingItem) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($bannerEditingItem->image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($bannerEditingItem)🖼️@endunless</div>
                                        <input type="file" name="gambar" accept="image/*" data-required-on-add {{ $bannerEditingItem ? '' : 'required' }}>
                                    </div>
                                    <span class="form-hint crud-form-hint" style="display: {{ $bannerEditingItem ? 'inline' : 'none' }};">Biarkan kosong jika tidak ingin mengganti foto.</span>
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Judul <span class="optional-tag">(opsional)</span></label>
                                    <input type="text" class="form-input" name="title" maxlength="200" placeholder="Contoh: Panen Raya Padi Nagari Campago">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Singkat <span class="optional-tag">(opsional)</span></label>
                                    <textarea class="form-textarea" name="subtitle" maxlength="255" placeholder="Satu-dua kalimat ringkas, tampil di kartu beranda."></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Teks Tombol <span class="optional-tag">(opsional)</span></label>
                                    <input type="text" class="form-input" name="button_text" maxlength="100" placeholder="Contoh: Baca Selengkapnya">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Link Tombol <span class="optional-tag">(opsional)</span></label>
                                    <input type="text" class="form-input" name="button_url" maxlength="500" placeholder="Contoh: #berita">
                                </div>
                                <div class="form-group full">
                                    <span class="form-hint" style="margin-top: 0;">Kosongkan judul/deskripsi/tombol jika belum ada isinya — beranda akan otomatis memakai teks bawaan.</span>
                                </div>
                            </div>
                            <div class="admin-card-actions">
                                <button type="button" class="btn-ghost btn-cancel-form">Batal</button>
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- ================= APARATUR ================= -->
                <section class="admin-panel" id="panel-aparatur">
                    @php
                        $aparaturEditingId = old('_target_id');
                        $aparaturEditingItem = $aparaturEditingId ? $officials->firstWhere('id', (int) $aparaturEditingId) : null;
                        $aparaturShowForm = $errors->any() && request()->query('panel') === 'aparatur';
                    @endphp
                    <div class="admin-card crud-list-view" style="display: {{ $aparaturShowForm ? 'none' : 'block' }};">
                        <div class="admin-card-header">
                            <div><h2>Aparatur Nagari</h2><p>Daftar perangkat/struktur Nagari Campago yang tampil di beranda.</p></div>
                            <button type="button" class="btn-save btn-add-new">+ Tambah Perangkat Nagari</button>
                        </div>
                        <div class="admin-table-wrap">
                            <table class="admin-table">
                                <thead><tr><th>Foto</th><th>Nama</th><th>Jabatan</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    @forelse ($officials as $official)
                                    <tr>
                                        <td>
                                            @if ($official->photo_path)
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($official->photo_path) }}" alt="{{ $official->name }}" style="width:44px; height:44px; object-fit:cover; border-radius:8px; display:block;">
                                            @else
                                                <div class="preview-box" style="width:44px; height:44px; margin:0; font-size:1.1rem;">👤</div>
                                            @endif
                                        </td>
                                        <td>{{ $official->name }}</td>
                                        <td>{{ $official->position }}</td>
                                        <td>
                                            <div class="admin-table-actions">
                                                <button type="button" class="admin-table-edit-btn btn-edit-item" aria-label="Edit perangkat"
                                                    data-update-url="{{ route('admin.aparatur.update', $official) }}"
                                                    data-id="{{ $official->id }}"
                                                    data-preview="{{ $official->photo_path ? \Illuminate\Support\Facades\Storage::url($official->photo_path) : '' }}"
                                                    data-item="{{ json_encode(['nama' => $official->name, 'jabatan' => $official->position]) }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
                                                <form method="POST" action="{{ route('admin.aparatur.destroy', $official) }}" data-confirm="Hapus perangkat {{ $official->name }}?">
                                                    @csrf
                                                    <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus perangkat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="4" class="admin-table-empty">Belum ada data aparatur. Klik "+ Tambah Perangkat Nagari" untuk menambahkan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="admin-card crud-form-view" style="display: {{ $aparaturShowForm ? 'block' : 'none' }};">
                        <form method="POST" action="{{ $aparaturEditingItem ? route('admin.aparatur.update', $aparaturEditingItem) : route('admin.aparatur.store') }}" enctype="multipart/form-data" class="crud-form" data-store-url="{{ route('admin.aparatur.store') }}">
                            @csrf
                            <input type="hidden" name="_target_id" value="{{ $aparaturEditingId }}">
                            <div class="admin-card-header">
                                <div><h2 class="crud-form-title">{{ $aparaturEditingItem ? 'Edit Perangkat Aparatur' : 'Tambah Perangkat Aparatur' }}</h2><p>Isi data perangkat/struktur Nagari.</p></div>
                            </div>
                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Foto</label>
                                    <div class="form-file">
                                        <div class="preview-box crud-form-preview" @if($aparaturEditingItem && $aparaturEditingItem->photo_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($aparaturEditingItem->photo_path) }}'); background-size:cover; background-position:center;" @endif>@unless($aparaturEditingItem && $aparaturEditingItem->photo_path)👤@endunless</div>
                                        <input type="file" name="foto" accept="image/*">
                                    </div>
                                    <span class="form-hint crud-form-hint" style="display: {{ $aparaturEditingItem ? 'inline' : 'none' }};">Biarkan kosong jika tidak ingin mengganti foto.</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-input" name="nama" value="{{ old('nama', $aparaturEditingItem->name ?? '') }}" placeholder="Nama perangkat" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jabatan</label>
                                    <input type="text" class="form-input" name="jabatan" value="{{ old('jabatan', $aparaturEditingItem->position ?? '') }}" placeholder="Jabatan" required>
                                </div>
                            </div>
                            <div class="admin-card-actions">
                                <button type="button" class="btn-ghost btn-cancel-form">Batal</button>
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- ================= STATISTIK ================= -->
                <section class="admin-panel" id="panel-statistik">
                    <form class="admin-form" method="POST" action="{{ route('admin.statistik.update') }}">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Statistik Nagari</h2><p>Angka ringkas yang ditampilkan pada beranda.</p></div>
                            </div>

                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

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
                    @php
                        $kategoriPotensi = ['pertanian' => 'Pertanian', 'wisata' => 'Wisata', 'budaya' => 'Budaya', 'kerajinan' => 'Kerajinan/UMKM', 'kuliner' => 'Kuliner', 'lainnya' => 'Lainnya'];
                        $potensiEditingId = old('_target_id');
                        $potensiEditingItem = $potensiEditingId ? $potentials->firstWhere('id', (int) $potensiEditingId) : null;
                        $potensiShowForm = $errors->any() && request()->query('panel') === 'potensi';
                    @endphp
                    <div class="admin-card crud-list-view" style="display: {{ $potensiShowForm ? 'none' : 'block' }};">
                        <div class="admin-card-header">
                            <div><h2>Potensi Nagari</h2><p>Kartu potensi alam, ekonomi, budaya, dan wisata pada beranda.</p></div>
                            <button type="button" class="btn-save btn-add-new">+ Tambah Kartu Potensi</button>
                        </div>
                        <div class="admin-table-wrap">
                            <table class="admin-table">
                                <thead><tr><th>Gambar</th><th>Judul Kartu</th><th>Kategori</th><th>Ukuran</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    @forelse ($potentials as $potential)
                                    <tr>
                                        <td>
                                            @if ($potential->featured_image_path)
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($potential->featured_image_path) }}" alt="{{ $potential->name }}" style="width:44px; height:44px; object-fit:cover; border-radius:8px; display:block;">
                                            @else
                                                <div class="preview-box" style="width:44px; height:44px; margin:0; font-size:1.1rem;">🌾</div>
                                            @endif
                                        </td>
                                        <td>{{ $potential->name }}</td>
                                        <td>{{ $kategoriPotensi[$potential->category] ?? $potential->category }}</td>
                                        <td>{{ ucfirst($potential->card_size) }}</td>
                                        <td>
                                            <div class="admin-table-actions">
                                                <button type="button" class="admin-table-edit-btn btn-edit-item" aria-label="Edit potensi"
                                                    data-update-url="{{ route('admin.potensi.update', $potential) }}"
                                                    data-id="{{ $potential->id }}"
                                                    data-preview="{{ $potential->featured_image_path ? \Illuminate\Support\Facades\Storage::url($potential->featured_image_path) : '' }}"
                                                    data-item="{{ json_encode(['judul' => $potential->name, 'kategori' => $potential->category, 'ukuran' => $potential->card_size, 'deskripsi' => $potential->short_description]) }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
                                                <form method="POST" action="{{ route('admin.potensi.destroy', $potential) }}" data-confirm="Hapus potensi {{ $potential->name }}?">
                                                    @csrf
                                                    <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus potensi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="5" class="admin-table-empty">Belum ada kartu potensi. Klik "+ Tambah Kartu Potensi" untuk menambahkan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="admin-card crud-form-view" style="display: {{ $potensiShowForm ? 'block' : 'none' }};">
                        <form method="POST" action="{{ $potensiEditingItem ? route('admin.potensi.update', $potensiEditingItem) : route('admin.potensi.store') }}" enctype="multipart/form-data" class="crud-form" data-store-url="{{ route('admin.potensi.store') }}">
                            @csrf
                            <input type="hidden" name="_target_id" value="{{ $potensiEditingId }}">
                            <div class="admin-card-header">
                                <div><h2 class="crud-form-title">{{ $potensiEditingItem ? 'Edit Kartu Potensi' : 'Tambah Kartu Potensi' }}</h2><p>Isi data kartu potensi Nagari.</p></div>
                            </div>
                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Gambar</label>
                                    <div class="form-file">
                                        <div class="preview-box crud-form-preview" @if($potensiEditingItem && $potensiEditingItem->featured_image_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($potensiEditingItem->featured_image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($potensiEditingItem && $potensiEditingItem->featured_image_path)🌾@endunless</div>
                                        <input type="file" name="gambar" accept="image/*">
                                    </div>
                                    <span class="form-hint crud-form-hint" style="display: {{ $potensiEditingItem ? 'inline' : 'none' }};">Biarkan kosong jika tidak ingin mengganti gambar.</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Judul Kartu</label>
                                    <input type="text" class="form-input" name="judul" value="{{ old('judul', $potensiEditingItem->name ?? '') }}" placeholder="Judul potensi" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-select" name="kategori">
                                        @foreach ($kategoriPotensi as $value => $label)
                                            <option value="{{ $value }}" {{ old('kategori', $potensiEditingItem->category ?? '') === $value ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ukuran Kartu</label>
                                    <select class="form-select" name="ukuran">
                                        <option value="besar" {{ old('ukuran', $potensiEditingItem->card_size ?? '') === 'besar' ? 'selected' : '' }}>Besar</option>
                                        <option value="kecil" {{ old('ukuran', $potensiEditingItem->card_size ?? '') === 'kecil' ? 'selected' : '' }}>Kecil</option>
                                    </select>
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi Singkat</label>
                                    <textarea class="form-textarea" name="deskripsi">{{ old('deskripsi', $potensiEditingItem->short_description ?? '') }}</textarea>
                                </div>
                            </div>
                            <div class="admin-card-actions">
                                <button type="button" class="btn-ghost btn-cancel-form">Batal</button>
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- ================= BERITA ================= -->
                <section class="admin-panel" id="panel-berita">
                    @php
                        $beritaEditingId = old('_target_id');
                        $beritaEditingItem = $beritaEditingId ? $posts->firstWhere('id', (int) $beritaEditingId) : null;
                        $beritaShowForm = $errors->any() && request()->query('panel') === 'berita';
                    @endphp
                    <div class="admin-card crud-list-view" style="display: {{ $beritaShowForm ? 'none' : 'block' }};">
                        <div class="admin-card-header">
                            <div><h2>Berita &amp; Kegiatan</h2><p>Berita utama dan daftar berita terbaru pada beranda.</p></div>
                            <button type="button" class="btn-save btn-add-new">+ Tambah Berita</button>
                        </div>
                        <div class="admin-table-wrap">
                            <table class="admin-table">
                                <thead><tr><th>Gambar</th><th>Judul Berita</th><th>Jenis</th><th>Kategori</th><th>Tanggal</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    @forelse ($posts as $post)
                                    <tr>
                                        <td>
                                            @if ($post->featured_image_path)
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}" style="width:44px; height:44px; object-fit:cover; border-radius:8px; display:block;">
                                            @else
                                                <div class="preview-box" style="width:44px; height:44px; margin:0; font-size:1.1rem;">📰</div>
                                            @endif
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->is_featured ? 'Berita Utama' : 'Daftar Berita' }}</td>
                                        <td>{{ $post->category?->name ?: '-' }}</td>
                                        <td>{{ $post->published_at?->format('d/m/Y') }}</td>
                                        <td>
                                            <div class="admin-table-actions">
                                                <button type="button" class="admin-table-edit-btn btn-edit-item" aria-label="Edit berita"
                                                    data-update-url="{{ route('admin.berita.update', $post) }}"
                                                    data-id="{{ $post->id }}"
                                                    data-preview="{{ $post->featured_image_path ? \Illuminate\Support\Facades\Storage::url($post->featured_image_path) : '' }}"
                                                    data-item="{{ json_encode(['judul' => $post->title, 'jenis' => $post->is_featured ? 'utama' : 'biasa', 'kategori_id' => $post->category_id, 'tanggal' => $post->published_at?->format('Y-m-d'), 'deskripsi' => $post->excerpt]) }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
                                                <form method="POST" action="{{ route('admin.berita.destroy', $post) }}" data-confirm="Hapus berita {{ $post->title }}?">
                                                    @csrf
                                                    <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus berita"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="6" class="admin-table-empty">Belum ada berita. Klik "+ Tambah Berita" untuk menambahkan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="admin-card crud-form-view" style="display: {{ $beritaShowForm ? 'block' : 'none' }};">
                        <form method="POST" action="{{ $beritaEditingItem ? route('admin.berita.update', $beritaEditingItem) : route('admin.berita.store') }}" enctype="multipart/form-data" class="crud-form" data-store-url="{{ route('admin.berita.store') }}">
                            @csrf
                            <input type="hidden" name="_target_id" value="{{ $beritaEditingId }}">
                            <div class="admin-card-header">
                                <div><h2 class="crud-form-title">{{ $beritaEditingItem ? 'Edit Berita' : 'Tambah Berita' }}</h2><p>Isi data berita/kegiatan Nagari.</p></div>
                            </div>
                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Gambar Berita</label>
                                    <div class="form-file">
                                        <div class="preview-box crud-form-preview" @if($beritaEditingItem && $beritaEditingItem->featured_image_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($beritaEditingItem->featured_image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($beritaEditingItem && $beritaEditingItem->featured_image_path)📰@endunless</div>
                                        <input type="file" name="gambar" accept="image/*">
                                    </div>
                                    <span class="form-hint crud-form-hint" style="display: {{ $beritaEditingItem ? 'inline' : 'none' }};">Biarkan kosong jika tidak ingin mengganti gambar.</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenis Tampilan</label>
                                    <select class="form-select" name="jenis">
                                        <option value="utama" {{ old('jenis', $beritaEditingItem && $beritaEditingItem->is_featured ? 'utama' : 'biasa') === 'utama' ? 'selected' : '' }}>Berita Utama</option>
                                        <option value="biasa" {{ old('jenis', $beritaEditingItem && $beritaEditingItem->is_featured ? 'utama' : 'biasa') === 'biasa' ? 'selected' : '' }}>Daftar Berita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-select" name="kategori_id">
                                        <option value="">Tanpa kategori</option>
                                        @foreach ($postCategories as $cat)
                                            <option value="{{ $cat->id }}" {{ (string) old('kategori_id', $beritaEditingItem->category_id ?? '') === (string) $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-input" name="tanggal" value="{{ old('tanggal', $beritaEditingItem?->published_at?->format('Y-m-d') ?? '') }}">
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Judul Berita</label>
                                    <input type="text" class="form-input" name="judul" value="{{ old('judul', $beritaEditingItem->title ?? '') }}" placeholder="Judul berita" required>
                                </div>
                                <div class="form-group full">
                                    <label class="form-label">Deskripsi / Ringkasan</label>
                                    <textarea class="form-textarea" name="deskripsi">{{ old('deskripsi', $beritaEditingItem->excerpt ?? '') }}</textarea>
                                </div>
                            </div>
                            <div class="admin-card-actions">
                                <button type="button" class="btn-ghost btn-cancel-form">Batal</button>
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- ================= PETA DIGITAL ================= -->
                <section class="admin-panel" id="panel-peta">
                    <form class="admin-form" method="POST" action="{{ route('admin.peta.update') }}">
                        @csrf
                        <div class="admin-card">
                            <div class="admin-card-header">
                                <div><h2>Peta Digital</h2><p>Kategori Fasilitas Umum yang tampil pada peta digital beranda. Untuk kategori UMKM, kelola lewat menu "UMKM Lokal".</p></div>
                            </div>

                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

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
                                <div class="form-group full">
                                    <label class="form-label">Daftar Lokasi</label>
                                    <span class="form-hint" style="display:block; margin-bottom:0.75rem;">Cukup nama umum lokasinya saja, tidak perlu dirinci per korong.</span>
                                    <div class="repeater-list" id="list-fasum">
                                        @foreach ($fasilitasUmumList as $lokasi)
                                        <div class="repeater-item" style="padding: 0.75rem 3rem 0.75rem 1rem;">
                                            <button type="button" class="repeater-remove" aria-label="Hapus lokasi">&times;</button>
                                            <input type="text" class="form-input" name="lokasi[]" value="{{ $lokasi->name }}" placeholder="Nama lokasi">
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
                        <input type="text" class="form-input" name="lokasi[]" placeholder="Nama lokasi">
                    </div>
                </template>

                <!-- ================= UMKM ================= -->
                <section class="admin-panel" id="panel-umkm">
                    @php
                        $umkmEditingId = old('_target_id');
                        $umkmEditingItem = $umkmEditingId ? $umkms->firstWhere('id', (int) $umkmEditingId) : null;
                        $umkmShowForm = $errors->any() && request()->query('panel') === 'umkm';
                    @endphp
                    <div class="admin-card crud-list-view" style="display: {{ $umkmShowForm ? 'none' : 'block' }};">
                        <div class="admin-card-header">
                            <div><h2>UMKM Lokal</h2><p>Daftar produk dan usaha masyarakat pada beranda.</p></div>
                            <button type="button" class="btn-save btn-add-new">+ Tambah Produk UMKM</button>
                        </div>

                        <div class="admin-table-wrap">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Pemilik</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($umkms as $umkm)
                                    <tr>
                                        <td>
                                            @if ($umkm->featured_image_path)
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($umkm->featured_image_path) }}" alt="{{ $umkm->name }}" style="width:44px; height:44px; object-fit:cover; border-radius:8px; display:block;">
                                            @else
                                                <div class="preview-box" style="width:44px; height:44px; margin:0; font-size:1.1rem;">🛍️</div>
                                            @endif
                                        </td>
                                        <td>{{ $umkm->name }}</td>
                                        <td>{{ $umkm->category }}</td>
                                        <td>{{ $umkm->owner_name ?: '-' }}</td>
                                        <td>{{ $umkm->address ?: '-' }}</td>
                                        <td>
                                            <div class="admin-table-actions">
                                                <button type="button" class="admin-table-edit-btn btn-edit-item" aria-label="Edit produk"
                                                    data-update-url="{{ route('admin.umkm.update', $umkm) }}"
                                                    data-id="{{ $umkm->id }}"
                                                    data-preview="{{ $umkm->featured_image_path ? \Illuminate\Support\Facades\Storage::url($umkm->featured_image_path) : '' }}"
                                                    data-item="{{ json_encode(['judul' => $umkm->name, 'kategori' => $umkm->category, 'pemilik' => $umkm->owner_name, 'lokasi' => $umkm->address]) }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
                                                <form method="POST" action="{{ route('admin.umkm.destroy', $umkm) }}" data-confirm="Hapus produk {{ $umkm->name }}?">
                                                    @csrf
                                                    <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus produk"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="6" class="admin-table-empty">Belum ada produk UMKM. Klik "+ Tambah Produk UMKM" untuk menambahkan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="admin-card crud-form-view" style="display: {{ $umkmShowForm ? 'block' : 'none' }};">
                        <form method="POST" action="{{ $umkmEditingItem ? route('admin.umkm.update', $umkmEditingItem) : route('admin.umkm.store') }}" enctype="multipart/form-data" class="crud-form" data-store-url="{{ route('admin.umkm.store') }}">
                            @csrf
                            <input type="hidden" name="_target_id" value="{{ $umkmEditingId }}">
                            <div class="admin-card-header">
                                <div><h2 class="crud-form-title">{{ $umkmEditingItem ? 'Edit Produk UMKM' : 'Tambah Produk UMKM' }}</h2><p>Isi data produk/usaha yang ingin disimpan.</p></div>
                            </div>

                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Gambar Produk</label>
                                    <div class="form-file">
                                        <div class="preview-box crud-form-preview" @if($umkmEditingItem && $umkmEditingItem->featured_image_path) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($umkmEditingItem->featured_image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($umkmEditingItem && $umkmEditingItem->featured_image_path)🛍️@endunless</div>
                                        <input type="file" name="gambar" accept="image/*">
                                    </div>
                                    <span class="form-hint crud-form-hint" style="display: {{ $umkmEditingItem ? 'inline' : 'none' }};">Biarkan kosong jika tidak ingin mengganti gambar.</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <input type="text" class="form-input" name="kategori" value="{{ old('kategori', $umkmEditingItem->category ?? '') }}" placeholder="Contoh: Kuliner" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama Produk / Usaha</label>
                                    <input type="text" class="form-input" name="judul" value="{{ old('judul', $umkmEditingItem->name ?? '') }}" placeholder="Nama produk" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama Pemilik</label>
                                    <input type="text" class="form-input" name="pemilik" value="{{ old('pemilik', $umkmEditingItem->owner_name ?? '') }}" placeholder="Nama pemilik usaha">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" class="form-input" name="lokasi" value="{{ old('lokasi', $umkmEditingItem->address ?? '') }}" placeholder="Contoh: Korong Bukik Gonggang">
                                </div>
                            </div>

                            <div class="admin-card-actions">
                                <button type="button" class="btn-ghost btn-cancel-form">Batal</button>
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- ================= GALERI ================= -->
                <section class="admin-panel" id="panel-galeri">
                    @php
                        $galeriEditingId = old('_target_id');
                        $galeriEditingItem = $galeriEditingId ? $galleryImages->firstWhere('id', (int) $galeriEditingId) : null;
                        $galeriShowForm = $errors->any() && request()->query('panel') === 'galeri';
                        $ukuranGaleri = ['besar' => 'Besar', 'sedang' => 'Sedang', 'tinggi' => 'Tinggi', 'lebar' => 'Lebar'];
                    @endphp
                    <div class="admin-card crud-list-view" style="display: {{ $galeriShowForm ? 'none' : 'block' }};">
                        <div class="admin-card-header">
                            <div><h2>Galeri Budaya</h2><p>Foto budaya dan kehidupan masyarakat pada beranda.</p></div>
                            <button type="button" class="btn-save btn-add-new">+ Tambah Foto</button>
                        </div>
                        <div class="admin-table-wrap">
                            <table class="admin-table">
                                <thead><tr><th>Foto</th><th>Ukuran Grid</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    @forelse ($galleryImages as $image)
                                    <tr>
                                        <td>
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($image->image_path) }}" alt="Foto galeri" style="width:44px; height:44px; object-fit:cover; border-radius:8px; display:block;">
                                        </td>
                                        <td>{{ $ukuranGaleri[$image->size] ?? $image->size }}</td>
                                        <td>
                                            <div class="admin-table-actions">
                                                <button type="button" class="admin-table-edit-btn btn-edit-item" aria-label="Edit foto"
                                                    data-update-url="{{ route('admin.galeri.update', $image) }}"
                                                    data-id="{{ $image->id }}"
                                                    data-preview="{{ \Illuminate\Support\Facades\Storage::url($image->image_path) }}"
                                                    data-item="{{ json_encode(['ukuran' => $image->size]) }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
                                                <form method="POST" action="{{ route('admin.galeri.destroy', $image) }}" data-confirm="Hapus foto ini?">
                                                    @csrf
                                                    <button type="submit" class="pengaduan-delete-btn" aria-label="Hapus foto"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="3" class="admin-table-empty">Belum ada foto galeri. Klik "+ Tambah Foto" untuk menambahkan.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="admin-card crud-form-view" style="display: {{ $galeriShowForm ? 'block' : 'none' }};">
                        <form method="POST" action="{{ $galeriEditingItem ? route('admin.galeri.update', $galeriEditingItem) : route('admin.galeri.store') }}" enctype="multipart/form-data" class="crud-form" data-store-url="{{ route('admin.galeri.store') }}">
                            @csrf
                            <input type="hidden" name="_target_id" value="{{ $galeriEditingId }}">
                            <div class="admin-card-header">
                                <div><h2 class="crud-form-title">{{ $galeriEditingItem ? 'Edit Foto Galeri' : 'Tambah Foto Galeri' }}</h2><p>Unggah foto budaya/kehidupan masyarakat.</p></div>
                            </div>
                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label class="form-label">Foto</label>
                                    <div class="form-file">
                                        <div class="preview-box crud-form-preview" @if($galeriEditingItem) style="background-image:url('{{ \Illuminate\Support\Facades\Storage::url($galeriEditingItem->image_path) }}'); background-size:cover; background-position:center;" @endif>@unless($galeriEditingItem)📷@endunless</div>
                                        <input type="file" name="gambar" accept="image/*" data-required-on-add {{ $galeriEditingItem ? '' : 'required' }}>
                                    </div>
                                    <span class="form-hint crud-form-hint" style="display: {{ $galeriEditingItem ? 'inline' : 'none' }};">Biarkan kosong jika tidak ingin mengganti foto.</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ukuran Grid</label>
                                    <select class="form-select" name="ukuran">
                                        @foreach ($ukuranGaleri as $value => $label)
                                            <option value="{{ $value }}" {{ old('ukuran', $galeriEditingItem->size ?? 'sedang') === $value ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="admin-card-actions">
                                <button type="button" class="btn-ghost btn-cancel-form">Batal</button>
                                <button type="submit" class="btn-save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </section>

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
                                    <form method="POST" action="{{ route('admin.pengaduan.destroy', $pesan) }}" data-confirm="Hapus pengaduan dari {{ $pesan->name }}?">
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

                            @if ($errors->any())
                                <div style="background: rgba(200, 60, 60, 0.1); border: 1px solid rgba(200, 60, 60, 0.3); border-radius: 10px; padding: 0.85rem 1rem; color: #B3453D; font-weight:600; margin-bottom:1rem;">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

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
                                    <label class="form-label">Kode Wilayah</label>
                                    <input type="text" class="form-input" name="kode_wilayah" value="{{ $kontak['kode_wilayah'] }}" placeholder="Contoh: 13.08.13.2002">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-input" name="email" value="{{ $kontak['email'] }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-input" name="telepon" value="{{ $kontak['telepon'] }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Link Facebook</label>
                                    <input type="text" class="form-input" name="facebook_url" value="{{ $kontak['facebook_url'] }}" placeholder="https://facebook.com/...">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Link YouTube</label>
                                    <input type="text" class="form-input" name="youtube_url" value="{{ $kontak['youtube_url'] }}" placeholder="https://youtube.com/...">
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

    <!-- Modal konfirmasi hapus (pengganti window.confirm() bawaan browser) -->
    <div class="confirm-modal-overlay" id="confirmModalOverlay">
        <div class="confirm-modal-box">
            <div class="confirm-modal-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
            </div>
            <h3 class="confirm-modal-title">Hapus Data?</h3>
            <p class="confirm-modal-message" id="confirmModalMessage"></p>
            <div class="confirm-modal-actions">
                <button type="button" class="btn-ghost" id="confirmModalCancel">Batal</button>
                <button type="button" class="btn-confirm-danger" id="confirmModalConfirm">Ya, Hapus</button>
            </div>
        </div>
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
            const indexedRepeaters = {};

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

            // Panel bertipe "tabel + form" (tambah/edit satu per satu, bukan simpan sekaligus
            // seperti repeater). Satu fungsi generik dipakai untuk semua panel bertipe ini.
            function initCrudPanel(panelId, labels) {
                const panel = document.getElementById('panel-' + panelId);
                if (!panel) return;
                const listView = panel.querySelector('.crud-list-view');
                const formView = panel.querySelector('.crud-form-view');
                if (!listView || !formView) return;
                const form = formView.querySelector('form.crud-form');
                const titleEl = formView.querySelector('.crud-form-title');
                const previewBox = formView.querySelector('.crud-form-preview');
                const previewHint = formView.querySelector('.crud-form-hint');
                const targetIdField = form.querySelector('input[name="_target_id"]');
                const storeUrl = form.dataset.storeUrl;
                const fileInputsRequiredOnAdd = form.querySelectorAll('input[type="file"][data-required-on-add]');

                function showForm() {
                    listView.style.display = 'none';
                    formView.style.display = 'block';
                }
                function showList() {
                    formView.style.display = 'none';
                    listView.style.display = 'block';
                }
                function resetPreview() {
                    if (!previewBox) return;
                    previewBox.style.backgroundImage = 'none';
                    previewBox.textContent = previewBox.dataset.emptyIcon || '';
                }

                const addBtn = panel.querySelector('.btn-add-new');
                if (addBtn) {
                    addBtn.addEventListener('click', () => {
                        form.reset();
                        form.action = storeUrl;
                        if (targetIdField) targetIdField.value = '';
                        if (titleEl) titleEl.textContent = labels.add;
                        fileInputsRequiredOnAdd.forEach(input => { input.required = true; });
                        resetPreview();
                        if (previewHint) previewHint.style.display = 'none';
                        showForm();
                    });
                }

                panel.querySelectorAll('.btn-edit-item').forEach(btn => {
                    btn.addEventListener('click', () => {
                        form.reset();
                        form.action = btn.dataset.updateUrl;
                        if (targetIdField) targetIdField.value = btn.dataset.id;
                        if (titleEl) titleEl.textContent = labels.edit;
                        fileInputsRequiredOnAdd.forEach(input => { input.required = false; });
                        const data = JSON.parse(btn.dataset.item || '{}');
                        Object.entries(data).forEach(([name, value]) => {
                            const field = form.querySelector(`[name="${name}"]`);
                            if (field && field.type !== 'file') field.value = value ?? '';
                        });
                        if (previewBox) {
                            const previewUrl = btn.dataset.preview;
                            if (previewUrl) {
                                previewBox.style.backgroundImage = `url('${previewUrl}')`;
                                previewBox.style.backgroundSize = 'cover';
                                previewBox.style.backgroundPosition = 'center';
                                previewBox.textContent = '';
                            } else {
                                resetPreview();
                            }
                        }
                        if (previewHint) previewHint.style.display = 'inline';
                        showForm();
                    });
                });

                const cancelBtn = formView.querySelector('.btn-cancel-form');
                if (cancelBtn) cancelBtn.addEventListener('click', showList);
            }

            initCrudPanel('umkm', { add: 'Tambah Produk UMKM', edit: 'Edit Produk UMKM' });
            initCrudPanel('aparatur', { add: 'Tambah Perangkat Aparatur', edit: 'Edit Perangkat Aparatur' });
            initCrudPanel('potensi', { add: 'Tambah Kartu Potensi', edit: 'Edit Kartu Potensi' });
            initCrudPanel('berita', { add: 'Tambah Berita', edit: 'Edit Berita' });
            initCrudPanel('galeri', { add: 'Tambah Foto Galeri', edit: 'Edit Foto Galeri' });
            initCrudPanel('banner', { add: 'Tambah Foto Beranda', edit: 'Edit Foto Beranda' });

            // Modal konfirmasi kustom, pengganti window.confirm() bawaan browser.
            // Form yang butuh konfirmasi cukup diberi atribut data-confirm="pesannya"
            // (menggantikan onsubmit="return confirm(...)").
            (function initConfirmModals() {
                const overlay = document.getElementById('confirmModalOverlay');
                const messageEl = document.getElementById('confirmModalMessage');
                const cancelBtn = document.getElementById('confirmModalCancel');
                const confirmBtn = document.getElementById('confirmModalConfirm');
                if (!overlay) return;
                let pendingForm = null;

                function closeModal() {
                    overlay.classList.remove('is-open');
                    pendingForm = null;
                }

                document.querySelectorAll('form[data-confirm]').forEach(form => {
                    form.addEventListener('submit', (e) => {
                        if (form.dataset.confirmed === 'true') return;
                        e.preventDefault();
                        pendingForm = form;
                        messageEl.textContent = form.dataset.confirm;
                        overlay.classList.add('is-open');
                    });
                });

                cancelBtn.addEventListener('click', closeModal);
                overlay.addEventListener('click', (e) => {
                    if (e.target === overlay) closeModal();
                });
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && overlay.classList.contains('is-open')) closeModal();
                });
                confirmBtn.addEventListener('click', () => {
                    if (pendingForm) {
                        pendingForm.dataset.confirmed = 'true';
                        pendingForm.submit();
                    }
                    closeModal();
                });
            })();

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
