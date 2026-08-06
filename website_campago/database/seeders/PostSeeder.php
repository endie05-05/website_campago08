<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $authorId = User::first()?->id;
        $pemerintahanId = PostCategory::where('slug', 'pemerintahan')->value('id');

        // Sesuai berita yang sudah tampil di beranda. Foto belum diisi (featured_image_path
        // null) -- akan diunggah menyusul lewat dashboard admin.
        $posts = [
            [
                'title' => 'Gotong Royong Bersama Membersihkan Saluran Irigasi di Korong Pasa',
                'excerpt' => 'Masyarakat Nagari Campago antusias mengikuti kegiatan gotong royong rutin yang diadakan setiap akhir bulan...',
                'category_id' => $pemerintahanId,
                'is_featured' => true,
                'published_at' => '2026-07-24',
            ],
            [
                'title' => 'Pelatihan Pembuatan Kerajinan Tangan untuk Ibu-ibu PKK',
                'excerpt' => null,
                'category_id' => null,
                'is_featured' => false,
                'published_at' => '2026-07-20',
            ],
            [
                'title' => 'Penyaluran Bantuan Langsung Tunai (BLT) Tahap III Berjalan Lancar',
                'excerpt' => null,
                'category_id' => null,
                'is_featured' => false,
                'published_at' => '2026-07-15',
            ],
            [
                'title' => 'Persiapan Menyambut Hari Kemerdekaan RI ke-81 di Tingkat Nagari',
                'excerpt' => null,
                'category_id' => null,
                'is_featured' => false,
                'published_at' => '2026-07-10',
            ],
        ];

        Post::withTrashed()->forceDelete();

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'excerpt' => $post['excerpt'],
                'content' => $post['excerpt'] ?? $post['title'],
                'category_id' => $post['category_id'],
                'author_id' => $authorId,
                'is_featured' => $post['is_featured'],
                'published_at' => $post['published_at'],
                'status' => 'published',
            ]);
        }
    }
}
