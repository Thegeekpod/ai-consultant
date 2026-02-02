<!-- start offcanvas area  -->
<div class="tp-offcanvas__area">
    <div class="tp-offcanvas__wrapper">
        <div class="tp-offcanvas__close">
            <button class="tp-offcanvas__close-btn tp-offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
        <div class="tp-offcanvas__content">
            <div class="tp-offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                <div class="tp-offcanvas__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/imgs/logo/logo-dark.svg') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="tp-main-menu-mobile d-xl-none">
                <nav class="tp-main-menu-content">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>

                        <!-- Services -->
                        <li class="has-dropdown">
                            <a href="{{ route('service') }}">Services</a>
                            <ul class="tp-submenu">
                                <li class="has-dropdown">
                                    <a href="#">Strategy & Consulting</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">AI Readiness Assessment</a></li>
                                        <li><a href="#">AI Roadmap & Planning</a></li>
                                        <li><a href="#">Digital Transformation Consulting</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">AI Development</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Custom AI Model Development</a></li>
                                        <li><a href="#">Machine Learning Solutions</a></li>
                                        <li><a href="#">Generative AI (Chatbots, Copilots)</a></li>
                                        <li><a href="#">NLP & Computer Vision</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Data & Analytics</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Data Engineering</a></li>
                                        <li><a href="#">Predictive Analytics</a></li>
                                        <li><a href="#">Business Intelligence</a></li>
                                        <li><a href="#">Data Visualization</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">AI Integration & Ops</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">API & System Integration</a></li>
                                        <li><a href="#">MLOps & Model Deployment</a></li>
                                        <li><a href="#">AI Monitoring & Optimization</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Training & Support</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">AI Training for Teams</a></li>
                                        <li><a href="#">Model Fine-Tuning</a></li>
                                        <li><a href="#">Ongoing Support & Maintenance</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Solutions -->
                        <li class="has-dropdown">
                            <a href="#">Solutions</a>
                            <ul class="tp-submenu">
                                <li class="has-dropdown">
                                    <a href="#">Automation</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Intelligent Process Automation (IPA)</a></li>
                                        <li><a href="#">Robotic Process Automation (RPA)</a></li>
                                        <li><a href="#">Workflow Automation</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Customer Experience</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">AI Chatbots & Virtual Assistants</a></li>
                                        <li><a href="#">Personalization Engines</a></li>
                                        <li><a href="#">Voice AI Solutions</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Marketing & Sales</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">AI-Powered Lead Scoring</a></li>
                                        <li><a href="#">Recommendation Systems</a></li>
                                        <li><a href="#">Marketing Analytics</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Operations</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Demand Forecasting</a></li>
                                        <li><a href="#">Inventory Optimization</a></li>
                                        <li><a href="#">Quality Control (AI Vision)</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Security & Compliance</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Fraud Detection</a></li>
                                        <li><a href="#">Anomaly Detection</a></li>
                                        <li><a href="#">Risk Assessment Systems</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Industries -->
                        <li class="has-dropdown">
                            <a href="#">Industries</a>
                            <ul class="tp-submenu">
                                <li class="has-dropdown">
                                    <a href="#">Technology</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">SaaS Solutions</a></li>
                                        <li><a href="#">IT Services</a></li>
                                        <li><a href="#">Startups</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Retail & E-Commerce</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Personalized Shopping</a></li>
                                        <li><a href="#">Inventory Forecasting</a></li>
                                        <li><a href="#">Customer Insights</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Healthcare</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Medical Image Analysis</a></li>
                                        <li><a href="#">Patient Data Analytics</a></li>
                                        <li><a href="#">AI Diagnostics</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Finance & Banking</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Credit Scoring</a></li>
                                        <li><a href="#">Fraud Detection</a></li>
                                        <li><a href="#">Algorithmic Trading</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Manufacturing</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Predictive Maintenance</a></li>
                                        <li><a href="#">Quality Inspection</a></li>
                                        <li><a href="#">Supply Chain Optimization</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Education</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Adaptive Learning</a></li>
                                        <li><a href="#">AI Tutors</a></li>
                                        <li><a href="#">Student Analytics</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Real Estate</a>
                                    <ul class="tp-submenu">
                                        <li><a href="#">Price Prediction</a></li>
                                        <li><a href="#">Property Analytics</a></li>
                                        <li><a href="#">Virtual Assistants</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="{{ route('projects') }}">Success Stories</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="tp-mobile-menu-pos"></div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- start offcanvas end  -->
