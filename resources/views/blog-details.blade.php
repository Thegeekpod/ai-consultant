@extends('layouts.app')

@section('title', $blog->title . ' - AI Insights')

@section('content')

    <style>
        .blog-details-hero-new {
            background: #6345ED;
                padding: 130px 0px 50px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .blog-details-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
        }
        .hero-tag {
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.15em;
            margin-bottom: 25px;
            display: inline-block;
            text-transform: uppercase;
            background: rgba(255,255,255,0.1);
            padding: 5px 15px;
            border-radius: 5px;
        }
        .hero-title {
            font-size: 54px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 35px;
            color: #fff;
        }
        .hero-meta {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .hero-meta strong {
            color: #fff;
        }
        .hero-img-wrapper img {
            border-radius: 24px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.3);
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }
        .hero-img-wrapper img:hover {
            transform: scale(1.02);
        }
        .blog-content-layout {
            display: grid;
            grid-template-columns: 280px 1fr 280px;
            gap: 30px;
            margin-top: 40px;
            position: relative;
            z-index: 10;
        }
        .sidebar-widget {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.06);
            height: fit-content;
        }
        .widget-title {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #1a1a1a;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 15px;
        }
        .toc-list {
            list-style: none;
            padding: 0;
        }
        .toc-list li {
            margin-bottom: 18px;
        }
        .toc-list a {
            color: #555;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: block;
        }
        .toc-list a:hover {
            color: #6345ED;
            padding-left: 5px;
        }
        .summary-box {
            background: linear-gradient(135deg, #F8F7FF 0%, #F0EEFF 100%);
            border: 1px solid #E6E4FF;
            padding: 40px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
            box-shadow: 0 10px 25px rgba(99, 69, 237, 0.05);
        }
        .summary-content h4 {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 8px;
            color: #1a1a1a;
        }
        .summary-content p {
            color: #666;
            margin: 0;
            font-size: 16px;
        }
        .btn-summarize {
            background: #FF4D35;
            color: #fff !important;
            border: none;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(255, 77, 53, 0.3);
        }
        .btn-summarize:hover {
            background: #e63e26;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(255, 77, 53, 0.4);
        }
        .author-card {
            text-align: center;
        }
        .author-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 20px;
            object-fit: cover;
            border: 4px solid #f8f7ff;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .author-name {
            font-size: 24px;
            font-weight: 800;
            color: #1a1a1a;
        }
        .author-bio {
            font-size: 15px;
            color: #555;
            line-height: 1.7;
                text-align: left;
        }
        .author-social a {
            font-size: 20px;
            color: #6345ED;
            margin: 0 0px;
            transition: transform 0.3s ease;
            display: inline-block;
        }
        .author-social a:hover {
            transform: translateY(-3px);
        }
        .main-blog-content {
            background: #fff;
            padding: 60px;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.04);
            font-size: 18px;
            line-height: 1.8;
            color: #333;
        }
        .main-blog-content h1, .main-blog-content h2, .main-blog-content h3, .main-blog-content h4 {
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: 800;
        }
        /* Table Styles */
        .main-blog-content table {
            width: 100%;
            margin: 40px 0;
            border-collapse: separate;
            border-spacing: 0;
            border: 1px solid #eee;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        }
        .main-blog-content th {
            background: #f8f9fa;
            color: #111;
            font-weight: 800;
            text-align: left;
            padding: 15px 20px;
            border-bottom: 2px solid #eee;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.05em;
        }
        .main-blog-content td {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            color: #444;
            font-size: 16px;
            vertical-align: middle;
        }
        .main-blog-content tr:last-child td {
            border-bottom: none;
        }
        .main-blog-content tr:nth-child(even) {
            background: #fafafa;
        }
        .main-blog-content tr:hover {
            background: #f4f4f4;
        }
        .author-social{
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .tp-blog-details-area, .blog-details-container, .blog-content-layout, 
        main, body, html {
            overflow: visible !important;
        }
        .sidebar-widget {
            position: -webkit-sticky !important;
            position: sticky !important;
            top: 30px !important;
            z-index: 20;
        }
        .toc-sidebar, .author-sidebar {
            height: 100%;
        }
        @media (max-width: 1200px) {
            .blog-content-layout {
                grid-template-columns: 1fr 320px;
                gap: 40px;
            }
            .toc-sidebar {
                display: none;
            }
        }
        @media (max-width: 991px) {
            .blog-details-hero-new {
                padding: 100px 0 40px;
            }
            .blog-content-layout {
                grid-template-columns: 1fr;
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                gap: 30px;
            }
            .main-blog-content-wrapper {
                order: 1;
            }
            .toc-sidebar {
                order: 2;
                display: block !important; /* Show TOC at the end on mobile */
            }
            .author-sidebar {
                order: 3;
            }
            .toc-sidebar, .author-sidebar, .sidebar-widget {
                position: static !important;
                height: auto !important;
                width: 100% !important;
            }
            .author-sidebar {
                margin-bottom: 40px;
            }
            .hero-title {
                font-size: 32px;
                margin-bottom: 20px;
                line-height: 1.2;
            }
            .hero-meta {
                flex-wrap: wrap;
                font-size: 15px;
                gap: 10px;
            }
            .main-blog-content {
                padding: 30px 20px;
                border-radius: 15px;
            }
            .author-bio {
                text-align: center;
            }
            .author-social {
                justify-content: center;
            }
            .main-blog-content table {
                display: block;
                width: 100% !important;
                overflow-x: auto; /* Scroll inside the table only */
                -webkit-overflow-scrolling: touch;
                border: 1px solid #eee;
            }
            .main-blog-content-wrapper {
                overflow-x: visible; /* Prevent the whole page from scrolling */
            }
            .main-blog-content th, .main-blog-content td {
                min-width: 150px;
                white-space: normal;
                word-wrap: break-word;
            }
        }
        @media(max-width:768px){
            .blog-details-container{
                padding:0px;
            }
        }
    </style>

    <section class="blog-details-hero-new">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="hero-tag">Blog</span>
                    <h1 class="hero-title">{{ $blog->title }}</h1>
                    <div class="hero-meta">
                        by <a href="{{ route('author-details', 'Avick-Kr-Dey') }}"><strong>Dr. Avick Kr Dey</strong></a> • Published: {{ $blog->created_at->format('M d, Y') }}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-img-wrapper mt-20">
                        @if ($blog->image)
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        @else
                            <img src="{{ asset('assets/imgs/hero/breadcrumb.jpg') }}" alt="Default">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tp-blog-details-area pb-100">
        <div class="blog-details-container">
            <div class="blog-content-layout">
                <!-- Left Sidebar: TOC -->
                <aside class="toc-sidebar">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Contents</h3>
                        <ul class="toc-list" id="dynamic-toc">
                            <!-- Populated dynamically via JS -->
                        </ul>
                    </div>
                </aside>

                <!-- Main Content -->
                <main class="main-blog-content-wrapper">
                    {{-- <div class="summary-box">
                        <div class="summary-content">
                            <h4>Want a Quick Summary?</h4>
                            <p>Summarize this article instantly with AI.</p>
                        </div>
                        <button class="btn-summarize">Summarize with AI</button>
                    </div> --}}

                    <div class="main-blog-content" id="blog-article-content">
                        {!! $blog->description !!}
                    </div>

                    <div class="tp-blog-details-pagination pt-50">
                        @foreach ($latestPosts as $index => $lpost)
                            @if ($index == 0)
                                <a href="{{ route('blog-details', $lpost->slug) }}" class="prev-post">
                                    <h3 class="title">Next: {{ $lpost->title }}</h3>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </main>

                <!-- Right Sidebar: Author -->
                <aside class="author-sidebar">
                    <div class="sidebar-widget author-card">
                        <a href="{{ route('author-details', 'Avick-Kr-Dey') }}">
                            <img src="{{ asset('assets/imgs/avick-kr-dey.webp') }}" alt="Avick-Kr-Dey" class="author-img">
                        </a>
                         <div class="author-social mb-10">
                             <a href="{{ route('author-details', 'Avick-Kr-Dey') }}">
                                <h3 class="author-name">Dr. Avick Kr Dey</h3>
                             </a>

                            <a href="https://www.linkedin.com/in/iavick/" target="_blank" class="mr-10"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                        <p class="author-bio">
                            Avick Kr Dey is an AI enthusiast with over 4+ of experience in AI development and applied AI solutions. He helps enterprises leverage artificial intelligence to scale their digital presence and automate workflows. Connect with him to stay updated on the latest trends in AI and technology.
                        </p>
                       
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.getElementById('blog-article-content');
            const toc = document.getElementById('dynamic-toc');
            
            if (!content || !toc) return;

            const headings = content.querySelectorAll('h1, h2, h3, h4');
            
            if (headings.length === 0) {
                const parentWidget = toc.closest('.toc-sidebar');
                if (parentWidget) parentWidget.style.display = 'none';
                return;
            }

            headings.forEach((heading, index) => {
                // Generate a unique ID if it doesn't exist
                if (!heading.id) {
                    heading.id = 'heading-' + index + '-' + heading.textContent.trim().toLowerCase().replace(/[^a-z0-9]+/g, '-');
                }

                // Create TOC item
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = '#' + heading.id;
                a.textContent = heading.textContent;
                
                // Indent based on heading level
                const level = parseInt(heading.tagName.substring(1));
                if (level > 2) {
                    a.style.paddingLeft = (level - 2) * 15 + 'px';
                    a.style.fontSize = '14px';
                }

                a.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        const headerOffset = 100;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                        
                        // Update active state in TOC
                        document.querySelectorAll('#dynamic-toc a').forEach(link => link.style.color = '#555');
                        this.style.color = '#6345ED';
                    }
                });

                li.appendChild(a);
                toc.appendChild(li);
            });
        });
    </script>

@endsection
