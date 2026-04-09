@extends('layouts.app')

@section('content')

      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">AI Corporate Training Programme</h1>
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
              <h2 class="sub-title">AI Training for Teams</h2>
              <h3 class="sec-title-3 actova-word">
                Equip your workforce with the AI skills <span>needed to lead in a data-driven world.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. AI Literacy & Awareness Training</h3>
                <div class="tp-service-faq-body">
                  <p>We deliver accessible, jargon-free AI training for non-technical business teams, covering the fundamentals of machine learning, generative AI, and data-driven decision making, helping your entire organisation understand and confidently engage with AI in their roles.</p>
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
                <h3 class="tp-service-faq-title">2. Hands-On Technical AI Workshops</h3>
                <div class="tp-service-faq-body">
                  <p>We run practical, project-based workshops for data scientists, engineers, and developers covering model development, NLP, computer vision, MLOps, and responsible AI practices using real tools such as Python, TensorFlow, PyTorch, and cloud AI platforms.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">92%</h3>
                        <p class="text">Learner Satisfaction Rate</p>
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
                <h3 class="tp-service-faq-title">3. Custom AI Upskilling Programmes</h3>
                <div class="tp-service-faq-body">
                  <p>We design bespoke multi-week upskilling programmes tailored to your industry, team structure, and AI maturity level, covering everything from data strategy and model evaluation to deployment pipelines and AI governance, structured around your specific business objectives.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Bespoke Curriculum</p>
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
                <h3 class="tp-service-faq-title">4. AI Leadership & Strategy Coaching</h3>
                <div class="tp-service-faq-body">
                  <p>We coach executives, heads of product, and senior decision-makers on how to build and lead AI-driven organisations, covering AI strategy, responsible adoption, vendor evaluation, ROI measurement, and how to foster a data-literate culture from the top down.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">200+</h3>
                        <p class="text">Leaders Coached</p>
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
            <p>AI Corporate Training empowers businesses to close the AI skills gap from within. Whether you are upskilling a team of developers to work with modern ML frameworks, training business analysts to interpret AI-driven insights, or preparing leadership to make confident AI investment decisions, we deliver structured, practical, and outcome-focused learning programmes that create lasting capability across your organisation.</p>
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
              AI training, delivered with <span>purpose and impact.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Discover</h3>
              <p>
                We assess your team's current AI knowledge, identify skills gaps, and align training objectives with your broader business goals and AI adoption roadmap.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Design & Build</h3>
              <p>
                We design a tailored training curriculum covering the right topics, formats, and difficulty levels for each team, from executive workshops to hands-on technical deep dives.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Optimise</h3>
              <p>
                We gather feedback, measure learning outcomes, and refine the programme over time to ensure your teams continue to grow their AI capabilities as the technology evolves.
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
                  <h3 class="tp-faq-title">Who is AI Corporate Training suitable for?</h3>
                  <div class="tp-faq-body">
                    <p>Our training programmes are designed for all levels of an organisation, from non-technical business teams and analysts who need AI literacy, to data scientists and engineers requiring advanced technical skills, and senior leaders who need strategic AI knowledge to drive adoption and investment decisions confidently.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can training be customised to our industry and tools?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. Every programme we deliver is tailored to your industry context, team roles, and the specific AI tools and frameworks your organisation uses or plans to adopt. We avoid generic content and focus on practical, relevant learning that your teams can apply immediately in their day-to-day work.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you offer both in-person and remote training?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We deliver training in-person at your offices, fully remote via live virtual sessions, or in a hybrid format depending on your team's location and preferences. All formats are interactive and include hands-on exercises, real-world case studies, and post-session resources for continued learning.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How long does a typical corporate AI training programme take?</h3>
                  <div class="tp-faq-body">
                    <p>Programme length varies depending on the scope and depth required. We offer focused one-day workshops for awareness-level training, multi-day intensives for technical teams, and structured multi-week upskilling programmes for organisations looking to build lasting internal AI capability across departments.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Will participants receive certifications or learning materials?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. All participants receive comprehensive learning materials, practical exercises, and reference guides they can use beyond the training. For structured programmes, we also issue certificates of completion that participants can use to demonstrate their AI skills development professionally.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How do you measure the impact of the training?</h3>
                  <div class="tp-faq-body">
                    <p>We assess learning outcomes before and after each programme using knowledge checks, practical assessments, and participant feedback surveys. For longer engagements, we also work with your team to track how newly acquired AI skills are being applied on the job and where further development may be needed.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


@endsection