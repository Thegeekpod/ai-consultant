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
                        <img src="{{ asset('assets/imgs/logo/logo.svg') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="tp-main-menu-mobile d-xl-none">
                <nav class="tp-main-menu-content">
                    <ul>
                        <li><a href="{{ route('home') }}"> Home </a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li class="has-dropdown"><a href="{{ route('service') }}">Services</a>
                            <ul class="tp-submenu">
                                <li><a href="{{ route('service') }}">Service</a></li>
                                <li><a href="{{ route('service-details') }}">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">Pages</a>
                            <ul class="tp-submenu">
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                                <li><a href="{{ route('team') }}">Team</a></li>
                                <li><a href="{{ route('team-details') }}">Team Details</a></li>
                                <li><a href="{{ route('projects') }}">Projects</a></li>
                                <li><a href="{{ route('projects-details') }}">Projects Details</a></li>
                                <li><a href="{{ route('faq') }}">FAQ'S</a></li>
                            </ul>
                        </li>
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
