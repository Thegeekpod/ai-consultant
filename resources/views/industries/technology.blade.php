@extends('layouts.app')

@section('content')

<!-- Hero / Breadcrumb Area -->
<section class="tp-breadcrumb-area">
    <div class="tp-container">
        <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset('assets/imgs/hero/about-bg.jpg') }}" alt="AI for Technology & SaaS">
            <div class="tp-breadcrumb-content">
                <h1 class="tp-breadcrumb-title">AI for Technology & SaaS</h1>
                <p class="tp-breadcrumb">
                    <a href="{{ route('home') }}">Home</a> 
                    <span></span> 
                    <a href="{{ route('industries') }}">Industries</a> 
                    <span></span> 
                    AI for Technology & SaaS
                </p>
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
</section>
<!-- Hero area end -->

<!-- Brand Area Start -->
<div class="tp-brand-area-2 pt-80 pb-120">
    <div class="tp-container">
        <div class="tp-brand-inner">
            <div class="tp-brand-slider">
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/brand-6.png') }}" alt="Tech Partner USA"></a>
                </div>
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/brand-1.png') }}" alt="SaaS Client"></a>
                </div>
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/logo-3.png') }}" alt="Findme USA"></a>
                </div>
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/logo-4.png') }}" alt="NobelPay USA"></a>
                </div>
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/brand-2.png') }}" alt="DIRECTV"></a>
                </div>
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/brand-3.png') }}" alt="Warner Music Group"></a>
                </div>
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/brand-5.png') }}" alt="Verizon"></a>
                </div>
                <div class="tp-brand-logo">
                    <a href="#"><img src="{{ asset('assets/imgs/brand/brand-7.png') }}" alt="Weberads"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand area end -->

<!-- Feature / Industry Overview Section -->
<section class="tp-feature-area pt-120 pb-120">
    <div class="tp-container-1715">
        <div class="tp-feature-inner">
            <div class="tp-feature-img">
                <div class="img-reveal">
                    <img src="{{ asset('assets/imgs/industries/technology-saas.webp') }}" alt="AI Consulting for Technology and SaaS Companies">
                </div>
            </div>
            <div class="tp-feature-content">
                <div class="title-wrap">
                    <h2 class="sub-title-2">Industry Focus</h2>
                    <h3 class="sec-title-2 actova-lines">
                        Transform Software into an <br> AI-First SaaS Platform
                    </h3>
                </div>
                <div class="text-wrap">
                    <p>
                        We help B2B and B2C software companies move beyond static interfaces by embedding in-app generative copilots, predictive customer telemetry, and autonomous developer workflows directly into their applications. From architectural audits to production MLOps, we build solutions that increase Net Revenue Retention (NRR) and accelerate product delivery.
                    </p>
                </div>
                <ul class="tp-feature-list">
                    <li><span><i class="fal fa-check"></i></span> In-App AI Copilots & Contextual Generative Assistants</li>
                    <li><span><i class="fal fa-check"></i></span> Predictive Churn & User Behavioral Telemetry Models</li>
                    <li><span><i class="fal fa-check"></i></span> Multi-Tenant SOC2 Data Isolation & Privacy Guardrails</li>
                    <li><span><i class="fal fa-check"></i></span> 60% Token Cost Reduction via Intelligent LLM Gateway</li>
                </ul>
                <a href="{{ route('contact') }}" class="actova-btn-secondary tp-btn-hover">
                    Schedule Strategy Call
                    <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                    </svg>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Feature area end -->

<!-- Fun Fact / Key Performance Metrics -->
<section class="tp-funfact-area-2 pb-80 pt-80">
    <div class="container">
        <div class="tp-funfact-text">
            <p>
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.5118 1.3889C19.4725 1.2163 19.3757 1.06217 19.2373 0.951773C19.0989 0.841374 18.9271 0.78125 18.7501 0.78125C18.5731 0.78125 18.4013 0.841374 18.2629 0.951773C18.1245 1.06217 18.0277 1.2163 17.9884 1.3889L17.5559 3.28968C17.458 3.72048 17.2402 4.1148 16.9278 4.4272C16.6154 4.73959 16.2211 4.95733 15.7903 5.05531L13.8891 5.48773C13.7165 5.52707 13.5624 5.62386 13.452 5.76225C13.3416 5.90064 13.2815 6.07242 13.2815 6.24945C13.2815 6.42648 13.3416 6.59826 13.452 6.73665C13.5624 6.87504 13.7165 6.97183 13.8891 7.01117L15.7903 7.44359C16.2211 7.54156 16.6154 7.7593 16.9278 8.0717C17.2402 8.38409 17.458 8.77842 17.5559 9.20921L17.9884 11.11C18.0277 11.2826 18.1245 11.4367 18.2629 11.5471C18.4013 11.6575 18.5731 11.7176 18.7501 11.7176C18.9271 11.7176 19.0989 11.6575 19.2373 11.5471C19.3757 11.4367 19.4725 11.2826 19.5118 11.11L19.9442 9.20921C20.0422 8.77842 20.2599 8.38409 20.5723 8.0717C20.8847 7.7593 21.2791 7.54156 21.7098 7.44359L23.611 7.01117C23.7836 6.97183 23.9378 6.87504 24.0481 6.73665C24.1585 6.59826 24.2187 6.42648 24.2187 6.24945C24.2187 6.07242 24.1585 5.90064 24.0481 5.76225C23.9378 5.62386 23.7836 5.52707 23.611 5.48773L21.7098 5.05531C21.2791 4.95733 20.8847 4.73959 20.5723 4.4272C20.2599 4.1148 20.0422 3.72048 19.9442 3.28968L19.5118 1.3889Z"
                        fill="#020202" />
                    <path
                        d="M8.59375 6.25C8.80095 6.25 8.99966 6.33231 9.14618 6.47882C9.29269 6.62534 9.375 6.82405 9.375 7.03125V23.4375C9.375 23.6447 9.29269 23.8434 9.14618 23.9899C8.99966 24.1364 8.80095 24.2188 8.59375 24.2188C8.38655 24.2188 8.18784 24.1364 8.04132 23.9899C7.89481 23.8434 7.8125 23.6447 7.8125 23.4375V7.03125C7.8125 6.82405 7.89481 6.62534 8.04132 6.47882C8.18784 6.33231 8.38655 6.25 8.59375 6.25ZM2.34375 8.98438C2.34375 8.77717 2.26144 8.57846 2.11493 8.43195C1.96841 8.28544 1.7697 8.20312 1.5625 8.20312C1.3553 8.20312 1.15659 8.28544 1.01007 8.43195C0.86356 8.57846 0.78125 8.77717 0.78125 8.98438V21.4844C0.78125 21.6916 0.86356 21.8903 1.01007 22.0368C1.15659 22.1833 1.3553 22.2656 1.5625 22.2656C1.7697 22.2656 1.96841 22.1833 2.11493 22.0368C2.26144 21.8903 2.34375 21.6916 2.34375 21.4844V8.98438ZM5.85938 10.5469C5.85938 10.3397 5.77706 10.141 5.63055 9.99445C5.48404 9.84794 5.28533 9.76562 5.07812 9.76562C4.87092 9.76562 4.67221 9.84794 4.5257 9.99445C4.37919 10.141 4.29688 10.3397 4.29688 10.5469V19.9219C4.29688 20.1291 4.37919 20.3278 4.5257 20.4743C4.67221 20.6208 4.87092 20.7031 5.07812 20.7031C5.28533 20.7031 5.48404 20.6208 5.63055 20.4743C5.77706 20.3278 5.85938 20.1291 5.85938 19.9219V10.5469ZM12.8906 9.375C12.8906 9.1678 12.8083 8.96909 12.6618 8.82257C12.5153 8.67606 12.3166 8.59375 12.1094 8.59375C11.9022 8.59375 11.7035 8.67606 11.5569 8.82257C11.4104 8.96909 11.3281 9.1678 11.3281 9.375V21.0938C11.3281 21.301 11.4104 21.4997 11.5569 21.6462C11.7035 21.7927 11.9022 21.875 12.1094 21.875C12.3166 21.875 12.5153 21.7927 12.6618 21.6462C12.8083 21.4997 12.8906 21.301 12.8906 21.0938V9.375ZM15.625 11.3281C15.8322 11.3281 16.0309 11.4104 16.1774 11.5569C16.3239 11.7035 16.4062 11.9022 16.4062 12.1094V18.3594C16.4062 18.5666 16.3239 18.7653 16.1774 18.9118C16.0309 19.0583 15.8322 19.1406 15.625 19.1406C15.4178 19.1406 15.2191 19.0583 15.0726 18.9118C14.9261 18.7653 14.8438 18.5666 14.8438 18.3594V12.1094C14.8438 11.9022 14.9261 11.7035 15.0726 11.5569C15.2191 11.4104 15.4178 11.3281 15.625 11.3281Z"
                        fill="#020202" />
                </svg>
                Empowering Software Leaders with AI
            </p>
        </div>
        <div class="tp-funfact-items-2">
            <div class="tp-counter-wrapper-2">
                <h3 class="tp-counter-active number">
                    150 <span class="suffix">+</span>
                </h3>
                <p class="text">Tech & SaaS Products Scaled.</p>
            </div>
            <div class="tp-counter-wrapper-2">
                <h3 class="tp-counter-active number">
                    45 <span class="suffix">%</span>
                </h3>
                <p class="text">Faster Feature Velocity.</p>
            </div>
            <div class="tp-counter-wrapper-2">
                <h3 class="tp-counter-active number">
                    68 <span class="suffix">%</span>
                </h3>
                <p class="text">Tier-1 Ticket Reduction.</p>
            </div>
        </div>
    </div>
</section>
<!-- Fun Fact area end -->

<!-- Services & Core AI Capabilities Grid -->
<section class="tp-service-area pb-120 pt-100 plr-50">
    <div class="tp-service-inner">
        <div class="title-wrap">
            <h2 class="sec-title actova-word">
                We build <span> in-app AI copilots </span> & predictive systems that <span>drive product growth.</span>
            </h2>
            <div class="tp-btn-animate">
                <a href="{{ route('contact') }}" class="tp-btn-one">
                    <span class="btn-wrap">
                        <span class="text-one">Contact for Consultation</span>
                        <span class="text-two">Contact for Consultation</span>
                    </span>
                    <span class="btn-icon">
                        <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        
        <div class="tp-service-grid">
            <!-- Card 1 -->
            <div class="tp-service-card tp-fade-animation" data-delay="0.6">
                <div class="card-inner">
                    <div class="content">
                        <img src="{{ asset('assets/imgs/service/service-icon-1.png') }}" alt="In-App AI Copilots" class="icon">
                        <h3 class="title">
                            <a href="{{ route('solutions.ai-chatbots') }}">In-App AI Copilots & Assistants</a>
                        </h3>
                        <p>
                            Context-aware conversational assistants natively integrated into your SaaS UI to help users generate content, automate repetitive tasks, and execute complex workflows.
                        </p>
                    </div>
                    <div class="service-btn">
                        <a href="{{ route('solutions.ai-chatbots') }}" class="tp-btn-one">
                            <span class="btn-wrap">
                                <span class="text-one">View Details</span>
                                <span class="text-two">View Details</span>
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

            <!-- Card 2 -->
            <div class="tp-service-card tp-fade-animation" data-delay="0.8">
                <div class="card-inner">
                    <div class="content">
                        <img src="{{ asset('assets/imgs/service/service-icon-3.png') }}" alt="Predictive Churn Engine" class="icon">
                        <h3 class="title">
                            <a href="{{ route('solutions.demand-forecasting') }}">Predictive Churn & NRR Engine</a>
                        </h3>
                        <p>
                            Telemetry-driven machine learning models that monitor user activity, detect drop-off signals 60 days before contract renewal, and trigger retention flows.
                        </p>
                    </div>
                    <div class="service-btn">
                        <a href="{{ route('solutions.demand-forecasting') }}" class="tp-btn-one">
                            <span class="btn-wrap">
                                <span class="text-one">View Details</span>
                                <span class="text-two">View Details</span>
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

            <!-- Card 3 -->
            <div class="tp-service-card tp-fade-animation" data-delay="1">
                <div class="card-inner">
                    <div class="content">
                        <img src="{{ asset('assets/imgs/service/service-icon-1.png') }}" alt="Multi-Tenant MLOps" class="icon">
                        <h3 class="title">
                            <a href="{{ route('services.mlops-deployment') }}">Multi-Tenant MLOps & Routing</a>
                        </h3>
                        <p>
                            Enterprise LLM proxy routing queries dynamically across Claude, GPT-4o, and Llama 3 with semantic caching, multi-tenant isolation, and 60% token cost reduction.
                        </p>
                    </div>
                    <div class="service-btn">
                        <a href="{{ route('services.mlops-deployment') }}" class="tp-btn-one">
                            <span class="btn-wrap">
                                <span class="text-one">View Details</span>
                                <span class="text-two">View Details</span>
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

            <!-- Card 4 -->
            <div class="tp-service-card tp-fade-animation" data-delay="1.2">
                <div class="card-inner">
                    <div class="content">
                        <img src="{{ asset('assets/imgs/service/shape-2.png') }}" alt="Autonomous Dev Agents" class="shape">
                        <h3 class="title">
                            <a href="{{ route('solutions.workflow-automation') }}">Autonomous Dev & CI/CD Agents</a>
                        </h3>
                        <p>
                            Agentic systems integrated into your repository pipelines that automatically write unit test suites, analyze pull requests, and generate changelogs.
                        </p>
                    </div>
                    <div class="service-btn">
                        <a href="{{ route('solutions.workflow-automation') }}" class="tp-btn-one">
                            <span class="btn-wrap">
                                <span class="text-one">View Details</span>
                                <span class="text-two">View Details</span>
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
<!-- Service area end -->

<!-- Technical Architecture Feature Area -->
<section class="tp-feature-area pt-120 pb-120">
    <div class="tp-container-1715">
        <div class="tp-feature-inner">
            <div class="tp-feature-content">
                <div class="title-wrap">
                    <h2 class="sub-title-2">Technical Architecture</h2>
                    <h3 class="sec-title-2 actova-lines">
                        Enterprise-Grade Scale <br> With Zero Data Leakage
                    </h3>
                </div>
                <div class="text-wrap">
                    <p>
                        We build production AI systems designed for heavy concurrency, strict regulatory privacy, and real-time streaming interfaces. Every deployment is tailored to your data residency requirements and security protocols.
                    </p>
                </div>
                <ul class="tp-feature-list">
                    <li><span><i class="fal fa-check"></i></span> Zero-Leakage Multi-Tenant Partitioning (SOC2 & GDPR)</li>
                    <li><span><i class="fal fa-check"></i></span> Sub-250ms Low-Latency Edge & Streaming Inference</li>
                    <li><span><i class="fal fa-check"></i></span> Dynamic Model Cascades (Claude, GPT-4o, Llama 3)</li>
                    <li><span><i class="fal fa-check"></i></span> Native Webhooks for Stripe, Salesforce, GitHub & Jira</li>
                </ul>
                <a href="{{ route('tools.audit') }}" class="actova-btn-secondary tp-btn-hover">
                    Run Free SaaS AI Audit
                    <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z"/>
                    </svg>
                    <span></span>
                </a>
            </div>
            <div class="tp-feature-img">
                <div class="img-reveal">
                    <img src="{{ asset('assets/imgs/industries/tech-ai-agents.webp') }}" alt="AI Agent & MLOps Pipeline Architecture">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Architecture area end -->

<!-- How We Work Process Section -->
<section class="tp-how-work-area plr-50 pb-140">
    <div class="tp-how-work-inner">
        <div class="title-wrap">
            <h2 class="sub-title">Roadmap</h2>
            <h3 class="sec-title-2 esf actova-word">
                From Concept to Production <span>SaaS AI Scale.</span>
            </h3>
        </div>
        <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
                <div class="step">Step-01</div>
                <h3 class="title">Architecture & Data Audit</h3>
                <p>
                    We review your user workflows, database schemas, and API telemetry to identify the highest ROI AI integration points.
                </p>
            </div>
            <div class="tp-how-work-step">
                <div class="step">Step-02</div>
                <h3 class="title">Prototype & Benchmarking</h3>
                <p>
                    We build interactive RAG and Agent POCs, fine-tune models on domain data, and benchmark latency, accuracy, and token unit economics.
                </p>
            </div>
            <div class="tp-how-work-step">
                <div class="step">Step-03</div>
                <h3 class="title">Production MLOps Integration</h3>
                <p>
                    Seamless integration with your React, Vue, Next.js, Node, or Python stack with streaming webhooks, security guardrails, and CI/CD.
                </p>
            </div>
            <div class="tp-how-work-step">
                <div class="step">Step-04</div>
                <h3 class="title">Telemetry & Self-Improvement</h3>
                <p>
                    Continuous monitoring, automated user feedback loops (RLHF/DPO), and dynamic model upgrades to keep your software state-of-the-art.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- How we work area end -->

<!-- Proven Results Counter Area -->
<section class="tp-counter-area plr-50 pt-140 pb-120">
    <div class="tp-counter-inner">
        <h3 class="title">
            Proven Results in Technology & SaaS AI Engineering
        </h3>
        <div class="tp-counter-list">
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">150<span class="suffix">+</span></h3>
                <p class="text">Tech & SaaS Clients Served</p>
            </div>
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">85<span class="suffix">%</span></h3>
                <p class="text">Average Workflow Efficiency Improvement</p>
            </div>
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">4.8x</h3>
                <p class="text">Average ARR Expansion from AI Features</p>
            </div>
            <div class="tp-counter-wrapper">
                <h3 class="tp-counter-active number">99.99<span class="suffix">%</span></h3>
                <p class="text">Production Service Availability</p>
            </div>
        </div>
        <div class="tp-cta-wrapper">
            <div class="cta-content">
                <img src="{{ asset('assets/imgs/others/cta-icon.png') }}" alt="Icon">
                <p>
                    Ready to build an unfair market advantage into your SaaS product?
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
<!-- Counter area end -->

<!-- Frequently Asked Questions Section -->
<section class="tp-faq-area-2 pt-140 pb-140">
    <div class="container">
        <div class="tp-faq-inner-2">
            <div class="title-wrap">
                <p class="rating">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z" fill="#A1FF75" />
                    </svg>
                    4.9 Average Rating
                </p>
                <h2 class="sec-title-2">Frequently Asked <br> Questions</h2>
            </div>
            <div class="tp-faq-wrapper-2">
                <div class="tp-faq-list">
                    <div class="tp-faq-item style-2">
                        <h3 class="tp-faq-title">How do you guarantee multi-tenant data privacy for our SaaS customers?</h3>
                        <div class="tp-faq-body">
                            <p>
                                We implement zero-data-retention APIs and strict tenant isolation. Customer inputs are never used to train global models. In vector search and RAG pipelines, data is partitioned by customer tenant ID with cryptographically secure namespaces.
                            </p>
                        </div>
                    </div>

                    <div class="tp-faq-item style-2">
                        <h3 class="tp-faq-title">Can AI features integrate directly into our React, Vue, or Next.js app?</h3>
                        <div class="tp-faq-body">
                            <p>
                                Yes. We build lightweight REST, WebSocket, and Server-Sent Event (SSE) streaming APIs that connect seamlessly into modern web and mobile frontends without requiring heavy refactoring of your existing codebase.
                            </p>
                        </div>
                    </div>

                    <div class="tp-faq-item style-2">
                        <h3 class="tp-faq-title">How do you prevent spiraling LLM API costs as our user base grows?</h3>
                        <div class="tp-faq-body">
                            <p>
                                We deploy multi-tier cost optimization: semantic caching (answering common queries with zero LLM API calls), prompt compression, and intelligent model cascades (routing 70% of standard tasks to lightweight, low-cost models). This slashes operating expenses by up to 60%.
                            </p>
                        </div>
                    </div>

                    <div class="tp-faq-item style-2">
                        <h3 class="tp-faq-title">What is the typical timeline to deploy an in-app AI feature?</h3>
                        <div class="tp-faq-body">
                            <p>
                                Most SaaS client projects progress through a 4 to 8-week cycle: Weeks 1–2 for architectural auditing and data prep, Weeks 3–4 for working prototype benchmarking, and Weeks 5–8 for production MLOps integration and load testing.
                            </p>
                        </div>
                    </div>

                    <div class="tp-faq-item style-2">
                        <h3 class="tp-faq-title">Do you provide ongoing model monitoring and maintenance?</h3>
                        <div class="tp-faq-body">
                            <p>
                                Yes. We offer continuous MLOps support, tracking latency, token usage, hallucination rates, and user satisfaction 24/7. As new model releases emerge, we seamlessly benchmark and update your system without downtime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ area end -->

<!-- Faster / Call to Action area start -->
<section class="tp-faster-area esf-pl-50 esf-pr-50 pb-120">
    <div class="tp-container">
        <div class="tp-faster-inner">
            <div class="img-anim remove-speed">
                <img src="{{ asset('assets/imgs/others/faster-img.webp') }}" alt="AI Consulting for Tech & SaaS" class="faster-img">
            </div>
            <div class="tp-faster-box" style="width: auto; max-width: 560px; padding: 25px;">
                <div class="box-icon">
                    <img src="{{ asset('assets/imgs/others/faster-icon.png') }}" alt="Icon">
                </div>
                <div class="box-content">
                    <h4 class="title">Ready to Scale Your SaaS with AI?</h4>
                    <p style="margin-bottom: 15px;">Expert AI Consulting. Production MLOps. Measurable ARR Impact.</p>
                    <div class="tp-btn-animate">
                        <a href="{{ route('contact') }}" class="tp-btn-one">
                            <span class="btn-wrap">
                                <span class="text-one">Book Strategy Session</span>
                                <span class="text-two">Book Strategy Session</span>
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
<!-- Faster area end -->

@endsection