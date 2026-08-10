<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    use ValidatesForPanel;

    private function textRules(): array
    {
        return [
            'title' => ['nullable', 'string', 'max:200'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_url' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function store(Request $request)
    {
        $validated = $this->validatePanel($request, 'banner', $this->textRules() + [
            'gambar' => ['required', 'image', 'max:8192'],
        ]);

        $banner = new Banner();
        $banner->sort_order = (Banner::max('sort_order') ?? 0) + 1;
        $banner->is_active = true;
        $banner->title = $validated['title'] ?? null;
        $banner->subtitle = $validated['subtitle'] ?? null;
        $banner->button_text = $validated['button_text'] ?? null;
        $banner->button_url = $validated['button_url'] ?? null;
        $banner->image_path = $request->file('gambar')->store('banners', 'public');
        $banner->save();

        return redirect('/admin?panel=banner')->with('success', 'Foto Beranda berhasil ditambahkan.');
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $this->validatePanel($request, 'banner', $this->textRules() + [
            'gambar' => ['nullable', 'image', 'max:8192'],
        ]);

        $banner->title = $validated['title'] ?? null;
        $banner->subtitle = $validated['subtitle'] ?? null;
        $banner->button_text = $validated['button_text'] ?? null;
        $banner->button_url = $validated['button_url'] ?? null;

        if ($request->hasFile('gambar')) {
            if ($banner->image_path) {
                Storage::disk('public')->delete($banner->image_path);
            }
            $banner->image_path = $request->file('gambar')->store('banners', 'public');
        }

        $banner->save();

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
