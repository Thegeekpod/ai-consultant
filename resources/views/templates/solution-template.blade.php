@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="tp-breadcrumb-area">
        <div class="tp-container">
            <div class="tp-breadcrumb-wrapper">
                <img src="{{ asset('assets/imgs/hero/project-details.jpg') }}" alt="Image">
                <div class="tp-breadcrumb-content">
                    <h1 class="tp-breadcrumb-title">{{ $title }}</h1>
                    <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> {{ $title }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Overview -->
    <section class="tp-project-overview-area pb-140 pt-140">
        <div class="container">
            <div class="tp-project-overview-header">
                <h2 class="sub-title-2">Solution Overview</h2>
                <h2 class="sec-title-3">{{ $title }} <span>transforms your business operations</span></h2>
                <p>{{ $description }}</p>
            </div>
        </div>

        <div class="tp-project-overview-meta">
            <div class="container">
                <div class="meta-list">
                    @foreach ($metrics as $metric)
                        <div class="meta-item">
                            <div class="meta-icon">
                                <img src="{{ asset('assets/imgs/project/icon-' . $loop->iteration . '.png') }}"
                                    alt="Icon">
                            </div>
                            <div class="meta-info">
                                <p>{{ $metric['label'] }}</p>
                                <h3 class="title">{{ $metric['value'] }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container">
            <div class="tp-project-overview-footer">
                <div class="challange-part-wrap">
                    <div class="challenge-part">
                        <h3 class="title">Key Benefits</h3>
                        <p>Transform your operations with intelligent automation</p>
                        <ul>
                            @foreach ($benefits as $benefit)
                                <li>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_28165_6526)">
                                            <path
                                                d="M2.92371 2.97844C-0.393514 6.33184 -0.375513 11.7583 2.97771 15.0755C6.33093 18.3927 11.7576 18.3747 15.0748 15.0215C18.392 11.6683 18.374 6.24166 15.0208 2.92444C11.6676 -0.392781 6.24093 -0.374781 2.92371 2.97844ZM13.1639 7.35946L8.51253 12.0647C8.11581 12.4614 7.46673 12.4614 7.07019 12.0647L6.89001 11.8847L6.34911 11.3436L4.83477 9.84724C4.43805 9.4507 4.43805 8.80162 4.83477 8.40508C5.23149 8.00854 5.88039 8.00836 6.27693 8.40508L7.79127 9.90142L11.7216 5.93512C12.1181 5.53858 12.7672 5.53858 13.1637 5.93512C13.5604 6.31384 13.5606 6.96292 13.1639 7.35946Z"
                                                fill="#999999" />
                                        </g>
                                    </svg>
                                    {{ $benefit }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="challange-img">
                        <img src="{{ asset('assets/imgs/project/project-details.gif') }}" alt="Image">
                    </div>
                </div>
                <div class="imgs-wrapper">
                    <div><img src="{{ asset('assets/imgs/project/project-details-2.jpg') }}" alt=""></div>
                    <div><img src="{{ asset('assets/imgs/project/project-details-3.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results & Impact -->
    <section class="tp-project-result-area pt-140 pb-140">
        <div class="container">
            <div class="tp-project-result">
                <h2 class="sec-title-2">Results & Impact</h2>
                <p>{{ $impactDescription }}</p>
                <div class="result-wrapper">
                    <div><img src="{{ asset('assets/imgs/project/project-details-4.jpg') }}" alt="Image"></div>
                    <div class="result-box-wrap">
                        @foreach ($results as $result)
                            <div class="result-box">
                                <div class="icon"><img
                                        src="{{ asset('assets/imgs/project/icon-' . ($loop->iteration + 3) . '.png') }}"
                                        alt=""></div>
                                <div class="content">
                                    <h3 class="tp-counter-active number">{{ $result['value'] }}</h3>
                                    <p class="text">{{ $result['label'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="tp-funfact-area-2">
        <div class="container">
            <div class="tp-funfact-items-2">
                <div class="tp-counter-wrapper-2">
                    <h3 class="tp-counter-active number">20K <span class="suffix">+</span></h3>
                    <p class="text">Active Users Worldwide</p>
                </div>
                <div class="tp-counter-wrapper-2">
                    <h3 class="tp-counter-active number">50K <span class="suffix">+</span></h3>
                    <p class="text">Projects Delivered</p>
                </div>
                <div class="tp-counter-wrapper-2">
                    <h3 class="tp-counter-active number">50 <span class="suffix">+</span></h3>
                    <p class="text">Countries Served</p>
                </div>
            </div>
        </div>
    </section>
@endsection
