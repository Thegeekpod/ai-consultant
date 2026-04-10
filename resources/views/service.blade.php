@extends('layouts.app')

@section('content')
    <section class="tp-breadcrumb-area">
        <div class="tp-container">
            <div class="tp-breadcrumb-wrapper">
                <img src="{{ asset('assets/imgs/hero/service-bg.jpg') }}" alt="Image">
                <div class="tp-breadcrumb-content">
                    <h1 class="tp-breadcrumb-title">Our Services</h1>
                    <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> Our Services</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->

    <!-- Service area start -->
    <section class="tp-service-area-2 pt-120 pb-120">
        <div class="tp-container">
            <div class="tp-service-inner">
                <div class="title-wrap">
                    <h2 class="sub-title">Expertise</h2>
                    <h2 class="sec-title-2 actova-lines">AI Solutions for Modern Business</h2>
                    <p>Our services are designed to bridge the gap between complex AI technology and practical business
                        value. We build robust, scalable, and impact-driven solutions.</p>
                </div>
                <div class="tp-service-grid-2">
                    <!-- Service Card 1 -->
                    <div class="tp-service-card-2 card-1 tp-fade-animation" data-fade-from="right"
                        style="background-image: url('assets/imgs/service/shape-7.png');">
                        <div class="content">
                            <img src="{{ asset('assets/imgs/service/service-icon-11.png') }}" alt="Image" class="icon">
                            <h3 class="title"><a href="/">AI Strategy & Consulting</a></h3>
                            <p>
                                We help businesses identify high-impact AI use cases, audit their data readiness, and create
                                a comprehensive AI transformation roadmap.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="{{ route('contact') }}" class="actova-btn-light tp-btn-hover">
                                Get Started
                                <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                </svg>
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="tp-service-card-2 card-2 tp-fade-animation" data-fade-from="right" data-delay="0.7"
                        style="background-image: url('assets/imgs/service/shape-8.png');">
                        <div class="content">
                            <h3 class="title"><a href="/services/generative-ai">Generative AI & LLMs</a></h3>
                            <p>
                                Custom LLM development, fine-tuning, and RAG implementation for intelligent search,
                                chatbots, and automated content generation.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="{{ route('contact') }}" class="actova-btn">
                                Free Strategy Call
                                <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="card-wrapper">
                        <!-- Service Card 3 -->
                        <div class="tp-service-card-2 card-3 tp-fade-animation" data-delay="0.9"
                            style="background-image: url('assets/imgs/service/shape-4.png');">
                            <div class="content">
                                <h3 class="title"><a href="/services/ai-development">AI Development</a></h3>
                            </div>
                            <div class="service-btn">
                                <a href="{{ route('contact') }}" class="actova-btn-light tp-btn-hover">
                                    Apply Now
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                    </svg>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <!-- Service Card 4 -->
                        <div class="tp-service-card-2 card-4 tp-fade-animation" data-delay="1"
                            style="background-image: url('assets/imgs/service/shape-9.png');">
                            <div class="content">
                                <img src="{{ asset('assets/imgs/service/service-icon-6.png') }}" alt="Image"
                                    class="shape">
                                <h3 class="title"><a href="/services/ai-integration-ops">AI Integration & Ops</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-service-step">
                    <ul>
                        <li><a href="/solutions/automation">AI Workflow Automation</a></li>
                        <li><a href="/solutions/customer-experience">AI Customer Experience</a></li>
                        <li><a href="/solutions/marketing-sales">AI Marketing Automation</a></li>
                    </ul>
                    <p>To get free consultation our industries expert <a href="{{ route('contact') }}">Get’s Started <svg
                                width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                            </svg></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- How we work area start -->
    <section class="tp-how-work-area plr-50 pb-140">
        <div class="tp-how-work-inner">
            <div class="title-wrap">
                <h2 class="sub-title">How We Work</h2>
                <h3 class="sec-title-2 esf actova-word">
                    Strategic AI solutions, <span>delivered with precision.</span>
                </h3>
            </div>
            <div class="tp-how-work-steps">
                <div class="tp-how-work-step">
                    <div class="step">Step-01</div>
                    <h3 class="title">Audit & Strategy</h3>
                    <p>
                        We analyze your business processes, data infrastructure, and objectives to define a high-ROI AI
                        strategy.
                    </p>
                </div>
                <div class="tp-how-work-step">
                    <div class="step">Step-02</div>
                    <h3 class="title">Development & Integration</h3>
                    <p>
                        Our engineers build and integrate custom AI models into your existing tech stack with minimal
                        disruption.
                    </p>
                </div>
                <div class="tp-how-work-step">
                    <div class="step">Step-03</div>
                    <h3 class="title">Monitoring & Optimization</h3>
                    <p>
                        Post-deployment, we continuously monitor performance and retrain models to adapt to evolving data
                        patterns.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- How we work area end -->

    <!-- Contact area start -->
    <section class="tp-contact-area service-page image-trail-animation">
        <div class="tp-container">
            <div class="tp-contact-wrapper-service">
                <div class="tp-contact-inner">
                    <div class="tp-content">
                        <h2 class="title">Let’s Transform Your Business!</h2>
                        <p>Have a complex challenge or just exploring AI potential? Let's discuss how we can build your
                            future together.</p>
                        <div class="tp-contact-btns tp-btn-animate">
                            <a href="mailto:info@aiconsultant.in" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">info@aiconsultant.in</span>
                                    <span class="text-two">info@aiconsultant.in</span>
                                </span>
                            </a>
                            <a href="tel:+919635462491" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">+91 963 546 2491</span>
                                    <span class="text-two">+91 963 546 2491</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-trail-images">
            <img class="content__img" src="{{ asset('assets/imgs/service/service-img-1.png') }}" alt="Trail Image 1">
            <img class="content__img" src="{{ asset('assets/imgs/service/service-img-2.png') }}" alt="Trail Image 2">
            <img class="content__img" src="{{ asset('assets/imgs/service/service-img-3.png') }}" alt="Trail Image 3">
            <img class="content__img" src="{{ asset('assets/imgs/service/service-img-4.png') }}" alt="Trail Image 4">
            <img class="content__img" src="{{ asset('assets/imgs/service/service-img-5.png') }}" alt="Trail Image 4">
        </div>
    </section>
    <!-- Contact area end -->

    <!-- FAQ area start -->
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
                    <h2 class="sec-title-2">Frequently Asked <br> Questions</h2>
                </div>
                <div class="tp-faq-wrapper-2">
                    <div class="tp-faq-list">
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">What is AI Consultant?</h3>
                            <div class="tp-faq-body">
                                <p>AI Consultant is a next-generation AI agency and technology provider built to empower
                                    businesses of every size. We help automate repetitive workflows, generate high-quality
                                    content, deliver deep data insights, and provide real-time decision support.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">Who can benefit from AI Consultant services?</h3>
                            <div class="tp-faq-body">
                                <p>Our services are designed for startups, SMEs, and enterprises looking to leverage
                                    artificial intelligence for growth. Whether you need process automation, custom AI
                                    models, or strategic consulting, we have a solution for you.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">What technologies do you specialize in?</h3>
                            <div class="tp-faq-body">
                                <p>We specialize in state-of-the-art AI architectures including Transformers (LLMs), CNNs
                                    for vision, RNNs for time-series, and custom Generative AI solutions tailored to
                                    specific business needs.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">Do you offer custom pricing?</h3>
                            <div class="tp-faq-body">
                                <p>Yes, we provide flexible pricing models based on the complexity and scale of the project.
                                    Contact us for a personalized quote or a free strategy call.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ area end -->
@endsection
