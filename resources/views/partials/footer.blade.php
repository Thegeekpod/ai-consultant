<!-- Footer area start -->
<footer class="tp-footer-area pt-110 plr-50">
    <div class="tp-footer-inner">
        <div class="tp-footer-top-2">
            <div class="tp-footer-widget logo-widget">
                <img src="{{ asset('assets/imgs/logo/logo.svg') }}" alt="Footer Logo">
                <p>We’re Global AI Agency with Masterpiece.</p>
                <ul class="tp-social-media">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tp-footer-widget quick-link-widget">
                <h2 class="title-2">Quick Link</h2>
                <ul>
                    <li><a href="{{ route('about') }}">Company</a></li>
                    <li><a href="{{ route('service') }}">Features</a></li>
                    <li><a href="#">Integrations</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="tp-footer-widget quick-link-widget">
                <h2 class="title-2">Resources</h2>
                <ul>
                    <li><a href="{{ route('blog') }}">News & Insight</a></li>
                    <li><a href="{{ route('faq') }}">Faq & Help</a></li>
                    <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy & Policy</a></li>
                </ul>
            </div>
            <div class="tp-footer-widget quick-link-widget">
                <h2 class="title-2">Contact Info</h2>
                <ul>
                    {{-- <li><a href="mailto:[EMAIL_ADDRESS]">[EMAIL_ADDRESS]</a></li> --}}
                    <li><a href="tel:+919635462491">+919635462491</a></li>
                    <li><a href="#">Durgapur, West Bengal, India</a></li>
                </ul>
            </div>
        </div>
        <div class="tp-footer-bottom-wrap-2 p-0">
            <div class="py-3">
                <p class="tp-footer-copyright-2">&copy; {{ date('Y') }} <a href="#">AI Consultant</a>, All
                    Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer area end -->
