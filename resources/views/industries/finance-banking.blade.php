@extends('layouts.app')

@section('content')
<!-- Hero Section with Gradient -->
<section class="tp-breadcrumb-area" style="position: relative; overflow: hidden;">
    <div class="tp-container">
        <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset('assets/imgs/hero/about-bg.jpg') }}" alt="Image">
            <div class="tp-breadcrumb-content">
                <h1 class="tp-breadcrumb-title">Coming Soon</h1>
                <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> AI for Finance & Banking</p>
            </div>
        </div>
    </div>
    <div class="tp-hero-bg-color">
        <svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f_4841_5510)">
                <path d="M518.5 591.13L0 915.63H1920L1699.5 808.63L1444 591.13H1149C928.2 270.33 636.667 457.464 518.5 591.13Z" fill="#A1FF75"/>
            </g>
            <defs>
                <filter id="filter0_f_4841_5510" x="-414" y="0" width="2748" height="1329.63" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="207" result="effect1_foregroundBlur_4841_5510"/>
                </filter>
            </defs>
        </svg>
    </div>
</section><br><br>


@endsection