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

    <!-- Industry Overview -->
    <section class="tp-capability2-area">
        <div class="tp-container-1715">
            <div class="tp-capability-titlebox">
                <h2 class="sec-title-2">{{ $title }}</h2>
                <p>{{ $industryDescription }}</p>
            </div>

            <div class="tp-capability2-grid">
                @foreach ($capabilities as $index => $capability)
                    <div class="card-wrap wrap-{{ ($index % 3) + 1 }}">
                        <div class="tp-capability2-card card-{{ $index + 1 }}">
                            @if ($index == 0)
                                <div class="integrate-wrap">
                                    <div class="integrate-icon"><img src="{{ asset('assets/imgs/capability/icon-5.png') }}"
                                            alt="Icon"></div>
                                    <div class="switch-icon"><img src="{{ asset('assets/imgs/capability/icon-6.png') }}"
                                            alt="Icon"></div>
                                    <div class="integrate-icon"><img src="{{ asset('assets/imgs/capability/icon-4.png') }}"
                                            alt="Icon"></div>
                                </div>
                            @endif
                            <h3 class="title">{{ $capability['title'] }}</h3>
                            <p>{{ $capability['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="tp-capability2-grid-2">
                <div class="tp-capability2-card card-5">
                    <div class="content-wrap">
                        <div class="content-item">
                            <span class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.54998 16.9854H13.4535C15.3961 16.9854 16.976 15.4052 16.976 13.4629V4.55877C16.976 2.59645 15.3958 1 13.4535 1H4.54998C2.58766 1 0.991211 2.59645 0.991211 4.55877V13.4629C0.991211 15.4052 2.58766 16.9854 4.54998 16.9854ZM2.22209 4.55877C2.22209 3.25342 3.24464 2.23088 4.54998 2.23088H13.4535C14.717 2.23088 15.7451 3.27527 15.7451 4.55877V13.4629C15.7451 14.7264 14.717 15.7545 13.4535 15.7545H4.54998C3.26648 15.7545 2.22209 14.7264 2.22209 13.4629V4.55877Z"
                                        fill="#020202" />
                                </svg>
                            </span>
                            <p>Industry-Specific AI</p>
                        </div>
                        <div class="ai-item">
                            <p>ai</p>
                        </div>
                        <div class="content-item">
                            <span class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.64062 2.67188V4.47187C3.26531 4.84453 2.25 6.10172 2.25 7.59375V14.625C2.25 16.4081 3.70125 17.8594 5.48438 17.8594H12.5156C14.2987 17.8594 15.75 16.4081 15.75 14.625V7.59375C15.75 6.10172 14.7347 4.84453 13.3594 4.47187V2.67188C13.3594 1.27547 12.2231 0.140625 10.8281 0.140625H7.17188C5.77688 0.140625 4.64062 1.27547 4.64062 2.67188Z"
                                        fill="#020202" />
                                </svg>
                            </span>
                            <p>Scalable Solutions</p>
                        </div>
                    </div>
                    <h3 class="title">Tailored for Your Industry</h3>
                    <p>Domain-specific AI models that understand your sector's unique challenges.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Text -->
    <div class="tp--marquee-text-style-2 pb-110 pt-130">
        <div class="text-wrapper">
            <p>Transform Your Industry with AI! <a href="{{ route('contact') }}">Get Started Now
                    <span class="icon">
                        <svg width="13" height="13" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.18948 4.93104C8.32432 4.93104 7.62052 5.63484 7.62052 6.5C7.62052 7.36516 8.32432 8.06896 9.18948 8.06896C10.0546 8.06896 10.7584 7.36516 10.7584 6.5C10.7584 5.63484 10.0546 4.93104 9.18948 4.93104Z" />
                        </svg>
                    </span>
                </a></p>
        </div>

        <div class="tp--marquee-text-area">
            <div class="tp--marquee-text-inner inner-2" aria-hidden="true">
                @foreach ($marqueeTags as $tag)
                    <div class="tp--marquee-text-2">{{ $tag }}</div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="tp-testimonial-area-4 pt-120 pb-130">
        <div class="container">
            <div class="tp-testimonial-titlebox">
                <p>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z"
                            fill="#A1FF75" />
                    </svg>
                    4.5 Average Rating
                </p>
                <h2 class="sec-title-2">Trusted by Industry Leaders</h2>
            </div>
        </div>
        </section>
    @endsection
