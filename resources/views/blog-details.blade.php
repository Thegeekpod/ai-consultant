@extends('layouts.app')

@section('title', $blog->title . ' - AI Insights')

@section('content')

    <section class="tp-breadcrumb-area blog-details-hero">
        <div class="tp-container">
            <div class="tp-breadcrumb-wrapper">
                @if ($blog->image)
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                @else
                    <img src="{{ asset('assets/imgs/hero/breadcrumb.jpg') }}" alt="Image">
                @endif
                <div class="tp-breadcrumb-content">
                    <h1 class="tp-breadcrumb-title"> Blog Details Page </h1>
                    <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> <a
                            href="{{ route('blog') }}">Blog</a> <span></span> Details </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->


    <!-- Blog details area start -->
    <section class="tp-blog-details-area pt-140 pb-140">
        <div class="tp-container-1070">
            <div class="tp-blog-details-header">
                <h2 class="sub-title-2">{{ $blog->category->name ?? 'Uncategorized' }}</h2>
                <h2 class="sec-title-3">{{ $blog->title }}</h2>
                <ul class="tp-blog-details-meta">
                    <li><a href="#">
                            <img src="{{ asset('assets/imgs/blog/author.png') }}" alt="Author">
                            Admin
                        </a></li>
                    <li>{{ $blog->created_at->format('d M, Y') }}</li>
                    <li>{{ ceil(str_word_count(strip_tags($blog->description)) / 200) }} min read</li>
                </ul>
            </div>
        </div>
        <div class="separator-bg"></div>
        <div class="tp-container-1070">
            <div class="tp-blog-details">
                <div class="content-wrapper">
                    {!! $blog->description !!}
                </div>
            </div>
        </div>
        <div class="separator-bg separator-2"></div>
        <div class="content-wrapper">
            <div class="tp-blog-details-pagination pb-130">
                @foreach ($latestPosts as $index => $lpost)
                    @if ($index == 0)
                        <a href="{{ route('blog-details', $lpost->slug) }}" class="prev-post">
                            <div class="icon">
                                <svg width="22" height="16" viewBox="0 0 22 16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.324184 10.6784L4.72403 15.0783C4.93148 15.2786 5.20933 15.3895 5.49774 15.387C5.78614 15.3845 6.06203 15.2688 6.26597 15.0649C6.46991 14.8609 6.58559 14.585 6.5881 14.2966C6.59061 14.0082 6.47974 13.7304 6.27937 13.5229L3.75606 10.9996H17.6002C18.7671 10.9996 19.8862 10.536 20.7113 9.71092C21.5364 8.88579 22 7.76667 22 6.59976V1.09996C22 0.808233 21.8841 0.528454 21.6778 0.322171C21.4715 0.115889 21.1918 0 20.9 0C20.6083 0 20.3285 0.115889 20.1223 0.322171C19.916 0.528454 19.8001 0.808233 19.8001 1.09996V6.59976C19.8001 7.18322 19.5683 7.74278 19.1557 8.15534C18.7432 8.56791 18.1836 8.79968 17.6002 8.79968H3.75606L6.27827 6.27747C6.47864 6.07002 6.58951 5.79217 6.587 5.50376C6.58449 5.21535 6.46881 4.93947 6.26487 4.73553C6.06093 4.53159 5.78504 4.41591 5.49664 4.4134C5.20823 4.41089 4.93038 4.52176 4.72292 4.72213L0.323084 9.12197C0.220648 9.22415 0.139378 9.34553 0.0839252 9.47916C0.0284729 9.6128 -7.05719e-05 9.75606 -7.05719e-05 9.90074C-7.05719e-05 10.0454 0.0284729 10.1887 0.0839252 10.3223C0.139378 10.456 0.220648 10.5773 0.323084 10.6795L0.324184 10.6784Z" />
                                </svg>
                            </div>
                            <h3 class="title">{{ $lpost->title }}</h3>
                        </a>
                    @else
                        <a href="{{ route('blog-details', $lpost->slug) }}" class="next-post">
                            <h3 class="title">{{ $lpost->title }}</h3>
                            <div class="icon">
                                <svg width="22" height="16" viewBox="0 0 22 16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.6758 10.6784L17.276 15.0783C17.0685 15.2786 16.7907 15.3895 16.5023 15.387C16.2139 15.3845 15.938 15.2688 15.734 15.0649C15.5301 14.8609 15.4144 14.585 15.4119 14.2966C15.4094 14.0082 15.5203 13.7304 15.7206 13.5229L18.2439 10.9996H4.39984C3.23293 10.9996 2.11381 10.536 1.28868 9.71092C0.463553 8.88579 0 7.76667 0 6.59976V1.09996C0 0.808233 0.115888 0.528454 0.322171 0.322171C0.528453 0.115889 0.808233 0 1.09996 0C1.39169 0 1.67147 0.115889 1.87775 0.322171C2.08403 0.528454 2.19992 0.808233 2.19992 1.09996V6.59976C2.19992 7.18322 2.4317 7.74278 2.84426 8.15534C3.25683 8.56791 3.81639 8.79968 4.39984 8.79968H18.2439L15.7217 6.27747C15.5214 6.07002 15.4105 5.79217 15.413 5.50376C15.4155 5.21535 15.5312 4.93947 15.7351 4.73553C15.9391 4.53159 16.215 4.41591 16.5034 4.4134C16.7918 4.41089 17.0696 4.52176 17.2771 4.72213L21.6769 9.12197C21.7794 9.22415 21.8606 9.34553 21.9161 9.47916C21.9715 9.6128 22.0001 9.75606 22.0001 9.90074C22.0001 10.0454 21.9715 10.1887 21.9161 10.3223C21.8606 10.456 21.7794 10.5773 21.6769 10.6795L21.6758 10.6784Z" />
                                </svg>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
    <!-- Blog details area end -->

@endsection
