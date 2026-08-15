<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\Korong;
use App\Models\Location;
use App\Models\Official;
use App\Models\Post;
use App\Models\Potential;
use App\Models\Setting;
use App\Models\Umkm;
use App\Models\VillageProfile;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $officials = Official::where('is_active', true)->orderBy('sort_order')->get();
        $potentials = Potential::published()->orderBy('sort_order')->get();
        $korongs = Korong::where('is_active', true)->orderBy('sort_order')->get();
        $korongCount = $korongs->count();
        $villageProfile = VillageProfile::first();
        $kontak = $this->kontakSettings();
        $galleryImages = GalleryImage::whereHas('gallery', fn ($q) => $q->where('status', 'published'))
            ->orderBy('sort_order')
            ->get();
        $umkms = Umkm::published()->orderBy('id')->get();
        $latestUmkms = Umkm::published()->with('korong')->orderByDesc('created_at')->take(3)->get();

        $posts = Post::published()->with('category')
            ->orderByDesc('is_featured')
            ->orderByDesc('published_at')
            ->take(3)
            ->get();
        $mainPost = $posts->first();
        $otherPosts = $posts->slice(1);

        // Foto slide beranda diambil dari foto berita dan foto produk UMKM yang
        // sudah diupload -- tidak ada lagi menu "Foto Beranda" terpisah di admin.
        $heroPostSlides = Post::published()->whereNotNull('featured_image_path')->get()
            ->map(fn ($post) => [
                'url' => Storage::url($post->featured_image_path),
                'title' => $post->title,
                'label' => 'Berita Terkini',
            ]);
        $heroUmkmSlides = $umkms->whereNotNull('featured_image_path')
            ->map(fn ($produk) => [
                'url' => Storage::url($produk->featured_image_path),
                'title' => $produk->name,
                'label' => 'Produk UMKM Lokal',
            ]);
        $heroSlides = $heroPostSlides->concat($heroUmkmSlides)->values();

        $fasilitasUmumList = Location::whereHas('category', fn ($q) => $q->where('slug', 'fasilitas-umum'))
            ->where('status', 'published')
            ->orderBy('id')
            ->get();
        $peta = $this->petaSettings();

        return view('welcome', compact(
            'heroSlides',
            'officials',
            'potentials',
            'korongs',
            'korongCount',
            'villageProfile',
            'kontak',
            'galleryImages',
            'umkms',
            'latestUmkms',
            'mainPost',
            'otherPosts',
            'fasilitasUmumList',
            'peta'
        ));
    }

    public static function kontakSettings(): array
    {
        return [
            'deskripsi' => Setting::get('kontak_deskripsi', 'Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat.'),
            'alamat' => Setting::get('kontak_alamat', 'Kantor Wali Nagari Campago'),
            'kode_wilayah' => Setting::get('kontak_kode_wilayah', ''),
            'email' => Setting::get('kontak_email', 'info@campago.desa.id'),
            'telepon' => Setting::get('kontak_telepon', '-'),
            'facebook_url' => Setting::get('kontak_facebook_url', ''),
            'youtube_url' => Setting::get('kontak_youtube_url', ''),
            'copyright' => Setting::get('kontak_copyright', '© '.date('Y').' Pemerintah Nagari Campago. All Rights Reserved.'),
        ];
    }

    public static function petaSettings(): array
    {
        return [
            'fasum_deskripsi' => Setting::get('peta_fasum_deskripsi', 'Kumpulan tempat umum penting seperti balai, sekolah, pasar, dan fasilitas sosial yang mendukung keseharian warga Campago.'),
            'foto_path' => Setting::get('peta_foto_path'),
        ];
    }
}
