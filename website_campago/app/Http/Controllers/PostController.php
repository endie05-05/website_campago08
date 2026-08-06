<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\GeneratesUniqueSlug;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use GeneratesUniqueSlug;

    public function update(Request $request)
    {
        $validated = $request->validate([
            'berita' => ['required', 'array', 'min:1'],
            'berita.*.id' => ['nullable', 'integer', 'exists:posts,id'],
            'berita.*.judul' => ['required', 'string', 'max:255'],
            'berita.*.kategori_id' => ['nullable', 'integer', 'exists:post_categories,id'],
            'berita.*.jenis' => ['required', 'in:utama,biasa'],
            'berita.*.tanggal' => ['required', 'date'],
            'berita.*.deskripsi' => ['nullable', 'string'],
            'berita.*.gambar' => ['nullable', 'image', 'max:2048'],
            'removed_ids' => ['nullable', 'array'],
            'removed_ids.*' => ['integer', 'exists:posts,id'],
        ]);

        DB::transaction(function () use ($validated, $request) {
            foreach ($validated['removed_ids'] ?? [] as $removedId) {
                $post = Post::find($removedId);
                if ($post) {
                    if ($post->featured_image_path) {
                        Storage::disk('public')->delete($post->featured_image_path);
                    }
                    $post->delete();
                }
            }

            foreach ($validated['berita'] as $index => $item) {
                $post = ! empty($item['id'])
                    ? Post::find($item['id'])
                    : new Post();

                if (! $post) {
                    $post = new Post();
                }

                $post->title = $item['judul'];
                $post->category_id = $item['kategori_id'] ?? null;
                $post->is_featured = $item['jenis'] === 'utama';
                $post->published_at = $item['tanggal'];
                $post->excerpt = $item['deskripsi'] ?? null;
                $post->content = $item['deskripsi'] ?? '';
                $post->status = 'published';

                if (! $post->exists) {
                    $post->author_id = $request->user()->id;
                }

                if (! $post->exists || $post->slug === null) {
                    $post->slug = $this->uniqueSlug(Post::class, $item['judul'], $post->id);
                }

                $gambarInput = $request->file("berita.$index.gambar");
                if ($gambarInput) {
                    if ($post->featured_image_path) {
                        Storage::disk('public')->delete($post->featured_image_path);
                    }
                    $post->featured_image_path = $gambarInput->store('posts', 'public');
                }

                $post->save();
            }
        });

        return redirect('/admin?panel=berita')->with('success', 'Berita & Kegiatan berhasil disimpan.');
    }
}
