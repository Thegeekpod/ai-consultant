@extends('layouts.app')

@section('content')
<!-- Hero Section with Gradient -->
<section class="tp-breadcrumb-area" style="position: relative; overflow: hidden;">
    <div class="tp-container">
        <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset('assets/imgs/hero/about-bg.jpg') }}" alt="Image">
            <div class="tp-breadcrumb-content">
                <h1 class="tp-breadcrumb-title">Coming Soon</h1>
                <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> AI for Education & EdTech</p>
            </div>
        </div>
    </div>
    <div class="tp-hero-bg-color">
        <svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f_4841_5510)">
                <path d="M518.5 591.13L0 915.63H1920L1699.5 808.63L1444 591.13H1149C928.2 270.33 636.667 457.464 518.5 591.13Z" fill="#A1FF75"/>
            </g>
            <defs>
                <filter id="filter0_f_4841_5510" x="-414" y="0" width="2748" height="1329.63" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="207" result="effect1_foregroundBlur_4841_5510"/>
                </filter>
            </defs>
        </svg>
    </div>
</section><br><br>

<!--
<section class="tp-about-area pt-150">
    <div class="tp-about-wrapper">
        <div class="tp-about-top plr-50">
            <h2 class="sub-title" style="color: #A1FF75;">Industry Focus</h2>
            <h2 class="sec-title actova-word">
                AI-powered solutions designed for <span>Education & EdTech</span>
            </h2>
        </div>
        <div class="tp-about-bottom plr-50">
            <div class="tp-user-box">
                <div class="images">
                    <img src="{{ asset('assets/imgs/about/man-2.png') }}" alt="User">
                    <img src="{{ asset('assets/imgs/about/man.png') }}" alt="User">
                    <img src="{{ asset('assets/imgs/about/man-3.png') }}" alt="User">
                </div>
                <div class="text">
                    <p><span>500+</span> Education & EdTech clients worldwide</p>
                </div>
            </div>
            <div class="content-wrap">
                <div class="tp-counter-wrapper-2">
                    <h3 class="tp-counter-active number">
                        85<span class="suffix">%</span>
                    </h3>
                    <p class="text">
                        Average efficiency improvement in Education & EdTech
                    </p>
                </div>
                <div class="content">
                    <h3 class="text">
                        Transform your Education & EdTech operations with intelligent automation and data-driven insights.
                    </h3>
                    <p>
                        We understand the unique challenges facing Education & EdTech. Our AI solutions are specifically designed to address industry-specific pain points, regulatory requirements, and operational complexities.
                    </p>
                    <div class="btn-wrapper tp-btn-animate">
                        <a href="{{ route('contact') }}" class="tp-btn-one">
                            <span class="btn-wrap">
                                <span class="text-one">Get Industry Insights</span>
                                <span class="text-two">Get Industry Insights</span>
                            </span>
                            <span class="btn-icon">
                                <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="tp--marquee-text-area image-trail-animation pt-120 pb-120">
    <div class="tp--marquee-text-inner" aria-hidden="true">
        <div class="tp--marquee-text">AI for Education & EdTech</div>
        <div class="tp--marquee-text separator-img">
            <img src="{{ asset('assets/imgs/marquee/text-separator.png') }}" alt="Image">
        </div>
        <div class="tp--marquee-text">Smart Automation</div>
        <div class="tp--marquee-text separator-img">
            <img src="{{ asset('assets/imgs/marquee/text-separator.png') }}" alt="Image">
        </div>
        <div class="tp--marquee-text">Data Intelligence</div>
        <div class="tp--marquee-text separator-img">
            <img src="{{ asset('assets/imgs/marquee/text-separator.png') }}" alt="Image">
        </div>
        <div class="tp--marquee-text">Predictive Analytics</div>
        <div class="tp--marquee-text separator-img">
            <img src="{{ asset('assets/imgs/marquee/text-separator.png') }}" alt="Image">
        </div>
    </div>

    <div class="image-trail-images">
        <img class="content__img" src="{{ asset('assets/imgs/service/service-img-1.png') }}" alt="Trail Image 1">
        <img class="content__img" src="{{ asset('assets/imgs/service/service-img-2.png') }}" alt="Trail Image 2">
        <img class="content__img" src="{{ asset('assets/imgs/service/service-img-3.png') }}" alt="Trail Image 3">
        <img class="content__img" src="{{ asset('assets/imgs/service/service-img-4.png') }}" alt="Trail Image 4">
        <img class="content__img" src="{{ asset('assets/imgs/service/service-img-5.png') }}" alt="Trail Image 5">
    </div>
</div>


<section class="tp-service-area-3">
    <div class="tp-container">
        <div class="tp-service-inner-3">
            <div class="title-wrap">
                <h2 class="sec-title-2 text-move-animation">
                    AI Solutions Tailored for
                    <span>Education & EdTech Excellence</span>
                </h2>
                <a href="{{ route('contact') }}" class="actova-btn-light">
                    Explore Solutions
                    <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                    </svg>
                </a>
            </div>
            <div class="tp-service-grid-3">
                <div class="tp-service-card-3 tp-fade-animation">
                    <a href="#">
                        <img src="{{ asset('assets/imgs/service/service-icon-7.png') }}" alt="Icon">
                        <h3 class="title">Process Automation</h3>
                        <p>
                            Streamline operations with intelligent automation designed for Education & EdTech workflows.
                        </p>
                    </a>
                </div>
                <div class="tp-service-card-3 tp-fade-animation" data-delay="0.7">
                    <a href="#">
                        <img src="{{ asset('assets/imgs/service/service-icon-8.png') }}" alt="Icon">
                        <h3 class="title">Predictive Analytics</h3>
                        <p>
                            Forecast trends and make data-driven decisions with industry-specific AI models.
                        </p>
                    </a>
                </div>
                <div class="tp-service-card-3 tp-fade-animation" data-delay="0.9">
                    <a href="#">
                        <img src="{{ asset('assets/imgs/service/service-icon-9.png') }}" alt="Icon">
                        <h3 class="title">Customer Intelligence</h3>
                        <p>
                            Enhance customer experience with AI-powered personalization and insights.
                        </p>
                    </a>
                </div>
                <div class="tp-service-card-3 tp-fade-animation" data-delay="1.1">
                    <a href="#">
                        <img src="{{ asset('assets/imgs/service/service-icon-10.png') }}" alt="Icon">
                        <h3 class="title">Compliance & Security</h3>
                        <p>
                            Meet Education & EdTech regulations with AI-powered compliance monitoring.
                        </p>
                    </a>
                </div>
            </div>
            <h4 class="cta-call">
                <span>Free</span> Get a custom AI roadmap for your Education & EdTech business
                <a href="{{ route('tools.audit') }}">Run Free AI Audit
                    <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                    </svg>
                </a>
            </h4>
        </div>
    </div>
</section>


<div class="tp-about-full-image">
    <div class="content">
        <p class="text-left">Education & EdTech</p>
        <video autoplay loop muted playsinline>
            <source src="{{ asset('assets/video/video-bg.mp4') }}" type="video/mp4">
        </video>
        <p class="text-right">AI Powered</p>
    </div>
</div>


<section class="tp-counter-area plr-50 pt-140 pb-120">
    <div class="tp-counter-inner">
        <h3 class="title">
            Proven results in Education & EdTech
        </h3>
        <div class="tp-counter-list">
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">500<span class="suffix">+</span></h3>
                <p class="text">Education & EdTech clients served</p>
            </div>
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">85<span class="suffix">%</span></h3>
                <p class="text">Average efficiency improvement</p>
            </div>
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">3x</h3>
                <p class="text">ROI within first year</p>
            </div>
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">24/7</h3>
                <p class="text">Continuous AI monitoring</p>
            </div>
        </div>
        <div class="tp-cta-wrapper">
            <div class="cta-content">
                <img src="{{ asset('assets/imgs/others/cta-icon.png') }}" alt="Icon">
                <p>
                    Ready to transform your Education & EdTech operations with AI?
                </p>
            </div>
            <div class="cta-btn tp-btn-animate">
                <a href="{{ route('contact') }}" class="tp-btn-one">
                    <span class="btn-wrap">
                        <span class="text-one">Schedule Consultation</span>
                        <span class="text-two">Schedule Consultation</span>
                    </span>
                    <span class="btn-icon">
                        <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="tp-testimonial-area">
    <div class="tp-testimonial-inner row">
        <div class="col-xl-6 col-lg-5 col-12">
            <div class="tp-testimonial-image">
                <div class="img-reveal">
                    <img src="{{ asset('assets/imgs/testimonial/testimonial.jpg') }}" alt="Image">
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 col-12">
            <div class="tp-testimonial-wrapper">
                <div class="swiper tp-testimonial-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tp-testimonial-slide">
                                <div class="reason">" Game Changer for Education & EdTech "</div>
                                <p>
                                    The AI solutions transformed our Education & EdTech operations.
                                    <span>We saw 85% efficiency gains in just 3 months.</span>
                                    Their team understands our industry challenges perfectly.
                                </p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <span class="icon">
                                            <svg width="30" height="24" viewBox="0 0 30 24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6408 0.750001V10.9387H20.7231C23.0579 10.9387 25.226 12.4961 25.4109 14.8944C25.4785 15.7722 25.452 16.64 25.2329 17.3099C24.5267 20.19 22.0548 20.4906 22.0548 20.4906V23.25C22.0548 23.25 30 22.17 30 13.53V0.750003L17.6408 0.750001ZM0.750001 0.75L0.75 10.9387H3.83229C6.16701 10.9387 8.33511 12.4961 8.51997 14.8944C8.58765 15.7722 8.56115 16.64 8.34207 17.3099C7.6358 20.19 5.16399 20.4906 5.16399 20.4906V23.25C5.16399 23.25 13.1092 22.17 13.1092 13.53V0.750001L0.750001 0.75Z"/>
                                            </svg>
                                        </span>
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Sarah Johnson</h4>
                                        <h4 class="designation">CTO, Education & EdTech Leader</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tp-testimonial-footer">
                        <div class="tp-testimonial-ratings">
                            <div class="rating-logo">
                                <img src="{{ asset('assets/imgs/testimonial/logo-2.png') }}" alt="Brand Logo">
                            </div>
                            <div class="ratings">
                                <img src="{{ asset('assets/imgs/testimonial/ratings.png') }}" alt="Ratings">
                                <p>5.0 Rating, 500+ Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="tp-contact-area">
    <div class="tp-container">
        <div class="tp-contact-inner">
            <h2 class="title">Ready to Transform Education & EdTech?</h2>
            <p>
                Let's discuss how AI can revolutionize your Education & EdTech operations.
                Get a free consultation with our industry experts.
            </p>
            <div class="btn-wrapper tp-btn-animate">
                <a href="{{ route('contact') }}" class="tp-btn-one">
                    <span class="btn-wrap">
                        <span class="text-one">Book Free Consultation</span>
                        <span class="text-two">Book Free Consultation</span>
                    </span>
                    <span class="btn-icon">
                        <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>-->

@endsection