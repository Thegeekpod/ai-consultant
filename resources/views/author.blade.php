@extends('layouts.app')

@section('title', $authorName . ' - AI Consultant Profile')

@section('content')

    <style>
        .author-hero-section {
            padding: 120px 0 80px;
            background: #fff;
        }
        .author-card-wrapper {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 80px;
            align-items: flex-start;
        }
        .author-image-box {
            background: #1a1a1a; /* Using dark card for image like reference, but theme is white */
            padding: 30px;
            border-radius: 30px;
            text-align: center;
            box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        }
        .author-image-box img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            margin-bottom: 25px;
            background: #fff;
            object-fit: cover;
        }
        .author-social-links {
            display: flex;
            justify-content: center;
            gap: 12px;
        }
        .author-social-links a {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .author-social-links a:hover {
            background: #6345ED;
            color: #fff;
            transform: translateY(-3px);
        }
        .author-name-title {
            font-size: 64px;
            font-weight: 900;
            margin-bottom: 15px;
            color: #111;
            letter-spacing: -0.02em;
        }
        .author-designation {
            font-size: 24px;
            font-weight: 700;
            color: #FF1B6B; /* Magenta color from reference */
            margin-bottom: 35px;
            letter-spacing: 0.02em;
        }
        .author-biography {
            font-size: 19px;
            line-height: 1.8;
            color: #444;
            max-width: 900px;
        }
        .articles-section {
            padding: 80px 0 140px;
            background: #fff;
        }
        .section-title-wrapper {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
        }
        .section-title-wrapper::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background: #eee;
            z-index: 1;
        }
        .section-title-wrapper h2 {
            display: inline-block;
            background: #fff;
            padding: 0 40px;
            position: relative;
            z-index: 2;
            font-size: 42px;
            font-weight: 900;
            color: #111;
        }
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }
        .article-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid #f0f0f0;
        }
        .article-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.08);
            border-color: #eee;
        }
        .article-thumb {
            height: 260px;
            overflow: hidden;
            border-radius: 24px;
            margin: 15px;
        }
        .article-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .article-card:hover .article-thumb img {
            transform: scale(1.08);
        }
        .article-content {
            padding: 10px 30px 40px;
        }
        .article-date {
            font-size: 13px;
            font-weight: 700;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-bottom: 15px;
            display: block;
        }
        .article-title {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.35;
        }
        .article-title a {
            color: #111;
            text-decoration: none;
            transition: 0.3s;
        }
        .article-title a:hover {
            color: #6345ED;
        }
        .article-excerpt {
            color: #666;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 30px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .read-article-btn {
            font-size: 13px;
            font-weight: 800;
            color: #FF1B6B;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.1em;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: gap 0.3s ease;
        }
        .read-article-btn:hover {
            gap: 15px;
            color: #e91e63;
        }

        @media (max-width: 1200px) {
            .articles-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .author-card-wrapper {
                gap: 40px;
            }
            .author-name-title {
                font-size: 48px;
            }
        }
        @media (max-width: 991px) {
            .author-card-wrapper {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .author-image-box {
                max-width: 400px;
                margin: 0 auto;
            }
            .author-biography {
                margin: 0 auto;
            }
            .author-social-links {
                justify-content: center;
            }
        }
        @media (max-width: 768px) {
            .articles-grid {
                grid-template-columns: 1fr;
            }
            .section-title-wrapper h2 {
                font-size: 28px;
            }
            .author-name-title {
                font-size: 36px;
            }
        }
    </style>

    <div class="author-hero-section">
        <div class="container">
            <div class="author-card-wrapper">
                <div class="author-image-box">
                    <img src="{{ asset('assets/imgs/avick-kr-dey.webp') }}" alt="{{ $authorName }}">
                    <div class="author-social-links">
                        <a href="https://www.linkedin.com/in/iavick/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="author-info">
                    <h1 class="author-name-title">{{ $authorName }}</h1>
                    <div class="author-designation">AI Consulting & Research Expert (PhD)</div>
                    <p class="author-biography">
                        {{ $authorName }} is a digital strategy expert with over 10 years of experience in AI-driven marketing and content automation. He focuses on helping enterprises scale their digital presence through innovative technologies. Connect with him to stay updated on the latest trends in the tech world.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="articles-section">
        <div class="container">
            <div class="section-title-wrapper">
                <h2>Latest Articles by {{ $authorName }}</h2>
            </div>

            <div class="articles-grid">
                @forelse($blogs as $blog)
                    <article class="article-card">
                        <div class="article-thumb">
                            <a href="{{ route('blog-details', $blog->slug) }}">
                                @if($blog->image)
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                @else
                                    <img src="{{ asset('assets/imgs/blog/blog-post-1.jpg') }}" alt="Default Thumbnail">
                                @endif
                            </a>
                        </div>
                        <div class="article-content">
                            <span class="article-date">{{ $blog->created_at->format('d M Y') }}</span>
                            <h3 class="article-title">
                                <a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <p class="article-excerpt">{{ Str::limit(strip_tags($blog->description), 140) }}</p>
                            <a href="{{ route('blog-details', $blog->slug) }}" class="read-article-btn">
                                READ ARTICLE <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-12 text-center">
                        <p>No articles found for this author.</p>
                    </div>
                @endforelse
            </div>

            @if($blogs->hasPages())
                <div class="tp-blog-pagination-wrapper mt-80 text-center">
                    <div class="tp-blog-pagination">
                        <ul>
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li><a class="{{ $i == $blogs->currentPage() ? 'active' : '' }}" href="{{ $blogs->url($i) }}">{{ sprintf("%02d", $i) }}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </section>

@endsection
