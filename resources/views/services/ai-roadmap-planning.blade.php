@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset('assets/imgs/hero/service-bg.jpg') }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title">AI Strategy Roadmap</h1>
              <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> AI Roadmap & Planning </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->

      <br>
       <!-- How we work area start -->
      <section class="tp-how-work-area plr-50">
        <div class="tp-how-work-inner">
          <div class="title-wrap">
            <h2 class="sub-title">How We Work</h2>
            <h3 class="sec-title-2 esf actova-word">
              We design future-ready AI <span>strategy roadmap for businesses.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Discovery & Planning</h3>
              <p>
                We analyze your core business objectives, existing systems, and data 
                landscape to identify the most valuable AI opportunities.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Solution Development</h3>
              <p>
                After defining the use cases, we build the complete AI solution including
                 data pipelines, model development, and system integration.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Deployment & Optimization</h3>
              <p>
                We deploy the solution and continuously monitor, refine, and improve performance 
                as your data and business needs evolve.
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

            <br>

        <div class="tp-cta-wrapper">
            <div class="cta-content">
              <img src="{{ asset("assets/imgs/others/cta-icon.png") }}" alt="Icon">
              <p>
              Get a Free AI strategy roadmap today.
              </p>
            </div>
            <div class="cta-btn tp-btn-animate">
              <a href="{{ route("contact") }}" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Connect With Us</span>
                  <span class="text-two">Connect With Us</span>
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



      <!-- Service area start -->
      <section class="tp-service-details-area pt-140 pb-80">
        <div class="tp-service-details-header">
          <div class="container">
            <div class="title-wrap">
              <h2 class="sub-title">Our Capabilities</h2>
              <h3 class="sec-title-3 actova-word">
                We build your long-term strategic foundation <span>for AI Success</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. Marketing Automation</h3>
                <div class="tp-service-faq-body">
                  <p>We use AI-powered tools to automate marketing campaigns, targeting, and increase engagement with the audience.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">98%</h3>
                        <p class="text">Performance Accuracy</p>
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
                <h3 class="tp-service-faq-title">2. Tech Infrastructure</h3>
                <div class="tp-service-faq-body">
                  <p>We develop flexible and scalable infrastructure capable of supporting AI tools and future technological growth.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">98%</h3>
                        <p class="text">Performance Improvement</p>
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
                <h3 class="tp-service-faq-title">3. Operational Efficiency</h3>
                <div class="tp-service-faq-body">
                  <p>We use AI-driven automation to streamline processes, improve productivity, and reduce operational costs.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">98%</h3>
                        <p class="text">Model Accuracy</p>
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
                <h3 class="tp-service-faq-title">4. AI Capability</h3>
                <div class="tp-service-faq-body">
                  <p>We support organizations in developing AI skills while encouraging a culture of innovation and continuous learning.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">98%</h3>
                        <p class="text">Reliable Results</p>
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
            <h2 class="title">Core Drivers</h2>
            <p>A successful AI strategy roadmap is built on the right combination of data, technology, people, 
              and processes. By strengthening these core areas, organizations can create a solid environment for
               AI initiatives to deliver real business value. Focusing on high-quality data, deep customer insights, efficient operations, 
               a culture of innovation, scalable technology infrastructure, and the right <a href="/"><strong>AI consulting agency</strong></a> enables AI solutions to be 
               implemented effectively and scaled for long-term growth.</p>
          </div>
        </div>
      </section>
      <!-- Service area end -->

       <section class="tp-project-result-area pt-120 pb-120">
        <div class="container">
          <div class="tp-project-result">
            <h2 class="sec-title-2">AI Strategy for Results & Impact</h2>
            <p>An effective AI strategy roadmap identifies the gap and find where AI can create measurable business impact and builds
               a clear execution path. Instead of experimenting without direction, we focus on high-value use cases, integrate AI into
                existing workflows, and scale solutions that improve revenue, efficiency, and decision quality.</p>
            <p><strong>Alignment with Business Objectives:</strong> AI initiatives are mapped to specific outcomes such as revenue growth, cost reduction, customer experience improvement, and operational efficiency.</p>
            <p><strong>Investment in High-Impact Use Cases:</strong> Resources are focused on AI applications that solve real operational challenges instead of scattered experimentation.</p>
            <p><strong>Reduced Implementation Risk:</strong> Structured planning around data readiness, infrastructure, and governance reduces the chances of failed pilots or stalled AI projects.</p>
            <p><strong>Faster Deployment of AI Solutions:</strong> A clear roadmap shortens the journey from idea to production by prioritizing practical models and integrating them into existing systems.</p>
            <p><strong>Better Decision Intelligence:</strong> AI systems analyze large volumes of operational and customer data to identify patterns, generate forecasts, and provide recommendations for faster and more informed decisions.</p>
            
            <div class="result-wrapper">
              <div class=""><img src="{{ asset('assets/imgs/project/project-details-4.jpg') }}" alt="Image"></div>
              <div class="result-box-wrap">
                <div class="result-box">
                  <div class="icon"><img src="{{ asset('assets/imgs/project/icon-5.png') }}" alt=""></div>
                  <div class="content">
                    <h3 class="tp-counter-active number">
                      90%
                    </h3>
                    <p class="text">Improved Operational Efficiency.</p>
                  </div>
                </div>
                <div class="result-box">
                  <div class="icon"><img src="{{ asset('assets/imgs/project/icon-4.png') }}" alt=""></div>
                  <div class="content">
                    <h3 class="tp-counter-active number">
                      40%
                    </h3>
                    <p class="text">Cost Reduction in 3 Month Timeframe.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Result section end -->

       <br>

        <div class="tp-cta-wrapper">
            <div class="cta-content">
              <img src="{{ asset("assets/imgs/others/cta-icon.png") }}" alt="Icon">
              <p>
              Get a Free AI strategy roadmap today.
              </p>
            </div>
            <div class="cta-btn tp-btn-animate">
              <a href="{{ route("contact") }}" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Connect With Us</span>
                  <span class="text-two">Connect With Us</span>
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
                4.8 Average Rating
              </p>
              <h2 class="sec-title-2">Frequently Ask & <br> Question</h2>
            </div>
            <div class="tp-faq-wrapper-2">
              <div class="tp-faq-list">
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What is an AI strategy roadmap?</h3>
                  <div class="tp-faq-body">
                    <p>An AI strategy roadmap is a structured plan that outlines how an organization will adopt, 
                      implement, and scale artificial intelligence to achieve specific business objectives.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Why does a business need an AI strategy roadmap?</h3>
                  <div class="tp-faq-body">
                    <p>An AI strategy roadmap helps organizations prioritize the right AI use cases, align 
                      initiatives with business goals, and avoid investing in technologies that do not deliver measurable value.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What are the key components of an AI strategy roadmap?</h3>
                  <div class="tp-faq-body">
                    <p>A typical roadmap includes business objectives, data readiness, technology infrastructure, governance 
                      policies, AI use cases, and a clear implementation timeline.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How does an AI strategy roadmap reduce implementation risk?</h3>
                  <div class="tp-faq-body">
                    <p>By evaluating data availability, infrastructure, and operational readiness before deployment, 
                      the roadmap helps organizations avoid failed AI pilots and misaligned investments.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can small and mid-sized businesses benefit from an AI strategy roadmap?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. A well-defined roadmap can help smaller organizations identify practical AI applications that 
                      improve efficiency, customer experience, and decision-making without excessive costs.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What happens after the AI strategy roadmap is created?</h3>
                  <div class="tp-faq-body">
                    <p>After the roadmap is finalized, organizations begin implementing prioritized AI use cases, integrating
                       AI solutions into existing systems, and continuously optimizing performance based on business outcomes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


      
@endsection