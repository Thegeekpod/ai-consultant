<!-- header-top-area-start -->
<header>
    <div class="tp-header-top-area tp-header__style-4 tp-header__transparent">
        <div class="contianer-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="tp-main__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/imgs/logo/logo-dark.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-10 d-none d-lg-block">
                    <div class="tp-main__menu d-flex justify-content-center">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
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
