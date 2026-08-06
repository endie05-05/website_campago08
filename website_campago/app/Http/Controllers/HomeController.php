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

class HomeController extends Controller
{
    public function index()
    {
        $officials = Official::where('is_active', true)->orderBy('sort_order')->get();
        $potentials = Potential::published()->orderBy('sort_order')->get();
        $korongs = Korong::where('is_active', true)->orderBy('sort_order')->get();
        $korongCount = Korong::count();
        $villageProfile = VillageProfile::first();
        $kontak = $this->kontakSettings();
        $galleryImages = GalleryImage::whereHas('gallery', fn ($q) => $q->where('status', 'published'))
            ->orderBy('sort_order')
            ->get();
        $umkms = Umkm::published()->orderBy('id')->get();

        $posts = Post::published()->with('category')->orderByDesc('published_at')->get();
        $mainPost = $posts->firstWhere('is_featured', true) ?? $posts->first();
        $otherPosts = $posts->reject(fn ($p) => $mainPost && $p->is($mainPost))->take(3);

        $fasilitasUmumList = Location::whereHas('category', fn ($q) => $q->where('slug', 'fasilitas-umum'))
            ->where('status', 'published')
            ->orderBy('id')
            ->get();
        $peta = $this->petaSettings();

        return view('welcome', compact(
            'officials',
            'potentials',
            'korongs',
            'korongCount',
            'villageProfile',
            'kontak',
            'galleryImages',
            'umkms',
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
            'email' => Setting::get('kontak_email', 'info@campago.desa.id'),
            'telepon' => Setting::get('kontak_telepon', '-'),
            'copyright' => Setting::get('kontak_copyright', '© '.date('Y').' Pemerintah Nagari Campago. All Rights Reserved.'),
        ];
    }

    public static function petaSettings(): array
    {
        return [
            'fasum_deskripsi' => Setting::get('peta_fasum_deskripsi', 'Kumpulan tempat umum penting seperti balai, sekolah, pasar, dan fasilitas sosial yang mendukung keseharian warga Campago.'),
            'fasum_area' => Setting::get('peta_fasum_area', 'Balai, Sekolah, Pasar, Kantor Pelayanan'),
        ];
    }
}
