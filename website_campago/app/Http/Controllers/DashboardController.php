<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\GalleryImage;
use App\Models\Korong;
use App\Models\Location;
use App\Models\Official;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Potential;
use App\Models\SuratRequest;
use App\Models\SuratTemplate;
use App\Models\Umkm;
use App\Models\VillageProfile;

class DashboardController extends Controller
{
    public function index()
    {
        $officials = Official::orderBy('sort_order')->get();
        $potentials = Potential::orderBy('sort_order')->get();
        $korongs = Korong::orderBy('sort_order')->get();
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
        $contactMessages = ContactMessage::orderByDesc('created_at')->get();
        $newContactMessagesCount = $contactMessages->where('status', 'new')->count();
        $suratRequests = SuratRequest::orderByDesc('created_at')->get();
        $activeSuratRequests = $suratRequests->whereIn('status', ['diajukan', 'diproses'])->values();
        $suratHistory = $suratRequests->whereIn('status', ['selesai', 'ditolak'])->values();
        $newSuratRequestsCount = $suratRequests->where('status', 'diajukan')->count();
        $suratTemplates = SuratTemplate::with('fields')->withCount('fields')->orderBy('sort_order')->get();

        return view('admin.dashboard', compact(
            'officials',
            'potentials',
            'korongs',
            'villageProfile',
            'kontak',
            'galleryImages',
            'umkms',
            'posts',
            'postCategories',
            'fasilitasUmumList',
            'peta',
            'contactMessages',
            'newContactMessagesCount',
            'activeSuratRequests',
            'suratHistory',
            'newSuratRequestsCount',
            'suratTemplates'
        ));
    }
}
