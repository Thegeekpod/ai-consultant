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

                                <!-- Services Mega Menu -->
                                <li class="has-megamenu">
                                    <a href="{{ route('service') }}">Services <i class="fal fa-chevron-down"></i></a>
                                    <div class="tp-megamenu">
                                        <!-- Sidebar -->
                                        <div class="tp-megamenu__sidebar">
                                            <span class="tp-megamenu__sidebar-title">Expertise</span>
                                            <a href="#" class="tp-megamenu__sidebar-item active"
                                                data-target="strategy">
                                                <div class="tp-megamenu__sidebar-icon"><i class="fal fa-analytics"></i>
                                                </div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">AI Strategy &
                                                        Consulting</span>
                                                    <span class="tp-megamenu__sidebar-desc">Strategic planning &
                                                        enterprise adoption.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item"
                                                data-target="development">
                                                <div class="tp-megamenu__sidebar-icon"><i class="fal fa-code"></i></div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">AI Development</span>
                                                    <span class="tp-megamenu__sidebar-desc">Custom LLMs & software
                                                        solutions.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item" data-target="data">
                                                <div class="tp-megamenu__sidebar-icon"><i class="fal fa-database"></i>
                                                </div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">Data & Analytics</span>
                                                    <span class="tp-megamenu__sidebar-desc">Scalable pipelines &
                                                        BI.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item"
                                                data-target="integration">
                                                <div class="tp-megamenu__sidebar-icon"><i class="fal fa-cogs"></i></div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">AI Integration & Ops</span>
                                                    <span class="tp-megamenu__sidebar-desc">MLOps & system
                                                        integration.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item" data-target="training">
                                                <div class="tp-megamenu__sidebar-icon"><i
                                                        class="fal fa-chalkboard-teacher"></i></div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">Training & Support</span>
                                                    <span class="tp-megamenu__sidebar-desc">Fine-tuning & team
                                                        workshops.</span>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Main Content: Strategy -->
                                        <div class="tp-megamenu__main active" data-id="strategy">
                                            <span class="tp-megamenu__main-title">STRATEGY & CONSULTING</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-clipboard-check"></i></div>
                                                    AI Readiness Assessment
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-map-marked-alt"></i></div>
                                                    AI Roadmap & Planning
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-rocket"></i>
                                                    </div>
                                                    Digital Transformation Consulting
                                                </a>
                                            </div>
                                            <div class="tp-megamenu__footer">
                                                <div class="tp-megamenu__footer-content">
                                                    <span class="tp-megamenu__footer-text1">Looking for AI
                                                        Development?</span>
                                                    <span class="tp-megamenu__footer-text2">Explore our custom LLM and
                                                        Machine Learning solutions.</span>
                                                </div>
                                                <a href="#" class="tp-megamenu__footer-btn">Learn More</a>
                                            </div>
                                        </div>

                                        <!-- Main Content: Development -->
                                        <div class="tp-megamenu__main" data-id="development">
                                            <span class="tp-megamenu__main-title">AI DEVELOPMENT</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-brain"></i>
                                                    </div>
                                                    Custom AI Model Development
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-laptop-code"></i></div>
                                                    Machine Learning Solutions
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-comments"></i>
                                                    </div>
                                                    Generative AI (Chatbots, Copilots)
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-eye"></i></div>
                                                    NLP & Computer Vision
                                                </a>
                                            </div>
                                            <div class="tp-megamenu__footer">
                                                <div class="tp-megamenu__footer-content">
                                                    <span class="tp-megamenu__footer-text1">Need a prototype?</span>
                                                    <span class="tp-megamenu__footer-text2">Get a working MVP in 4
                                                        weeks.</span>
                                                </div>
                                                <a href="#" class="tp-megamenu__footer-btn">Start Building</a>
                                            </div>
                                        </div>

                                        <!-- Main Content: Data -->
                                        <div class="tp-megamenu__main" data-id="data">
                                            <span class="tp-megamenu__main-title">DATA & ANALYTICS</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-database"></i>
                                                    </div> Data Engineering
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-chart-pie"></i>
                                                    </div> Predictive Analytics
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-lightbulb"></i>
                                                    </div> Business Intelligence
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-chart-bar"></i>
                                                    </div> Data Visualization
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Main Content: Integration -->
                                        <div class="tp-megamenu__main" data-id="integration">
                                            <span class="tp-megamenu__main-title">AI INTEGRATION & OPS</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-plug"></i>
                                                    </div> API & System Integration
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-cogs"></i>
                                                    </div> MLOps & Model Deployment
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-heartbeat"></i>
                                                    </div> AI Monitoring & Optimization
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Main Content: Training -->
                                        <div class="tp-megamenu__main" data-id="training">
                                            <span class="tp-megamenu__main-title">TRAINING & SUPPORT</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-chalkboard"></i></div> AI Training for Teams
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-sliders-h"></i>
                                                    </div> Model Fine-Tuning
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-life-ring"></i>
                                                    </div> Ongoing Support & Maintenance
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <!-- Solutions Mega Menu -->
                                <li class="has-megamenu">
                                    <a href="#">Solutions <i class="fal fa-chevron-down"></i></a>
                                    <div class="tp-megamenu">
                                        <!-- Sidebar -->
                                        <div class="tp-megamenu__sidebar">
                                            <span class="tp-megamenu__sidebar-title">Categories</span>
                                            <a href="#" class="tp-megamenu__sidebar-item active"
                                                data-target="automation">
                                                <div class="tp-megamenu__sidebar-icon"><i class="fal fa-robot"></i>
                                                </div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">Automation</span>
                                                    <span class="tp-megamenu__sidebar-desc">RPA & Intelligent
                                                        workflows.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item"
                                                data-target="customer">
                                                <div class="tp-megamenu__sidebar-icon"><i
                                                        class="fal fa-user-headset"></i></div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">Customer Experience</span>
                                                    <span class="tp-megamenu__sidebar-desc">Chatbots &
                                                        Personalization.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item"
                                                data-target="marketing">
                                                <div class="tp-megamenu__sidebar-icon"><i
                                                        class="fal fa-chart-line"></i></div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">Marketing & Sales</span>
                                                    <span class="tp-megamenu__sidebar-desc">Lead scoring &
                                                        Analytics.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item"
                                                data-target="operations">
                                                <div class="tp-megamenu__sidebar-icon"><i
                                                        class="fal fa-industry-alt"></i></div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">Operations</span>
                                                    <span class="tp-megamenu__sidebar-desc">Forecasting &
                                                        Inventory.</span>
                                                </div>
                                            </a>
                                            <a href="#" class="tp-megamenu__sidebar-item"
                                                data-target="security">
                                                <div class="tp-megamenu__sidebar-icon"><i
                                                        class="fal fa-shield-check"></i></div>
                                                <div class="tp-megamenu__sidebar-info">
                                                    <span class="tp-megamenu__sidebar-name">Security &
                                                        Compliance</span>
                                                    <span class="tp-megamenu__sidebar-desc">Fraud & Anomaly
                                                        detection.</span>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Content: Automation -->
                                        <div class="tp-megamenu__main active" data-id="automation">
                                            <span class="tp-megamenu__main-title">AUTOMATION SOLUTIONS</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-microchip"></i></div> Intelligent Process
                                                    Automation (IPA)
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-cogs"></i>
                                                    </div> Robotic Process Automation (RPA)
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-project-diagram"></i></div> Workflow
                                                    Automation
                                                </a>
                                            </div>
                                            <div class="tp-megamenu__footer">
                                                <div class="tp-megamenu__footer-content">
                                                    <span class="tp-megamenu__footer-text1">Need custom
                                                        automation?</span>
                                                    <span class="tp-megamenu__footer-text2">Talk to our experts.</span>
                                                </div>
                                                <a href="#" class="tp-megamenu__footer-btn">Book a Demo</a>
                                            </div>
                                        </div>

                                        <!-- Content: Customer -->
                                        <div class="tp-megamenu__main" data-id="customer">
                                            <span class="tp-megamenu__main-title">CUSTOMER EXPERIENCE</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-comments"></i></div> AI Chatbots & Virtual
                                                    Assistants
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-user-friends"></i></div> Personalization
                                                    Engines
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-microphone"></i></div> Voice AI Solutions
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Content: Marketing -->
                                        <div class="tp-megamenu__main" data-id="marketing">
                                            <span class="tp-megamenu__main-title">MARKETING & SALES</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-bullseye"></i></div> AI-Powered Lead Scoring
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-thumbs-up"></i></div> Recommendation Systems
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-chart-area"></i></div> Marketing Analytics
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Content: Operations -->
                                        <div class="tp-megamenu__main" data-id="operations">
                                            <span class="tp-megamenu__main-title">OPERATIONS</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-chart-line"></i></div> Demand Forecasting
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-boxes"></i>
                                                    </div> Inventory Optimization
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-search-plus"></i></div> Quality Control (AI
                                                    Vision)
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Content: Security -->
                                        <div class="tp-megamenu__main" data-id="security">
                                            <span class="tp-megamenu__main-title">SECURITY & COMPLIANCE</span>
                                            <div class="tp-megamenu__grid">
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-lock"></i>
                                                    </div> Fraud Detection
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i
                                                            class="fal fa-exclamation-triangle"></i></div> Anomaly
                                                    Detection
                                                </a>
                                                <a href="#" class="tp-megamenu__grid-item">
                                                    <div class="tp-megamenu__grid-icon"><i class="fal fa-shield"></i>
                                                    </div> Risk Assessment Systems
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <!-- Industries Mega Menu -->
                                <li class="has-megamenu">
                                    <a href="#">Industries <i class="fal fa-chevron-down"></i></a>
                                    <div class="tp-megamenu tp-megamenu-industries">

                                        <!-- Left Side: 2-Column Grid of Industries -->
                                        <div class="tp-megamenu-industries__content">

                                            <!-- Column 1 -->
                                            <div class="tp-megamenu-industries__col">
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-microchip"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span class="tp-megamenu-industries__title">Technology</span>
                                                        <span class="tp-megamenu-industries__desc">SaaS, IT Services,
                                                            and Startups.</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-shopping-cart"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span class="tp-megamenu-industries__title">Retail &
                                                            E-Com</span>
                                                        <span class="tp-megamenu-industries__desc">Customer insights &
                                                            inventory forecasting.</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-stethoscopes"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span class="tp-megamenu-industries__title">Healthcare</span>
                                                        <span class="tp-megamenu-industries__desc">Diagnostics &
                                                            patient data analytics.</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-university"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span class="tp-megamenu-industries__title">Finance &
                                                            Banking</span>
                                                        <span class="tp-megamenu-industries__desc">Fraud detection &
                                                            algorithmic trading.</span>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Column 2 -->
                                            <div class="tp-megamenu-industries__col">
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-industry"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span
                                                            class="tp-megamenu-industries__title">Manufacturing</span>
                                                        <span class="tp-megamenu-industries__desc">Predictive
                                                            maintenance & quality control.</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span class="tp-megamenu-industries__title">Education</span>
                                                        <span class="tp-megamenu-industries__desc">Adaptive learning &
                                                            AI tutors.</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-building"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span class="tp-megamenu-industries__title">Real Estate</span>
                                                        <span class="tp-megamenu-industries__desc">Price prediction &
                                                            property analytics.</span>
                                                    </div>
                                                </a>
                                                <a href="#" class="tp-megamenu-industries__item">
                                                    <div class="tp-megamenu-industries__icon">
                                                        <i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="tp-megamenu-industries__text">
                                                        <span class="tp-megamenu-industries__title">View All
                                                            Industries</span>
                                                        <span class="tp-megamenu-industries__desc">Explore our full
                                                            sector expertise.</span>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <!-- Right Side: Featured Card -->
                                        <div class="tp-megamenu-industries__featured">
                                            <span class="tp-megamenu-industries__featured-top">Highlight</span>
                                            <div class="tp-megamenu-industries__card">
                                                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=400"
                                                    alt="Industry 4.0">
                                                <div class="tp-megamenu-industries__play-btn">
                                                    <i class="fas fa-play"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="tp-megamenu-industries__link">
                                                Industry 4.0 Report <i class="far fa-long-arrow-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </li>

                                <li><a href="{{ route('projects') }}">Success Stories</a></li>
                                {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 d-none d-xl-block">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarItems = document.querySelectorAll('.tp-megamenu__sidebar-item');

        sidebarItems.forEach(item => {
            item.addEventListener('mouseenter', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('data-target');
                const parent = this.closest('.tp-megamenu');

                // Remove active class from all sidebar items in this container
                parent.querySelectorAll('.tp-megamenu__sidebar-item').forEach(si => si.classList
                    .remove('active'));
                this.classList.add('active');

                // Hide all main content areas in this container
                parent.querySelectorAll('.tp-megamenu__main').forEach(main => main.classList
                    .remove('active'));

                // Show target content
                const targetContent = parent.querySelector(
                    `.tp-megamenu__main[data-id="${targetId}"]`);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
            });

            // Also handle click just in case
            item.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent jump
            });
        });
    });
</script>
