<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->title }} - Nagari Campago</title>
    <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post->content ?: ($post->excerpt ?? '')), 160) }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:600,700|inter:400,500,600|manrope:400,500,600,700,800" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <style>
        body.article-body {
            padding: 3rem 1.5rem 6rem;
        }

        .article-shell {
            width: 100%;
            max-width: 760px;
            margin: 0 auto;
        }

        .article-back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-text-muted);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            transition: color 0.25s ease;
        }
        .article-back-link:hover { color: var(--color-green-dark); }

        .article-card {
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(47, 93, 80, 0.12);
            border-radius: 16px;
            box-shadow: 0 20px 45px rgba(31, 64, 55, 0.08);
            margin-bottom: 1.5rem;
        }

        .article-cover {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            display: block;
            background-color: var(--color-cream-alt);
        }

        .article-body-pad {
            padding: 2rem 2rem 2.25rem;
        }

        .article-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
            color: var(--color-text-muted);
            margin-bottom: 1rem;
        }
        .article-meta-cat {
            color: var(--color-green-secondary);
            font-weight: 600;
        }

        .article-title {
            font-family: var(--font-heading);
            font-size: clamp(1.6rem, 3.5vw, 2.2rem);
            color: var(--color-green-dark);
            margin-bottom: 1.25rem;
            line-height: 1.3;
        }

        .article-content {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--color-text-main);
            white-space: pre-line;
        }

        .article-related-title {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            color: var(--color-green-dark);
            margin-bottom: 1rem;
        }

        .article-related-item {
            display: grid;
            grid-template-columns: 90px 1fr;
            gap: 1rem;
            align-items: start;
            padding: 0.75rem;
            border-radius: 12px;
            transition: background-color 0.3s ease;
        }
        .article-related-item:hover { background-color: var(--color-cream-alt); }

        .article-related-img {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 8px;
            display: block;
            background-color: var(--color-cream-alt);
        }

        .article-related-item-title {
            font-size: 0.95rem;
            color: var(--color-green-dark);
            line-height: 1.35;
            margin-bottom: 0.25rem;
        }

        .article-related-item-date {
            font-size: 0.78rem;
            color: var(--color-text-muted);
        }
    </style>
</head>
<body class="antialiased article-body">

    <div class="article-shell">
        <a href="/#berita" class="article-back-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali ke Beranda
        </a>

        <div class="article-card">
            @if ($post->featured_image_path)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}" class="article-cover">
            @endif
            <div class="article-body-pad">
                <div class="article-meta">
                    @if ($post->category)
                        <span class="article-meta-cat">{{ $post->category->name }}</span>
                    @endif
                    <span>{{ $post->published_at?->locale('id')->translatedFormat('d F Y') }}</span>
                </div>
                <h1 class="article-title">{{ $post->title }}</h1>
                <div class="article-content">{{ $post->content }}</div>
            </div>
        </div>

        @if ($latestPosts->isNotEmpty())
        <div class="article-card article-body-pad">
            <h2 class="article-related-title">Berita Lainnya</h2>
            @foreach ($latestPosts as $item)
            <a href="{{ route('berita.show', $item) }}" class="article-related-item">
                @if ($item->featured_image_path)
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($item->featured_image_path) }}" alt="{{ $item->title }}" class="article-related-img">
                @else
                    <div class="article-related-img"></div>
                @endif
                <div>
                    <div class="article-related-item-title">{{ $item->title }}</div>
                    <div class="article-related-item-date">{{ $item->published_at?->locale('id')->translatedFormat('d F Y') }}</div>
                </div>
            </a>
            @endforeach
        </div>
        @endif
    </div>
</body>
</html>
