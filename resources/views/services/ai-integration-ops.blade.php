@extends('layouts.app')

@section('content')

      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">AI Integration & Ops: Easy Deployment Services</h1>
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
              <h2 class="sub-title">AI Operations</h2>
              <h3 class="sec-title-3 actova-word">
                Seamlessly integrate AI into your business operations <span>and keep it running at full performance.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. AI Workflow Integration</h3>
                <div class="tp-service-faq-body">
                  <p>We embed AI capabilities directly into your existing business workflows, connecting intelligent models to the tools, platforms, and processes your teams use daily to drive automation, reduce manual effort, and accelerate decision-making across your organisation.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">60%</h3>
                        <p class="text">Reduction in Manual Tasks</p>
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
                <h3 class="tp-service-faq-title">2. End-to-End AI Pipeline Management</h3>
                <div class="tp-service-faq-body">
                  <p>We design and manage complete AI pipelines from data ingestion and preprocessing through to model inference and output delivery, ensuring every stage of your AI operation runs reliably, efficiently, and at the scale your business demands.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">99%</h3>
                        <p class="text">Pipeline Reliability</p>
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
                <h3 class="tp-service-faq-title">3. Cloud & Hybrid AI Infrastructure</h3>
                <div class="tp-service-faq-body">
                  <p>We architect and manage cloud, on-premise, and hybrid AI infrastructure across AWS, Azure, and GCP, ensuring your AI systems are scalable, secure, and optimised for cost and performance regardless of where your data lives or your operations run.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">40%</h3>
                        <p class="text">Avg. Infrastructure Cost Saving</p>
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
                <h3 class="tp-service-faq-title">4. Operational AI Governance & Compliance</h3>
                <div class="tp-service-faq-body">
                  <p>We implement governance frameworks that ensure your AI systems operate transparently, ethically, and in line with regulatory requirements, covering audit trails, access controls, explainability reporting, and compliance with standards such as GDPR and ISO guidelines.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Compliance Traceability</p>
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
            <p>AI Integration and Ops bridges the gap between AI capability and everyday business execution. Whether you are connecting predictive models to your supply chain, embedding intelligent automation into customer service workflows, or managing the operational health of multiple AI systems across departments, we ensure your AI runs reliably, scales efficiently, and delivers measurable value from day one.</p>
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
              AI operations, delivered with <span>clarity and control.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Discover</h3>
              <p>
                We map your existing systems, data flows, and operational processes to identify where AI integration will deliver the greatest efficiency gains and business impact.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Design & Build</h3>
              <p>
                We architect and implement your AI integration layer, connecting models, pipelines, and platforms into a cohesive operational system built for reliability and scale.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Optimise</h3>
              <p>
                We monitor operational performance, resolve bottlenecks, and continuously refine your AI systems to ensure they remain efficient, compliant, and aligned with evolving business needs.
              </p>
            </div>
          </div>

          <div class="tp-watch-video">
            <div class="text-wrap">
              <p>Watch Full Process Video -</p>
            </div>
            <div class="video-wrap">
              <div class="tp-video-popup-wrapper">
                <a href="https://www.youtube.com/watch?v=CGpJtO914zY" class="tp-video-popup"><i
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
                  <h3 class="tp-faq-title">What does AI Integration & Ops involve?</h3>
                  <div class="tp-faq-body">
                    <p>AI Integration and Ops covers the full process of embedding AI models into your business systems and managing their day-to-day operation. This includes connecting AI to existing tools and workflows, managing data pipelines, overseeing infrastructure, and ensuring models perform reliably in a live production environment.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Which business systems can AI be integrated with?</h3>
                  <div class="tp-faq-body">
                    <p>We integrate AI with a wide range of business systems including CRMs, ERPs, data warehouses, customer support platforms, e-commerce systems, and custom internal applications. If your system supports API connectivity or data access, we can connect AI to it effectively.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you manage AI infrastructure on an ongoing basis?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We offer ongoing operational management of your AI infrastructure including uptime monitoring, cost optimisation, scaling adjustments, and incident response. Our team acts as an extension of yours, keeping your AI systems healthy and performant at all times.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How do you ensure AI operations remain compliant with regulations?</h3>
                  <div class="tp-faq-body">
                    <p>We implement governance frameworks from the outset, covering data access controls, audit logging, model explainability, and alignment with regulations such as GDPR. Compliance is built into the operational architecture rather than added as an afterthought.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can you support multiple AI systems running simultaneously?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We have experience managing multi-model AI environments where several systems operate in parallel across different business functions. We ensure each pipeline is isolated, monitored independently, and collectively optimised to avoid resource conflicts and performance degradation.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What level of support do you provide post-integration?</h3>
                  <div class="tp-faq-body">
                    <p>We provide flexible post-integration support ranging from scheduled maintenance and performance reviews to fully managed AI operations. Our team remains available to address issues, implement improvements, and scale your AI capabilities as your business requirements grow and evolve.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


@endsection