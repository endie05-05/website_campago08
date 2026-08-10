<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    use ValidatesForPanel;

    public function store(Request $request)
    {
        $this->validatePanel($request, 'banner', [
            'gambar' => ['required', 'image', 'max:8192'],
        ]);

        $banner = new Banner();
        $banner->sort_order = (Banner::max('sort_order') ?? 0) + 1;
        $banner->is_active = true;
        $banner->image_path = $request->file('gambar')->store('banners', 'public');
        $banner->save();

        return redirect('/admin?panel=banner')->with('success', 'Foto Beranda berhasil ditambahkan.');
    }

    public function update(Request $request, Banner $banner)
    {
        $this->validatePanel($request, 'banner', [
            'gambar' => ['nullable', 'image', 'max:8192'],
        ]);

        if ($request->hasFile('gambar')) {
            if ($banner->image_path) {
                Storage::disk('public')->delete($banner->image_path);
            }
            $banner->image_path = $request->file('gambar')->store('banners', 'public');
            $banner->save();
        }

        return redirect('/admin?panel=banner')->with('success', 'Foto Beranda berhasil diperbarui.');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image_path) {
            Storage::disk('public')->delete($banner->image_path);
        }
        $banner->delete();

        return redirect('/admin?panel=banner')->with('success', 'Foto Beranda berhasil dihapus.');
    }
}
