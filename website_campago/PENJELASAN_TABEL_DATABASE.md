# Penjelasan Tabel Database Website Nagari Campago

Dokumen ini berisi rangkuman fungsi dari setiap tabel yang ada di dalam database `website_campago`. Secara total, kita membuat **23 tabel custom** (di luar tabel bawaan sistem Laravel).

Semua nama tabel menggunakan bahasa Inggris dan format jamak (plural) untuk mematuhi standar otomatisasi dari framework Laravel.

---

## 1. Fondasi & Pengaturan Utama
Tabel-tabel ini adalah inti dari website nagari.

- **`users`**
  Menyimpan data akun untuk login ke halaman Admin/Dashboard. Di sini tersimpan email, password (terenkripsi), dan status peran (apakah dia Super Admin atau Editor).

- **`village_profiles`**
  Hanya berisi 1 baris data. Tabel ini menyimpan identitas utama Nagari Campago, seperti: nama nagari, luas wilayah, visi misi, deskripsi, hingga foto logo dan jumlah penduduk.

- **`korongs`**
  Menyimpan daftar 8 wilayah/korong yang ada di Nagari Campago (Bukik Gonggang, Kampung Dalam, dll). 

- **`officials`**
  Menyimpan data perangkat desa/nagari. Mulai dari nama wali nagari, sekretaris, jajaran pemerintahan, beserta foto dan jabatan mereka.

- **`settings`**
  Menyimpan pengaturan *global* website (seperti nama web, link media sosial, nomor telepon kontak, atau alamat email resmi nagari). Konsepnya menggunakan kunci-nilai (key-value).

---

## 2. Konten Informasi Publik (Berita & Pengumuman)
Tabel untuk mengelola informasi yang dibaca oleh warga atau pengunjung web.

- **`post_categories`**
  Menyimpan kategori-kategori artikel/berita, seperti: "Berita Nagari", "Kegiatan", "Pertanian".

- **`posts`**
  Menyimpan isi lengkap dari artikel atau berita yang ditulis oleh Admin. Dilengkapi dengan judul, isi berita, foto *thumbnail*, dan tanggal tayang (publikasi).

- **`announcements`**
  Menyimpan pengumuman penting berskala pendek (misalnya pengumuman jadwal posyandu atau gotong royong). Pengumuman bisa diatur masa aktifnya (start_date - end_date).

- **`agendas`** (Opsional)
  Menyimpan jadwal kegiatan yang akan datang di nagari.

---

## 3. Pelayanan Administrasi & Dokumen
Tabel terkait layanan birokrasi nagari.

- **`services`**
  Menyimpan daftar layanan surat-menyurat di kantor nagari (contoh: Surat Keterangan Usaha, KTP). Di tabel ini tercatat apa saja syaratnya, berapa lama prosesnya, dan biaya administrasinya.

- **`public_documents`**
  Tempat menyimpan file dokumen (seperti PDF Peraturan Nagari, Formulir Pendaftaran) yang boleh di-download oleh masyarakat secara bebas.

---

## 4. Promosi: Potensi Nagari & UMKM
Tabel-tabel ini berfungsi sebagai etalase promosi nagari.

- **`potentials`**
  Menyimpan data potensi unggulan desa (contoh: Wisata Air Terjun, Perkebunan Kelapa).
- **`potential_images`**
  Menyimpan galeri foto (lebih dari satu foto) untuk masing-masing potensi di atas.

- **`umkms`**
  Direktori data Usaha Mikro, Kecil, dan Menengah (UMKM) milik warga. Di sini tersimpan nama warung/usaha, alamat, lokasi peta, dan kontak WA/Medsos pemilik.
- **`umkm_products`**
  Menyimpan katalog produk atau menu yang dijual oleh UMKM tersebut beserta harganya.

---

## 5. Pemetaan Digital (GIS)
Tabel khusus untuk fitur Peta Interaktif di website.

- **`location_categories`**
  Kategori titik lokasi di peta (contoh: "Fasilitas Umum", "Sekolah", "Tempat Ibadah").
- **`locations`**
  Menyimpan detail titik lokasi di peta, yang paling penting adalah menyertakan data koordinat (*latitude* dan *longitude*) dari tempat tersebut.

---

## 6. Pelengkap, Galeri & Statistik

- **`galleries`**
  Menyimpan nama album foto kegiatan (contoh: Album "Perayaan 17 Agustus 2024").
- **`gallery_images`**
  Menyimpan foto-foto individual yang dimasukkan ke dalam album `galleries` di atas.

- **`banners`**
  Menyimpan foto spanduk/banner (slider) besar yang biasanya berganti-ganti di Halaman Utama (Homepage) website.

- **`population_statistics`**
  Menyimpan rekapan angka statistik penduduk secara umum (berapa laki-laki, berapa perempuan, berapa balita) tanpa menyimpan data NIK (untuk alasan privasi keamanan data warga).

- **`contact_messages`**
  Menyimpan pesan/email yang dikirim oleh pengunjung web melalui form "Hubungi Kami" di website.

- **`activity_logs`**
  Tabel rahasia (Audit Trail). Menyimpan riwayat aktivitas Admin. Misalnya: "Siapa yang menghapus berita X pada jam Y", fungsinya untuk menjaga keamanan dan memonitor kerja tim admin.

---

### Tabel Bawaan Sistem (Laravel Default)
Selain 23 tabel di atas, ada beberapa tabel yang otomatis dibuat oleh sistem:
- **`cache`, `jobs`, `sessions`, `password_reset_tokens`**: Tabel-tabel teknis ini dipakai langsung oleh server untuk mengatur *login session*, mempercepat loading (*cache*), antrean pengiriman email (*jobs*), dan lupa password. Kita sebagai programmer jarang menyentuh tabel ini secara manual.
