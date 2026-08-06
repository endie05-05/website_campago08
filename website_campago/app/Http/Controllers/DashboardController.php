<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\Korong;
use App\Models\Location;
use App\Models\Official;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Potential;
use App\Models\Umkm;
use App\Models\VillageProfile;

class DashboardController extends Controller
{
    public function index()
    {
        $officials = Official::orderBy('sort_order')->get();
        $potentials = Potential::orderBy('sort_order')->get();
        $korongCount = Korong::count();
        $villageProfile = VillageProfile::first();
        $kontak = HomeController::kontakSettings();
        $galleryImages = GalleryImage::orderBy('sort_order')->get();
        $umkms = Umkm::orderBy('id')->get();
        $posts = Post::orderByDesc('published_at')->get();
        $postCategories = PostCategory::orderBy('name')->get();
        $fasilitasUmumList = Location::whereHas('category', fn ($q) => $q->where('slug', 'fasilitas-umum'))
            ->orderBy('id')
            ->get();
        $peta = HomeController::petaSettings();

        return view('admin.dashboard', compact(
            'officials',
            'potentials',
            'korongCount',
            'villageProfile',
            'kontak',
            'galleryImages',
            'umkms',
            'posts',
            'postCategories',
            'fasilitasUmumList',
            'peta'
        ));
    }
}
