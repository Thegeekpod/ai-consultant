@extends('layouts.home')

@section('content')
    <!-- Hero area start -->
    <section class="tp-hero4-area">
        <div class="tp-hero4-content">
            <div class="ai-builder">
                <img src="{{ asset('assets/imgs/hero/icon.png') }}" alt="Icon">
                Intelligent AI Engineering
            </div>
            <h1 class="title">AI Consulting<span> Services</span></h1>
            <p class="text">End-to-End AI Consulting to Automate, Optimize, and Scale Your Business Operations.</p>
            <div class="tp-user-box-2">
                <div class="images">
                    <img src="{{ asset('assets/imgs/about/man-2.png') }}" alt="User">
                    <img src="{{ asset('assets/imgs/about/man.png') }}" alt="User">
                    <img src="{{ asset('assets/imgs/about/man-3.png') }}" alt="User">
                    <span class="total">100+</span>
                </div>
                <div class="text">
                    <p>We Have Already Powered <span>100+ Businesses</span> with AI</p>
                </div>
            </div>
            <div class="tp-hero4-ai-content">
                <div class="left-svg">
                    <svg width="427" height="240" viewBox="0 0 427 240" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="line1"
                            d="M0 9H295C306.046 9 315 17.9543 315 29V98C315 109.046 323.955 118 335 118H427"
                            stroke="#C4C4C4" stroke-width="2" />

                        <circle r="9" fill="white">
                            <animateMotion dur="6s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line1" />
                            </animateMotion>
                        </circle>
                        <circle r="5" fill="#C4C4C4">
                            <animateMotion dur="6s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line1" />
                            </animateMotion>
                        </circle>

                        <path id="line2"
                            d="M0 59H295C306.046 59 315 67.9543 315 79V148C315 159.046 323.954 168 335 168H427"
                            stroke="#999999" stroke-width="2" />

                        <circle r="9" fill="white">
                            <animateMotion dur="6.5s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line2" />
                            </animateMotion>
                        </circle>
                        <circle r="5" fill="#999999">
                            <animateMotion dur="6.5s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line2" />
                            </animateMotion>
                        </circle>

                        <path id="line3"
                            d="M0 109H295C306.046 109 315 117.954 315 129V198C315 209.046 323.954 218 335 218H427"
                            stroke="#020202" stroke-width="2" />

                        <circle r="9" fill="white">
                            <animateMotion dur="7s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line3" />
                            </animateMotion>
                        </circle>
                        <circle r="5" fill="#020202">
                            <animateMotion dur="7s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line3" />
                            </animateMotion>
                        </circle>
                    </svg>
                </div>
                <div class="mid-img">
                    <img src="{{ asset('assets/imgs/hero/mid-img.png') }}" alt="Image" class="image">
                    <div class="box-wrap">
                        <img src="{{ asset('assets/imgs/hero/voice.gif') }}" alt="GIF" class="gif">
                        <p>Full-Scale AI Consulting- From Design to Deployment.</p>
                    </div>
                </div>
                <div class="right-svg">
                    <svg width="427" height="240" viewBox="0 0 427 240" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="line1a"
                            d="M427 9H132C120.954 9 112 17.9543 112 29V98C112 109.046 103.045 118 91.9998 118H0"
                            stroke="#C4C4C4" stroke-width="2" />

                        <circle r="9" fill="white">
                            <animateMotion dur="6s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line1a" />
                            </animateMotion>
                        </circle>
                        <circle r="5" fill="#C4C4C4">
                            <animateMotion dur="6s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line1a" />
                            </animateMotion>
                        </circle>

                        <path id="line2a"
                            d="M427 59H132C120.954 59 112 67.9543 112 79V148C112 159.046 103.046 168 92.0001 168H0"
                            stroke="#999999" stroke-width="2" />

                        <circle r="9" fill="white">
                            <animateMotion dur="6.5s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line2a" />
                            </animateMotion>
                        </circle>
                        <circle r="5" fill="#999999">
                            <animateMotion dur="6.5s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line2a" />
                            </animateMotion>
                        </circle>

                        <path id="line3a"
                            d="M427 109H132C120.954 109 112 117.954 112 129V198C112 209.046 103.046 218 92.0001 218H0"
                            stroke="#020202" stroke-width="2" />

                        <circle r="9" fill="white">
                            <animateMotion dur="7s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line3a" />
                            </animateMotion>
                        </circle>
                        <circle r="5" fill="#020202">
                            <animateMotion dur="7s" repeatCount="indefinite" rotate="auto">
                                <mpath href="#line3a" />
                            </animateMotion>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
        <div class="tp-hero-bg-color">
            <svg width="1920" height="916" viewBox="0 0 1920 916" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_f_4841_5510)">
                    <path
                        d="M518.5 591.13L0 915.63H1920L1699.5 808.63L1444 591.13H1149C928.2 270.33 636.667 457.464 518.5 591.13Z"
                        fill="#A1FF75" />
                </g>
                <defs>
                    <filter id="filter0_f_4841_5510" x="-414" y="0" width="2748" height="1329.63"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="207" result="effect1_foregroundBlur_4841_5510" />
                    </filter>
                </defs>
            </svg>
        </div>
    </section>
    <!-- Hero area end -->
    <br>


    <!-- 
    <section class="tp-brand-area-4 pt-130">
        <div class="tp-container-1715">
            <div class="tp-brand-inner">
                <div class="title-wrap">
                    <h2 class="title">We’re the Preferred AI Consulting Agency for 100+ Businesses</h2>
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
     -->

          <!-- Brand area start -->
      <div class="tp-brand-area-2 pb-150">
        <div class="tp-container">
          <div class="tp-brand-inner">
            <div class="tp-brand-slider">
              <div class="tp-brand-logo">
                <a href="#"><img src="{{ asset('assets/imgs/brand/brand-6.png') }}" alt="Strengthen Numbers- Our Client from USA"></a>
              </div>
              <div class="tp-brand-logo">
                <a href="#"> <img src="{{ asset('assets/imgs/brand/brand-1.png') }}" alt="Oye Monkey- Our Client from India"></a>
              </div>
              <div class="tp-brand-logo">
                <a href="#"><img src="{{ asset('assets/imgs/brand/logo-3.png') }}" alt="Findme- Our beloved Client from USA"></a>
              </div>
              <div class="tp-brand-logo">
                <a href="#"><img src="{{ asset('assets/imgs/brand/logo-4.png') }}" alt="NobelPay- Our client from USA"></a>
              </div>
              <div class="tp-brand-logo">
                <a href="#"><img src="{{ asset('assets/imgs/brand/brand-2.png') }}" alt="DIRECTV- Our Client from USA"></a>
              </div>
              <div class="tp-brand-logo">
                <a href="#"><img src="{{ asset('assets/imgs/brand/brand-3.png') }}" alt="Warner Music Group- Our Client from USA"></a>
              </div>
              <div class="tp-brand-logo">
                <a href="#"><img src="{{ asset('assets/imgs/brand/brand-5.png') }}" alt="Verizon- Our Client from USA"></a>
              </div>
              <div class="tp-brand-logo">
                <a href="#"><img src="{{ asset('assets/imgs/brand/brand-7.png') }}" alt="Weberads- Our Client from India"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Brand area end -->

          <!-- Faster area start -->
      <section class="tp-faster-area esf-pl-50 esf-pr-50">
        <div class="tp-container">
          <div class="tp-faster-inner">
            <div class="img-anim remove-speed">
              <img src="assets/imgs/others/faster-img.webp" alt="AI Consulting Services" class="faster-img" data-speed="0.8">
            </div>
            <div class="tp-faster-box">
              <div class="box-icon">
                <img src="assets/imgs/others/faster-icon.png" alt="Icon">
              </div>
              <div class="box-content">
                <h4 class="title">AI Consultant</h4>
                <p>Expert AI Consulting. Tailored Solutions. Proven Results.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Faster area end -->


      <!-- Fun Fact area start -->
      <section class="tp-funfact-area-2 pb-140" style="margin-top: 80px;">
        <div class="container">
          <div class="tp-funfact-text">
            <p>
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19.5118 1.3889C19.4725 1.2163 19.3757 1.06217 19.2373 0.951773C19.0989 0.841374 18.9271 0.78125 18.7501 0.78125C18.5731 0.78125 18.4013 0.841374 18.2629 0.951773C18.1245 1.06217 18.0277 1.2163 17.9884 1.3889L17.5559 3.28968C17.458 3.72048 17.2402 4.1148 16.9278 4.4272C16.6154 4.73959 16.2211 4.95733 15.7903 5.05531L13.8891 5.48773C13.7165 5.52707 13.5624 5.62386 13.452 5.76225C13.3416 5.90064 13.2815 6.07242 13.2815 6.24945C13.2815 6.42648 13.3416 6.59826 13.452 6.73665C13.5624 6.87504 13.7165 6.97183 13.8891 7.01117L15.7903 7.44359C16.2211 7.54156 16.6154 7.7593 16.9278 8.0717C17.2402 8.38409 17.458 8.77842 17.5559 9.20921L17.9884 11.11C18.0277 11.2826 18.1245 11.4367 18.2629 11.5471C18.4013 11.6575 18.5731 11.7176 18.7501 11.7176C18.9271 11.7176 19.0989 11.6575 19.2373 11.5471C19.3757 11.4367 19.4725 11.2826 19.5118 11.11L19.9442 9.20921C20.0422 8.77842 20.2599 8.38409 20.5723 8.0717C20.8847 7.7593 21.2791 7.54156 21.7098 7.44359L23.611 7.01117C23.7836 6.97183 23.9378 6.87504 24.0481 6.73665C24.1585 6.59826 24.2187 6.42648 24.2187 6.24945C24.2187 6.07242 24.1585 5.90064 24.0481 5.76225C23.9378 5.62386 23.7836 5.52707 23.611 5.48773L21.7098 5.05531C21.2791 4.95733 20.8847 4.73959 20.5723 4.4272C20.2599 4.1148 20.0422 3.72048 19.9442 3.28968L19.5118 1.3889Z"
                  fill="#020202" />
                <path
                  d="M8.59375 6.25C8.80095 6.25 8.99966 6.33231 9.14618 6.47882C9.29269 6.62534 9.375 6.82405 9.375 7.03125V23.4375C9.375 23.6447 9.29269 23.8434 9.14618 23.9899C8.99966 24.1364 8.80095 24.2188 8.59375 24.2188C8.38655 24.2188 8.18784 24.1364 8.04132 23.9899C7.89481 23.8434 7.8125 23.6447 7.8125 23.4375V7.03125C7.8125 6.82405 7.89481 6.62534 8.04132 6.47882C8.18784 6.33231 8.38655 6.25 8.59375 6.25ZM2.34375 8.98438C2.34375 8.77717 2.26144 8.57846 2.11493 8.43195C1.96841 8.28544 1.7697 8.20312 1.5625 8.20312C1.3553 8.20312 1.15659 8.28544 1.01007 8.43195C0.86356 8.57846 0.78125 8.77717 0.78125 8.98438V21.4844C0.78125 21.6916 0.86356 21.8903 1.01007 22.0368C1.15659 22.1833 1.3553 22.2656 1.5625 22.2656C1.7697 22.2656 1.96841 22.1833 2.11493 22.0368C2.26144 21.8903 2.34375 21.6916 2.34375 21.4844V8.98438ZM5.85938 10.5469C5.85938 10.3397 5.77706 10.141 5.63055 9.99445C5.48404 9.84794 5.28533 9.76562 5.07812 9.76562C4.87092 9.76562 4.67221 9.84794 4.5257 9.99445C4.37919 10.141 4.29688 10.3397 4.29688 10.5469V19.9219C4.29688 20.1291 4.37919 20.3278 4.5257 20.4743C4.67221 20.6208 4.87092 20.7031 5.07812 20.7031C5.28533 20.7031 5.48404 20.6208 5.63055 20.4743C5.77706 20.3278 5.85938 20.1291 5.85938 19.9219V10.5469ZM12.8906 9.375C12.8906 9.1678 12.8083 8.96909 12.6618 8.82257C12.5153 8.67606 12.3166 8.59375 12.1094 8.59375C11.9022 8.59375 11.7035 8.67606 11.5569 8.82257C11.4104 8.96909 11.3281 9.1678 11.3281 9.375V21.0938C11.3281 21.301 11.4104 21.4997 11.5569 21.6462C11.7035 21.7927 11.9022 21.875 12.1094 21.875C12.3166 21.875 12.5153 21.7927 12.6618 21.6462C12.8083 21.4997 12.8906 21.301 12.8906 21.0938V9.375ZM15.625 11.3281C15.8322 11.3281 16.0309 11.4104 16.1774 11.5569C16.3239 11.7035 16.4062 11.9022 16.4062 12.1094V18.3594C16.4062 18.5666 16.3239 18.7653 16.1774 18.9118C16.0309 19.0583 15.8322 19.1406 15.625 19.1406C15.4178 19.1406 15.2191 19.0583 15.0726 18.9118C14.9261 18.7653 14.8438 18.5666 14.8438 18.3594V12.1094C14.8438 11.9022 14.9261 11.7035 15.0726 11.5569C15.2191 11.4104 15.4178 11.3281 15.625 11.3281Z"
                  fill="#020202" />
              </svg>
              Empowering Business with AI
            </p>
          </div>
          <div class="tp-funfact-items-2">
            <div class="tp-counter-wrapper-2">
              <h3 class="tp-counter-active number">
                100 <span class="suffix">+</span>
              </h3>
              <p class="text">Businesses Transformed.</p>
            </div>
            <div class="tp-counter-wrapper-2">
              <h3 class="tp-counter-active number">
                350 <span class="suffix">+</span>
              </h3>
              <p class="text">AI Solutions Delivered.</p>
            </div>
            <div class="tp-counter-wrapper-2">
              <h3 class="tp-counter-active number">
                20 <span class="suffix">+</span>
              </h3>
              <p class="text">Industries Served Globally.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Fun Fact area end -->


      <!-- Feature area start -->
      <section class="tp-feature-area pt-120 pb-120">
        <div class="tp-container-1715">
          <div class="tp-feature-inner">
            <div class="tp-feature-img">
              <div class="img-reveal">
                <img src="assets/imgs/feature/image-3.webp" alt="How AI Consultant can help your business scale with AI Infrastructure">
              </div>
            </div>
            <div class="tp-feature-content">
              <div class="title-wrap">
                <h2 class="sub-title-2">What We Do</h2>
                <h3 class="sec-title-2 actova-lines">AI Consulting: From AI Strategy <br>to Working Product</h3>
              </div>
              <div class="text-wrap">
                <p>We help businesses move beyond guesswork by turning ideas into practical, scalable solutions. From strategy to deployment, we design, build, and implement AI that delivers real, measurable impact. Our artificial intelligence consulting and development services simplify AI complexity, turning business challenges into scalable, ROI-driven solutions.</p>
              </div>
              <ul class="tp-feature-list">
                <li><span><i class="fal fa-check"></i></span> Strategy: AI Roadmaps Aligned to Business Goals.</li>
                <li><span><i class="fal fa-check"></i></span> Build: Custom AI Solution Development.</li>
                <li><span><i class="fal fa-check"></i></span> Integrate: Connect Data and Systems.</li>
                <li><span><i class="fal fa-check"></i></span> Automate: Reduce Cost with AI Automation.</li>

              </ul>
              <a href="/about" class="actova-btn-secondary tp-btn-hover">
                Discover More
                <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                </svg>
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Feature area end -->




    <section class="tp-service-area pb-120 pt-120 plr-50">
        <div class="tp-service-inner">
            <div class="title-wrap">
                <h2 class="sec-title actova-word">
                    We design <span> infrastructure </span> & Integrate artificial intelligence
                    systems that <span>solve real-world problems.</span>
                </h2>
                <div class="tp-btn-animate">
                    <a href="/contact" class="tp-btn-one">
                        <span class="btn-wrap">
                            <span class="text-one">Contact for Consultation</span>
                            <span class="text-two">Contact for Consultation</span>
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
            <div class="tp-service-grid">
                <div class="tp-service-card tp-fade-animation" data-delay="0.6">
                    <div class="card-inner">
                        <div class="content">
                            <img src="assets/imgs/service/service-icon-1.png" alt="Image" class="icon">
                            <h3 class="title">
                                <a href="/services/digital-transformation">AI Strategy & AI Consulting.</a>
                            </h3>
                            <p>
                                Strategic AI consulting- identifying high-impact use cases, validating feasibility, and
                                building your long-term AI roadmap.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/services/digital-transformation" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
                                </span>
                                <span class="btn-icon">
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tp-service-card tp-fade-animation" data-delay="0.8">
                    <div class="card-inner">
                        <div class="content">
                            <h3 class="title">
                                <a href="/services/custom-ai-model">Custom AI <br>
                                    Product Dev.</a>
                            </h3>
                            <p>
                                Full-cycle development of AI-native SaaS, internal tools, intelligent dashboards, and
                                seamless integrations.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/services/custom-ai-model" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
                                </span>
                                <span class="btn-icon">
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tp-service-card tp-fade-animation" data-delay="1">
                    <div class="card-inner">
                        <div class="content">
                            <img src="assets/imgs/service/service-icon-3.png" alt="Image" class="icon">
                            <h3 class="title">
                                <a href="/solutions/workflow-automation">Business Process <br>
                                    Automation</a>
                            </h3>
                            <p>
                                End-to-end automation of repetitive workflows, internal operations and cross-department
                                processes- powered by practical AI that reduces manual work.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/solutions/workflow-automation" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
                                </span>
                                <span class="btn-icon">
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tp-service-card tp-fade-animation" data-delay="1.2">
                    <div class="card-inner">
                        <div class="content">
                            <img src="assets/imgs/service/shape-2.png" alt="Image" class="shape">
                            <h3 class="title">
                                <a href="/solutions/ai-chatbots">AI-Powered Customer Experience</a>
                            </h3>
                            <p>
                                Intelligent chat, voice, helpdesk and conversational systems that deliver 24/7 support,
                                faster resolutions, and more human-like customer interactions.
                            </p>
                        </div>
                        <div class="service-btn">
                            <a href="/solutions/ai-chatbots" class="tp-btn-one">
                                <span class="btn-wrap">
                                    <span class="text-one">View Details</span>
                                    <span class="text-two">View Details</span>
                                </span>
                                <span class="btn-icon">
                                    <svg width="9" height="13" viewBox="0 0 9 13"
                                        xmlns="http://www.w3.org/2000/svg">
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
    <!-- Service area end -->


          <!-- Text Slider Start -->
      <div class="tp--marquee-text-area pt-110" style="margin-bottom: 60px;">
        <div class="tp--marquee-text-inner" aria-hidden="true">
          <div class="tp--marquee-text">AI Readiness</div>
          <div class="tp--marquee-text separator-img"><img src="assets/imgs/marquee/text-separator.png" alt="Image">
          </div>
          <div class="tp--marquee-text">AI Strategy</div>
          <div class="tp--marquee-text separator-img"><img src="assets/imgs/marquee/text-separator.png" alt="Image">
          </div>
          <div class="tp--marquee-text">Intelligent Automation</div>
          <div class="tp--marquee-text separator-img"><img src="assets/imgs/marquee/text-separator.png" alt="Image">
          </div>
          <div class="tp--marquee-text">Smart Intelligence</div>
          <div class="tp--marquee-text separator-img"><img src="assets/imgs/marquee/text-separator.png" alt="Image">
          </div>
          <div class="tp--marquee-text">AI Innovation</div>
          <div class="tp--marquee-text separator-img"><img src="assets/imgs/marquee/text-separator.png" alt="Image">
          </div>
        </div>
      </div>
      <!-- Text Slider End -->



                <!-- Service section Start -->
      <section class="tp-service-area-3" style="margin-top:60px;">
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
                <a href="/solutions/workflow-automation">
                  <img src="{{ asset("/assets/imgs/service/service-icon-7.png") }}" alt="Icon">
                  <h3 class="title">Workflow Automation</h3>
                  <p>
                    Our AI developers seamlessly integrate AI solutions using NLP and machine learning with your existing systems for smarter operations.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="0.7">
                <a href="/services/ai-integration-ops">
                  <img src="{{ asset("/assets/imgs/service/service-icon-8.png") }}" alt="Icon">
                  <h3 class="title">AI Integration</h3>
                  <p>
                    Seamlessly integrate modern AI tools with your existing systems,
                     apps, and platforms to create smarter and more connected operations.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="0.9">
                <a href="#">
                  <img src="{{ asset("/assets/imgs/service/service-icon-9.png") }}" alt="Icon">
                  <h3 class="title">NLP & Computer Vision</h3>
                  <p>
                    Transform unstructured text and visual data into actionable insights using advanced NLP and Computer Vision- enabling smarter decisions.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="1.1">
                <a href="/services/training-support">
                  <img src="{{ asset("/assets/imgs/service/service-icon-10.png") }}" alt="Icon">
                  <h3 class="title">Training & Support</h3>
                  <p>
                    We provide corporate training and ongoing support for AI solutions- ensuring seamless adoption, optimized performance, and scalability.
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
      </section><br><br>
      <!-- Service section end -->



    <!-- Integration area start -->
    <section class="tp-integration-area pb-130">
        <div class="container">
            <div class="tp-integration-titlebox">
                <h2 class="sec-title-2">Integrations</h2>
                <p>We integrate AI models with your workflow for unmatched accuracy and performance in real-world
                    applications.</p>
            </div>

            <div class="tp-integration-wrapper">
                <div class="tp-integration-svg">
                    <svg id="stage" width="1070" height="378" viewBox="0 0 1070 378" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <!-- left paths -->
                        <path id="topPathL"
                            d="M100 9H274.299C290.43 9 305.57 16.7826 314.958 29.9004L394.542 141.1C403.93 154.217 419.071 162 435.202 162H475"
                            stroke="#E8E8E8" stroke-opacity="0.6" stroke-width="2" fill="none" />
                        <path id="midPathL" d="M0 189H475" stroke="#E8E8E8" stroke-opacity="0.6" stroke-width="2"
                            fill="none" />
                        <path id="bottomPathL"
                            d="M100 369H274.299C290.43 369 305.57 361.217 314.958 348.1L394.542 236.9C403.93 223.783 419.071 216 435.202 216H475"
                            stroke="#E8E8E8" stroke-opacity="0.6" stroke-width="2" fill="none" />

                        <!-- right paths -->
                        <path id="topPathR"
                            d="M970 9H795.701C779.57 9 764.43 16.7826 755.042 29.9004L675.458 141.1C666.07 154.217 650.929 162 634.798 162H595"
                            stroke="#E8E8E8" stroke-opacity="0.6" stroke-width="2" fill="none" />
                        <path id="midPathR" d="M1070 189H595" stroke="#E8E8E8" stroke-opacity="0.6" stroke-width="2"
                            fill="none" />
                        <path id="bottomPathR"
                            d="M970 369H795.701C779.57 369 764.43 361.217 755.042 348.1L675.458 236.9C666.07 223.783 650.929 216 634.798 216H595"
                            stroke="#E8E8E8" stroke-opacity="0.6" stroke-width="2" fill="none" />

                        <!-- dots -->
                        <g id="dotTop">
                            <circle class="dotOuter" r="9" />
                            <circle class="dotInner" r="5" />
                        </g>
                        <g id="dotMid">
                            <circle class="dotOuter" r="9" />
                            <circle class="dotInner" r="5" />
                        </g>
                        <g id="dotBottom">
                            <circle class="dotOuter" r="9" />
                            <circle class="dotInner" r="5" />
                        </g>
                    </svg>
                </div>
                <div class="tp-integration-items">
                    <div class="tp-integration-left">
                        <div class="tp-integration-item item-1">
                            <div class="int-icon"><img src="{{ asset('assets/imgs/integration/slack.svg') }}"
                                    alt="Slack"></div>
                            <p>Slack</p>
                        </div>
                        <div class="tp-integration-item item-2">
                            <div class="int-icon"><img src="{{ asset('assets/imgs/integration/discord.svg') }}"
                                    alt="Discord"></div>
                            <p>Discord</p>
                        </div>
                        <div class="tp-integration-item item-3">
                            <div class="int-icon"><img src="{{ asset('assets/imgs/integration/gmail.svg') }}"
                                    alt="Gmail"></div>
                            <p>Gmail</p>
                        </div>
                    </div>
                    <div class="tp-integration-mid">
                        <div class="int-box">
                            <div class="int-box-inner">
                                <img src="{{ asset('assets/imgs/integration/ai-consultant.png') }}" alt="AI Consultant">
                            </div>
                        </div>

                        <p class="int-text">Streamline your business with AI.</p>
                    </div>
                    <div class="tp-integration-right">
                        <div class="tp-integration-item item-4">
                            <div class="int-icon"><img src="{{ asset('assets/imgs/integration/co-pilot.svg') }}"
                                    alt="Co-pilot"></div>
                            <p>Co-pilot</p>
                        </div>
                        <div class="tp-integration-item  item-5">
                            <div class="int-icon"><img src="{{ asset('assets/imgs/integration/mailchimp.svg') }}"
                                    alt="MailChimp"></div>
                            <p>MailChimp</p>
                        </div>
                        <div class="tp-integration-item item-6">
                            <div class="int-icon"><img src="{{ asset('assets/imgs/integration/zendesk.svg') }}"
                                    alt="Zendesk"></div>
                            <p>Gmail</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tp-integration-help">
                <a href="#">Want to Scale with AI? Ask AI Consultant for Free</a>
            </div>
        </div>
    </section>
    <!-- Integration area end -->

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


    <!-- Fun fact area start -->
    <section class="tp-counter-area-2 pb-130">
        <div class="container">
            <div class="tp-counter-list-2">
                <div class="tp-counter-item-2">
                    <div class="tp-counter-wrapper-2">
                        <h3 class="tp-counter-active number">100 <span class="suffix">+</span></h3>
                        <p class="text">Happy Cliens <br>Across Globe</p>
                    </div>
                </div>
                <div class="tp-counter-item-2">
                    <div class="tp-counter-wrapper-2">
                        <h3 class="tp-counter-active number">200 <span class="suffix">+</span></h3>
                        <p class="text">Projects <br> Delivered.</p>
                    </div>
                </div>
                <div class="tp-counter-item-2">
                    <div class="tp-counter-wrapper-2">
                        <h3 class="tp-counter-active number">30 <span class="suffix">+</span></h3>
                        <p class="text">Experts Working <br> With Us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun fact area end -->


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

      
      <!-- Team area end -->


    <!-- Blog area start -->
    <section class="tp-blog-area-3 pt-120 pb-120">
        <div class="tp-blog-inner-3">
            <div class="title-wrap">
                <h2 class="sec-title-2">Latest Insight</h2>
                <p>Explore AI insights that grow with your business. Whether you’re just getting started or scaling globally.</p>
            </div>

            <div class="tp-blog-list">
                @forelse($latestBlogs as $blog)
                    <div class="tp-blog-item-3">
                        <a href="{{ route('blog-details', $blog->slug) }}" class="thumb">
                            @if ($blog->image)
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"
                                    style="filter:url(#distortion{{ $loop->iteration }}); width: 100%; height: 230px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/imgs/blog/blog-post-1.jpg') }}" alt="Default Thumbnail"
                                    style="filter:url(#distortion{{ $loop->iteration }})">
                            @endif
                            <svg width="0" height="0">
                                <filter id="distortion{{ $loop->iteration }}">
                                    <feTurbulence type="fractalNoise" baseFrequency="0.03 0.06" numOctaves="2"
                                        seed="{{ $loop->iteration + 1 }}" result="noise" />
                                    <feDisplacementMap in="SourceGraphic" in2="noise" scale="0"
                                        xChannelSelector="R" yChannelSelector="B" result="displacement" />
                                    <feMerge>
                                        <feMergeNode in="SourceGraphic" />
                                        <feMergeNode in="displacement" />
                                    </feMerge>
                                </filter>
                            </svg>
                        </a>
                        <div class="content">
                            <ul class="meta">
                                <li>{{ $blog->created_at->format('d M, Y') }}</li>
                                <li>{{ ceil(str_word_count(strip_tags($blog->description)) / 200) }} min read</li>
                            </ul>
                            <h2 class="title">
                                <a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                            </h2>
                            <a href="{{ route('blog-details', $blog->slug) }}" class="actova-btn-light">
                                Read More
                                <svg width="9" height="13" viewBox="0 0 9 13"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <p>No insights found.</p>
                @endforelse
            </div>

        </div>
    </section>
    <!-- Blog area end -->


    <!-- FAQ area start -->
    <section class="tp-faq-area-2 pb-130">
        <div class="container">
            <div class="tp-faq-inner-2">
                <div class="title-wrap">
                    <p class="rating">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                                <h3 class="tp-faq-title">What is an AI Consultant?</h3>
                                <div class="tp-faq-body">
                                    <p>AI Consultant bridges the gap between complex AI technologies and business goals. Rather than just building tools, they analyze where AI creates the most value- reducing costs, improving customer experience, or automating processes, then design a clear roadmap from strategy to execution.</p>
                                    <p>AI consultants typically bring expertise across three areas: technical knowledge (machine learning, data engineering, model deployment), business strategy (ROI analysis, process mapping, change management), and industry context (understanding the regulations, risks, and competitive dynamics of your sector). They act as a bridge between your business leadership and your technical teams- or serve as your technical team entirely if you don't have one in-house.</p>
                                    <p>Businesses work with AI consultants at different stages: during initial exploration ("Is AI right for us?"), during vendor or tool evaluation ("Which solution should we choose?"), or during active development and deployment ("How do we build and launch this correctly?"). The engagement can be short-term advisory or long-term embedded partnership depending on your needs.</p>
                                </div>
                                </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">What Exactly Does AI Consulting Agency Do?</h3>
                            <div class="tp-faq-body">
                                <p>We help businesses adopt and implement AI effectively. We provide strategy, custom AI
                                    solutions, process automation, customer experience tools (chatbots, voice agents), sales
                                    & marketing automation, and full AI integration- turning AI into measurable business
                                    results.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">What Types of Businesses Do You Work With?</h3>
                            <div class="tp-faq-body">
                                <p>We work with startups, small & medium businesses, scale-ups, and enterprises across many
                                    industries including e-commerce, education, healthcare, real estate, logistics,
                                    financial services, SaaS, professional services, manufacturing, and more.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">Do You Build Custom Machine Learning / Deep Learning Models From
                                Scratch?</h3>
                            <div class="tp-faq-body">
                                <p>No. We focus on practical, high-ROI AI implementations using proven models, APIs,
                                    fine-tuned LLMs, and ready-to-deploy AI tools. We deliver fast value instead of long
                                    research-oriented model development.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">What Platforms and Tools Do You Commonly Use?</h3>
                            <div class="tp-faq-body">
                                <p>We work with leading AI & automation platforms including: OpenAI, Anthropic, Google
                                    Gemini, LangChain, Make.com, n8n, Voiceflow, ElevenLabs, Twilio, WhatsApp Business API,
                                    Zapier, Dialogflow, Bubble, Webflow, Airtable, Notion, HubSpot, Zoho, Salesforce, and
                                    many others - chosen based on your needs and existing stack.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">Do You Provide Ongoing Support After Launch?</h3>
                            <div class="tp-faq-body">
                                <p>Yes. Every project includes a post-launch optimization & support period (usually 30–90
                                    days). After that we offer flexible monthly support plans so your AI systems stay
                                    up-to-date, performant, and aligned with your growing business.</p>
                            </div>
                        </div>
                        <div class="tp-faq-item style-2">
                            <h3 class="tp-faq-title">How Do We Get Started with AI?</h3>
                            <div class="tp-faq-body">
                                <p>Just book a free 20–30 minute discovery call. We’ll discuss your current challenges,
                                    goals, and priorities- then give you an honest opinion whether AI can help, what kind of
                                    solution makes sense, and rough timeline & investment range. No pressure, no obligation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-faq-bg-pattern">
            <svg width="1920" height="550" viewBox="0 0 1920 550" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_954_98" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1920"
                    height="550">
                    <rect width="1920" height="550" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_954_98)">
                    <g filter="url(#filter0_f_954_98)">
                        <ellipse cx="960" cy="549.5" rx="374" ry="373.5" fill="#A1FF75" />
                        <path
                            d="M960 176.5C1166.28 176.5 1333.5 343.498 1333.5 549.5C1333.5 755.502 1166.28 922.5 960 922.5C753.721 922.5 586.5 755.502 586.5 549.5C586.5 343.498 753.721 176.5 960 176.5Z"
                            stroke="#E8E8E8" />
                    </g>
                </g>
                <defs>
                    <filter id="filter0_f_954_98" x="406" y="-4" width="1108" height="1107"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="90" result="effect1_foregroundBlur_954_98" />
                    </filter>
                </defs>
            </svg>
        </div>
    </section>
    <!-- FAQ area end -->


    <!-- Footer area start -->



    <!-- Power area -->


    <!-- Service area start -->
@endsection
