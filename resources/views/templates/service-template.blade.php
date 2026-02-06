@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="tp-breadcrumb-area">
        <div class="tp-container">
            <div class="tp-breadcrumb-wrapper">
                <img src="{{ asset('assets/imgs/hero/service-bg.jpg') }}" alt="Image">
                <div class="tp-breadcrumb-content">
                    <h1 class="tp-breadcrumb-title">{{ $title }}</h1>
                    <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> {{ $title }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="tp-service-details-area pt-140 pb-130">
        <div class="tp-service-details-header">
            <div class="container">
                <div class="title-wrap">
                    <h2 class="sub-title">Expert AI Service</h2>
                    <h3 class="sec-title-3 actova-word">
                        {{ $title }} <span>engineered for excellence</span>
                    </h3>
                </div>
                <div class="what-we-offer">What We Offer</div>
            </div>
        </div>

        <div class="tp-service-faq-wrapper">
            <div class="tp-service-faq-list">
                @foreach ($features as $index => $feature)
                    <div class="tp-service-faq-item">
                        <div class="container">
                            <h3 class="tp-service-faq-title">{{ $index + 1 }}. {{ $feature['title'] }}</h3>
                            <div class="tp-service-faq-body">
                                <p>{{ $feature['description'] }}</p>
                                <div class="body-content">
                                    <div class="left-content">
                                        <div class="icon"><img
                                                src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon">
                                        </div>
                                        <div class="tp-service-faq-counter">
                                            <h3 class="tp-counter-active number">{{ $feature['stat'] }}</h3>
                                            <p class="text">{{ $feature['stat_label'] }}</p>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <div><img
                                                src="{{ asset('assets/imgs/service/service-des-' . (($index % 4) + 1) . '.jpg') }}"
                                                alt=""></div>
                                        <div><img
                                                src="{{ asset('assets/imgs/service/service-des-' . (($index % 4) + 5) . '.jpg') }}"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="tp-service-details-footer">
            <div class="container">
                <div class="img-wrapper">
                    <img src="{{ asset('assets/imgs/service/service-details-3.jpg') }}" alt="">
                    <img src="{{ asset('assets/imgs/service/service-details-4.jpg') }}" alt="">
                </div>
                <h2 class="title">Use Cases</h2>
                <p>{{ $useCaseDescription }}</p>
            </div>
        </div>
    </section>

    <!-- How We Work -->
    <section class="tp-how-work-area plr-50">
        <div class="tp-how-work-inner">
            <div class="title-wrap">
                <h2 class="sub-title">How We Work</h2>
                <h3 class="sec-title-2 esf actova-word">
                    AI solutions, delivered with <span>speed and clarity.</span>
                </h3>
            </div>

            <div class="tp-how-work-steps">
                <div class="tp-how-work-step">
                    <div class="step">Step-01</div>
                    <h3 class="title">Discovery & Strategy</h3>
                    <p>We dive deep into your business goals, existing systems, and data readiness to define the valuable AI
                        use cases.</p>
                </div>
                <div class="tp-how-work-step">
                    <div class="step">Step-02</div>
                    <h3 class="title">Full System Build</h3>
                    <p>Once validated, we engineer the end-to-end solution — from data pipelines to model training and
                        front-end integration.</p>
                </div>
                <div class="tp-how-work-step">
                    <div class="step">Step-03</div>
                    <h3 class="title">Deployment & Handoff</h3>
                    <p>Post-launch, we stay involved to fine-tune, retrain, and improve performance as your data and
                        business evolve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="tp-faq-area-2 pt-140 pb-140">
        <div class="container">
            <div class="tp-faq-inner-2">
                <div class="title-wrap">
                    <p class="rating">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z"
                                fill="#A1FF75" />
                        </svg>
                        4.5 Average Rating
                    </p>
                    <h2 class="sec-title-2">Frequently Asked Questions</h2>
                </div>
                <div class="tp-faq-wrapper-2">
                    <div class="tp-faq-list">
                        @foreach ($faqs as $faq)
                            <div class="tp-faq-item style-2">
                                <h3 class="tp-faq-title">{{ $faq['question'] }}</h3>
                                <div class="tp-faq-body">
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
