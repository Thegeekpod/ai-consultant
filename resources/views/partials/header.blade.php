<!-- header-top-area-start -->
<header>
    <div class="tp-header-top-area tp-header__style-4 tp-header__transparent">
        <div class="contianer-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="tp-main__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/imgs/logo/logo-dark.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9 d-none d-lg-block">
                    <div class="tp-main__menu d-flex justify-content-center">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li class="has-megamenu"><a href="{{ route('service') }}">Services <i
                                            class="fal fa-chevron-down"></i></a>
                                    <div class="tp-megamenu">
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">AI Strategy & Consulting</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m12 14 4-4" />
                                                            <path d="m3.34 19 8.66-8.66" />
                                                            <path d="m20.66 5-8.66 8.66" />
                                                            <circle cx="5" cy="19" r="2" />
                                                            <circle cx="19" cy="5" r="2" />
                                                            <path d="M19 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                                            <path d="M5 5a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                                                        </svg> AI Readiness Assessment</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M18 6H5a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h13l4-3.5L18 6Z" />
                                                            <path d="M12 13v9" />
                                                            <path d="M12 2v4" />
                                                        </svg> AI Roadmap & Planning</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M4.5 16.5c-1.5 1.26-2 2.6-2 3.5s.5 1.5 1.5 1.5 2.39-.39 3.5-2c1.44-2.1 4.54-9.3 4.54-9.3s2.9 6.7 4.54 9.3c1.11 1.61 2.5 2 3.5 2s1.5-.6 1.5-1.5-.5-2.24-2-3.5L12 8.5l-7.5 8Z" />
                                                            <path d="m12 8.5 2.5-2.5L12 3.5 9.5 6l2.5 2.5Z" />
                                                        </svg> Digital Strategy</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">AI Development</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <polyline points="16 18 22 12 16 6" />
                                                            <polyline points="8 6 2 12 8 18" />
                                                        </svg> Custom AI Models</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <rect x="2" y="2" width="20" height="8"
                                                                rx="2" ry="2" />
                                                            <rect x="2" y="14" width="20" height="8"
                                                                rx="2" ry="2" />
                                                            <line x1="6" y1="6" x2="6.01"
                                                                y2="6" />
                                                            <line x1="6" y1="18" x2="6.01"
                                                                y2="18" />
                                                        </svg> ML Solutions</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" />
                                                        </svg> Generative AI</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 2v10" />
                                                            <path
                                                                d="M18.4 6.9c.8.7 1.3 1.7 1.5 2.8.2 1.1 0 2.2-.4 3.2s-1.1 1.8-1.9 2.5-1.9 1.1-3 1.3-2.2.1-3.2-.4c-1-.5-1.8-1.1-2.5-1.9s-1.1-1.9-1.3-3c-.2-1.1-.1-2.2.4-3.2.5-1 1.2-1.8 2.1-2.4" />
                                                        </svg> NLP & Vision</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Data & Analytics</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 3v18" />
                                                            <path d="m8 17 4 4 4-4" />
                                                            <path d="m8 7 4-4 4 4" />
                                                        </svg> Data Eng.</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <line x1="18" y1="20" x2="18"
                                                                y2="10" />
                                                            <line x1="12" y1="20" x2="12"
                                                                y2="4" />
                                                            <line x1="6" y1="20" x2="6"
                                                                y2="14" />
                                                        </svg> Predictive</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18z" />
                                                            <path d="M12 12L7 7.5" />
                                                            <path d="M12 12V6" />
                                                            <path d="M12 12L15 9" />
                                                        </svg> BI & Reports</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M3 3v18h18" />
                                                            <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3" />
                                                        </svg> Data Viz</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">AI Integration & Ops</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <rect x="3" y="11" width="18" height="10"
                                                                rx="2" />
                                                            <circle cx="12" cy="5" r="2" />
                                                            <path d="M12 7v4" />
                                                            <line x1="8" y1="16" x2="8.01"
                                                                y2="16" />
                                                            <line x1="12" y1="16" x2="12.01"
                                                                y2="16" />
                                                            <line x1="16" y1="16" x2="16.01"
                                                                y2="16" />
                                                        </svg> API Integration</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                                                            <line x1="12" y1="22.08" x2="12"
                                                                y2="12" />
                                                        </svg> ML Deployment</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                                        </svg> AI Monitoring</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Training & Support</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <circle cx="12" cy="12" r="10" />
                                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                            <line x1="12" y1="17" x2="12.01"
                                                                y2="17" />
                                                        </svg> Team Training</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                                                        </svg> Fine-Tuning</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                                                            <path d="m9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                            <line x1="12" y1="17" x2="12.01"
                                                                y2="17" />
                                                        </svg> Support & Maint.</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-megamenu"><a href="#">Solutions <i
                                            class="fal fa-chevron-down"></i></a>
                                    <div class="tp-megamenu">
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Automation</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 2v2" />
                                                            <path d="m16.2 4.6 1.4 1.4" />
                                                            <path d="M19.4 8.2l.6.6" />
                                                            <path d="m21.8 12.2-1.4-1.4" />
                                                            <path d="m19.4 16.2.6.6" />
                                                            <path d="m16.2 19.8-1.4-1.4" />
                                                            <path d="M12 22v-2" />
                                                            <path d="m7.8 19.8-1.4-1.4" />
                                                            <path d="M4.6 16.2l-.6-.6" />
                                                            <path d="m2.2 12.2 1.4 1.4" />
                                                            <path d="M4.6 8.2l.6.6" />
                                                            <path d="m7.8 4.6 1.4 1.4" />
                                                            <circle cx="12" cy="12" r="3" />
                                                        </svg> Intelligent Auto</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <rect x="3" y="11" width="18" height="10"
                                                                rx="2" />
                                                            <circle cx="12" cy="5" r="2" />
                                                            <path d="M12 7v4" />
                                                            <line x1="8" y1="16" x2="8.01"
                                                                y2="16" />
                                                            <line x1="12" y1="16" x2="12.01"
                                                                y2="16" />
                                                            <line x1="16" y1="16" x2="16.01"
                                                                y2="16" />
                                                        </svg> RPA Solutions</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                                            <polyline points="22 4 12 14.01 9 11.01" />
                                                        </svg> Workflow Auto</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Customer Experience</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                        </svg> AI Assistants</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                            <circle cx="9" cy="7" r="4" />
                                                            <polyline points="16 11 18 13 22 9" />
                                                        </svg> Personalization</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
                                                            <path d="M19 10v1a7 7 0 0 1-14 0v-1" />
                                                            <line x1="12" y1="19" x2="12"
                                                                y2="23" />
                                                            <line x1="8" y1="23" x2="16"
                                                                y2="23" />
                                                        </svg> Voice AI</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Marketing & Sales</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 20v-6M6 20V10M18 20V4" />
                                                        </svg> Lead Scoring</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z" />
                                                        </svg> Rec. Engines</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                                            <path d="M22 12A10 10 0 0 0 12 2v10z" />
                                                        </svg> Mktg Analytics</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Operations</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M3 3v18h18" />
                                                            <path d="M7 16l3-4 3 2 4-6" />
                                                        </svg> Forecasting</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <box x="3" y="3" width="18" height="18"
                                                                rx="2" ry="2" />
                                                            <path d="M3 9h18" />
                                                            <path d="M9 21V9" />
                                                        </svg> Inventory Opt.</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <circle cx="12" cy="12" r="10" />
                                                            <path d="M12 8v4" />
                                                            <path d="M12 16h.01" />
                                                        </svg> AI Quality Control</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Security & Compliance</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                                        </svg> Fraud Detection</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                                                            <line x1="12" y1="9" x2="12"
                                                                y2="13" />
                                                            <line x1="12" y1="17" x2="12.01"
                                                                y2="17" />
                                                        </svg> Anomaly Detection</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <rect x="3" y="11" width="18" height="11"
                                                                rx="2" ry="2" />
                                                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                                        </svg> Risk Assessment Systems</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-megamenu"><a href="#">Industries <i
                                            class="fal fa-chevron-down"></i></a>
                                    <div class="tp-megamenu">
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Tech & SaaS</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <polyline points="16 18 22 12 16 6" />
                                                            <polyline points="8 6 2 12 8 18" />
                                                        </svg> Technology</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                                            <path d="M2 17l10 5 10-5" />
                                                            <path d="M2 12l10 5 10-5" />
                                                        </svg> SaaS</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <rect x="2" y="3" width="20" height="14"
                                                                rx="2" ry="2" />
                                                            <line x1="8" y1="21" x2="16"
                                                                y2="21" />
                                                            <line x1="12" y1="17" x2="12"
                                                                y2="21" />
                                                        </svg> IT Services</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3z" />
                                                        </svg> Startups</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Retail & Finance</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <circle cx="9" cy="21" r="1" />
                                                            <circle cx="20" cy="21" r="1" />
                                                            <path
                                                                d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                                                        </svg> Retail & E-com</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                                            <polyline points="16 7 22 7 22 13" />
                                                        </svg> Algo Trading</a></li>

                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <line x1="12" y1="1" x2="12"
                                                                y2="23" />
                                                            <path
                                                                d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                                        </svg> Finance & Bank</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                            <circle cx="9" cy="7" r="4" />
                                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                        </svg> Cust. Insights</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Health & Edu</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                                        </svg> Healthcare</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <circle cx="12" cy="12" r="10" />
                                                            <path d="m16 12-4-4-4 4 4 4 4-4z" />
                                                        </svg> AI Diagnostics</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                                            <path d="M6 12v5c3 3 9 3 12 0v-5" />
                                                        </svg> Education</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                                                        </svg> Adaptive Learning</a></li>
                                            </ul>
                                        </div>
                                        <div class="tp-megamenu__column">
                                            <span class="tp-megamenu__title">Industry & Estate</span>
                                            <ul class="tp-megamenu__list">
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M3 21v-9a4 4 0 1 1 8 0v9" />
                                                            <path d="M13 21v-7a4 4 0 1 1 8 0v7" />
                                                            <path d="M3 7h18" />
                                                        </svg> Manufacturing</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                                            <circle cx="12" cy="10" r="3" />
                                                        </svg> Supply Chain</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M3 21h18" />
                                                            <path d="M9 21V9l3-4 3 4v12" />
                                                            <path d="M7 13h10" />
                                                        </svg> Real Estate</a></li>
                                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <line x1="18" y1="20" x2="18"
                                                                y2="10" />
                                                            <line x1="12" y1="20" x2="12"
                                                                y2="4" />
                                                            <line x1="6" y1="20" x2="6"
                                                                y2="14" />
                                                        </svg> Property Analytics</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Success Stories</a></li>
                                {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6  d-none d-xl-block">
                    <div class="tp-header__right d-flex justify-content-end">
                        <div class="tp-header__action">
                            <ul>
                                <li>
                                    <div class="tp-header-btn">
                                        <a class="tp-btn-two tp-btn-anim" href="{{ route('contact') }}">
                                            <div class="tp-btn-text">Let’s Talk</div>
                                            <span>
                                                <svg width="9" height="13" viewBox="0 0 9 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 d-lg-none">
                    <div class="tp-header__right d-flex justify-content-end">
                        <div class="tp-header__action">
                            <ul>
                                <li>
                                    <button class="tp-header__burs-btn tp-offcanvas-open-btn">
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="2.39023" cy="2.39022" rx="2.39023" ry="2.39022"
                                                fill="black" />
                                            <ellipse cx="13.9137" cy="2.39022" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="25.441" cy="2.39022" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="2.39023" cy="12.6339" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="13.9137" cy="12.6349" rx="2.39023" ry="2.39022"
                                                fill="black" />
                                            <ellipse cx="25.441" cy="12.6349" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="2.39023" cy="23.0484" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="13.9996" cy="23.0484" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="25.609" cy="23.0484" rx="2.39023" ry="2.39022"
                                                fill="black" />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-top-area-end -->
