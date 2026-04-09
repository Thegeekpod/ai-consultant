@extends('layouts.app')

@section('content')


      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">Onging Support & Maintenance</h1>
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
              <h2 class="sub-title">AI Consultant</h2>
              <h3 class="sec-title-3 actova-word">
                Ongoing Support & Maintenance is the backbone <span>of keeping your AI systems reliable, secure, and always evolving.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. 24/7 AI System Monitoring</h3>
                <div class="tp-service-faq-body">
                  <p>Round-the-clock monitoring of your deployed AI systems to detect anomalies, performance drops, and 
                    infrastructure failures before they impact your business operations.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">99.9%</h3>
                        <p class="text">System Uptime</p>
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
                <h3 class="tp-service-faq-title">2. Model Retraining & Performance Tuning</h3>
                <div class="tp-service-faq-body">
                  <p>As your data evolves, so should your models. We continuously evaluate model accuracy and retrain 
                    with fresh data to ensure predictions and outputs remain sharp and business-relevant.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">3x</h3>
                        <p class="text">Faster Issue Resolution</p>
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
                <h3 class="tp-service-faq-title">3. Security Patching & Compliance Updates</h3>
                <div class="tp-service-faq-body">
                  <p>We proactively apply security patches, update dependencies, and ensure your AI infrastructure 
                    stays compliant with the latest data privacy regulations and industry standards.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Compliance Coverage</p>
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
                <h3 class="tp-service-faq-title">4. Dedicated Technical Support & Helpdesk</h3>
                <div class="tp-service-faq-body">
                  <p>Access our team of AI engineers and consultants whenever you need guidance — from debugging 
                    integration issues to advising on new feature development and capability expansion.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">&lt;2hr</h3>
                        <p class="text">Avg. Response Time</p>
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
            <p>Ongoing Support & Maintenance by <a href="/" style="text-decoration: underline; font-weight: 600;">AI Consultant</a> ensures your AI systems don't just launch- they thrive 
              long-term. Whether you're running a customer-facing recommendation engine, an internal automation pipeline, 
              or a complex predictive analytics model, our team provides the continuous oversight, fine-tuning, and 
              expert guidance needed to keep your AI investment performing at its peak as your business scales and evolves.</p>
          </div>
        </div>
      </section>
      <!-- Service area end -->


      <!-- How we work area start -->
      <section class="tp-how-work-area plr-50">
        <div class="tp-how-work-inner">
          <div class="title-wrap">
            <h2 class="sub-title">How We Work</h2>
            <h3 class="sec-title-2 esf actova-word">
              AI support that keeps your systems <span>running smarter, every day.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">System Audit & Onboarding</h3>
              <p>
                We conduct a thorough review of your existing AI infrastructure, 
                identify vulnerabilities, and establish monitoring baselines and SLAs tailored to your needs.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Active Monitoring & Iteration</h3>
              <p>
                Our team continuously tracks model performance, data drift, and 
                system health — proactively resolving issues and retraining models before problems arise.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Reporting & Strategic Review</h3>
              <p>
                Monthly performance reports and strategy sessions keep you fully 
                informed and help align your AI systems with your evolving business objectives.
              </p>
            </div>
          </div>

          <div class="tp-watch-video">
            <div class="text-wrap">
              <p>Watch Full Process Video -</p>
            </div>
            <div class="video-wrap">
              <div class="tp-video-popup-wrapper">
                <a href="https://www.youtube.com/" class="tp-video-popup">
                  <i class="fal fa-play"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- How we work area end -->


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
                  <h3 class="tp-faq-title">What does Ongoing Support & Maintenance include?</h3>
                  <div class="tp-faq-body">
                    <p>AI Consultant's support plans cover 24/7 system monitoring, model performance tracking, 
                      scheduled retraining, security patching, compliance updates, and direct access to our 
                      AI engineering team for technical assistance and strategic guidance.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How quickly does your team respond to critical issues?</h3>
                  <div class="tp-faq-body">
                    <p>For critical system failures, our average response time is under 2 hours. All support 
                      plans come with clearly defined SLAs so you always know what level of response to expect 
                      based on issue severity.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you support AI systems that were not built by AI Consultant?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We support and maintain AI systems regardless of who originally built them. Our team 
                      conducts a thorough onboarding audit to fully understand your existing architecture before 
                      taking over monitoring and maintenance responsibilities.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How often will my AI models be retrained?</h3>
                  <div class="tp-faq-body">
                    <p>Retraining schedules are customized to your data velocity and business requirements. We 
                      continuously monitor for data drift and model degradation, triggering retraining cycles 
                      automatically when performance drops below agreed thresholds — or on a scheduled basis.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can I scale my support plan as my business grows?</h3>
                  <div class="tp-faq-body">
                    <p>Absolutely. Our support tiers are fully flexible. You can upgrade your plan at any time 
                      to increase monitoring coverage, add more systems, expand SLA guarantees, or bring in 
                      additional dedicated engineering hours as your AI portfolio grows.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Will I receive regular reports on my AI system's health?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. Every client receives detailed monthly performance reports covering model accuracy 
                      metrics, uptime statistics, incidents resolved, retraining outcomes, and strategic 
                      recommendations — keeping you fully informed and in control of your AI investment.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->

@endsection