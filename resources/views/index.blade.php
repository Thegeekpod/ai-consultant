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

    <div class="tp-cta-wrapper">
        <div class="cta-content">
            <img src="{{ asset('assets/imgs/others/cta-icon.png') }}" alt="Icon">
            <p>
                Ready to explore what AI can do for your business? Not sure
                where to start?
            </p>
        </div>
        <div class="cta-btn tp-btn-animate">
            <a href="{{ route('contact') }}" class="tp-btn-one">
                <span class="btn-wrap">
                    <span class="text-one">Talk to AI Consultant</span>
                    <span class="text-two">Talk to AI Consultant</span>
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


    <!-- Capability area start -->
    <section class="tp-capability2-area pt-120" style="margin-bottom:40px;">
        <div class="tp-container-1715">
            <div class="tp-capability-titlebox">
                <h2 class="sec-title-2">Our Core AI Capabilities</h2>
                <p>At AI Consultant, we deliver high-performance, neural-optimized AI services tailored to your industry,
                    your data, and your business objectives.</p>
            </div>

            <div class="tp-capability2-grid">
                <div class="card-wrap wrap-1">
                    <div class="tp-capability2-card card-1">
                        <div class="integrate-wrap">
                            <div class="integrate-icon">
                                <img src="{{ asset('assets/imgs/capability/icon-5.png') }}" alt="Icon">
                            </div>
                            <div class="switch-icon">
                                <img src="{{ asset('assets/imgs/capability/icon-6.png') }}" alt="Icon">
                            </div>
                            <div class="integrate-icon">
                                <img src="{{ asset('assets/imgs/capability/icon-4.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="feature-list">
                            <ul>
                                <li><a href="#">Augment</a></li>
                                <li><a href="#">CoThink</a></li>
                                <li><a href="#">Assist</a></li>
                                <li><a href="#">Navigate</a></li>
                                <li><a href="#">Augment</a></li>
                                <li><a href="#">Empower</a></li>
                                <li><a href="#">Adapt</a></li>
                            </ul>
                        </div>
                        <h3 class="title">Agentic AI Development.</h3>
                        <p>We design and deploy Agentic AI systems that plan, act, adapt, and automate enterprise workflows.
                        </p>
                    </div>
                </div>
                <div class="card-wrap wrap-2">
                    <div class="tp-capability2-card card-2">
                        <img src="{{ asset('assets/imgs/capability/voice.gif') }}" alt="">
                        <h3 class="title">Voice & NLP Solutions</h3>
                    </div>
                    <div class="tp-capability2-card card-3">
                        <p>Innovation</p>
                        <h3 class="text">AI</h3>
                        <img src="{{ asset('assets/imgs/capability/img-4.png') }}" alt="Image">
                    </div>
                </div>
                <div class="card-wrap wrap-3">
                    <div class="tp-capability2-card card-4">
                        <div class="img-wrap">
                            <img src="{{ asset('assets/imgs/capability/img-5.png') }}" alt="Image">
                            <div class="templates">150+</div>
                            <div class="feature one">Enterprise-Grade AI</div>
                            <div class="feature two">Workflow-Centric</div>
                        </div>
                        <h3 class="title">Applied AI Integration.</h3>
                        <p>We integrate applied AI across enterprise platforms and workflows for secure, scalable
                            operations.</p>
                    </div>
                </div>
            </div>
            <div class="tp-capability2-grid-2">
                <div class="tp-capability2-card card-5">
                    <div class="content-wrap">
                        <div class="content-item">
                            <span class="icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.54998 16.9854H13.4535C15.3961 16.9854 16.976 15.4052 16.976 13.4629V4.55877C16.976 2.59645 15.3958 1 13.4535 1H4.54998C2.58766 1 0.991211 2.59645 0.991211 4.55877V13.4629C0.991211 15.4052 2.58766 16.9854 4.54998 16.9854ZM2.22209 4.55877C2.22209 3.25342 3.24464 2.23088 4.54998 2.23088H13.4535C14.717 2.23088 15.7451 3.27527 15.7451 4.55877V13.4629C15.7451 14.7264 14.717 15.7545 13.4535 15.7545H4.54998C3.26648 15.7545 2.22209 14.7264 2.22209 13.4629V4.55877Z"
                                        fill="#020202" />
                                    <path
                                        d="M10.2917 13.6784C10.4549 13.6784 10.6114 13.6136 10.7269 13.4981C10.8423 13.3827 10.9071 13.2262 10.9071 13.063V4.92257C10.9071 4.75934 10.8423 4.6028 10.7269 4.48739C10.6114 4.37197 10.4549 4.30713 10.2917 4.30713C10.1285 4.30713 9.97192 4.37197 9.8565 4.48739C9.74109 4.6028 9.67625 4.75934 9.67625 4.92257V13.063C9.67625 13.2262 9.74109 13.3827 9.8565 13.4981C9.97192 13.6136 10.1285 13.6784 10.2917 13.6784ZM5.09493 13.6784C5.25815 13.6784 5.41469 13.6136 5.53011 13.4981C5.64553 13.3827 5.71037 13.2262 5.71037 13.063V10.3009C5.71037 10.1377 5.64553 9.98111 5.53011 9.86569C5.41469 9.75028 5.25815 9.68544 5.09493 9.68544C4.93171 9.68544 4.77517 9.75028 4.65975 9.86569C4.54433 9.98111 4.47949 10.1377 4.47949 10.3009V13.063C4.47949 13.2262 4.54433 13.3827 4.65975 13.4981C4.77517 13.6136 4.93171 13.6784 5.09493 13.6784ZM7.71146 13.6784C7.87469 13.6784 8.03123 13.6136 8.14664 13.4981C8.26206 13.3827 8.3269 13.2262 8.3269 13.063V7.75696C8.3269 7.59374 8.26206 7.4372 8.14664 7.32178C8.03123 7.20637 7.87469 7.14153 7.71146 7.14153C7.54824 7.14153 7.3917 7.20637 7.27628 7.32178C7.16087 7.4372 7.09602 7.59374 7.09602 7.75696V13.063C7.09602 13.2262 7.16087 13.3827 7.27628 13.4981C7.3917 13.6136 7.54824 13.6784 7.71146 13.6784ZM12.8722 13.6784C13.0354 13.6784 13.192 13.6136 13.3074 13.4981C13.4228 13.3827 13.4877 13.2262 13.4877 13.063V9.28294C13.4877 9.11972 13.4228 8.96318 13.3074 8.84776C13.192 8.73234 13.0354 8.6675 12.8722 8.6675C12.709 8.6675 12.5525 8.73234 12.437 8.84776C12.3216 8.96318 12.2568 9.11972 12.2568 9.28294V13.063C12.2568 13.2262 12.3216 13.3827 12.437 13.4981C12.5525 13.6136 12.709 13.6784 12.8722 13.6784Z"
                                        fill="#020202" />
                                </svg>
                            </span>
                            <p>Workflow AI Automation</p>
                        </div>
                        <div class="item-group group-1">
                            <div class="content-item">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2478_1278)">
                                            <mask id="mask0_2478_1278" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="18">
                                                <path d="M17.5 17.5V0.5H0.5V17.5H17.5Z" fill="white" stroke="white" />
                                            </mask>
                                            <g mask="url(#mask0_2478_1278)">
                                                <path
                                                    d="M15.7783 10.6947C15.7783 13.0324 14.8294 15.1506 13.2958 16.6848L7.30566 10.6947H15.7783Z"
                                                    stroke="#020202" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M7.30545 10.6946L12.0974 15.4865C10.8703 16.7136 9.17579 17.4727 7.30545 17.4727C3.5648 17.4727 0.527344 14.4352 0.527344 10.6946C0.527344 6.95387 3.5648 3.91645 7.30545 3.91645V10.6946Z"
                                                    stroke="#020202" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M7.30566 0.527422C12.9174 0.527422 17.4728 5.08289 17.4728 10.6946H7.30566V0.527422Z"
                                                    stroke="#020202" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2478_1278">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <p>Accuracy rate 99.9%</p>
                            </div>
                            <div class="content-item">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2478_1290)">
                                            <path
                                                d="M16.7093 7.36729C16.9111 6.76131 16.9811 6.11922 16.9147 5.48399C16.8482 4.84876 16.6468 4.23506 16.324 3.68397C15.3418 1.97393 13.3674 1.09415 11.4391 1.50818C11.0152 1.03051 10.4942 0.648875 9.91085 0.388795C9.32754 0.128716 8.69541 -0.00380976 8.05676 8.33519e-05C6.08573 -0.00441665 4.33688 1.26462 3.73047 3.14003C3.10456 3.26817 2.51324 3.52852 1.99608 3.90366C1.47892 4.27879 1.04785 4.76006 0.731712 5.31525C-0.257726 7.02079 -0.0321631 9.1707 1.28975 10.6332C1.08794 11.2392 1.01792 11.8813 1.08437 12.5165C1.15082 13.1518 1.35221 13.7655 1.67506 14.3166C2.65722 16.0266 4.63163 16.9064 6.55992 16.4923C6.98377 16.9701 7.50481 17.3517 8.08815 17.6117C8.67149 17.8717 9.30366 18.0041 9.9423 17.9999C11.9145 18.0049 13.6639 16.7348 14.2703 14.8577C14.8962 14.7295 15.4875 14.4692 16.0047 14.0941C16.5218 13.7189 16.9529 13.2376 17.269 12.6825C18.2574 10.9769 18.0313 8.8287 16.7099 7.36616L16.7093 7.36729ZM9.94342 16.8237C9.15428 16.8249 8.38984 16.5485 7.78395 16.0429C7.81994 16.0239 7.85539 16.0038 7.89026 15.9827L11.4746 13.9127C11.5646 13.8615 11.6394 13.7873 11.6912 13.6976C11.743 13.6079 11.77 13.5061 11.7693 13.4025V8.34941L13.2842 9.22413C13.3005 9.23201 13.3112 9.24776 13.3134 9.26576V13.4503C13.3112 15.3111 11.8042 16.8197 9.94342 16.8237ZM2.696 13.7282C2.30065 13.0454 2.15826 12.2453 2.29381 11.468C2.32025 11.4838 2.36693 11.5125 2.40012 11.5316L5.98444 13.6016C6.07379 13.6538 6.17542 13.6814 6.27891 13.6814C6.3824 13.6814 6.48403 13.6538 6.57338 13.6016L10.9492 11.0748V12.8242C10.9496 12.8331 10.9479 12.842 10.9442 12.8501C10.9404 12.8583 10.9348 12.8654 10.9278 12.8709L7.30466 14.9629C5.69082 15.8921 3.62978 15.3397 2.69656 13.7281L2.696 13.7282ZM1.75268 5.90419C2.14627 5.22055 2.76772 4.69707 3.50828 4.42534C3.50828 4.45628 3.50659 4.51084 3.50659 4.54909V8.68976C3.50604 8.79316 3.533 8.89485 3.58469 8.9844C3.63639 9.07395 3.71097 9.14815 3.80078 9.19938L8.17657 11.7256L6.66173 12.6003C6.65426 12.6053 6.64565 12.6083 6.63671 12.6091C6.62776 12.6099 6.61876 12.6084 6.61054 12.6048L2.98684 10.5112C1.37637 9.57851 0.823997 7.51804 1.75212 5.90475L1.75268 5.90419ZM14.1988 8.80057L9.82301 6.27375L11.3379 5.39963C11.3453 5.39464 11.3539 5.39162 11.3629 5.39083C11.3718 5.39005 11.3808 5.39152 11.389 5.39513L15.0127 7.4871C16.626 8.41916 17.179 10.483 16.2469 12.0963C15.8527 12.7791 15.2317 13.3022 14.4919 13.5746V9.3102C14.4927 9.20694 14.466 9.10533 14.4146 9.01578C14.3632 8.92622 14.2889 8.85195 14.1994 8.80057H14.1988ZM15.7063 6.53138C15.6799 6.51506 15.6332 6.48694 15.6 6.46781L12.0157 4.39778C11.9264 4.34556 11.8247 4.31804 11.7212 4.31804C11.6177 4.31804 11.5161 4.34556 11.4268 4.39778L7.05098 6.92456V5.17515C7.05056 5.16623 7.05228 5.15734 7.056 5.14922C7.05972 5.14109 7.06532 5.13398 7.07235 5.12847L10.6955 3.03818C12.3093 2.10721 14.3726 2.66131 15.303 4.27572C15.6962 4.95762 15.8385 5.75559 15.7052 6.53138H15.7063ZM6.22748 9.64938L4.71207 8.7747C4.70409 8.77076 4.69724 8.76489 4.69213 8.75762C4.68702 8.75035 4.68382 8.74191 4.68282 8.73307V4.54853C4.68394 2.68549 6.19542 1.17571 8.05845 1.17683C8.84651 1.17683 9.6093 1.45358 10.2151 1.95758C10.1792 1.97678 10.1437 1.99685 10.1088 2.01777L6.52448 4.08784C6.43447 4.1389 6.3597 4.21304 6.30789 4.30262C6.25608 4.3922 6.2291 4.49398 6.22973 4.59747L6.22748 9.64826V9.64938ZM7.05042 7.87522L8.99951 6.74963L10.9486 7.87466V10.1253L8.99951 11.2503L7.05042 10.1253V7.87522Z"
                                                fill="#020202" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2478_1290">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <p>Powered by Top LLMs</p>
                            </div>
                        </div>
                        <div class="ai-item">
                            <p>ai</p>
                        </div>
                        <div class="item-group group-2">
                            <div class="content-item">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.64062 2.67188V4.47187C3.26531 4.84453 2.25 6.10172 2.25 7.59375V14.625C2.25 16.4081 3.70125 17.8594 5.48438 17.8594H12.5156C14.2987 17.8594 15.75 16.4081 15.75 14.625V7.59375C15.75 6.10172 14.7347 4.84453 13.3594 4.47187V2.67188C13.3594 1.27547 12.2231 0.140625 10.8281 0.140625H7.17188C5.77688 0.140625 4.64062 1.27547 4.64062 2.67188ZM5.48438 2.67188C5.48438 1.74094 6.24094 0.984375 7.17188 0.984375H10.8281C11.7591 0.984375 12.5156 1.74094 12.5156 2.67188V4.35938H5.48438V2.67188ZM12.5156 5.20312C13.8333 5.20312 14.9062 6.27609 14.9062 7.59375V14.625C14.9062 15.9427 13.8333 17.0156 12.5156 17.0156H5.48438C4.16672 17.0156 3.09375 15.9427 3.09375 14.625V7.59375C3.09375 6.27609 4.16672 5.20312 5.48438 5.20312H12.5156Z"
                                            fill="#020202" />
                                        <path
                                            d="M5.34375 10.8281C6.28312 10.8281 6.89062 10.1109 6.89062 9C6.89062 7.88906 6.28312 7.17188 5.34375 7.17188C4.40438 7.17188 3.79688 7.88906 3.79688 9C3.79688 10.1109 4.40438 10.8281 5.34375 10.8281ZM5.34375 8.01562C5.66437 8.01562 6.04688 8.18578 6.04688 9C6.04688 9.81422 5.66437 9.98438 5.34375 9.98438C5.02313 9.98438 4.64062 9.81422 4.64062 9C4.64062 8.18578 5.02313 8.01562 5.34375 8.01562ZM5.48438 13.2188C5.48438 14.3297 6.09188 15.0469 7.03125 15.0469C7.97062 15.0469 8.57812 14.3297 8.57812 13.2188C8.57812 12.1078 7.97062 11.3906 7.03125 11.3906C6.09188 11.3906 5.48438 12.1078 5.48438 13.2188ZM7.03125 12.2344C7.35188 12.2344 7.73438 12.4045 7.73438 13.2188C7.73438 14.033 7.35188 14.2031 7.03125 14.2031C6.71062 14.2031 6.32812 14.033 6.32812 13.2188C6.32812 12.4045 6.71062 12.2344 7.03125 12.2344ZM10.9688 15.0469C11.9081 15.0469 12.5156 14.3297 12.5156 13.2188C12.5156 12.1078 11.9081 11.3906 10.9688 11.3906C10.0294 11.3906 9.42188 12.1078 9.42188 13.2188C9.42188 14.3297 10.0294 15.0469 10.9688 15.0469ZM10.9688 12.2344C11.2894 12.2344 11.6719 12.4045 11.6719 13.2188C11.6719 14.033 11.2894 14.2031 10.9688 14.2031C10.6481 14.2031 10.2656 14.033 10.2656 13.2188C10.2656 12.4045 10.6481 12.2344 10.9688 12.2344ZM10.9688 10.8281C11.9081 10.8281 12.5156 10.1109 12.5156 9C12.5156 7.88906 11.9081 7.17188 10.9688 7.17188C10.0294 7.17188 9.42188 7.88906 9.42188 9C9.42188 10.1109 10.0294 10.8281 10.9688 10.8281ZM10.9688 8.01562C11.2894 8.01562 11.6719 8.18578 11.6719 9C11.6719 9.81422 11.2894 9.98438 10.9688 9.98438C10.6481 9.98438 10.2656 9.81422 10.2656 9C10.2656 8.18578 10.6481 8.01562 10.9688 8.01562ZM8.15625 10.8281C8.38969 10.8281 8.57812 10.6397 8.57812 10.4062V7.59375C8.57812 7.36031 8.38969 7.17188 8.15625 7.17188C7.92281 7.17188 7.73438 7.36031 7.73438 7.59375V10.4062C7.73438 10.6397 7.92281 10.8281 8.15625 10.8281ZM4.21875 15.0469C4.45219 15.0469 4.64062 14.8584 4.64062 14.625V11.8125C4.64062 11.5791 4.45219 11.3906 4.21875 11.3906C3.98531 11.3906 3.79688 11.5791 3.79688 11.8125V14.625C3.79688 14.8584 3.98531 15.0469 4.21875 15.0469ZM13.7812 10.8281C14.0147 10.8281 14.2031 10.6397 14.2031 10.4062V7.59375C14.2031 7.36031 14.0147 7.17188 13.7812 7.17188C13.5478 7.17188 13.3594 7.36031 13.3594 7.59375V10.4062C13.3594 10.6397 13.5478 10.8281 13.7812 10.8281ZM13.7812 15.0469C14.0147 15.0469 14.2031 14.8584 14.2031 14.625V11.8125C14.2031 11.5791 14.0147 11.3906 13.7812 11.3906C13.5478 11.3906 13.3594 11.5791 13.3594 11.8125V14.625C13.3594 14.8584 13.5478 15.0469 13.7812 15.0469Z"
                                            fill="#020202" />
                                    </svg>
                                </span>
                                <p>Real-Time Intelligence</p>
                            </div>
                            <div class="content-item">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.64062 2.67188V4.47187C3.26531 4.84453 2.25 6.10172 2.25 7.59375V14.625C2.25 16.4081 3.70125 17.8594 5.48438 17.8594H12.5156C14.2987 17.8594 15.75 16.4081 15.75 14.625V7.59375C15.75 6.10172 14.7347 4.84453 13.3594 4.47187V2.67188C13.3594 1.27547 12.2231 0.140625 10.8281 0.140625H7.17188C5.77688 0.140625 4.64062 1.27547 4.64062 2.67188ZM5.48438 2.67188C5.48438 1.74094 6.24094 0.984375 7.17188 0.984375H10.8281C11.7591 0.984375 12.5156 1.74094 12.5156 2.67188V4.35938H5.48438V2.67188ZM12.5156 5.20312C13.8333 5.20312 14.9062 6.27609 14.9062 7.59375V14.625C14.9062 15.9427 13.8333 17.0156 12.5156 17.0156H5.48438C4.16672 17.0156 3.09375 15.9427 3.09375 14.625V7.59375C3.09375 6.27609 4.16672 5.20312 5.48438 5.20312H12.5156Z"
                                            fill="#020202" />
                                        <path
                                            d="M5.34375 10.8281C6.28312 10.8281 6.89062 10.1109 6.89062 9C6.89062 7.88906 6.28312 7.17188 5.34375 7.17188C4.40438 7.17188 3.79688 7.88906 3.79688 9C3.79688 10.1109 4.40438 10.8281 5.34375 10.8281ZM5.34375 8.01562C5.66437 8.01562 6.04688 8.18578 6.04688 9C6.04688 9.81422 5.66437 9.98438 5.34375 9.98438C5.02313 9.98438 4.64062 9.81422 4.64062 9C4.64062 8.18578 5.02313 8.01562 5.34375 8.01562ZM5.48438 13.2188C5.48438 14.3297 6.09188 15.0469 7.03125 15.0469C7.97062 15.0469 8.57812 14.3297 8.57812 13.2188C8.57812 12.1078 7.97062 11.3906 7.03125 11.3906C6.09188 11.3906 5.48438 12.1078 5.48438 13.2188ZM7.03125 12.2344C7.35188 12.2344 7.73438 12.4045 7.73438 13.2188C7.73438 14.033 7.35188 14.2031 7.03125 14.2031C6.71062 14.2031 6.32812 14.033 6.32812 13.2188C6.32812 12.4045 6.71062 12.2344 7.03125 12.2344ZM10.9688 15.0469C11.9081 15.0469 12.5156 14.3297 12.5156 13.2188C12.5156 12.1078 11.9081 11.3906 10.9688 11.3906C10.0294 11.3906 9.42188 12.1078 9.42188 13.2188C9.42188 14.3297 10.0294 15.0469 10.9688 15.0469ZM10.9688 12.2344C11.2894 12.2344 11.6719 12.4045 11.6719 13.2188C11.6719 14.033 11.2894 14.2031 10.9688 14.2031C10.6481 14.2031 10.2656 14.033 10.2656 13.2188C10.2656 12.4045 10.6481 12.2344 10.9688 12.2344ZM10.9688 10.8281C11.9081 10.8281 12.5156 10.1109 12.5156 9C12.5156 7.88906 11.9081 7.17188 10.9688 7.17188C10.0294 7.17188 9.42188 7.88906 9.42188 9C9.42188 10.1109 10.0294 10.8281 10.9688 10.8281ZM10.9688 8.01562C11.2894 8.01562 11.6719 8.18578 11.6719 9C11.6719 9.81422 11.2894 9.98438 10.9688 9.98438C10.6481 9.98438 10.2656 9.81422 10.2656 9C10.2656 8.18578 10.6481 8.01562 10.9688 8.01562ZM8.15625 10.8281C8.38969 10.8281 8.57812 10.6397 8.57812 10.4062V7.59375C8.57812 7.36031 8.38969 7.17188 8.15625 7.17188C7.92281 7.17188 7.73438 7.36031 7.73438 7.59375V10.4062C7.73438 10.6397 7.92281 10.8281 8.15625 10.8281ZM4.21875 15.0469C4.45219 15.0469 4.64062 14.8584 4.64062 14.625V11.8125C4.64062 11.5791 4.45219 11.3906 4.21875 11.3906C3.98531 11.3906 3.79688 11.5791 3.79688 11.8125V14.625C3.79688 14.8584 3.98531 15.0469 4.21875 15.0469ZM13.7812 10.8281C14.0147 10.8281 14.2031 10.6397 14.2031 10.4062V7.59375C14.2031 7.36031 14.0147 7.17188 13.7812 7.17188C13.5478 7.17188 13.3594 7.36031 13.3594 7.59375V10.4062C13.3594 10.6397 13.5478 10.8281 13.7812 10.8281ZM13.7812 15.0469C14.0147 15.0469 14.2031 14.8584 14.2031 14.625V11.8125C14.2031 11.5791 14.0147 11.3906 13.7812 11.3906C13.5478 11.3906 13.3594 11.5791 13.3594 11.8125V14.625C13.3594 14.8584 13.5478 15.0469 13.7812 15.0469Z"
                                            fill="#020202" />
                                    </svg>
                                </span>
                                <p>Scalable AI Systems</p>
                            </div>
                        </div>
                    </div>
                    <h3 class="title">We Solve Real Business Problems</h3>
                    <p>Applying practical AI to solve business challenges and improve efficiency..</p>
                </div>
                <div class="tp-capability2-card card-6">
                    <div class="content-wrap">
                        <div class="swiper vertical-card-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content-item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/imgs/capability/icon-7.png') }}" alt="Icon">
                                        </span>
                                        <div class="content">
                                            <h4 class="text">AI Strategy Roadmap</h4>
                                            <p>Aligned AI strategy & roadmap for growth.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/imgs/capability/icon-8.png') }}" alt="Icon">
                                        </span>
                                        <div class="content">
                                            <h4 class="text">Process Automation</h4>
                                            <p>Automate repetitive tasks to improve efficiency.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/imgs/capability/icon-7.png') }}" alt="Icon">
                                        </span>
                                        <div class="content">
                                            <h4 class="text">Custom AI Development</h4>
                                            <p>Tailored AI solutions for unique business needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/imgs/capability/icon-7.png') }}" alt="Icon">
                                        </span>
                                        <div class="content">
                                            <h4 class="text">AI Integration</h4>
                                            <p>Seamlessly integrate AI into existing workflows.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/imgs/capability/icon-8.png') }}" alt="Icon">
                                        </span>
                                        <div class="content">
                                            <h4 class="text">AI Audit & Optimization</h4>
                                            <p>Improve existing AI systems for better performance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/imgs/capability/icon-7.png') }}" alt="Icon">
                                        </span>
                                        <div class="content">
                                            <h4 class="text">Training & Enablement</h4>
                                            <p>Empower your team with AI skills and knowledge.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="title">End-to-End AI Consulting</h3>
                    <p>From strategy to implementation, we support your AI journey at every stage.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Capability area end -->


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
                    <div class="card-inner" data-background="assets/imgs/service/shape-1.png">
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
                    <div class="card-inner" data-background="assets/imgs/service/service-icon-2.png">
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
                    <div class="card-inner" data-background="assets/imgs/service/service-icon-4.png">
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


              <!-- About us area start -->
      <section class="tp-about-area-2 pt-150 esf-pl-50 esf-pr-50" style="margin-bottom:60px;">
        <div class="tp-container">
          <div class="tp-about-wrapper-2">
            <div class="tp-about-left-2">
              <div class="image-wrap">
                <img src="assets/imgs/about/img-3.jpg" alt="Image">
                <div class="popup-wrapper">
                  <a href="https://www.youtube.com/" class="tp-video-popup"><i
                      class="fal fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="tp-about-right-2">
              <h2 class="sec-title-3 actova-lines">We’re AI Consultant- specialising in
                <span>design & development of Advanced AI Solutions.</span>
              </h2>
              <div class="customer-wrapper">
                <div class="tp-counter-wrapper-2">
                  <h3 class="tp-counter-active number">200 <span class="suffix">+</span></h3>
                  <p class="text">AI solution for our customers</p>
                </div>
                <div class="tp-user-box">
                  <div class="images">
                    <img src="assets/imgs/about/man-2.png" alt="User">
                    <img src="assets/imgs/about/man.png" alt="User">
                    <img src="assets/imgs/about/plus.png" alt="User">
                  </div>
                  <div class="text">
                    <p><span>5K+</span> active users in world-wide.</p>
                  </div>
                </div>
              </div>
              <div class="rating-wrapper">
                <a href="about.html" class="actova-btn-secondary tp-btn-hover">
                  Discover More
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                  <span></span>
                </a>
                <div class="tp-testimonial-ratings">
                  <div class="rating-logo">
                    <img src="assets/imgs/testimonial/logo-2.png" alt="Brand Logo">
                  </div>
                  <div class="ratings">
                    <img src="assets/imgs/testimonial/ratings.png" alt="Ratings">
                    <p>5.0 Rating, 24 Reviews</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><br><br>
      <!-- About us area end -->


    <!-- Feature area start -->
    <!--<section class="tp-feature2-area">
        <div class="tp-container-1715">
            <div class="tp-feature2-titlebox">
                <h2 class="sec-title-2">AI Revolution <br> for Modern Businesses</h2>
                <p>Turning artificial intelligence into your biggest competitive advantage.</p>
            </div>
            <div class="tp-feature2-wrapper">
                <div class="tp-feature2-left">
                    <div class="tp-feature2-list">
                        <div class="tp-feature2-item active" data-target="feature1">
                            <div class="line"></div>
                            <div class="number-wrap">
                                <span class="number">01</span>
                            </div>
                            <div class="content">
                                <h3 class="title">AI-Powered Chatbots</h3>
                                <p>We create intelligent chatbots that automate support, capture leads, answer queries
                                    instantly, and enhance customer engagement.</p>
                            </div>
                        </div>
                        <div class="tp-feature2-item" data-target="feature2">
                            <div class="line"></div>
                            <div class="number-wrap">
                                <span class="number">02</span>
                            </div>
                            <div class="content">
                                <h3 class="title">AI SEO Automation</h3>
                                <p>We automate SEO content creation, optimization, and publishing workflows to improve
                                    rankings and drive organic traffic.</p>
                            </div>
                        </div>
                        <div class="tp-feature2-item" data-target="feature3">
                            <div class="number-wrap">
                                <span class="number">03</span>
                            </div>
                            <div class="content">
                                <h3 class="title">Smart Landing Pages</h3>
                                <p>We design and develop high-converting landing pages using AI to personalize content,
                                    optimize layouts, and accelerate lead generation.</p>
                            </div>
                        </div>

                    </div>
                    <a href="/contact" class="actova-btn-light">
                        Tell Us Your Need
                        <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="tp-feature2-right">
                    <div class="pin-wrapper">
                        <div class="tp-feature2-image active" id="feature1">
                            <img src="{{ asset('assets/imgs/feature/img-1.webp') }}" alt="Voice Chat">
                        </div>
                        <div class="tp-feature2-image" id="feature2">
                            <img src="{{ asset('assets/imgs/feature/img-2.webp') }}" alt="Text Generator">
                        </div>
                        <div class="tp-feature2-image" id="feature3">
                            <img src="{{ asset('assets/imgs/feature/img-3.webp') }}" alt="Image Generator">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br></br><br></br>-->
    <!-- Feature area end -->

                <!-- Service section Start -->
      <section class="tp-service-area-3" style="margin-top:20px;">
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
                  <img src="{{ asset("/assets/imgs/service/service-icon-7.png") }}" alt="Icon">
                  <h3 class="title">Workflow Automation</h3>
                  <p>
                    Our AI developers seamlessly integrate AI solutions using NLP and machine learning with your existing systems for smarter operations.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="0.7">
                <a href="#">
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
                  <h3 class="title">Data Intelligence</h3>
                  <p>
                    Leverage predictive analytics and machine learning to turn data into actionable insights for faster decision-making for businesses.
                  </p>
                </a>
              </div>
              <div class="tp-service-card-3 tp-fade-animation" data-delay="1.1">
                <a href="#">
                  <img src="{{ asset("/assets/imgs/service/service-icon-10.png") }}" alt="Icon">
                  <h3 class="title">AI Deployment</h3>
                  <p>
                    Deploy future-proof agentic AI solutions powered by deep learning, NLP, and predictive analytics for scalable real-world performance.
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
                                <img src="{{ asset('assets/imgs/integration/actova.svg') }}" alt="Actova">
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

      <script>
        function openConsultantPopup(name) {
            const popup = document.getElementById('leadPopup');
            const form = document.getElementById('leadPopupForm');
            const msgInput = document.querySelector('input[name="message"]');
            
            if (popup) {
                if (msgInput) {
                    msgInput.value = "Consultation request for expert: " + name;
                }
                
                const title = popup.querySelector('.title');
                if (title) {
                    title.innerHTML = "Contact " + name;
                }
                
                if(form && form.dataset.submitted === 'true') {
                    form.reset();
                    if (msgInput) msgInput.value = "Consultation request for expert: " + name;
                    form.dataset.submitted = 'false';
                    const statusMsg = document.getElementById('popupFormMessage');
                    if (statusMsg) {
                        statusMsg.innerHTML = '';
                        statusMsg.className = 'popup-status-message';
                    }
                    const submitBtn = document.getElementById('popupSubmitBtn');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.style.opacity = '1';
                    }
                }
                
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.classList.add('active');
                }, 10);
            }
        }
      </script>
      <!-- Team area end -->


    <!-- Blog area start -->
    <section class="tp-blog-area-3 pt-120 pb-120">
        <div class="tp-blog-inner-3">
            <div class="title-wrap">
                <h2 class="sec-title-2">Latest Insight</h2>
                <p>Choose a plan that scales with your goals. Whether you’re just starting out or running a global
                    enterprise.</p>
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
                                    <p>An Artificial Intelligence (AI) Consultant bridges the gap between complex AI technologies and business goals, enabling companies to adopt AI for efficiency, revenue growth, and innovation. Rather than simply building AI tools, an AI consultant first analyzes where AI can create the most value in your business- whether that's reducing costs, improving customer experience, or automating manual processes and then designs a practical roadmap from strategy to execution.</p>
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
