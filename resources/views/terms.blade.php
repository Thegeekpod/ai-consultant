@extends('layouts.app')

@section('content')
    <section class="tp-breadcrumb-area">
        <div class="tp-container">
            <div class="tp-breadcrumb-wrapper">
                <img src="{{ asset('assets/imgs/hero/about-bg.jpg') }}" alt="Image">
                <div class="tp-breadcrumb-content">
                    <h1 class="tp-breadcrumb-title">Terms and Conditions</h1>
                    <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> Terms and Conditions</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->


    <!-- Terms area start -->
    <section class="tp-terms-area pt-140 pb-140">
        <div class="container">
            <div class="tp-content-wrap" style="max-width: 900px; margin: 0 auto;">
                <div class="mb-40">
                    <h2 class="title mb-20">1. Introduction</h2>
                    <p>Welcome to AI Consultant. These Terms and Conditions govern your use of our website and services. By
                        accessing or using our services, you agree to be bound by these terms.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">2. Services</h2>
                    <p>AI Consultant provides AI strategy, development, and integration services. We reserve the right to
                        modify or discontinue any aspect of our services at any time.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">3. User Responsibilities</h2>
                    <p>Users are responsible for maintaining the confidentiality of any account credentials and for all
                        activities that occur under their account. You agree to provide accurate and complete information
                        when using our services.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">4. Intellectual Property</h2>
                    <p>All content, trademarks, and data on this website, including but not limited to software, databases,
                        text, graphics, icons, and hyperlinks, are the property of or licensed to AI Consultant and are
                        protected from infringement by local and international legislation.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">5. Limitation of Liability</h2>
                    <p>AI Consultant shall not be liable for any direct, indirect, incidental, special, or consequential
                        damages resulting from the use or inability to use our services.</p>
                </div>

                <div class="mb-40">
                    <h2 class="title mb-20">6. Governing Law</h2>
                    <p>These terms shall be governed by and construed in accordance with the laws of India, and any disputes
                        shall be subject to the exclusive jurisdiction of the courts of West Bengal.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Terms area end -->
@endsection
