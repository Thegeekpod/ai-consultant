@extends('layouts.app')

@section('content')

            <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">Digital Transformation Consulting</h1>
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
              <h2 class="sub-title">Transformation Consulting</h2>
              <h3 class="sec-title-3 actova-word">
                We blend human expertise with technology and AI, <span>help companies accelerate digital transformation.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">
            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. AI Strategy & Development</h3>
                <div class="tp-service-faq-body">
                  <p>We are elite <a href="/services/ai-development-services-company" style="font-weight: bold; text-decoration: underline;">AI developers</a> tailored building automation for your business needs- from predictive models to intelligent systems. </p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100+</h3>
                        <p class="text">Businesses Empowered</p>
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
                <h3 class="tp-service-faq-title">2. Data & Analytics Transformation</h3>
                <div class="tp-service-faq-body">
                  <p>Leverage AI-driven analytics to turn data into actionable insights. We build robust data ecosystems that support real-time reporting, forecasting, and smarter strategies.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">98%</h3>
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
                <h3 class="tp-service-faq-title">3. Automation & AI Agents</h3>
                <div class="tp-service-faq-body">
                  <p><a href="/solutions/workflow-automation" style="font-weight: bold; text-decoration: underline;">Workflow automation</a> with AI-powered solutions, including <a href="/solutions/ai-chatbots" style="font-weight: bold; text-decoration: underline;">AI chatbots</a> and AI callbots for customer support, lead handling, and operations. </p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100+</h3>
                        <p class="text">Businesses Empowered</p>
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
                <h3 class="tp-service-faq-title">4. AI Integration & AI Ops</h3>
                <div class="tp-service-faq-body">
                  <p>We integrate AI solutions into your existing systems and ensure smooth, ongoing operations. From deploying to performance and optimizing models, we keep your AI ecosystem efficient.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">98%</h3>
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
            <h2 class="title">While Others Claim, We Make It Happen</h2>
            <p>Digital transformation requires more than intent- it demands a clear vision and the right execution strategy. As the best <a href="/" style="font-weight: bold; text-decoration: underline;">AI Consulting</a> experts, we help 
              businesses move beyond planning by implementing scalable digital and AI-driven solutions. By combining technology with human 
              capabilities, we enable continuous innovation, agility, and growth. </p>
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
              Our Approach to Digital Transformation, <span>The Right Efforts.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Assess & Define Vision</h3>
              <p>
                We evaluate your current capabilities across people, technology, and data to align transformation with clear business goals and AI-driven opportunities.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Build & Scale</h3>
              <p>
                We implement AI-powered solutions from MVPs to full-scale deployment that deliver quick wins, measurable value, and continuous innovation.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Agile, Talent & Governance</h3>
              <p>
                We transform ways of working with agile models, upskill teams, and establish strong governance to ensure sustainable, outcome-driven growth.
              </p>
            </div>
          </div>
          <div class="tp-watch-video">
            <div class="text-wrap">
              <p>Start Your Transformation Journey</p>
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

              <!-- Team area start -->
      <section class="tp-team-area pt-140 pb-140">
        <div class="tp-container">
          <div class="tp-team-inner">
            <div class="tp-ap-team-title-wrap">
              <h3 class="sec-title-2 actova-word">
                Meet AI Consulting Experts
              </h3>
            </div>
            <div class="tp-team-grid">
              <div class="tp-team-card tp-fade-animation" data-delay="0.6">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/tapas-d-paul.webp") }}" alt="Team Member">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Tapas Paul')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Tapas Paul</a></h3>
                <p>AI Consultant</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="0.8">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team//supriyo-day.webp") }}" alt="AI Consultant">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Supriyo Dey')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Supriyo Dey</a></h3>
                <p>AI Consultant</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="1">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/pradipta-bhuia.webp") }}" alt="AI Developer">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Pradipta Bhuian')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Pradipta Bhuian</a></h3>
                <p>AI Consultant</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="1.2">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/jyoti-mishra.webp") }}" alt="AI Consultant">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Jyoti Mishra')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Jyoti Mishra</a></h3>
                <p>AI Consultant</p>
              </div>
            </div>
          </div>
        </div>
      </section>



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
                  <h3 class="tp-faq-title">Why is digital transformation important for businesses today?</h3>
                  <div class="tp-faq-body">
                    <p>Digital transformation enables companies to stay competitive by leveraging AI, automation, and data-driven insights to adapt quickly to changing market demands and customer expectations.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How does AI play a role in digital transformation?</h3>
                  <div class="tp-faq-body">
                    <p>AI powers automation, predictive analytics, chatbots, and callbots, helping businesses make smarter decisions, reduce costs, and enhance customer interactions. In 2026, AI has become an integrated part of businesses to scale and grow efficiently. </p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What are the key areas involved in digital transformation?</h3>
                  <div class="tp-faq-body">
                    <p>Core areas include AI development, data and analytics, process automation, cloud modernization, and integrating AI solutions like chatbots and callbots into business workflows. talk to our experts to know about your business-specific use cases. </p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How long does a digital transformation project take?</h3>
                  <div class="tp-faq-body">
                    <p>The timeline varies depending on business size and goals, but most transformations are implemented in phases- starting with quick wins and scaling over time. We work with a proactive and efficient team to deliver your projects at the earliest with 100% guarantee of client satisfaction.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How do you measure the success of digital transformation?</h3>
                  <div class="tp-faq-body">
                    <p>Success is measured through KPIs such as improved efficiency, cost savings, increased revenue, better customer engagement, and ROI from AI-driven initiatives.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you provide training and support?</h3>
                  <div class="tp-faq-body">
                    <p>Yes, we provide initial training and support, you can also opt for dedicated training from our experts regarding AI use cases, management, and efficiency.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


      
@endsection