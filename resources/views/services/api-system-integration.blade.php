@extends('layouts.app')

@section('content')

      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">AI Powered Integration<br> and Business APIs</h1>
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
              <h2 class="sub-title">AI Integration</h2>
              <h3 class="sec-title-3 actova-word">
                Connect, automate, and scale with <span>AI-powered APIs built for Your Business.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. Custom AI API Development</h3>
                <div class="tp-service-faq-body">
                  <p>We design and build secure, scalable APIs that expose your AI models to internal tools, third-party platforms, and customer-facing applications with low latency and high reliability.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">99%</h3>
                        <p class="text">API Uptime</p>
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
                <h3 class="tp-service-faq-title">2. Enterprise System Integration</h3>
                <div class="tp-service-faq-body">
                  <p>We integrate AI capabilities directly into your existing enterprise systems including CRMs, ERPs, HRMs, and data warehouses, enabling seamless data flow and intelligent automation across your organisation.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">3x</h3>
                        <p class="text">Faster Workflows</p>
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
                <h3 class="tp-service-faq-title">3. Real-Time Inference Pipelines</h3>
                <div class="tp-service-faq-body">
                  <p>We build and deploy real-time inference pipelines that deliver instant AI-driven responses, whether for fraud detection, recommendation engines, predictive alerts, or live data classification at scale.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">&lt;50ms</h3>
                        <p class="text">Inference Latency</p>
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
                <h3 class="tp-service-faq-title">4. Third-Party AI Service Integration</h3>
                <div class="tp-service-faq-body">
                  <p>We integrate leading AI services including OpenAI, Google Vision, AWS Rekognition, and Azure Cognitive Services into your product ecosystem, reducing development time while maximising AI capability from day one.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">50+</h3>
                        <p class="text">Integrations Delivered</p>
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
            <p>AI Powered Integration and Business APIs enable organisations to connect intelligent models directly into the systems they already use. From automating data handoffs between platforms to exposing trained models via RESTful APIs, we ensure your AI investments deliver real operational value, at speed and scale, without disrupting existing infrastructure.</p>
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
              AI integration, delivered with <span>precision and speed.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Discover</h3>
              <p>
                We audit your existing systems, data flows, and integration points to identify where AI-powered APIs will deliver the greatest business impact.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Design & Build</h3>
              <p>
                We architect secure API layers and integration pipelines, connecting your AI models to the platforms, tools, and workflows your teams rely on daily.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Optimise</h3>
              <p>
                Post-deployment, we monitor performance, reduce latency, and iterate on integrations to ensure your APIs scale reliably as your business grows.
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
                  <h3 class="tp-faq-title">What is AI Powered API Integration?</h3>
                  <div class="tp-faq-body">
                    <p>AI Powered API Integration connects trained machine learning and AI models to your existing business systems via secure APIs, enabling real-time intelligent automation, data exchange, and decision-making across your entire technology stack.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Which business systems can you integrate with?</h3>
                  <div class="tp-faq-body">
                    <p>We integrate with a wide range of platforms including CRMs like Salesforce, ERPs like SAP and Oracle, data warehouses, custom internal tools, and third-party SaaS products. If your system exposes an API or webhook, we can connect AI to it.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How do you ensure API security and data privacy?</h3>
                  <div class="tp-faq-body">
                    <p>All APIs are built with industry-standard security practices including OAuth 2.0 authentication, end-to-end encryption, rate limiting, and role-based access controls. We also ensure compliance with relevant data privacy regulations such as GDPR throughout the integration process.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can your APIs handle high volumes of requests in real time?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. Our integration pipelines are built for scale on cloud infrastructure such as AWS, Azure, and GCP. We use load balancing, auto-scaling, and caching strategies to maintain low latency and high availability even under heavy traffic loads.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you support both cloud and on-premise deployments?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We support cloud, on-premise, and hybrid deployment models depending on your infrastructure requirements and data governance policies. Our team will recommend the most suitable architecture during the discovery phase.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What ongoing support do you provide after deployment?</h3>
                  <div class="tp-faq-body">
                    <p>We provide continued monitoring, performance optimisation, and maintenance post-deployment. As your data volumes grow or business requirements change, we update and retune the integration layer to ensure your APIs remain reliable, accurate, and efficient.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


@endsection