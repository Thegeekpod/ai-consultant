@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset("assets/imgs/hero/service-bg.jpg") }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title"> Our Projects </h1>
              <p class="tp-breadcrumb"><a href="{{ route("home") }}">Home</a> <span></span> Our Projects</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->


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
          <div class="tp--marquee-text">Neural Network</div>
          <div class="tp--marquee-text separator-img">
            <img src="{{ asset("assets/imgs/marquee/text-separator.png") }}" alt="Image">
          </div>
          <div class="tp--marquee-text">Neural Network</div>
          <div class="tp--marquee-text separator-img">
            <img src="{{ asset("assets/imgs/marquee/text-separator.png") }}" alt="Image">
          </div>
          <div class="tp--marquee-text">Neural Network</div>
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


      <!-- Project area start -->
      <section class="tp-project-area project-page plr-50">
        <div class="tp-project-inner">
          <div class="tp-project-grid">
            <div class="tp-project-card" data-tilt data-tilt-max="3">
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/project-1.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="Multilingual Chatbot Trained on Internal Docs">Multilingual Chatbot Trained on
                      Internal Docs</span>
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
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/project-2.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="Auto-Support Classifier for SaaS Platform">Auto-Support Classifier for SaaS
                      Platform</span>
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
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/project-3.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="Smart Helpdesk Classifier for SaaS Platform"> Smart Helpdesk Classifier for SaaS
                      Platform </span>
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
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/project-4.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="Neural Language Interpretation Basic Model">
                      Neural Language Interpretation Basic Model
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
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/project-5.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="Real-Time Scene Understanding System">
                      Real-Time Scene Understanding System
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
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/pro-details-1.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="Global AI Transformation Conference">
                      Global AI Transformation Conference
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
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/pro-details-2.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="AI Engineering & Systems Symposium">
                      AI Engineering & Systems Symposium
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
              <a href="{{ route("projects-details") }}" class="thumb" data-cursor-text="VIEW DETAILS">
                <div class="img-reveal">
                  <img src="{{ asset("assets/imgs/project/pro-details-3.jpg") }}" alt="Thumbnail">
                </div>
              </a>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route("projects-details") }}" class="actova-btn-flip">
                    <span data-text="Scalable Intelligence Infrastructure">
                      Scalable Intelligence Infrastructure
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
          </div>
        </div>
      </section>
      <!-- Project area end -->


      <!-- Testimonial slider start -->
      <div class="tp-testimonial-area-4 pt-140 pb-130">
        <div class="container">
          <div class="tp-testimonial-titlebox">
            <p>
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z"
                  fill="#A1FF75" />
              </svg>
              4.5 Average Rating
            </p>
            <h2 class="sec-title-2">Trusted by 20K Users in World-wide</h2>
          </div>
          <div class="tp-testimonial-inner-4">
            <div class="tp-testimonial-wrapper-4">
              <div class="swiper tp-testimonial4-active">
                <div class="swiper-wrapper">
                  <div class="swiper-slide swiper-slide--one">
                    <div class="tp-testimonial-slide-4">
                      <div class="reason">(Premium Support)</div>
                      <p>“ Their team guided us from idea to deployment in just 6 weeks. <span>The LLM integration
                          reduced our manual work by over 60%.”</span></p>
                      <div class="author-info-wrap">
                        <div class="author-img">
                          <img src="{{ asset("assets/imgs/testimonial/author.png") }}" alt="Author">
                        </div>
                        <div class="author-info">
                          <h4 class="name">Jason Roy</h4>
                          <h4 class="designation">Director of Gentech</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide--two">
                    <div class="tp-testimonial-slide-4">
                      <div class="reason">(Premium Support)</div>
                      <p>“ Their team guided us from idea to deployment in just 6 weeks. <span>The LLM integration
                          reduced our manual work by over 60%.”</span></p>
                      <div class="author-info-wrap">
                        <div class="author-img">
                          <img src="{{ asset("assets/imgs/testimonial/author.png") }}" alt="Author">
                        </div>
                        <div class="author-info">
                          <h4 class="name">Jason Roy</h4>
                          <h4 class="designation">Director of Gentech</h4>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide--three">
                    <div class="tp-testimonial-slide-4">
                      <div class="reason">(Premium Support)</div>
                      <p>“ Their team guided us from idea to deployment in just 6 weeks. <span>The LLM integration
                          reduced our manual work by over 60%.”</span></p>
                      <div class="author-info-wrap">
                        <div class="author-img">
                          <img src="{{ asset("assets/imgs/testimonial/author.png") }}" alt="Author">
                        </div>
                        <div class="author-info">
                          <h4 class="name">Jason Roy</h4>
                          <h4 class="designation">Director of Gentech</h4>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide--four">
                    <div class="tp-testimonial-slide-4">
                      <div class="reason">(Premium Support)</div>
                      <p>“ Their team guided us from idea to deployment in just 6 weeks. <span>The LLM integration
                          reduced our manual work by over 60%.”</span></p>
                      <div class="author-info-wrap">
                        <div class="author-img">
                          <img src="{{ asset("assets/imgs/testimonial/author.png") }}" alt="Author">
                        </div>
                        <div class="author-info">
                          <h4 class="name">Jason Roy</h4>
                          <h4 class="designation">Director of Gentech</h4>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide--five">
                    <div class="tp-testimonial-slide-4">
                      <div class="reason">(Premium Support)</div>
                      <p>“ Their team guided us from idea to deployment in just 6 weeks. <span>The LLM integration
                          reduced our manual work by over 60%.”</span></p>
                      <div class="author-info-wrap">
                        <div class="author-img">
                          <img src="{{ asset("assets/imgs/testimonial/author.png") }}" alt="Author">
                        </div>
                        <div class="author-info">
                          <h4 class="name">Jason Roy</h4>
                          <h4 class="designation">Director of Gentech</h4>
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
                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M9.31051 6.06897C8.2457 6.06897 7.37948 6.93519 7.37948 8C7.37948 9.06481 8.2457 9.93103 9.31051 9.93103C10.3753 9.93103 11.2415 9.06481 11.2415 8C11.2415 6.93519 10.3753 6.06897 9.31051 6.06897ZM6.00016 6.89656C7.06498 6.89656 7.9312 6.03034 7.9312 4.96553C7.9312 3.90072 7.06498 3.0345 6.00016 3.0345C4.93535 3.0345 4.06913 3.90072 4.06913 4.96553C4.06913 6.03034 4.93535 6.89656 6.00016 6.89656ZM2.68982 3.86206C3.75463 3.86206 4.62085 2.99584 4.62085 1.93103C4.62085 0.866219 3.75463 0 2.68982 0C1.62501 0 0.758789 0.866219 0.758789 1.93103C0.758789 2.99584 1.62501 3.86206 2.68982 3.86206ZM6.00016 9.10344C4.93535 9.10344 4.06913 9.96966 4.06913 11.0345C4.06913 12.0993 4.93535 12.9655 6.00016 12.9655C7.06498 12.9655 7.9312 12.0993 7.9312 11.0345C7.9312 9.96966 7.06498 9.10344 6.00016 9.10344ZM2.68982 12.1379C1.62501 12.1379 0.758789 13.0042 0.758789 14.069C0.758789 15.1338 1.62501 16 2.68982 16C3.75463 16 4.62085 15.1338 4.62085 14.069C4.62085 13.0041 3.75463 12.1379 2.68982 12.1379Z"
                    fill="#020202" />
                </svg>
              </div>
              <div class="tsm4-btn-prev">
                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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


      <!-- Fun Fact area start -->
      <section class="tp-funfact-area-2 pb-140">
        <div class="container">
          <div class="tp-funfact-items-2">
            <div class="tp-counter-wrapper-2">
              <h3 class="tp-counter-active number">
                20K <span class="suffix">+</span>
              </h3>
              <p class="text">Active Users in World-wide</p>
            </div>
            <div class="tp-counter-wrapper-2">
              <h3 class="tp-counter-active number">
                50K <span class="suffix">+</span>
              </h3>
              <p class="text">Recent Projects Delivered.</p>
            </div>
            <div class="tp-counter-wrapper-2">
              <h3 class="tp-counter-active number">
                50 <span class="suffix">+</span>
              </h3>
              <p class="text">Countries Actova is Launched.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Fun Fact area end -->


      <!-- CTA area start -->
      <section class="tp-cta-area-2">
        <img src="{{ asset("assets/imgs/others/cta-2.jpg") }}" alt="Image">
        <div class="tp-cta-content-2">
          <h2 class="sec-title-2 text-move-animation">Limitless <br> Artificial Intelligence</h2>
          <a class="tp-btn-two tp-btn-anim" href="{{ route("contact") }}">
            <div class="tp-btn-text">Let’s Talk</div>
            <span>
              <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
              </svg>
            </span>
          </a>
        </div>
      </section>
      <!-- CTA area end -->


      <!-- Footer area start -->
@endsection
