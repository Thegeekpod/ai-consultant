@extends('layouts.app')

@section('content')

      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">Natural Language Processing<br> and Computer Vision</h1>
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
              <h2 class="sub-title">NLP & Computer Vision</h2>
              <h3 class="sec-title-3 actova-word">
                We're Transforming AI Into Real-World<span> Intelligence for Global Businesses</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. Strategic AI Planning</h3>
                <div class="tp-service-faq-body">
                  <p>We define clear objectives and select the right vision or language models to drive automation, accuracy, and data-driven decision-making.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Accurate Accuracy</p>
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
                <h3 class="tp-service-faq-title">2. Quality Data Foundation</h3>
                <div class="tp-service-faq-body">
                  <p>Curate large, diverse, and well-annotated datasets across image, video, and text to ensure reliable and balanced model training.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Accurate Accuracy</p>
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
                <h3 class="tp-service-faq-title">3. Custom Model Development</h3>
                <div class="tp-service-faq-body">
                  <p>Build and train machine learning and NLP models using TensorFlow, PyTorch, and OpenAI frameworks for tasks like OCR and sentiment analysis.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Accurate Accuracy</p>
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
                <h3 class="tp-service-faq-title">4. Scalable Deployment</h3>
                <div class="tp-service-faq-body">
                  <p>Integrate trained models into cloud or edge environments via secure APIs, enabling real-time inference, scalability, and system interoperability.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Accurate Accuracy</p>
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
        <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">5. Optimization & Impact</h3>
                <div class="tp-service-faq-body">
                  <p>Evaluate model performance, fine-tune, and convert outputs into insights- automating workflows like document processing, sentiment tracking, and visual quality control.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Accurate Accuracy</p>
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
            <h2 class="title">Use Cases</h2>
            <p>At AI Consultant, we help businesses with <a href="/" style="text-decoration: underline; font-weight: 600;">AI Consulting</a> and harness the power of artificial intelligence through Computer Vision and Natural Language Processing (NLP)- guiding organizations to build systems that interpret and understand the world more intelligently. Our goal is straightforward: to advise, strategize, and architect solutions that transform unstructured data images, videos, and text into actionable insights that drive innovation and sustainable growth.</p>
          </div>
        </div>
      </section>
      <!-- Service area end -->

      <section class="tp-service-area pb-120 pt-120 plr-50">
        <div class="tp-service-inner">
            <div class="title-wrap">
                <h2 class="sec-title actova-word">
                    Computer Vision <span> & Natural Language Processing </span> Related Services.</span>
                </h2>
                <div class="tp-btn-animate">
                    <a href="/contact" class="tp-btn-one">
                        <span class="btn-wrap">
                            <span class="text-one">Contact for Consultation</span>
                            <span class="text-two">Contact for Consultation</span>
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
            <div class="tp-service-grid">
                <div class="tp-service-card tp-fade-animation" data-delay="0.6">
                    <div class="card-inner" data-background="assets/imgs/service/shape-1.png">
                        <div class="content">
                            <img src="/assets/imgs/service/service-icon-1.png" alt="Image" class="icon">
                            <h3 class="title">
                                <a href="#">Natural Language Processing.</a>
                            </h3>
                            <p>
                                Transform unstructured text data into actionable insights with NLP solutions including sentiment analysis, entity recognition, and text classification.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/contact" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Know More</span>
                                    <span class="text-two">Know More</span>
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
                <div class="tp-service-card tp-fade-animation" data-delay="0.8">
                    <div class="card-inner" data-background="assets/imgs/service/service-icon-2.png">
                        <div class="content">
                            <h3 class="title">
                                <a href="#">Computer Vision <br>
                                    & Image Intelligence.</a>
                            </h3>
                            <p>
                                Unlock the power of visual data with custom Computer Vision models- enabling object detection, image segmentation, facial recognition, and automated visual inspection.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/contact" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Know More</span>
                                    <span class="text-two">Know More</span>
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
                <div class="tp-service-card tp-fade-animation" data-delay="1">
                    <div class="card-inner">
                        <div class="content">
                            <img src="/assets/imgs/service/service-icon-3.png" alt="Image" class="icon">
                            <h3 class="title">
                                <a href="#">Document AI & <br>
                                    Intelligent OCR</a>
                            </h3>
                            <p>
                                Automate document understanding with AI-powered OCR and NLP pipelines- extracting, classifying, and processing structured and unstructured data from reports.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/contact" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Know More</span>
                                    <span class="text-two">Know More</span>
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
                <div class="tp-service-card tp-fade-animation" data-delay="1.2">
                    <div class="card-inner" data-background="assets/imgs/service/service-icon-4.png">
                        <div class="content">
                            <img src="/assets/imgs/service/shape-2.png" alt="Image" class="shape">
                            <h3 class="title">
                                <a href="#">Multimodal AI Solutions</a>
                            </h3>
                            <p>
                                Combine the power of vision and language models to build multimodal applications from visual question answering and image captioning to video content analysis.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/contact" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Know More</span>
                                    <span class="text-two">Know More</span>
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
    <!-- Service area end -->

    <!-- How we work area start -->
<section class="tp-how-work-area plr-50" style="margin-top:60px;">
  <div class="tp-how-work-inner">
    <div class="title-wrap">
      <h2 class="sub-title">Our Approach</h2>
      <h3 class="sec-title-2 esf actova-word">
        NLP & Computer Vision, built with <span>precision and purpose.</span>
      </h3>
    </div>

    <div class="tp-how-work-steps">
      <div class="tp-how-work-step">
        <div class="step">Step-01</div>
        <h3 class="title">Discover</h3>
        <p>
          We analyse your data landscape, business objectives, and use cases
          to identify where NLP and Computer Vision can deliver the most impact.
        </p>
      </div>
      <div class="tp-how-work-step">
        <div class="step">Step-02</div>
        <h3 class="title">Design & Build</h3>
        <p>
          We architect and develop tailored models from training custom vision
          and language pipelines to seamless integration with your existing systems.
        </p>
      </div>
      <div class="tp-how-work-step">
        <div class="step">Step-03</div>
        <h3 class="title">Optimise</h3>
        <p>
          We continuously monitor, fine-tune, and retrain models to improve
          accuracy, reduce latency, and adapt to evolving data and business needs.
        </p>
      </div>
    </div>

    <div class="tp-watch-video">
      <div class="text-wrap">
        <p>Watch Full Process Video -</p>
      </div>
      <div class="video-wrap">
        <div class="tp-video-popup-wrapper">
          <a href="https://www.youtube.com/" class="tp-video-popup"><i
              class="fal fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- How we work area end -->

            <!-- Project area start -->
      <section class="tp-project-area plr-50" style="margin-top:60px;">
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
            <path
              d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z"
              fill="#A1FF75" />
          </svg>
          4.5 Average Rating
        </p>
        <h2 class="sec-title-2">Frequently Ask & <br> Question</h2>
      </div>
      <div class="tp-faq-wrapper-2">
        <div class="tp-faq-list">

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What is NLP and how can it benefit my business?</h3>
            <div class="tp-faq-body">
              <p>Natural Language Processing (NLP) enables machines to understand, interpret, and generate human language. It powers use cases like sentiment analysis, document classification, chatbots, and automated reporting, helping businesses save time and extract insight from unstructured text data.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What types of Computer Vision solutions do you build?</h3>
            <div class="tp-faq-body">
              <p>We build custom Computer Vision solutions including object detection, image segmentation, facial recognition, visual quality inspection, and video analytics. Our models are trained on your specific data and deployed across cloud or edge environments depending on your needs.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What industries do your NLP and Computer Vision services support?</h3>
            <div class="tp-faq-body">
              <p>Our solutions serve a wide range of industries including healthcare, retail, manufacturing, finance, and logistics. Whether it is automating document processing, monitoring production lines visually, or analysing customer feedback at scale, we tailor each solution to your sector.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">Do I need large amounts of data to get started?</h3>
            <div class="tp-faq-body">
              <p>Not necessarily. We work with your existing data and can supplement it through annotation, augmentation, or transfer learning techniques. Our team assesses your data readiness during the discovery phase and recommends the most efficient path to a working model.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">Can your models integrate with our existing systems and APIs?</h3>
            <div class="tp-faq-body">
              <p>Yes. All our NLP and Computer Vision models are deployed via secure, scalable APIs that integrate with your existing platforms, whether cloud-based or on-premise. We ensure seamless interoperability with tools like CRMs, ERPs, and custom internal applications.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">How do you ensure the accuracy and reliability of your models?</h3>
            <div class="tp-faq-body">
              <p>We evaluate every model against rigorous test datasets and apply hyperparameter tuning, cross-validation, and continuous monitoring post-deployment. Our optimisation process ensures models remain accurate and reliable as your data and business requirements evolve.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ area end -->


      
@endsection