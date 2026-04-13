@extends('layouts.home')

@section('title', '404 - Page Not Found')

@section('content')
    <!-- Error area start -->
    <section class="tp-error-area pt-150 pb-150 position-relative">
        <div class="tp-hero-bg-color"
            style="position: absolute; top: 10%; left: 0; width: 100%; height: 100%; z-index: -1; opacity: 0.3;">
            <svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_f_4841_5510)">
                    <path
                        d="M518.5 591.13L0 915.63H1920L1699.5 808.63L1444 591.13H1149C928.2 270.33 636.667 457.464 518.5 591.13Z"
                        fill="#A1FF75" />
                </g>
                <defs>
                    <filter id="filter0_f_4841_5510" x="-414" y="0" width="2748" height="1329.63"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="207" result="effect1_foregroundBlur_4841_5510" />
                    </filter>
                </defs>
            </svg>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tp-error-content text-center">
                        <div class="tp-error-num">
                            <h2
                                style="font-size: clamp(120px, 15vw, 200px); font-weight: 900; line-height: 1; margin-bottom: 20px; color: #020202; letter-spacing: -5px;">
                                404</h2>
                        </div>
                        <h3 class="tp-error-title"
                            style="font-size: clamp(24px, 5vw, 42px); font-weight: 700; margin-bottom: 20px; color: #020202;">
                            Wait! This Path is Uncharted.</h3>
                        <p
                            style="font-size: 18px; margin-bottom: 40px; color: #555; max-width: 600px; margin-left: auto; margin-right: auto;">
                            It seems our AI couldn't find the page you're looking for. Let's get you back on track.</p>
                        <div class="tp-error-btn">
                            <a href="{{ url('/') }}" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Return Home</span>
                                    <span class="text-two">Return Home</span>
                                </span>
                                <span class="btn-icon">
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Error area end -->
@endsection
