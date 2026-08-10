<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Http\Controllers\Concerns\ValidatesForPanel;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use GeneratesUniqueSlug;
    use ValidatesForPanel;

    private function rules(): array
    {
        return [
            'judul' => ['required', 'string', 'max:255'],
            'kategori_id' => ['nullable', 'integer', 'exists:post_categories,id'],
            'jenis' => ['required', 'in:utama,biasa'],
            'tanggal' => ['required', 'date'],
            'deskripsi' => ['nullable', 'string'],
            'gambar' => ['nullable', 'image', 'max:8192'],
        ];
    }

    public function store(Request $request)
    {
        $validated = $this->validatePanel($request, 'berita', $this->rules());

        $post = new Post();
        $post->title = $validated['judul'];
        $post->category_id = $validated['kategori_id'] ?? null;
        $post->is_featured = $validated['jenis'] === 'utama';
        $post->published_at = $validated['tanggal'];
        $post->excerpt = $validated['deskripsi'] ?? null;
        $post->content = $validated['deskripsi'] ?? '';
        $post->status = 'published';
        $post->author_id = $request->user()->id;
        $post->slug = $this->uniqueSlug(Post::class, $validated['judul'], null);

        if ($request->hasFile('gambar')) {
            $post->featured_image_path = $request->file('gambar')->store('posts', 'public');
        }

        $post->save();

        return redirect('/admin?panel=berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function update(Request $request, Post $post)
    {
        $validated = $this->validatePanel($request, 'berita', $this->rules());

        $post->title = $validated['judul'];
        $post->category_id = $validated['kategori_id'] ?? null;
        $post->is_featured = $validated['jenis'] === 'utama';
        $post->published_at = $validated['tanggal'];
        $post->excerpt = $validated['deskripsi'] ?? null;
        $post->content = $validated['deskripsi'] ?? '';

        if ($request->hasFile('gambar')) {
            if ($post->featured_image_path) {
                Storage::disk('public')->delete($post->featured_image_path);
            }
            $post->featured_image_path = $request->file('gambar')->store('posts', 'public');
        }

        $post->save();

        return redirect('/admin?panel=berita')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Post $post)
    {
        if ($post->featured_image_path) {
            Storage::disk('public')->delete($post->featured_image_path);
        }
        $post->delete();

        return redirect('/admin?panel=berita')->with('success', 'Berita berhasil dihapus.');
    }

    public function show(Post $post)
    {
        abort_unless($post->status === 'published', 404);

        $post->loadMissing('category');

        $latestPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->orderByDesc('published_at')
            ->take(3)
            ->get();

        return view('berita.show', compact('post', 'latestPosts'));
    }
}
