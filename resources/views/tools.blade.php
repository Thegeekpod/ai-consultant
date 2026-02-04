@extends('layouts.app')

@section('content')
    <!-- Hero area start -->
    <section class="tp-hero4-area pt-150 pb-80 tp-tools-hero-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 text-center">
                    <div class="tp-hero4-content">
                        <h1 class="title mb-30 tp-tools-hero-title">AI Intelligence <span>Tools</span>
                        </h1>
                        <p class="text mb-40 tp-tools-hero-text">
                            Leverage our powerful AI tools to assess your business maturity and uncover hidden automation
                            opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-hero-bg-color">
            <svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_f_4841_5510)">
                    <path
                        d="M518.5 591.13L0 915.63H1920L1699.5 808.63L1444 591.13H1149C928.2 270.33 636.667 457.464 518.5 591.13Z"
                        fill="#A1FF75" fill-opacity="0.3" />
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
    </section>
    <!-- Hero area end -->

    <!-- Tools Index Area Start -->
    <section class="tp-tools-area pb-120 pt-60">
        <div class="container">
            <div class="row">

                <!-- Tool 1: AI Readiness Assessment -->
                <div class="col-lg-6 mb-30">
                    <div class="tp-tool-card">
                        <div class="tp-tool-bg-shape readiness">
                        </div>

                        <div class="tp-tool-content">
                            <div class="tp-tool-icon-wrapper small readiness">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#007bff"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <h3 class="mb-20">AI Readiness Assessment</h3>
                            <p class="mb-30 tp-tool-desc">Score your potential clients on their
                                AI maturity and generate a custom report explaining where they stand.</p>

                            <a href="{{ route('tools.readiness') }}" class="tp-btn-two tp-btn-anim">
                                <div class="tp-btn-text">Launch Tool</div>
                                <span>
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tool 2: AI Audit Tool -->
                <div class="col-lg-6 mb-30">
                    <div class="tp-tool-card">
                        <div class="tp-tool-bg-shape audit">
                        </div>

                        <div class="tp-tool-content">
                            <div class="tp-tool-icon-wrapper small audit">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#ffa940"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                            <h3 class="mb-20">AI Audit Tool</h3>
                            <p class="mb-30 tp-tool-desc">Automated analysis of a company's
                                existing tech stack to discover high-value AI opportunities.</p>

                            <a href="{{ route('tools.audit') }}" class="tp-btn-two tp-btn-anim">
                                <div class="tp-btn-text">Launch Tool</div>
                                <span>
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
