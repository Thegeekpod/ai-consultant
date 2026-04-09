@extends('layouts.app')

@section('content')


            <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">AI Strategy Consulting Services</h1>
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
                            <img src="{{ asset('assets/imgs/brand/brand-6.png') }}" alt="Strengthen Numbers- Our Client from USA">
                        </a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#">
                            <img src="{{ asset('assets/imgs/brand/brand-1.png') }}" alt="Oye Monkey- Our Client from India">
                        </a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/brand-2.png') }}" alt="DIRECTV- Our Client from USA"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/brand-3.png') }}" alt="Warner Music Group- Our Client from USA"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/brand-4.png') }}" alt="Brand Extract- Our Client from USA"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/brand-5.png') }}" alt="Verizon- Our Client from USA"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/brand-7.png') }}" alt="Weberads- Our Client from India"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/brand-8.png') }}" alt="Stands Web- Our Client from India"></a>
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
              <h2 class="sub-title">AI Strategy Consulting</h2>
              <h3 class="sec-title-3 actova-word">
                Our AI strategy consulting services guide businesses <span>from readiness assessment to implementation and efficiency.</span>
              </h3>
            </div>
            <div class="what-we-offer">Business Challenges</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. AI Readiness Assessment</h3>
                <div class="tp-service-faq-body">
                  <p>Many organizations lack clarity on their preparedness to adopt AI, including gaps in infrastructure, data, skills, and strategy. We deliver:</p>
                  <div class="body-content">
                    <div class="left-content">
                      <ul>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                            Evaluate AI readiness across technology, data, and teams
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Identify skill gaps & team AI readiness
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Define a clear AI adoption roadmap
                        </li>
                      </ul>
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
                <h3 class="tp-service-faq-title">2. AI Strategy & Operating Model</h3>
                <div class="tp-service-faq-body">
                  <p>Many businesses struggle to clearly align their AI initiatives with overall business goals and face challenges in executing them due to a lack of strategy, planning, and expertise. We provide:</p>
                    <div class="body-content">
                    <div class="left-content">
                      <ul>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                            Structured AI strategy and operating model
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Identify high-impact AI use cases
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Define a clear AI adoption roadmap
                        </li>
                      </ul>
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
                <h3 class="tp-service-faq-title">3. AI Value Creation</h3>
                <div class="tp-service-faq-body">
                  <p>Identifying the right AI opportunities that deliver real business value and cost savings can be complex for businesses to determine. We deliver:</p>
                  <div class="body-content">
                    <div class="left-content">
                      <ul>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                            Discover growth and transformation opportunities
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Improve performance with AI-driven insights
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Build a clear value-driven AI roadmap
                        </li>
                      </ul>
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
                <h3 class="tp-service-faq-title">4. AI Capability & Risk Assessment</h3>
                <div class="tp-service-faq-body">
                  <p>Organizations face challenges in evaluating AI capabilities, managing risks, and ensuring compliance. We perform full analysis and deliver:</p>
                  <div class="body-content">
                    <div class="left-content">
                      <ul>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                            Assess AI capabilities, technology, and investments
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Strengthen AI governance and transparency
                        </li>
                        <li>
                          <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 8L6 12L14 4" stroke="#70ed36ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </span>
                          Mitigate risks and build a trusted AI ecosystem
                        </li>
                      </ul>
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
            <h2 class="title">What AI Consultant Do for You</h2>
            <p>We offer end-to-end AI strategy consulting from <a href="/ai-readiness-assessment" style="font-weight:600; text-decoration:underline;">AI Readiness Assessment</a> and strategic <a href="/services/ai-roadmap-planning" style="font-weight:600; text-decoration:underline;">planning roadmap</a> to value creation and capability assessment- enabling businesses to seamlessly adopt, integrate, and scale AI for maximum impact.</p>
          </div>
        </div>
      </section>
      <!-- Service area end -->


        <section class="tp-service-area pb-120 pt-120 plr-50">
        <div class="tp-service-inner">
            <div class="title-wrap">
                <h2 class="sec-title actova-word">
                    We design <span> infrastructure </span> & Integrate artificial intelligence
                    systems that <span>solve real-world problems.</span>
                </h2>
                <div class="tp-btn-animate">
                    <a href="/services/ai-readiness-assessment" class="tp-btn-one">
                        <span class="btn-wrap">
                            <span class="text-one">AI Readiness Assessment</span>
                            <span class="text-two">AI Readiness Assessment</span>
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
                    <div class="card-inner" data-background="/assets/imgs/service/shape-1.png">
                        <div class="content">
                            <img src="/assets/imgs/service/service-icon-1.png" alt="Image" class="icon">
                            <h3 class="title">
                                <a href="/services/digital-transformation">AI Strategy & AI Consulting.</a>
                            </h3>
                            <p>
                                Strategic AI consulting- identifying high-impact use cases, validating feasibility, and
                                building your long-term AI roadmap.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/services/digital-transformation" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
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
                    <div class="card-inner" data-background="/assets/imgs/service/service-icon-2.png">
                        <div class="content">
                            <h3 class="title">
                                <a href="/services/custom-ai-model">Custom AI <br>
                                    Product Dev.</a>
                            </h3>
                            <p>
                                Full-cycle development of AI-native SaaS, internal tools, intelligent dashboards, and
                                seamless integrations.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/services/custom-ai-model" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
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
                                <a href="/solutions/workflow-automation">Business Process <br>
                                    Automation</a>
                            </h3>
                            <p>
                                End-to-end automation of repetitive workflows, internal operations and cross-department
                                processes- powered by practical AI that reduces manual work.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/solutions/workflow-automation" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
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
                    <div class="card-inner" data-background="/assets/imgs/service/service-icon-4.png">
                        <div class="content">
                            <img src="/assets/imgs/service/shape-2.png" alt="Image" class="shape">
                            <h3 class="title">
                                <a href="/solutions/ai-chatbots">AI-Powered Customer Experience</a>
                            </h3>
                            <p>
                                Intelligent chat, voice, helpdesk and conversational systems that deliver 24/7 support,
                                faster resolutions, and more human-like customer interactions.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/solutions/ai-chatbots" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
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
            <h3 class="tp-faq-title">What is AI Strategy Consulting?</h3>
            <div class="tp-faq-body">
              <p>AI strategy consulting is the process of working with a specialist to identify where artificial intelligence can create the most measurable value in your business, and then building a clear, prioritized roadmap to get there. Unlike generic technology advice, AI strategy consulting is grounded in your specific data, workflows, team capabilities, and business objectives — not a one-size-fits-all framework.</p>
              <p>A good AI strategy covers four areas: use case identification (where AI will deliver ROI), data readiness (whether your data can actually support AI), technology selection (which tools, models, or platforms are the right fit), and change management (how to get your team to adopt and trust AI systems). Without a strategy, most businesses either invest in the wrong AI tools or fail to see returns from the right ones.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">Why Does My Business Need an AI Strategy Before Building AI?</h3>
            <div class="tp-faq-body">
              <p>Building AI without a strategy is one of the most expensive mistakes a business can make. Without a clear strategy, companies often automate the wrong processes, buy tools that don't integrate with their existing stack, or deploy models trained on poor-quality data — all of which produce zero ROI or actively create new problems.</p>
              <p>An AI strategy ensures every rupee or dollar you invest in AI is directed toward initiatives with proven business impact. It defines success metrics upfront, identifies the highest-value use cases first, flags data and infrastructure gaps before they become costly delays, and aligns your leadership, technical teams, and vendors around a single plan. Businesses that invest in AI strategy before development consistently achieve faster deployment timelines and stronger returns than those who jump straight into building.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What Does Your AI Strategy Consulting Process Look Like?</h3>
            <div class="tp-faq-body">
              <p>Our AI strategy consulting engagement follows a structured five-step process designed to move you from uncertainty to a clear, executable AI roadmap:</p>
              <ul>
                <li><strong>Discovery & Business Audit</strong> — We map your current operations, workflows, pain points, and existing technology stack to understand where AI can realistically create value.</li>
                <li><strong>AI Opportunity Assessment</strong> — We identify and score potential AI use cases based on business impact, implementation complexity, data availability, and time-to-value.</li>
                <li><strong>Data Readiness Review</strong> — We assess the quality, volume, and structure of your existing data to determine what's needed to support each identified use case.</li>
                <li><strong>AI Roadmap Development</strong> — We build a prioritized, phased implementation plan with clear milestones, resource requirements, technology recommendations, and success metrics.</li>
                <li><strong>Stakeholder Alignment & Handoff</strong> — We present the strategy to your leadership and technical teams, answer questions, and ensure full organizational alignment before any development begins.</li>
              </ul>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">How Long Does an AI Strategy Consulting Engagement Take?</h3>
            <div class="tp-faq-body">
              <p>The timeline for an AI strategy consulting engagement depends on the size and complexity of your business. For most small to mid-sized businesses, a complete AI strategy — from initial discovery to final roadmap delivery takes between 2 to 4 weeks. For larger enterprises with multiple departments, complex data environments, or regulatory requirements, the process typically takes 4 to 8 weeks.</p>
              <p>We structure every engagement to move as fast as your team can move. The biggest variable is usually internal availability- how quickly key stakeholders can participate in discovery sessions and review drafts. We provide a clear timeline with defined checkpoints at the start of every engagement so there are no surprises.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">How is AI Strategy Consulting Different from AI Development?</h3>
            <div class="tp-faq-body">
              <p>AI strategy consulting and AI development are two distinct phases of an AI journey, and confusing them is a common and costly mistake. AI strategy consulting comes first- it answers the questions: <em>Should we use AI? Where? What kind? In what order? With what data?</em> It produces a plan, a roadmap, and a set of validated business cases. No code is written during strategy consulting.</p>
              <p>AI development comes second, it takes the validated use cases from the strategy phase and builds, trains, tests, and deploys the actual AI systems. Development without prior strategy often results in building the wrong thing. Strategy without subsequent development produces a plan that never gets executed. We offer both services, and many clients engage us for strategy first, then move directly into development with full context already established.</p>
            </div>
          </div>

          <div class="tp-faq-item style-2">
            <h3 class="tp-faq-title">What Do I Get at the End of an AI Strategy Consulting Engagement?</h3>
            <div class="tp-faq-body">
              <p>At the conclusion of our AI strategy consulting engagement, you receive a comprehensive AI Strategy & Roadmap document that is ready to act on immediately. Specifically, you get:</p>
              <ul>
                <li><strong>Prioritized AI Use Case Register</strong> — a scored list of every identified AI opportunity ranked by ROI potential and implementation feasibility.</li>
                <li><strong>Data Readiness Report</strong> — a clear assessment of your current data assets, gaps, and the steps needed to make your data AI-ready.</li>
                <li><strong>Technology Recommendations</strong> — specific platform, tool, and model recommendations suited to your use cases, budget, and existing infrastructure.</li>
                <li><strong>Phased Implementation Roadmap</strong> — a 6 to 18 month execution plan with defined phases, resource requirements, estimated timelines, and success metrics for each initiative.</li>
                <li><strong>Executive Presentation</strong> — a stakeholder-ready summary of the strategy, business case, and recommended next steps for leadership sign-off.</li>
              </ul>
              <p>Everything we deliver is vendor-neutral, jargon-free, and designed to be understood and used by both your business leadership and your technical team.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ area end -->


      
@endsection