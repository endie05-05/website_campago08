# CLAUDE.md

## 1. Tentang Project
Website profil Nagari Campago, Kecamatan V Koto Kampung Dalam, Kabupaten
Padang Pariaman. Dikerjakan berdua lewat GitHub, repo `website_campago08`.

## 2. Stack
- Laravel 13.8, PHP ^8.2/^8.3, `laravel/tinker`.
- Database MySQL lewat Laragon, **port 3307** (bukan default 3306), nama DB
  `website_campago`.
- Halaman publik & admin pakai Blade + CSS murni (`public/css`), **bukan**
  Tailwind. Tailwind/Vite ada di `package.json` & `resources/css|js` tapi
  tidak dipakai di view manapun (tidak ada `@vite` di Blade manapun).
- Auth bawaan Laravel (session, `Auth::attempt`), belum pakai
  Breeze/Jetstream/Sanctum.

## 3. Peta Folder Penting
- `routes/web.php` — halaman publik statis pakai closure langsung, sisanya
  (login, admin, formulir) lewat controller.
- `app/Http/Controllers/` — `HomeController` (landing), `AuthController`
  (login pengelola), `DashboardController` + controller lain per modul admin
  (`OfficialController`, `PotentialController`, `UmkmController`, dst).
- View utama: `resources/views/welcome.blade.php` (landing),
  `resources/views/layanan.blade.php` (Layanan Nagari),
  `resources/views/formulir/*.blade.php` (form SKU/SKTM/Domisili, masih
  UI-only, belum simpan ke DB), `resources/views/admin/dashboard.blade.php`,
  `resources/views/login.blade.php`.
- CSS: `public/css/home.css` (publik) dan `public/css/admin.css` (dashboard),
  di-load lewat `asset()`.
- `app/Models/` — satu Eloquent model per tabel.

## 4. Cara Menjalankan di Lokal
1. `composer install`
2. Copy `.env.example` → `.env`, set `DB_PORT=3307` (Laragon), `DB_DATABASE=website_campago`.
3. `php artisan key:generate`
4. `php artisan migrate --seed`
5. `php artisan serve` (view publik/admin tidak butuh `npm run dev`/Vite).

## 5. Konvensi Kode yang Terlihat
- Nama file Blade: huruf kecil, sesuai nama fitur (`layanan.blade.php`,
  `formulir/sku.blade.php`), dikelompokkan per subfolder fitur (`formulir/`,
  `admin/`).
- Class CSS: kebab-case deskriptif (`service-overview-card`,
  `info-card-clickable`, `modal-overlay`), warna lewat custom property di
  `:root` (`--color-green-dark`, dll).
- Modal/popup pakai pola checkbox-hack CSS (`input[type=checkbox] hidden` +
  `label` + `:checked ~ .modal-overlay`), bukan JS.
- Semua teks UI, pesan error, dan nama route pakai Bahasa Indonesia.

## 6. Lagi Dikerjain
- Redesain landing page (`welcome.blade.php`).
- Fitur login masyarakat untuk pengajuan surat pengantar online — saat ini
  `AuthController` cuma untuk login pengelola (role `super_admin`), dan form
  di `formulir/*.blade.php` masih UI-only (submit cuma `alert()`, belum ada
  model/tabel pengajuan surat).

## 7. Jangan Diubah Tanpa Konfirmasi
- File `.env`.
- Migration yang sudah dijalankan di `database/migrations/` (28 file) —
  jangan diedit langsung, buat migration baru kalau perlu ubah skema.
