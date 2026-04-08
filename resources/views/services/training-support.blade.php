@extends('layouts.app')

@section('content')


      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">AI Training & Support Services</h1>
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
              <h2 class="sub-title">AI Consultant</h2>
              <h3 class="sec-title-3 actova-word">
                AI Training & Support is the bridge <span>between powerful AI technology and the people who use it every day.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. Custom AI Training Programs</h3>
                <div class="tp-service-faq-body">
                  <p>Hands-on, role-specific training programs designed around your team's actual AI tools, 
                    workflows, and business goals — not generic off-the-shelf courses that miss the mark.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">500+</h3>
                        <p class="text">Professionals Trained</p>
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
                <h3 class="tp-service-faq-title">2. Prompt Engineering & AI Tool Mastery</h3>
                <div class="tp-service-faq-body">
                  <p>Train your team to get maximum output from large language models, generative AI platforms, 
                    and automation tools through structured prompt engineering and workflow integration workshops.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">4x</h3>
                        <p class="text">Productivity Boost</p>
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
                <h3 class="tp-service-faq-title">3. AI Literacy for Non-Technical Teams</h3>
                <div class="tp-service-faq-body">
                  <p>Empower your marketing, operations, HR, and finance teams to understand, evaluate, and 
                    confidently work alongside AI systems — no coding background required.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">92%</h3>
                        <p class="text">Team Adoption Rate</p>
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
                <h3 class="tp-service-faq-title">4. Ongoing Learning & Post-Training Support</h3>
                <div class="tp-service-faq-body">
                  <p>Training doesn't end at the workshop. We provide continuous access to updated learning 
                    materials, Q&A sessions, and a dedicated support channel as AI tools and best practices 
                    evolve.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">12mo</h3>
                        <p class="text">Post-Training Access</p>
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
            <p>AI Training & Support by AI Consultant equips your entire organization — from executives to 
              frontline staff — with the knowledge and confidence to leverage AI effectively. Whether you need 
              to onboard a team onto a newly deployed AI system, upskill employees on generative AI tools, or 
              build a long-term internal AI capability, our structured training programs and continuous support 
              ensure your people and your technology move forward together.</p>
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
              Empowering your team to work smarter <span>with AI, not around it.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Skills Assessment & Program Design</h3>
              <p>
                We evaluate your team's current AI knowledge, identify skill gaps, 
                and design a customized training curriculum aligned to your tools and business objectives.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Live Training & Workshops</h3>
              <p>
                We deliver interactive, hands-on training sessions — in-person or 
                remote — combining real-world use cases, live demos, and practical exercises your team applies immediately.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Ongoing Support & Knowledge Updates</h3>
              <p>
                After training, we remain available for follow-up Q&A, provide 
                updated resources as AI evolves, and track team progress to ensure lasting capability growth.
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
                  <h3 class="tp-faq-title">Who is the AI Training program designed for?</h3>
                  <div class="tp-faq-body">
                    <p>Our training programs are designed for all levels — from business executives and team 
                      leaders who need AI strategic awareness, to daily users who need hands-on tool proficiency. 
                      We tailor every program to match the role, skill level, and industry of your team members.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do participants need a technical background to join?</h3>
                  <div class="tp-faq-body">
                    <p>Not at all. A large portion of our training is built specifically for non-technical 
                      professionals. We focus on practical AI usage, critical thinking around AI outputs, 
                      and real-world application — with zero requirement for coding or data science knowledge.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can the training be customized for our specific AI tools?</h3>
                  <div class="tp-faq-body">
                    <p>Yes — this is one of our core strengths. Whether your team uses specific LLM platforms, 
                      internal AI systems, automation tools, or industry-specific AI software, we build the 
                      training curriculum directly around what your people use every day, not generic examples.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Is training delivered online, in-person, or both?</h3>
                  <div class="tp-faq-body">
                    <p>We offer full flexibility. Training can be delivered as live virtual sessions, on-site 
                      workshops at your office, or a blended hybrid format. We also provide recorded session 
                      access and self-paced learning materials for teams across different time zones.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How long does a typical training program last?</h3>
                  <div class="tp-faq-body">
                    <p>Program length varies based on your team size, skill gaps, and objectives. Focused 
                      workshops can be completed in a single day, while comprehensive upskilling programs 
                      typically run from two to eight weeks, with scheduled sessions balanced around your 
                      team's workload.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What support is available after training is complete?</h3>
                  <div class="tp-faq-body">
                    <p>Every training engagement includes 12 months of post-training support — covering access 
                      to updated learning materials, monthly Q&A sessions with our AI consultants, and a 
                      dedicated support channel where your team can ask questions as new challenges and AI 
                      developments arise.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->

@endsection