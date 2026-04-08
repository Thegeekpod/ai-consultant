@extends('layouts.app')

@section('content')

      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">Machine Learning Development & Consulting</h1>
            <div class="btn-wrapper">
              <a class="actova-btn-primary tp-btn-hover" href="mailto:info@actovagmail.com">info@ai-consultant.agency
                <span></span></a>
              <a class="actova-btn-secondary tp-btn-hover" href="/contact">Contact Now<span></span></a>
            </div>
          </div>
        </div>

        <img src="/assets/imgs/hero/hero-2-shape.png" alt="Shape" class="hero-2-shape">
        <canvas id="tp-wave-canva"></canvas>
      </section>
      <!-- Hero area end -->

    <!-- Brand area start -->
    <section class="tp-brand-area-4 pt-130">
        <div class="tp-container-1715">
            <div class="tp-brand-inner">
                <div class="title-wrap">
                    <h2 class="title">We’re the Preferred AI Consulting Partner for 100+ Businesses</h2>
                </div>
                <div class="tp-brand-slider">
                    <div class="tp-brand-logo-4">
                        <a href="#">
                            <img src="{{ asset('assets/imgs/brand/logo-1.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#">
                            <img src="{{ asset('assets/imgs/brand/logo-2.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-3.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-4.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-5.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-6.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-1.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-2.png') }}" alt="Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand area end -->


      <!-- Service area start -->
      <section class="tp-service-details-area pt-140 pb-130">
        <div class="tp-service-details-header">
          <div class="container">
            <div class="title-wrap">
              <h2 class="sub-title">Machine Learning</h2>
              <h3 class="sec-title-3 actova-word">
                Expert Machine Learning Development & Consulting Services <span>Built to Deliver Real, Scalable Business Value.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. ML Consulting</h3>
                <div class="tp-service-faq-body">
                  <p>Make the right move with dedicated machine learning consulting. Our <a href="/" style="text-decoration: underline; font-weight: 600;">AI Consultants</a> assess your data, define the most impactful use cases, and create a clear roadmap.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Transparent Approach</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-1.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-2.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">2. ML Development</h3>
                <div class="tp-service-faq-body">
                  <p>We build powerful, production-ready ML solutions. We handle everything- from data preparation and labeling to <a href="/services/ai-development" style="text-decoration: underline; font-weight: 600;">model development</a>, training, and validation. We create custom machine learning models with accuracy, scalability, & performance.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Accurate Execution</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-3.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-4.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">3. ML Integration</h3>
                <div class="tp-service-faq-body">
                  <p>Embed AI intelligence into your existing systems. We integrate machine learning models and AI capabilities into your applications, enterprise platforms, and workflows- ensuring smooth deployment and operational efficiency.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Efficiency</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-8.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-5.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">4. Deployment & Optimization</h3>
                <div class="tp-service-faq-body">
                  <p>Take your ML solution live with confidence. We deploy models across cloud, on-premise, or edge environments, ensuring reliability and performance. Continuous monitoring, optimization, and updates keep your models accurate and efficient.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">99%</h3>
                        <p class="text">Model Uptime</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-6.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-7.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tp-service-details-footer">
          <div class="container">
            <div class="img-wrapper">
              <img src="{{ asset('assets/imgs/service/service-details-3.jpg') }}" alt="">
              <img src="{{ asset('assets/imgs/service/service-details-4.jpg') }}" alt="">
            </div>

            <h2 class="title">Full-Spectrum ML Development Services</h2>
            <p>As a industry-leading machine learning development company, we combine deep ML expertise with strong engineering capabilities to help global business build, deploy, and scale high-impact machine learning solutions. </p>
          </div>
        </div>
      </section>
      <!-- Service area end -->


                <!-- Service section Start -->
      <section class="tp-service-area-3">
        <div class="tp-container">
          <div class="tp-service-inner-3">
            <div class="title-wrap">
              <h2 class="sec-title-2 text-move-animation">
                Our Machine Learning Expertise 
                <span>Powers Intelligent Automation.</span>
              </h2>
              <a href='/services/ai-development' class="actova-btn-light">
                Discover More
                <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                </svg>
              </a>
            </div>
            <div class="tp-service-grid-3">
              <div class="tp-service-card-3 tp-fade-animation">
                <a href="#">
                  <img src="{{ asset("/assets/imgs/service/service-icon-7.png") }}" alt="Icon">
                  <h3 class="title">NLP & Computer Vision</h3>
                  <p>
                    We leverage deep learning to analyze visual data with precision. We build advanced NLP & computer vision models for image recognition, object detection, and video analytics- enabling real-time automation and insights.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="0.7">
                <a href="/services/generative-ai">
                  <img src="{{ asset("/assets/imgs/service/service-icon-8.png") }}" alt="Icon">
                  <h3 class="title">Generative AI</h3>
                  <p>
                    Build next-generation AI experiences with generative models. We develop content generation, AI chatbots, copilots, and more- leveraging LLMs and diffusion models to enhance productivity and deliver human-like interactions.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="0.9">
                <a href="/solutions/ipa">
                  <img src="{{ asset("/assets/imgs/service/service-icon-9.png") }}" alt="Icon">
                  <h3 class="title">Intelligent Process Automation</h3>
                  <p>
                    Automate complex workflows with AI-driven precision. We combine machine learning with automation technologies to streamline operations, reduce manual effort, and introduce predictive intelligence into your business processes.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="1.1">
                <a href="/services/ai-development">
                  <img src="{{ asset("/assets/imgs/service/service-icon-10.png") }}" alt="Icon">
                  <h3 class="title">AI Development</h3>
                  <p>
                    Design and build custom ML models tailored to your business needs. From data preparation and model training to validation and optimization, we deliver high-performance machine learning solutions ready for real-world deployment.
                  </p>
                </a>
              </div>
            </div>
            <h4 class="cta-call">
              <span>Free</span>To get free consultation our industries expert
              <a href="{{ route("contact") }}">Book a Strategy Call
                <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                </svg>
              </a>
            </h4>
          </div>
        </div>
      </section>
      <!-- Service section end -->

      <!-- Blog area start -->
      <section class="tp-blog-area plr-50 pt-120 pb-120">
        <div class="tp-blog-inner">
          <div class="title-wrap">
            <h2 class="sub-title">Industries We Serve</h2>
            <h3 class="sec-title actova-word">
              Advanced Machine Learning Solutions 
              <span>Built for Every Industry and Specific Business Goals.</span>
            </h3>
          </div>
          <div class="tp-blog-list">
            <div class="tp-blog-item">
              <a href="/industries/technology" class="thumb">
                <img src="/assets/imgs/blog/blog-1.jpg" alt="Thumbnail">
              </a><br>
              <h2 class="title">
                <a href="/industries/technology">Corporate and Tech Firms</a>
              </h2>
              <a href="/industries/technology" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Know More</span>
                  <span class="text-two">Know More</span>
                </span>
                <span class="btn-icon">
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                </span>
              </a>
            </div>
            <div class="tp-blog-item">
              <a href="/industries/retail-ecommerce" class="thumb">
                <img src="/assets/imgs/blog/blog-2.jpg" alt="Thumbnail">
              </a><br>
              <h2 class="title">
                <a href="/industries/retail-ecommerce">Retail and eCommerce</a>
              </h2>
              <a href="/industries/retail-ecommerce" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Know More</span>
                  <span class="text-two">Know More</span>
                </span>
                <span class="btn-icon">
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                </span>
              </a>
            </div>
            <div class="tp-blog-item">
              <a href="/industries/healthcare" class="thumb">
                <img src="/assets/imgs/blog/blog-2.jpg" alt="Thumbnail">
              </a><br>
              <h2 class="title">
                <a href="/industries/healthcare">Healthcare Brands</a>
              </h2>
              <a href="/industries/healthcare" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Know More</span>
                  <span class="text-two">Know More</span>
                </span>
                <span class="btn-icon">
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                </span>
              </a>
            </div>
            <div class="tp-blog-item">
              <a href="/industries/finance-banking" class="thumb">
                <img src="/assets/imgs/blog/blog-2.jpg" alt="Thumbnail">
              </a><br>
              <h2 class="title">
                <a href="/industries/finance-banking">Finance & Banking</a>
              </h2>
              <a href="/industries/finance-banking" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Know More</span>
                  <span class="text-two">Know More</span>
                </span>
                <span class="btn-icon">
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                </span>
              </a>
            </div>
              <div class="tp-blog-item">
              <a href="/industries/education" class="thumb">
                <img src="/assets/imgs/blog/blog-2.jpg" alt="Thumbnail">
              </a><br>
              <h2 class="title">
                <a href="/industries/education">Education & E-Learning</a>
              </h2>
              <a href="/industries/education" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Know More</span>
                  <span class="text-two">Know More</span>
                </span>
                <span class="btn-icon">
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                </span>
              </a>
            </div>
            <div class="tp-blog-item">
              <a href="/industries/real-estate" class="thumb">
                <img src="/assets/imgs/blog/blog-3.jpg" alt="Thumbnail">
              </a><br>
              <h2 class="title">
                <a href="/industries/real-estate">Real Estate Agencies</a>
              </h2>
              <a href="/industries/real-estate" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Read More</span>
                  <span class="text-two">Read More</span>
                </span>
                <span class="btn-icon">
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog area end -->





<!-- Process area start -->
<section class="tp-process-area">
  <div class="tp-processs-inner">
    <div class="title-wrap">
      <h2 class="sub-title-2">ML Development Process</h2>
      <h2 class="sec-title-2 actova-lines">How We Turn Data Into Intelligence.</h2>
    </div>
    <div class="tp-process-slider-wrapper">
      <div class="swiper tp-process-slider">
        <div class="swiper-wrapper">

          <!-- Slide 1: Discovery -->
          <div class="swiper-slide">
            <div class="tp-process-slide">
              <div class="image-wrap">
                <img src="/assets/imgs/process/icon-1.png" alt="Icon">
                <div class="number">01</div>
              </div>
              <h3 class="title">Discovery</h3>
              <p>We collaborate with your team to understand business objectives, define the ML problem, and assess data availability and feasibility.</p>
              <ul>
                <li><a href="#">+ Define Business Goals</a></li>
                <li><a href="#">+ Problem Scoping & Framing</a></li>
                <li><a href="#">+ AI Feasibility Assessment</a></li>
              </ul>
            </div>
          </div>

          <!-- Slide 2: Data Preparation -->
          <div class="swiper-slide">
            <div class="tp-process-slide">
              <div class="image-wrap">
                <img src="/assets/imgs/process/icon-2.png" alt="Icon">
                <div class="number">02</div>
              </div>
              <h3 class="title">Data Preparation</h3>
              <p>Raw data is cleaned, transformed, and engineered into high-quality datasets that serve as the foundation for accurate model training.</p>
              <ul>
                <li><a href="#">+ Data Cleaning & Wrangling</a></li>
                <li><a href="#">+ Feature Engineering</a></li>
                <li><a href="#">+ Dataset Validation & Labeling</a></li>
              </ul>
            </div>
          </div>

          <!-- Slide 3: Modeling -->
          <div class="swiper-slide">
            <div class="tp-process-slide">
              <div class="image-wrap">
                <img src="/assets/imgs/process/icon-3.png" alt="Icon">
                <div class="number">03</div>
              </div>
              <h3 class="title">Modeling</h3>
              <p>We design, train, and rigorously evaluate machine learning models — selecting the best architecture tuned to your domain and data.</p>
              <ul>
                <li><a href="#">+ Algorithm Selection</a></li>
                <li><a href="#">+ Model Training & Tuning</a></li>
                <li><a href="#">+ Performance Evaluation</a></li>
              </ul>
            </div>
          </div>

          <!-- Slide 4: Deployment & Optimization -->
          <div class="swiper-slide">
            <div class="tp-process-slide">
              <div class="image-wrap">
                <img src="/assets/imgs/process/icon-1.png" alt="Icon">
                <div class="number">04</div>
              </div>
              <h3 class="title">Deployment & Optimization</h3>
              <p>Validated models are deployed into production environments and continuously monitored, refined, and optimized for peak real-world performance.</p>
              <ul>
                <li><a href="#">+ API & Cloud Deployment</a></li>
                <li><a href="#">+ Live Performance Monitoring</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="tp-process-footer">
          <a href="#" class="tp-process-btn">Start Your ML Development Journey</a>
          <div class="tp-process-navigation">
            <div class="tp-process-prev">
              <svg width="12" height="16" viewBox="0 0 12 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.68961 6.06897C3.75443 6.06897 4.62064 6.93519 4.62064 8C4.62064 9.06481 3.75443 9.93103 2.68961 9.93103C1.6248 9.93103 0.75858 9.06481 0.75858 8C0.75858 6.93519 1.6248 6.06897 2.68961 6.06897ZM5.99996 6.89656C4.93514 6.89656 4.06892 6.03034 4.06892 4.96553C4.06892 3.90072 4.93514 3.0345 5.99996 3.0345C7.06477 3.0345 7.93099 3.90072 7.93099 4.96553C7.93099 6.03034 7.06477 6.89656 5.99996 6.89656ZM9.3103 3.86206C8.24549 3.86206 7.37927 2.99584 7.37927 1.93103C7.37927 0.866219 8.24549 0 9.3103 0C10.3751 0 11.2413 0.866219 11.2413 1.93103C11.2413 2.99584 10.3751 3.86206 9.3103 3.86206ZM5.99996 9.10344C7.06477 9.10344 7.93099 9.96966 7.93099 11.0345C7.93099 12.0993 7.06477 12.9655 5.99996 12.9655C4.93514 12.9655 4.06892 12.0993 4.06892 11.0345C4.06892 9.96966 4.93514 9.10344 5.99996 9.10344ZM9.3103 12.1379C10.3751 12.1379 11.2413 13.0042 11.2413 14.069C11.2413 15.1338 10.3751 16 9.3103 16C8.24549 16 7.37927 15.1338 7.37927 14.069C7.37927 13.0041 8.24549 12.1379 9.3103 12.1379Z" />
              </svg>
            </div>
            <div class="tp-process-next">
              <svg width="12" height="16" viewBox="0 0 12 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.31039 6.06897C8.24557 6.06897 7.37936 6.93519 7.37936 8C7.37936 9.06481 8.24557 9.93103 9.31039 9.93103C10.3752 9.93103 11.2414 9.06481 11.2414 8C11.2414 6.93519 10.3752 6.06897 9.31039 6.06897ZM6.00004 6.89656C7.06486 6.89656 7.93107 6.03034 7.93107 4.96553C7.93107 3.90072 7.06486 3.0345 6.00004 3.0345C4.93523 3.0345 4.06901 3.90072 4.06901 4.96553C4.06901 6.03034 4.93523 6.89656 6.00004 6.89656ZM2.6897 3.86206C3.75451 3.86206 4.62073 2.99584 4.62073 1.93103C4.62073 0.866219 3.75451 0 2.6897 0C1.62489 0 0.758667 0.866219 0.758667 1.93103C0.758667 2.99584 1.62489 3.86206 2.6897 3.86206ZM6.00004 9.10344C4.93523 9.10344 4.06901 9.96966 4.06901 11.0345C4.06901 12.0993 4.93523 12.9655 6.00004 12.9655C7.06486 12.9655 7.93107 12.0993 7.93107 11.0345C7.93107 9.96966 7.06486 9.10344 6.00004 9.10344ZM2.6897 12.1379C1.62489 12.1379 0.758667 13.0042 0.758667 14.069C0.758667 15.1338 1.62489 16 2.6897 16C3.75451 16 4.62073 15.1338 4.62073 14.069C4.62073 13.0041 3.75451 12.1379 2.6897 12.1379Z" />
              </svg>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Process area end -->


    <!-- event area -->
<section class="tp-event-area pt-120 pb-120 bg-white">
  <div class="container">
    <div class="tp-event-titlewrap">
      <h2 class="sec-title-2">ML Development Tech Stack</h2>
      <p>From algorithms to cloud platforms, we leverage the most powerful tools and frameworks to build intelligent, scalable machine learning solutions.</p>
    </div>

    <div class="tp-event-slider-wrapper">
      <div class="swiper tp-event-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="day-number">
              <span>
                <svg width="14" height="20" viewBox="0 0 14 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.6659 0.0022221C3.5477 0.00221492 3.43257 0.0399154 3.33728 0.109841C3.24198 0.179766 3.17147 0.27827 3.13601 0.391025L0.0255842 10.3888C-0.000551336 10.4719 -0.00677208 10.56 0.00742497 10.646C0.021622 10.7319 0.0558389 10.8133 0.10731 10.8836C0.158782 10.9539 0.226065 11.0111 0.303724 11.0506C0.381383 11.0901 0.467239 11.1107 0.554357 11.1109H4.37352L2.02181 19.2891C1.85518 19.8679 2.60169 20.26 2.98493 19.7945L12.9827 7.575C13.0501 7.49367 13.0929 7.39481 13.1061 7.29001C13.1193 7.18522 13.1024 7.07883 13.0572 6.98333C13.0121 6.88784 12.9407 6.80718 12.8513 6.75084C12.762 6.69449 12.6585 6.66478 12.5528 6.6652H7.96828L9.75234 0.71651C9.7775 0.633475 9.78286 0.5457 9.76798 0.460221C9.75311 0.374741 9.71842 0.293935 9.66669 0.224279C9.61496 0.154623 9.54763 0.0980536 9.4701 0.0591061C9.39257 0.0201586 9.30699 -8.42009e-05 9.22023 2.6324e-07L3.6659 0.0022221Z" />
                </svg>
              </span>
              Stack-01
            </div>
          </div>
          <div class="swiper-slide">
            <div class="day-number">
              <span>
                <svg width="14" height="20" viewBox="0 0 14 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.6659 0.0022221C3.5477 0.00221492 3.43257 0.0399154 3.33728 0.109841C3.24198 0.179766 3.17147 0.27827 3.13601 0.391025L0.0255842 10.3888C-0.000551336 10.4719 -0.00677208 10.56 0.00742497 10.646C0.021622 10.7319 0.0558389 10.8133 0.10731 10.8836C0.158782 10.9539 0.226065 11.0111 0.303724 11.0506C0.381383 11.0901 0.467239 11.1107 0.554357 11.1109H4.37352L2.02181 19.2891C1.85518 19.8679 2.60169 20.26 2.98493 19.7945L12.9827 7.575C13.0501 7.49367 13.0929 7.39481 13.1061 7.29001C13.1193 7.18522 13.1024 7.07883 13.0572 6.98333C13.0121 6.88784 12.9407 6.80718 12.8513 6.75084C12.762 6.69449 12.6585 6.66478 12.5528 6.6652H7.96828L9.75234 0.71651C9.7775 0.633475 9.78286 0.5457 9.76798 0.460221C9.75311 0.374741 9.71842 0.293935 9.66669 0.224279C9.61496 0.154623 9.54763 0.0980536 9.4701 0.0591061C9.39257 0.0201586 9.30699 -8.42009e-05 9.22023 2.6324e-07L3.6659 0.0022221Z" />
                </svg>
              </span>
              Stack-02
            </div>
          </div>
          <div class="swiper-slide">
            <div class="day-number">
              <span>
                <svg width="14" height="20" viewBox="0 0 14 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.6659 0.0022221C3.5477 0.00221492 3.43257 0.0399154 3.33728 0.109841C3.24198 0.179766 3.17147 0.27827 3.13601 0.391025L0.0255842 10.3888C-0.000551336 10.4719 -0.00677208 10.56 0.00742497 10.646C0.021622 10.7319 0.0558389 10.8133 0.10731 10.8836C0.158782 10.9539 0.226065 11.0111 0.303724 11.0506C0.381383 11.0901 0.467239 11.1107 0.554357 11.1109H4.37352L2.02181 19.2891C1.85518 19.8679 2.60169 20.26 2.98493 19.7945L12.9827 7.575C13.0501 7.49367 13.0929 7.39481 13.1061 7.29001C13.1193 7.18522 13.1024 7.07883 13.0572 6.98333C13.0121 6.88784 12.9407 6.80718 12.8513 6.75084C12.762 6.69449 12.6585 6.66478 12.5528 6.6652H7.96828L9.75234 0.71651C9.7775 0.633475 9.78286 0.5457 9.76798 0.460221C9.75311 0.374741 9.71842 0.293935 9.66669 0.224279C9.61496 0.154623 9.54763 0.0980536 9.4701 0.0591061C9.39257 0.0201586 9.30699 -8.42009e-05 9.22023 2.6324e-07L3.6659 0.0022221Z" />
                </svg>
              </span>
              Stack-03
            </div>
          </div>
        </div>
      </div>

      <div class="tp-event-slider2-wrapper">
        <div class="swiper tp-event-slider2">
          <div class="swiper-wrapper">

            <!-- Slide 1: Algorithms + Languages + ML Frameworks -->
            <div class="swiper-slide">
              <div class="tp-event-slide2">
                <div class="event-day">Core Intelligence</div>
                <h2 class="event-date">Stack 01</h2>
                <ul class="event-schedule">
                  <li>
                    <div class="time">Algorithms</div>
                    <div class="event">Supervised · Deep Learning · Probabilistic ML · Computer Vision</div>
                  </li>
                  <li>
                    <div class="time">Languages</div>
                    <div class="event">Python · R · Scala · SQL · C++</div>
                  </li>
                  <li>
                    <div class="time">Frameworks</div>
                    <div class="event">TensorFlow · Scikit-learn · SciPy · PyTorch</div>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Slide 2: Visualization + DBMS -->
            <div class="swiper-slide">
              <div class="tp-event-slide2">
                <div class="event-day">Data & Visualization</div>
                <h2 class="event-date">Stack 02</h2>
                <ul class="event-schedule">
                  <li>
                    <div class="time">Visualization</div>
                    <div class="event">Power BI · Tableau · Qlik · Matplotlib · Seaborn · ggplot2 · Plotly · Bokeh</div>
                  </li>
                  <li>
                    <div class="time">DBMS</div>
                    <div class="event">MS SQL · PostgreSQL · MySQL · MongoDB · CouchDB · Cassandra · Hadoop</div>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Slide 3: Cloud Platforms -->
            <div class="swiper-slide">
              <div class="tp-event-slide2">
                <div class="event-day">Cloud Infrastructure</div>
                <h2 class="event-date">Stack 03</h2>
                <ul class="event-schedule">
                  <li>
                    <div class="time">AWS</div>
                    <div class="event">Scalable ML training, deployment & storage infrastructure</div>
                  </li>
                  <li>
                    <div class="time">GCP</div>
                    <div class="event">AI-native services, BigQuery & Vertex AI ecosystem</div>
                  </li>
                  <li>
                    <div class="time">Azure</div>
                    <div class="event">Enterprise-grade ML pipelines, cognitive services & DevOps</div>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>

        <div class="event-btn-next">
          <svg width="10" height="14" viewBox="0 0 10 14" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.48275 5.31035C6.55104 5.31035 5.7931 6.06829 5.7931 7C5.7931 7.93171 6.55104 8.68965 7.48275 8.68965C8.41447 8.68965 9.17241 7.93171 9.17241 7C9.17241 6.06829 8.41447 5.31035 7.48275 5.31035ZM4.5862 6.03449C5.51791 6.03449 6.27586 5.27655 6.27586 4.34484C6.27586 3.41313 5.51791 2.65519 4.5862 2.65519C3.65449 2.65519 2.89655 3.41313 2.89655 4.34484C2.89655 5.27655 3.65449 6.03449 4.5862 6.03449ZM1.68965 3.3793C2.62136 3.3793 3.37931 2.62136 3.37931 1.68965C3.37931 0.757941 2.62136 0 1.68965 0C0.757941 0 0 0.757941 0 1.68965C0 2.62136 0.757941 3.3793 1.68965 3.3793ZM4.5862 7.96551C3.65449 7.96551 2.89655 8.72345 2.89655 9.65516C2.89655 10.5869 3.65449 11.3448 4.5862 11.3448C5.51791 11.3448 6.27586 10.5869 6.27586 9.65516C6.27586 8.72345 5.51791 7.96551 4.5862 7.96551ZM1.68965 10.6207C0.757941 10.6207 0 11.3786 0 12.3103C0 13.2421 0.757941 14 1.68965 14C2.62136 14 3.37931 13.2421 3.37931 12.3103C3.37931 11.3786 2.62136 10.6207 1.68965 10.6207Z" />
          </svg>
        </div>
        <div class="event-btn-prev">
          <svg width="10" height="14" viewBox="0 0 10 14" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.6901 5.31035C2.62181 5.31035 3.37975 6.06829 3.37975 7C3.37975 7.93171 2.62181 8.68965 1.6901 8.68965C0.758385 8.68965 0.000443459 7.93171 0.000443459 7C0.000443459 6.06829 0.758385 5.31035 1.6901 5.31035ZM4.58665 6.03449C3.65494 6.03449 2.897 5.27655 2.897 4.34484C2.897 3.41313 3.65494 2.65519 4.58665 2.65519C5.51836 2.65519 6.2763 3.41313 6.2763 4.34484C6.2763 5.27655 5.51836 6.03449 4.58665 6.03449ZM7.4832 3.3793C6.55149 3.3793 5.79355 2.62136 5.79355 1.68965C5.79355 0.757941 6.55149 0 7.4832 0C8.41491 0 9.17285 0.757941 9.17285 1.68965C9.17285 2.62136 8.41491 3.3793 7.4832 3.3793ZM4.58665 7.96551C5.51836 7.96551 6.2763 8.72345 6.2763 9.65516C6.2763 10.5869 5.51836 11.3448 4.58665 11.3448C3.65494 11.3448 2.897 10.5869 2.897 9.65516C2.897 8.72345 5.51836 7.96551 4.58665 7.96551ZM7.4832 10.6207C8.41491 10.6207 9.17285 11.3786 9.17285 12.3103C9.17285 13.2421 8.41491 14 7.4832 14C6.55149 14 5.79355 13.2421 5.79355 12.3103C5.79355 11.3786 6.55149 10.6207 7.4832 10.6207Z" />
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- event area -->

      <!-- Project area start -->
      <section class="tp-project-area plr-50" style="margin-top:20px;">
        <div class="tp-project-inner">
          <div class="title-wrap">
            <h2 class="sub-title">Creative AI Highlights</h2>
            <h3 class="sec-title-2 actova-word">
              Real Projects. Real Impact.
            </h3>
            <p>
              We partner with forward-thinking teams to turn AI ideas into
              operational, scalable systems.
            </p>
          </div>

          <div class="tp-project-grid">
            <div class="tp-project-card" data-tilt data-tilt-max="3">
              <a href="projects-details.html" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="/assets/imgs/project/project-1.jpg" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="projects-details.html" class="actova-btn-flip">
                    <span data-text="Automated Support Classifier for SaaS Platforms">
                      Automated Support Classifier for SaaS Platforms
                    </span>
                  </a>
                </h3>
                <ul class="project-category">
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="SaaS Application">SaaS Application</span></a>
                  </li>
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="2025.Finland">2025.Finland</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tp-project-card" data-tilt data-tilt-max="3">
              <a href="projects-details.html" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="/assets/imgs/project/project-2.jpg" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="projects-details.html" class="actova-btn-flip">
                    <span data-text="Multilingual Chatbot Trained on Internal Docs">
                      Multilingual Chatbot Trained on Internal Docs
                    </span>
                  </a>
                </h3>
                <ul class="project-category">
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="SaaS Application">SaaS
                        Application</span></a>
                  </li>
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="2025.Finland">2025.Finland</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tp-project-card" data-tilt data-tilt-max="3">
              <a href="projects-details.html" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="/assets/imgs/project/project-3.jpg" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="projects-details.html" class="actova-btn-flip">
                    <span data-text="Smarter AI Training and Performance Optimization">
                      Smarter AI Training and Performance Optimization
                    </span>
                  </a>
                </h3>
                <ul class="project-category">
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="SaaS Application">SaaS
                        Application</span></a>
                  </li>
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="2025.Finland">2025.Finland</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tp-project-card" data-tilt data-tilt-max="3">
              <a href="projects-details.html" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="/assets/imgs/project/project-4.jpg" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="projects-details.html" class="actova-btn-flip">
                    <span data-text="Advanced Machine Learning & Data Science">
                      Advanced Machine Learning & Data Science
                    </span>
                  </a>
                </h3>
                <ul class="project-category">
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="SaaS Application">SaaS
                        Application</span></a>
                  </li>
                  <li>
                    <a href="#" class="actova-btn-flip"><span data-text="2025.Finland">2025.Finland</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="project-btn tp-btn-animate">
            <a href="projects.html" class="tp-btn-one">
              <span class="btn-wrap">
                <span class="text-one">View All Projects</span>
                <span class="text-two">View All Projects</span>
              </span>
              <span class="btn-icon">
                <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </section>
      <!-- Project area end -->


  <!-- FAQ area start -->
<section class="tp-faq-area-2 pt-140 pb-140">
  <div class="container">
    <div class="tp-faq-inner-2">
      <div class="title-wrap">
        <p class="rating">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z" fill="#A1FF75" />
          </svg>
          4.5 Average Rating
        </p>
        <h2 class="sec-title-2">Frequently Ask & <br> Question</h2>
      </div>
      <div class="tp-faq-wrapper-2">
        <div class="tp-faq-list">

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What ML services do you offer and what makes you reliable?</h3>
            <div class="tp-faq-body">
              <p>We provide end-to-end ML services including model development, data engineering, integration, and post-launch support. Our reliability is backed by certified engineers, transparent workflows, and proven results across industries.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">Can you share examples of successful ML projects?</h3>
            <div class="tp-faq-body">
              <p>Yes. We have delivered predictive maintenance systems for manufacturers, recommendation engines for e-commerce platforms, and NLP pipelines for financial document processing. Case studies are available on request.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">How does an ML project unfold from start to finish?</h3>
            <div class="tp-faq-body">
              <p>We follow five phases: discovery and scoping, data preparation, model development and evaluation, deployment and integration, then ongoing monitoring. You receive updates and sign-offs at each milestone.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What data is needed? What if we don't have enough?</h3>
            <div class="tp-faq-body">
              <p>Most projects need structured historical data relevant to the problem. If your data is limited, we can apply transfer learning, synthetic data generation, or design a collection strategy before modeling begins.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">Do we need to train a model from scratch or use existing ones?</h3>
            <div class="tp-faq-body">
              <p>Both are viable. Fine-tuning a foundation model is faster and more cost-efficient for many tasks. We assess your needs and recommend the best fit, whether that is a pre-built, fine-tuned, or fully custom model.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">How long does it take to see results?</h3>
            <div class="tp-faq-body">
              <p>A proof-of-concept typically takes 4 to 8 weeks. A production-ready solution ranges from 3 to 6 months depending on data readiness, integration scope, and project complexity.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What are the costs involved?</h3>
            <div class="tp-faq-body">
              <p>Pricing depends on scope, data volume, and infrastructure needs. We offer fixed-scope packages for defined projects and retainer models for ongoing work. Contact us for a tailored estimate after an initial consultation.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ area end -->


      
@endsection