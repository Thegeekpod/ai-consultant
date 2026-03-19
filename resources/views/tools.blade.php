@extends('layouts.app')

@section('title', 'AI Intelligence Tools - AI Consultant')

@push('css')
    <style>
        .tp-tools-hero-area {
            background: linear-gradient(180deg, rgba(161, 255, 117, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
            position: relative;
            overflow: hidden;
        }

        .tp-tools-hero-title span {
            color: var(--tp-theme-1);
            position: relative;
            z-index: 1;
        }

        .tp-tools-hero-title span::after {
            position: absolute;
            content: "";
            left: 0;
            bottom: 10px;
            height: 15px;
            width: 100%;
            background: rgba(161, 255, 117, 0.3);
            z-index: -1;
        }

        .tp-tool-card {
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 24px;
            padding: 40px;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        }

        .tp-tool-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: var(--tp-theme-1);
        }

        .tp-tool-icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .tp-tool-card:hover .tp-tool-icon-wrapper {
            transform: rotate(-5deg) scale(1.1);
        }

        .tp-tool-icon-wrapper.readiness {
            background: rgba(0, 123, 255, 0.1);
            color: #007bff;
        }

        .tp-tool-icon-wrapper.audit {
            background: rgba(255, 169, 64, 0.1);
            color: #ffa940;
        }

        .tp-tool-card h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1a1a1a;
        }

        .tp-tool-desc {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 30px;
        }

        .tp-tool-bg-shape {
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            z-index: 0;
            opacity: 0.05;
            transition: all 0.5s ease;
        }

        .tp-tool-card:hover .tp-tool-bg-shape {
            transform: scale(1.5);
            opacity: 0.1;
        }

        .tp-tool-bg-shape.readiness {
            background: #007bff;
        }

        .tp-tool-bg-shape.audit {
            background: #ffa940;
        }

        .tp-tool-tag {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 15px;
        }

        .readiness .tp-tool-tag {
            background: rgba(0, 123, 255, 0.1);
            color: #007bff;
        }

        .audit .tp-tool-tag {
            background: rgba(255, 169, 64, 0.1);
            color: #ffa940;
        }

        .tp-tool-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #1a1a1a;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tp-tool-link i {
            transition: transform 0.3s ease;
        }

        .tp-tool-link:hover {
            color: var(--tp-theme-1);
        }

        .tp-tool-link:hover i {
            transform: translateX(5px);
        }
    </style>
@endpush

@section('content')
    <!-- Breadcrumb Area Start -->
    <section class="tp-breadcrumb-area">
        <div class="tp-container">
            <div class="tp-breadcrumb-wrapper">
                <img src="{{ asset('assets/imgs/hero/contact-bg.jpg') }}" alt="Image">
                <div class="tp-breadcrumb-content">
                    <h1 class="tp-breadcrumb-title">AI Intelligence Tools</h1>
                    <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> Tools</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Hero area start -->
    <section class="tp-tools-hero-area pt-100 pb-60">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 text-center">
                    <div class="tp-hero4-content">
                        <h2 class="section-title mb-20">Empower Your Business with <span>AI Insights</span></h2>
                        <p class="text mb-0">
                            Our proprietary AI assessment tools help you navigate the complex landscape of artificial
                            intelligence,
                            providing actionable data to drive your digital transformation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->

    <!-- Tools Index Area Start -->
    <section class="tp-tools-area pb-120">
        <div class="container">
            <div class="row">
                <!-- Tool 1: AI Readiness Assessment -->
                <div class="col-lg-6 mb-30">
                    <div class="tp-tool-card readiness">
                        <div class="tp-tool-bg-shape readiness"></div>
                        <div class="tp-tool-content position-relative">
                            <span class="tp-tool-tag">Strategic tool</span>
                            <div class="tp-tool-icon-wrapper readiness">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <h3>AI Readiness Assessment</h3>
                            <p class="tp-tool-desc">
                                Evaluate your organization's AI maturity across technology, data, and culture.
                                Receive a comprehensive report with benchmarking and transition strategies.
                            </p>
                            <a href="{{ route('tools.readiness') }}" class="tp-tool-link">
                                Launch Assessment Tool <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tool 2: AI Audit Tool -->
                <div class="col-lg-6 mb-30">
                    <div class="tp-tool-card audit">
                        <div class="tp-tool-bg-shape audit"></div>
                        <div class="tp-tool-content position-relative">
                            <span class="tp-tool-tag">Technical tool</span>
                            <div class="tp-tool-icon-wrapper audit">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                            <h3>AI Audit Tool</h3>
                            <p class="tp-tool-desc">
                                Perform a deep-dive technical audit of your existing software architecture.
                                Identify specific modules that are ready for AI-powered optimization.
                            </p>
                            <a href="{{ route('tools.audit') }}" class="tp-tool-link">
                                Launch Audit Tool <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
