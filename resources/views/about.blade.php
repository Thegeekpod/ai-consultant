@extends('layouts.app')

@section('content')

      <!-- Hero area start -->
      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset("assets/imgs/hero/about-bg.jpg") }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title">About AI Consultant</h1>
              <p class="tp-breadcrumb"><a href="{{ route("home") }}">Home</a> <span></span> About Company</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->


      <!-- About us area start -->
      <section class="tp-about-area pt-150">
        <div class="tp-about-wrapper">
          <div class="tp-about-top plr-50">
            <h2 class="sub-title">Who We Are</h2>
            <h2 class="sec-title actova-word">
              We are a leading AI consulting agency empowering organizations with
               <span>intelligent AI-powered systems.</span>
            </h2>
          </div>
          <div class="tp-about-bottom plr-50">
            <div class="tp-user-box">
              <div class="images">
                <img src="{{ asset("assets/imgs/about/man-2.png") }}" alt="User">
                <img src="{{ asset("assets/imgs/about/man.png") }}" alt="User">
                <img src="{{ asset("assets/imgs/about/man-3.png") }}" alt="User">
              </div>
              <div class="text">
                <p><span>100+</span> businesses empowered with AI.</p>
              </div>
            </div>
            <div class="content-wrap">
              <div class="tp-counter-wrapper-2">
                <h3 class="tp-counter-active number">
                  4<span class="suffix">+</span>
                </h3>
                <p class="text">
                  Years of commitment & excellence to quality services.
                </p>
              </div>
              <div class="content">
                <h3 class="text">
                  We Help Businesses Unlock The True Potential of Artificial Intelligence.
                </h3>
                <p>
                  Whether you're a growing startup or an established enterprise, we help you unlock new 
                  possibilities, accelerate automation, and stay ahead in a fast-moving world
                  with AI-first solutions designed for real-world impact.
                </p>
                <div class="btn-wrapper tp-btn-animate">
                  <a href="{{ route("service") }}" class="tp-btn-one">
                    <span class="btn-wrap">
                      <span class="text-one">Discover More</span>
                      <span class="text-two">Discover More</span>
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
          </div>
        </div>
      </section>
      <!-- About us area end -->


      <!-- Text Slider Start -->
      <div class="tp--marquee-text-area image-trail-animation pt-120 pb-120">
        <div class="tp--marquee-text-inner" aria-hidden="true">
          <div class="tp--marquee-text">Artificial Intelligence</div>
          <div class="tp--marquee-text separator-img">
            <img src="{{ asset("assets/imgs/marquee/text-separator.png") }}" alt="Image">
          </div>
          <div class="tp--marquee-text">Neural Network</div>
          <div class="tp--marquee-text separator-img">
            <img src="{{ asset("assets/imgs/marquee/text-separator.png") }}" alt="Image">
          </div>
          <div class="tp--marquee-text">Machine Learning</div>
          <div class="tp--marquee-text separator-img">
            <img src="{{ asset("assets/imgs/marquee/text-separator.png") }}" alt="Image">
          </div>
          <div class="tp--marquee-text">Neural Network</div>
          <div class="tp--marquee-text separator-img">
            <img src="{{ asset("assets/imgs/marquee/text-separator.png") }}" alt="Image">
          </div>
          <div class="tp--marquee-text">Deep Learning</div>
          <div class="tp--marquee-text separator-img">
            <img src="{{ asset("assets/imgs/marquee/text-separator.png") }}" alt="Image">
          </div>
        </div>

        <div class="image-trail-images">
          <img class="content__img" src="{{ asset("assets/imgs/service/service-img-1.png") }}" alt="Trail Image 1">
          <img class="content__img" src="{{ asset("assets/imgs/service/service-img-2.png") }}" alt="Trail Image 2">
          <img class="content__img" src="{{ asset("assets/imgs/service/service-img-3.png") }}" alt="Trail Image 3">
          <img class="content__img" src="{{ asset("assets/imgs/service/service-img-4.png") }}" alt="Trail Image 4">
          <img class="content__img" src="{{ asset("assets/imgs/service/service-img-5.png") }}" alt="Trail Image 4">
        </div>
      </div>
      <!-- Text Slider End -->


      <!-- Service section Start -->
      <section class="tp-service-area-3">
        <div class="tp-container">
          <div class="tp-service-inner-3">
            <div class="title-wrap">
              <h2 class="sec-title-2 text-move-animation">
                AI Solutions Built for
                <span>Speed, Efficiency, and Scale.</span>
              </h2>
              <a href="{{ route("service") }}" class="actova-btn-light">
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
                  <img src="{{ asset("assets/imgs/service/service-icon-7.png") }}" alt="Icon">
                  <h3 class="title">AI Workflow Automation</h3>
                  <p>
                    Automate repetitive tasks and business processes with AI-powered 
                    workflows that save time and improve operational efficiency.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="0.7">
                <a href="#">
                  <img src="{{ asset("assets/imgs/service/service-icon-8.png") }}" alt="Icon">
                  <h3 class="title">AI Integration</h3>
                  <p>
                    Seamlessly integrate modern AI tools with your existing systems,
                     apps, and platforms to create smarter and more connected operations.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="0.9">
                <a href="#">
                  <img src="{{ asset("assets/imgs/service/service-icon-9.png") }}" alt="Icon">
                  <h3 class="title">Data Intelligence</h3>
                  <p>
                    Transform your business data into actionable insights that help teams
                     make faster and more informed financial and management decisions.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="1.1">
                <a href="#">
                  <img src="{{ asset("assets/imgs/service/service-icon-10.png") }}" alt="Icon">
                  <h3 class="title">AI Deployment</h3>
                  <p>
                    Build and deploy AI solutions quickly and optimize them for performance, scalability,
                     and real-world business use.
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





      <!-- Counter area start -->
      <section class="tp-counter-area plr-50 pt-140 pb-120">
        <div class="tp-counter-inner">
          <h3 class="title">
            Eliminating the Barriers to Business Efficiency
          </h3>
          <div class="tp-counter-list">
            <div class="tp-counter-wrapper">
              <h3 class="tp-counter-active number">100+</h3>
              <p class="text">AI Projects Delivered Successfully</p>
            </div>
            <div class="tp-counter-wrapper">
              <h3 class="tp-counter-active number">10+</h3>
              <p class="text">A Team of 10+ AI Automation Experts</p>
            </div>
            <div class="tp-counter-wrapper">
              <h3 class="tp-counter-active number">65%</h3>
              <p class="text">Effciency Acheived Across Industries</p>
            </div>
            <div class="tp-counter-wrapper">
              <h3 class="tp-counter-active number">100%</h3>
              <p class="text">Of Our AI Models Works with Efficiency</p>
            </div>
          </div>
          <div class="tp-cta-wrapper">
            <div class="cta-content">
              <img src="{{ asset("assets/imgs/others/cta-icon.png") }}" alt="Icon">
              <p>
                Ready to explore what AI can do for your business? Not sure
                where to start?
              </p>
            </div>
            <div class="cta-btn tp-btn-animate">
              <a href="{{ route("contact") }}" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Book a Free Strategy Call</span>
                  <span class="text-two">Book a Free Strategy Call</span>
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
      <!-- Counter area end -->


          <!-- Testimonial slider start -->
<div class="tp-testimonial-area-4 pb-130">
    <div class="container">
        <div class="tp-testimonial-titlebox">
            <p>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z"
                        fill="#A1FF75" />
                </svg>
                4.5 Average Rating
            </p>
            <h2 class="sec-title-2">Trusted by Top Global Businesses</h2>
        </div>
        <div class="tp-testimonial-inner-4">
            <div class="tp-testimonial-wrapper-4">
                <div class="swiper tp-testimonial4-active">
                    <div class="swiper-wrapper">

                        <!-- Indian 1 -->
                        <div class="swiper-slide swiper-slide--one">
                            <div class="tp-testimonial-slide-4">
                                <div class="reason">(AI Consulting)</div>
                                <p>" We hired them as our <span>AI consultant for our fintech platform</span> and the results were beyond expectations. Their AI consulting process was structured, transparent, and delivered a fraud detection model that cut false positives by 47% within the first quarter."</p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Arjun Mehta</h4>
                                        <h4 class="designation">CTO, PaySmart India</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Indian 2 -->
                        <div class="swiper-slide swiper-slide--two">
                            <div class="tp-testimonial-slide-4">
                                <div class="reason">(AI Consulting)</div>
                                <p>" As a healthcare startup, we needed an <span>AI consultant who truly understood our domain.</span> Their AI consulting team mapped our entire patient data workflow and built a predictive diagnosis tool that our doctors now rely on daily."</p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Priya Nair</h4>
                                        <h4 class="designation">Co-Founder, MediAI Solutions</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Indian 3 -->
                        <div class="swiper-slide swiper-slide--three">
                            <div class="tp-testimonial-slide-4">
                                <div class="reason">(AI Consulting)</div>
                                <p>" Their <span>AI consulting services helped us automate our entire supply chain reporting</span> process. What used to take our team 3 days every week now runs automatically overnight. The AI consultant assigned to us was knowledgeable, responsive, and results-driven."</p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Rahul Singhania</h4>
                                        <h4 class="designation">Head of Operations, LogiNext Technologies</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Indian 4 -->
                        <div class="swiper-slide swiper-slide--four">
                            <div class="tp-testimonial-slide-4">
                                <div class="reason">(AI Consulting)</div>
                                <p>" We approached them with zero AI experience and a very specific business problem. Their <span>AI consultant walked us through every step</span> — from data readiness to model deployment. The AI consulting engagement paid for itself within two months."</p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Sneha Kulkarni</h4>
                                        <h4 class="designation">Director of Growth, RetailEdge India</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- US 1 -->
                        <div class="swiper-slide swiper-slide--five">
                            <div class="tp-testimonial-slide-4">
                                <div class="reason">(AI Consulting)</div>
                                <p>" Finding the right <span>AI consultant for an enterprise-level NLP project</span> is not easy. This team stood out immediately. Their AI consulting methodology was rigorous — they audited our existing data, identified gaps, and built a solution that reduced customer support tickets by 55%."</p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Daniel Carter</h4>
                                        <h4 class="designation">VP of Engineering, NovaBridge Inc.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- US 2 -->
                        <div class="swiper-slide swiper-slide--six">
                            <div class="tp-testimonial-slide-4">
                                <div class="reason">(AI Consulting)</div>
                                <p>" We had worked with two other vendors before finding this team. The difference was night and day. <span>Their AI consulting approach actually started with our business outcomes</span>, not the technology. Our AI consultant delivered a recommendation engine that increased our average order value by 34%."</p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Michelle Torres</h4>
                                        <h4 class="designation">Chief Product Officer, ShopStream US</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- US 3 -->
                        <div class="swiper-slide swiper-slide--seven">
                            <div class="tp-testimonial-slide-4">
                                <div class="reason">(AI Consulting)</div>
                                <p>" I was skeptical about outsourcing something as critical as AI strategy, but their <span>AI consultant quickly earned our trust</span> with deep technical knowledge and clear communication. The AI consulting engagement resulted in a computer vision QA system that eliminated 80% of manual inspection on our production line."</p>
                                <div class="author-info-wrap">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
                                    </div>
                                    <div class="author-info">
                                        <h4 class="name">Robert Haines</h4>
                                        <h4 class="designation">Plant Manager, PrecisionTech</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Navigation  -->
            <div class="tp-testimonial-navigation-4">
                <div class="tsm4-btn-next">
                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.31051 6.06897C8.2457 6.06897 7.37948 6.93519 7.37948 8C7.37948 9.06481 8.2457 9.93103 9.31051 9.93103C10.3753 9.93103 11.2415 9.06481 11.2415 8C11.2415 6.93519 10.3753 6.06897 9.31051 6.06897ZM6.00016 6.89656C7.06498 6.89656 7.9312 6.03034 7.9312 4.96553C7.9312 3.90072 7.06498 3.0345 6.00016 3.0345C4.93535 3.0345 4.06913 3.90072 4.06913 4.96553C4.06913 6.03034 4.93535 6.89656 6.00016 6.89656ZM2.68982 3.86206C3.75463 3.86206 4.62085 2.99584 4.62085 1.93103C4.62085 0.866219 3.75463 0 2.68982 0C1.62501 0 0.758789 0.866219 0.758789 1.93103C0.758789 2.99584 1.62501 3.86206 2.68982 3.86206ZM6.00016 9.10344C4.93535 9.10344 4.06913 9.96966 4.06913 11.0345C4.06913 12.0993 4.93535 12.9655 6.00016 12.9655C7.06498 12.9655 7.9312 12.0993 7.9312 11.0345C7.9312 9.96966 7.06498 9.10344 6.00016 9.10344ZM2.68982 12.1379C1.62501 12.1379 0.758789 13.0042 0.758789 14.069C0.758789 15.1338 1.62501 16 2.68982 16C3.75463 16 4.62085 15.1338 4.62085 14.069C4.62085 13.0041 3.75463 12.1379 2.68982 12.1379Z"
                            fill="#020202" />
                    </svg>
                </div>
                <div class="tsm4-btn-prev">
                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.68949 6.06897C3.7543 6.06897 4.62052 6.93519 4.62052 8C4.62052 9.06481 3.7543 9.93103 2.68949 9.93103C1.62468 9.93103 0.758458 9.06481 0.758458 8C0.758458 6.93519 1.62468 6.06897 2.68949 6.06897ZM5.99983 6.89656C4.93502 6.89656 4.0688 6.03034 4.0688 4.96553C4.0688 3.90072 4.93502 3.0345 5.99983 3.0345C7.06465 3.0345 7.93087 3.90072 7.93087 4.96553C7.93087 6.03034 7.06465 6.89656 5.99983 6.89656ZM9.31018 3.86206C8.24537 3.86206 7.37915 2.99584 7.37915 1.93103C7.37915 0.866219 8.24537 0 9.31018 0C10.375 0 11.2412 0.866219 11.2412 1.93103C11.2412 2.99584 10.375 3.86206 9.31018 3.86206ZM5.99983 9.10344C7.06465 9.10344 7.93087 9.96966 7.93087 11.0345C7.93087 12.0993 7.06465 12.9655 5.99983 12.9655C4.93502 12.9655 4.0688 12.0993 4.0688 11.0345C4.0688 9.96966 4.93502 9.10344 5.99983 9.10344ZM9.31018 12.1379C10.375 12.1379 11.2412 13.0042 11.2412 14.069C11.2412 15.1338 10.375 16 9.31018 16C8.24537 16 7.37915 15.1338 7.37915 14.069C7.37915 13.0041 8.24537 12.1379 9.31018 12.1379Z"
                            fill="#020202" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial slider end -->

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


      <!-- Contact area start -->
      <section class="tp-contact-area">
        <div class="tp-container">
          <div class="tp-contact-inner">
            <h2 class="title">Ready to Transform with AI?</h2>
            <p>
              Whether you have an idea, a challenge, or want to explore AI opportunities,
               our team is here to help you get started.
            </p>
            <div class="tp-contact-btns tp-btn-animate">
              <a href="mailto:infoactova@gmail.com" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">info@ai-consultant.agency</span>
                  <span class="text-two">info@ai-consultant.agency</span>
                </span>
              </a>
              <a href="https://ai-consultant.agency/contact" class="tp-btn-one esf">
                <span class="btn-wrap">
                  <span class="text-one">Talk to Experts</span>
                  <span class="text-two">talk to Experts</span>
                </span>
              </a>
            </div>
          </div>
        </div>

        <video muted autoplay loop>
          <source src="{{ asset("assets/video/cta-bg-video.mp4") }}" type="video/mp4">
        </video>
      </section>
      <!-- Contact area end -->


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
  <h3 class="tp-faq-title">What is AI Consultant?</h3>
  <div class="tp-faq-body">
    <p>AI Consultant is an AI consulting agency focused on helping businesses simplify their operations using practical AI solutions. We work closely with companies to automate workflows, connect systems, and build intelligent processes that save time and improve efficiency.</p>
  </div>
</div>

<div class="tp-faq-item style-2">
  <h3 class="tp-faq-title">Why did we start AI Consultant?</h3>
  <div class="tp-faq-body">
    <p>We started AI Consultant after seeing how many businesses struggle with repetitive work and inefficient systems. Our goal is to help organizations use AI in a practical way so teams can focus on important tasks instead of spending time on manual processes.</p>
  </div>
</div>

<div class="tp-faq-item style-2">
  <h3 class="tp-faq-title">How do we help businesses use AI?</h3>
  <div class="tp-faq-body">
    <p>We analyze how your business currently operates and identify areas where AI can make a real impact. By integrating AI tools and automation into existing workflows, we help companies reduce manual work, improve productivity, and operate more efficiently.</p>
  </div>
</div>

<div class="tp-faq-item style-2">
  <h3 class="tp-faq-title">Who do we typically work with?</h3>
  <div class="tp-faq-body">
    <p>We work with startups, growing businesses, and established companies that want to modernize their operations. Our clients are usually teams looking to automate processes, improve decision-making, and scale their business using intelligent systems.</p>
  </div>
</div>

<div class="tp-faq-item style-2">
  <h3 class="tp-faq-title">What makes AI Consultant different?</h3>
  <div class="tp-faq-body">
    <p>Our focus is on practical AI implementation. Instead of complex experimental systems, we use reliable AI technologies to solve real business problems and deliver solutions that teams can easily adopt and use every day.</p>
  </div>
</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


      <!-- Footer area start -->
@endsection
