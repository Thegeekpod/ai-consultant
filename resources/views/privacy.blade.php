@extends('layouts.app')

@section('content')
    <section class="tp-breadcrumb-area">
        <div class="tp-container">
            <div class="tp-breadcrumb-wrapper">
                <img src="{{ asset('assets/imgs/hero/about-bg.jpg') }}" alt="Image">
                <div class="tp-breadcrumb-content">
                    <h1 class="tp-breadcrumb-title">Privacy Policy</h1>
                    <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> Privacy Policy</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->


    <!-- Privacy area start -->
    <section class="tp-privacy-area pt-140 pb-140">
        <div class="container">
            <div class="tp-content-wrap" style="max-width: 900px; margin: 0 auto;">
                <div class="mb-40">
                    <h2 class="title mb-20">1. Information Collection</h2>
                    <p>We collect information that you provide to us directly through contact forms, lead generators, and
                        during service engagement. This may include your name, email address, phone number, and company
                        details.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">2. Sharing of Information</h2>
                    <p>We do not sell or rent user information to third parties. We may share your information with trusted
                        partners who help us provide our services, provided they maintain the confidentiality and security
                        of your data.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">3. Data Security</h2>
                    <p>We implement appropriate technical and organizational measures to protect your personal information
                        from unauthorized access, loss, or disclosure. However, no electronic transmission or storage is
                        completely secure, so we cannot guarantee absolute security.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">4. Use of Cookies</h2>
                    <p>We use cookies to improve your browsing experience and analyze our website traffic. You can modify
                        your browser settings to disable cookies if you prefer.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">5. Your Rights</h2>
                    <p>You have the right to request access to the personal information we hold about you, or to request
                        correction or deletion of such information. Please contact us to exercise these rights.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">6. Changes to This Policy</h2>
                    <p>We may update this Privacy Policy periodically. We encourage you to review this page regularly for
                        any changes.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Privacy area end -->
@endsection
