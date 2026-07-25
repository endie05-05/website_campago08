# Prompt Desain Landing Page / Home Website Nagari Campago

Buat desain frontend halaman **Home / Landing Page** untuk **Website Resmi Nagari Campago**, Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat.

Gunakan gaya visual yang terinspirasi dari website **Desa Cibunar**: modern, elegan, minimalis, immersive, editorial, dan memiliki tampilan yang kuat secara visual.

Website harus terasa seperti perpaduan antara:

- modern village portal,
- cultural / destination website,
- official government website.

Namun jangan menyalin desain Desa Cibunar secara identik. Buat identitas visual sendiri untuk Nagari Campago.

---

## GENERAL DESIGN DIRECTION

Website harus memberikan kesan:

- modern tetapi tetap cocok sebagai website resmi nagari,
- hangat dan natural,
- elegan dan tidak terlalu formal,
- banyak whitespace,
- typography besar dan clean,
- layout editorial,
- tidak terlihat seperti template website pemerintah lama,
- sederhana tetapi memiliki visual hierarchy yang kuat.

Hindari:

- terlalu banyak card,
- gradient berlebihan,
- terlalu banyak icon,
- warna terlalu ramai,
- ornamen adat yang berlebihan,
- tampilan seperti dashboard admin,
- efek animasi berlebihan.

---

## IMPORTANT ASSET RULE

**JANGAN menggunakan logo asli, foto asli, stock image, atau gambar dari internet terlebih dahulu.**

Untuk semua elemen visual seperti:

- logo Nagari Campago,
- foto hero,
- foto landscape,
- foto berita,
- foto UMKM,
- foto budaya,
- foto galeri,
- foto potensi nagari,

gunakan **PLACEHOLDER** terlebih dahulu.

Gunakan placeholder sederhana berupa:

- area kosong dengan background netral,
- skeleton image,
- kotak dengan tulisan seperti:
  - `Hero Image Placeholder`
  - `Nagari Photo Placeholder`
  - `UMKM Image Placeholder`
  - `News Image Placeholder`

Jangan membuat logo otomatis.

Untuk logo gunakan placeholder berbentuk lingkaran atau kotak sederhana dengan tulisan:

`LOGO`

Asset asli akan dimasukkan kemudian.

---

## COLOR PALETTE

Gunakan **CREAM sebagai PRIMARY COLOR**.

### Primary Cream
`#F4EFE6`

### Alternative Cream
`#EFE7D8`

### Light Cream Background
`#FAF7F0`

Gunakan warna cream sebagai warna dominan pada:

- background utama website,
- navbar setelah scroll,
- section background,
- button tertentu,
- card,
- footer accents,
- elemen dekoratif.

### SECONDARY COLOR adalah GREEN

Secondary Green:

`#2F5D50`

Dark Green:

`#1F4037`

Soft Green:

`#6E8878`

Gunakan green sebagai:

- warna teks heading tertentu,
- warna button utama,
- hover state,
- icon,
- link,
- divider,
- aksen,
- footer.

Text utama:

`#222222`

Muted Text:

`#6B6B65`

White:

`#FFFFFF`

### IMPORTANT

Cream harus terasa sebagai identitas visual utama website.

Green hanya menjadi warna pendukung dan kontras.

Jangan membuat website didominasi warna hijau.

Proporsi visual kira-kira:

- 70% Cream / Neutral
- 20% Green
- 10% White / Dark Text

---

## 1. NAVBAR

Buat navbar minimalis.

Posisi:

- Logo placeholder di kiri.
- Teks: `Nagari Campago`

Menu:

- Beranda
- Profil
- Pemerintahan
- Informasi
- Potensi
- UMKM
- Galeri

Tambahkan icon pencarian sederhana di sisi kanan.

Saat halaman berada di posisi paling atas:

- navbar transparan.

Jika hero background masih berupa placeholder terang, gunakan text berwarna dark green.

Jika nantinya menggunakan foto asli, navbar dapat menggunakan text putih berdasarkan kebutuhan kontras.

Saat scroll:

navbar berubah menjadi:

- background cream semi-transparent.

Gunakan:

`backdrop-filter: blur();`

Tambahkan border bottom tipis.

Hindari shadow yang terlalu kuat.

Logo gunakan placeholder:

`[ LOGO ]`

Jangan menggunakan logo asli terlebih dahulu.

---

## 2. HERO SECTION

Hero merupakan fokus utama halaman.

Gunakan tinggi:

`min-height: 90vh sampai 100vh`

Karena foto asli belum tersedia:

buat **HERO IMAGE PLACEHOLDER** besar yang memenuhi background.

Placeholder harus terlihat sebagai area untuk foto landscape / drone Nagari Campago.

Contoh visual:

```text
------------------------------------------------

        HERO IMAGE PLACEHOLDER

------------------------------------------------
```

Tambahkan overlay sangat tipis jika diperlukan.

Layout teks berada di:

- kiri bawah / center-left.

Content:

small label:

`Website Resmi`

Main headline:

```text
NAGARI
CAMPAGO
```

Gunakan typography sangat besar dan kuat.

Subheading:

```text
Kecamatan V Koto Kampung Dalam
Kabupaten Padang Pariaman
```

Deskripsi pendek:

`Menjelajahi potensi, budaya, dan kehidupan masyarakat Nagari Campago.`

CTA:

`[ Jelajahi Campago ]`

Secondary action:

`Lihat Peta Nagari →`

Gunakan green sebagai warna button utama.

Background button:

`#2F5D50`

Text:

cream atau white.

Tambahkan scroll indicator sederhana:

```text
Scroll to Explore
↓
```

Jangan memasukkan gambar asli.

---

## 3. QUICK ACCESS

Setelah hero buat shortcut menu:

- Profil Nagari
- Peta Nagari
- UMKM Lokal
- Berita Nagari

Gunakan desain minimal.

Background section:

cream.

Setiap menu dapat menggunakan:

- simple line icon,
- title,
- arrow.

Jangan menggunakan card dengan border tebal.

Bisa gunakan horizontal layout dengan separator.

Hover:

- text berubah menjadi dark green,
- arrow bergerak sedikit,
- background berubah subtle.

---

## 4. SECTION "MENGENAL CAMPAGO"

Gunakan layout editorial 2 kolom.

Kiri:

`NAGARI PHOTO PLACEHOLDER`

Gunakan area foto besar dengan rasio yang elegan.

Kanan:

small label:

`Tentang Nagari`

Heading:

`Mengenal Nagari Campago`

Description:

> Nagari Campago merupakan salah satu nagari yang berada di Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat. Nagari ini memiliki kehidupan masyarakat yang kuat dengan nilai kebersamaan, budaya Minangkabau, serta potensi pertanian dan ekonomi lokal.

Link:

`Selengkapnya tentang Campago →`

Gunakan:

- background cream terang,
- heading dark green,
- body text dark.

Berikan whitespace yang cukup besar.

---

## 5. STATISTIK NAGARI

Tampilkan statistik dalam layout horizontal minimalis.

Contoh:

```text
8
Korong

9,86 km²
Luas Wilayah

—
Penduduk

V Koto Kampung Dalam
Kecamatan
```

Gunakan angka besar.

Jangan gunakan card kotak untuk masing-masing statistik.

Gunakan divider tipis berwarna soft green.

Jika data belum tersedia atau belum diverifikasi:

gunakan placeholder seperti:

`—`

Jangan membuat atau mengarang angka.

---

## 6. POTENSI NAGARI

Heading:

`Jelajahi Potensi Campago`

Description:

`Temukan berbagai potensi alam, ekonomi, budaya, dan kehidupan masyarakat Nagari Campago.`

Gunakan layout:

**BENTO GRID**

Kategori:

- Pertanian
- UMKM Lokal
- Budaya Minangkabau
- Wisata & Alam

Karena belum ada foto:

gunakan **IMAGE PLACEHOLDER** untuk setiap item.

Contoh:

```text
┌───────────────────────────────┐
│                               │
│     IMAGE PLACEHOLDER         │
│                               │
│     PERTANIAN                 │
│     Deskripsi singkat         │
└───────────────────────────────┘
```

Gunakan green sebagai accent.

Cream sebagai background utama.

Saat foto asli nanti dimasukkan:

gunakan subtle zoom saat hover.

---

## 7. BERITA

Heading:

`Cerita dari Campago`

Description:

`Berita, kegiatan, dan cerita terbaru dari masyarakat Nagari Campago.`

Gunakan editorial layout:

- 1 berita utama besar.
- 2–3 berita lebih kecil.

Semua image menggunakan placeholder.

Berita utama:

```text
[ NEWS IMAGE PLACEHOLDER ]

Kategori
Tanggal
Judul berita
Deskripsi singkat
```

Berita lain:

```text
[ IMAGE PLACEHOLDER ]
Judul
Tanggal
```

Link:

`Lihat semua berita →`

Hindari desain card blog standar yang terlalu kaku.

Gunakan banyak whitespace.

---

## 8. PETA DIGITAL

Heading:

`Temukan Campago`

Description:

`Jelajahi fasilitas umum, sekolah, tempat ibadah, UMKM, layanan kesehatan, dan lokasi penting lainnya melalui peta digital Nagari Campago.`

Layout dua kolom.

Kiri:

- heading + description.

Filter:

- Semua
- Fasilitas Umum
- UMKM
- Pendidikan
- Tempat Ibadah
- Kesehatan

Button:

`Buka Peta Lengkap →`

Kanan:

`MAP PLACEHOLDER`

Jangan langsung memasukkan Google Maps.

Gunakan placeholder dengan tulisan:

`Interactive Map Placeholder`

---

## 9. UMKM LOKAL

Heading:

`Produk dari Campago`

Description:

`Kenali produk dan usaha lokal yang tumbuh bersama masyarakat Nagari Campago.`

Gunakan horizontal showcase.

Setiap item:

```text
[ UMKM IMAGE PLACEHOLDER ]

Nama Produk
Nama UMKM
Kategori
Lokasi
```

Jangan membuat tampilannya seperti ecommerce.

Tidak perlu:

- harga,
- cart,
- checkout,
- rating.

Ini adalah direktori promosi UMKM lokal.

Gunakan cream background.

Green sebagai accent.

---

## 10. CULTURE / GALLERY

Buat section visual besar.

Karena foto belum tersedia:

gunakan:

`CULTURAL IMAGE PLACEHOLDER`

Tambahkan content:

`CAMPAGO PUNYA CERITA`

Description:

`Dari adat, budaya, kehidupan masyarakat, hingga berbagai cerita yang terus hidup dari generasi ke generasi.`

Button:

`Jelajahi Galeri →`

Buat placeholder gallery di bagian bawah.

Contoh:

```text
[ PHOTO ]
[ PHOTO ]
[ PHOTO ]
[ PHOTO ]
```

Gunakan ukuran foto yang tidak seragam agar layout terasa editorial.

---

## 11. FOOTER

Gunakan footer dengan:

background dark green:

`#1F4037`

Text:

cream:

`#F4EFE6`

Logo:

gunakan placeholder.

`[ LOGO ]`

Nagari Campago

```text
Kecamatan V Koto Kampung Dalam,
Kabupaten Padang Pariaman,
Sumatera Barat.
```

Navigasi:

- Profil
- Pemerintahan
- Potensi
- UMKM
- Berita

Informasi:

- Peta
- Galeri
- Kontak

Kontak:

gunakan placeholder:

- Alamat
- Email
- Nomor Telepon

Bottom:

`© 2026 Pemerintah Nagari Campago. All Rights Reserved.`

---

## TYPOGRAPHY

Gunakan typography modern.

Heading:

- Manrope
- atau Plus Jakarta Sans

Hero headline dapat menggunakan:

- Manrope ExtraBold

Alternatif untuk heading editorial tertentu:

- Cormorant Garamond

Gunakan serif hanya secara terbatas.

Body:

- Inter
- atau Plus Jakarta Sans.

Typography hierarchy harus kuat.

Hero:

`64–88px desktop`

Section heading:

`40–56px`

Body:

`16–18px`

---

## LAYOUT

Gunakan max-width:

`1200px sampai 1400px`

Gunakan whitespace besar.

Vertical spacing antar section:

`sekitar 100–160px desktop`

Jangan membuat semua section memiliki card container.

Biarkan beberapa section terasa terbuka.

Gunakan kombinasi:

- full width section,
- editorial split layout,
- bento grid,
- horizontal content.

---

## INTERACTIONS

Gunakan animasi ringan:

- fade up saat section masuk viewport,
- smooth scrolling,
- navbar transition,
- subtle image zoom placeholder saat hover,
- arrow movement pada link,
- subtle parallax hero jika memungkinkan.

Animasi harus halus.

Durasi:

`200–500ms`

Jangan gunakan animasi berlebihan.

---

## RESPONSIVE

Desktop:

- cinematic layout,
- large typography,
- spacious.

Tablet:

- 2 column grid,
- typography sedikit lebih kecil.

Mobile:

- navbar menjadi hamburger,
- hero tetap tinggi,
- headline responsive,
- section 2 kolom menjadi 1 kolom,
- bento grid menyesuaikan,
- statistik menjadi 2 x 2,
- horizontal showcase menjadi horizontal scroll atau vertical list.

Pastikan tetap nyaman digunakan di layar mobile.

---

## DESIGN PRIORITY

Prioritas:

1. Identitas visual Nagari Campago.
2. Hero yang kuat dan elegan.
3. Kemudahan mendapatkan informasi.
4. Potensi dan kehidupan masyarakat.
5. UMKM lokal.
6. Peta nagari.
7. Berita dan galeri.
8. Informasi pemerintahan.

Gunakan **CREAM sebagai warna utama yang paling dominan**.

Gunakan **GREEN sebagai warna sekunder** untuk memberikan identitas, kontras, CTA, heading tertentu, dan elemen interaktif.

Jangan membuat tampilan terlalu hijau.

Jangan menggunakan asset asli terlebih dahulu.

Semua logo dan foto harus berupa placeholder sehingga nantinya mudah diganti dengan asset Nagari Campago yang sebenarnya.
