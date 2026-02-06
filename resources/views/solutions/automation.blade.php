@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset('assets/imgs/hero/project-details.jpg') }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title"> Automation Solutions </h1>
              <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span> </span> Automation Solutions </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->


      <!-- Project overview area -->
      <section class="tp-project-overview-area pb-140 pt-140">
        <div class="container">
          <div class="tp-project-overview-header">
            <h2 class="sub-title-2">Project Overview</h2>
            <h2 class="sec-title-3">This project aimed to build an AI-powered auto-support classifier that
              <span>automatically categorizes incoming support tickets for a SaaS platform.</span>
            </h2>
            <p>By leveraging NLP and machine learning, the system reduces response time and ensures customer issues are
              routed to the right department instantly.</p>
          </div>
        </div>

        <div class="tp-project-overview-meta">
          <div class="container">
            <div class="meta-list">
              <div class="meta-item">
                <div class="meta-icon">
                  <img src="{{ asset('assets/imgs/project/icon-1.png') }}" alt="Icon">
                </div>
                <div class="meta-info">
                  <p>Category</p>
                  <h3 class="title">AI SaaS Company</h3>
                </div>
              </div>
              <div class="meta-item">
                <div class="meta-icon">
                  <img src="{{ asset('assets/imgs/project/icon-3.png') }}" alt="Icon">
                </div>
                <div class="meta-info">
                  <p>Client</p>
                  <h3 class="title">New York, USA</h3>
                </div>
              </div>
              <div class="meta-item">
                <div class="meta-icon">
                  <img src="{{ asset('assets/imgs/project/icon-2.png') }}" alt="Icon">
                </div>
                <div class="meta-info">
                  <p>Website</p>
                  <a href="#" class="title">www.aiactova.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="tp-project-overview-footer">
            <div class="challange-part-wrap">
              <div class="challenge-part">
                <h3 class="title">Challenges Part</h3>
                <p>A brief look at the problem or pain points before the solution.</p>
                <ul>
                  <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_28165_6526)">
                        <path
                          d="M2.92371 2.97844C-0.393514 6.33184 -0.375513 11.7583 2.97771 15.0755C6.33093 18.3927 11.7576 18.3747 15.0748 15.0215C18.392 11.6683 18.374 6.24166 15.0208 2.92444C11.6676 -0.392781 6.24093 -0.374781 2.92371 2.97844ZM13.1639 7.35946L8.51253 12.0647C8.11581 12.4614 7.46673 12.4614 7.07019 12.0647L6.89001 11.8847L6.34911 11.3436L4.83477 9.84724C4.43805 9.4507 4.43805 8.80162 4.83477 8.40508C5.23149 8.00854 5.88039 8.00836 6.27693 8.40508L7.79127 9.90142L11.7216 5.93512C12.1181 5.53858 12.7672 5.53858 13.1637 5.93512C13.5604 6.31384 13.5606 6.96292 13.1639 7.35946Z"
                          fill="#999999" />
                      </g>
                      <defs>
                        <clipPath id="clip0_28195_6526">
                          <rect width="18" height="18" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    High volume of support tickets
                  </li>
                  <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_28145_6526)">
                        <path
                          d="M2.92371 2.97844C-0.393514 6.33184 -0.375513 11.7583 2.97771 15.0755C6.33093 18.3927 11.7576 18.3747 15.0748 15.0215C18.392 11.6683 18.374 6.24166 15.0208 2.92444C11.6676 -0.392781 6.24093 -0.374781 2.92371 2.97844ZM13.1639 7.35946L8.51253 12.0647C8.11581 12.4614 7.46673 12.4614 7.07019 12.0647L6.89001 11.8847L6.34911 11.3436L4.83477 9.84724C4.43805 9.4507 4.43805 8.80162 4.83477 8.40508C5.23149 8.00854 5.88039 8.00836 6.27693 8.40508L7.79127 9.90142L11.7216 5.93512C12.1181 5.53858 12.7672 5.53858 13.1637 5.93512C13.5604 6.31384 13.5606 6.96292 13.1639 7.35946Z"
                          fill="#999999" />
                      </g>
                      <defs>
                        <clipPath id="clip0_28315_6526">
                          <rect width="18" height="18" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Slow response times
                  </li>
                  <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_28215_6526)">
                        <path
                          d="M2.92371 2.97844C-0.393514 6.33184 -0.375513 11.7583 2.97771 15.0755C6.33093 18.3927 11.7576 18.3747 15.0748 15.0215C18.392 11.6683 18.374 6.24166 15.0208 2.92444C11.6676 -0.392781 6.24093 -0.374781 2.92371 2.97844ZM13.1639 7.35946L8.51253 12.0647C8.11581 12.4614 7.46673 12.4614 7.07019 12.0647L6.89001 11.8847L6.34911 11.3436L4.83477 9.84724C4.43805 9.4507 4.43805 8.80162 4.83477 8.40508C5.23149 8.00854 5.88039 8.00836 6.27693 8.40508L7.79127 9.90142L11.7216 5.93512C12.1181 5.53858 12.7672 5.53858 13.1637 5.93512C13.5604 6.31384 13.5606 6.96292 13.1639 7.35946Z"
                          fill="#999999" />
                      </g>
                      <defs>
                        <clipPath id="clip0_28158_6526">
                          <rect width="18" height="18" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Lack of scalability with growing users
                  </li>
                  <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_26815_6526)">
                        <path
                          d="M2.92371 2.97844C-0.393514 6.33184 -0.375513 11.7583 2.97771 15.0755C6.33093 18.3927 11.7576 18.3747 15.0748 15.0215C18.392 11.6683 18.374 6.24166 15.0208 2.92444C11.6676 -0.392781 6.24093 -0.374781 2.92371 2.97844ZM13.1639 7.35946L8.51253 12.0647C8.11581 12.4614 7.46673 12.4614 7.07019 12.0647L6.89001 11.8847L6.34911 11.3436L4.83477 9.84724C4.43805 9.4507 4.43805 8.80162 4.83477 8.40508C5.23149 8.00854 5.88039 8.00836 6.27693 8.40508L7.79127 9.90142L11.7216 5.93512C12.1181 5.53858 12.7672 5.53858 13.1637 5.93512C13.5604 6.31384 13.5606 6.96292 13.1639 7.35946Z"
                          fill="#999999" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2815_65626">
                          <rect width="18" height="18" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Manual categorization errors
                  </li>
                  <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_28515_6526)">
                        <path
                          d="M2.92371 2.97844C-0.393514 6.33184 -0.375513 11.7583 2.97771 15.0755C6.33093 18.3927 11.7576 18.3747 15.0748 15.0215C18.392 11.6683 18.374 6.24166 15.0208 2.92444C11.6676 -0.392781 6.24093 -0.374781 2.92371 2.97844ZM13.1639 7.35946L8.51253 12.0647C8.11581 12.4614 7.46673 12.4614 7.07019 12.0647L6.89001 11.8847L6.34911 11.3436L4.83477 9.84724C4.43805 9.4507 4.43805 8.80162 4.83477 8.40508C5.23149 8.00854 5.88039 8.00836 6.27693 8.40508L7.79127 9.90142L11.7216 5.93512C12.1181 5.53858 12.7672 5.53858 13.1637 5.93512C13.5604 6.31384 13.5606 6.96292 13.1639 7.35946Z"
                          fill="#999999" />
                      </g>
                      <defs>
                        <clipPath id="clip0_28135_6526">
                          <rect width="18" height="18" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Scalability for 1M+ monthly tickets
                  </li>
                </ul>
              </div>
              <div class="challange-img">
                <img src="{{ asset('assets/imgs/project/project-details.gif') }}" alt="Image">
              </div>
            </div>
            <div class="imgs-wrapper">
              <div class="">
                <img src="{{ asset('assets/imgs/project/project-details-2.jpg') }}" alt="">
              </div>
              <div class="">
                <img src="{{ asset('assets/imgs/project/project-details-3.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Project overview area end -->


      <!-- How we work area start -->
      <section class="tp-how-work-area plr-50 project-page pt-110 pb-110">
        <div class="tp-how-work-inner">
          <div class="title-wrap">
            <h3 class="esf sec-title-2 actova-word">
              AI solutions, delivered with <span>speed and clarity.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Discovery & Strategy</h3>
              <p>
                We dive deep into your business goals, existing systems, and
                data readiness to define the valuable AI use cases.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Full System Build</h3>
              <p>
                Once validated, we engineer the end-to-end solution — from
                data pipelines to model training and front-end integration.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Deployment & Handoff</h3>
              <p>
                Post-launch, we stay involved to fine-tune, retrain, and
                improve performance as your data and business evolve.
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


      <!-- Result section start -->
      <section class="tp-project-result-area pt-140 pb-140">
        <div class="container">
          <div class="tp-project-result">
            <h2 class="sec-title-2">Results & Impact</h2>
            <p>The solution delivered measurable business value — cutting support response time by 40%, reducing costs
              by 25%, and boosting customer satisfaction. With scalability built-in, the system now processes over a
              million tickets monthly with high accuracy and reliability.</p>
            <p>The AI-powered system streamlined operations by eliminating manual tasks, reducing response time by 40%.
              Teams can now focus on high-value cases instead of repetitive classification work. By automating support
              workflows, the client reduced operational costs by 25%. This directly lowered dependency on manual
              resources while maintaining consistent accuracy.</p>
            <div class="result-wrapper">
              <div class=""><img src="{{ asset('assets/imgs/project/project-details-4.jpg') }}" alt="Image"></div>
              <div class="result-box-wrap">
                <div class="result-box">
                  <div class="icon"><img src="{{ asset('assets/imgs/project/icon-5.png') }}" alt=""></div>
                  <div class="content">
                    <h3 class="tp-counter-active number">
                      40%
                    </h3>
                    <p class="text">Reduction in Response Time.</p>
                  </div>
                </div>
                <div class="result-box">
                  <div class="icon"><img src="{{ asset('assets/imgs/project/icon-4.png') }}" alt=""></div>
                  <div class="content">
                    <h3 class="tp-counter-active number">
                      18%<span class="suffix"> (+CSAT) </span>
                    </h3>
                    <p class="text">Customer Satisfaction Rate.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Result section end -->


      <!-- Testimonial slider start -->
      <div class="tp-testimonial-area-4 pt-120 pb-130">
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
                          <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
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
                          <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
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
                          <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
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
                          <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
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
                          <img src="{{ asset('assets/imgs/testimonial/author.png') }}" alt="Author">
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
      <section class="tp-funfact-area-2">
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
                  <h3 class="tp-faq-title">What is Actova AI?</h3>
                  <div class="tp-faq-body">
                    <p>Actova is a next-generation AI solution built to empower businesses of every size. Actova helps
                      automate repetitive workflows, generate high-quality content in multiple formats, deliver deep
                      data insights, and provide real-time decision support.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Who can use Actova AI?</h3>
                  <div class="tp-faq-body">
                    <p>Actova is a next-generation AI solution built to empower businesses of every size. Actova helps
                      automate repetitive workflows, generate high-quality content in multiple formats, deliver deep
                      data insights, and provide real-time decision support.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can I upgrade or downgrade my plan later?</h3>
                  <div class="tp-faq-body">
                    <p>We design and develop <strong>CNNs,</strong> RNNs, LSTMs, GANs, Transformers, and custom hybrid
                      architectures based on the use case—vision, speech, language, or forecasting.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you offer custom pricing for enterprises?</h3>
                  <div class="tp-faq-body">
                    <p>Actova is a next-generation AI solution built to empower businesses of every size. Actova helps
                      automate repetitive workflows, generate high-quality content in multiple formats, deliver deep
                      data insights, and provide real-time decision support.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can Actova integrate with my existing tools?</h3>
                  <div class="tp-faq-body">
                    <p>We design and develop <strong>CNNs,</strong> RNNs, LSTMs, GANs, Transformers, and custom hybrid
                      architectures based on the use case—vision, speech, language, or forecasting.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Where can I find tutorials and guides?</h3>
                  <div class="tp-faq-body">
                    <p>We design and develop <strong>CNNs,</strong> RNNs, LSTMs, GANs, Transformers, and custom hybrid
                      architectures based on the use case—vision, speech, language, or forecasting.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


      
@endsection