<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

@if (isset($seo_settings) && $seo_settings->is_active)
    @if ($seo_settings->title)
        <title>{{ $seo_settings->title }}</title>
    @else
        <title>@yield('title', 'AI Consultant - AI Agency & Technology')</title>
        <meta name="robots" content="noindex, nofollow">
    @endif

    @if ($seo_settings->meta_description)
        <meta name="description" content="{{ $seo_settings->meta_description }}">
    @else
        <meta name="description" content="AI Consultant - AI Agency & Technology">
    @endif

    @if ($seo_settings->other_tags)
        {!! $seo_settings->other_tags !!}
    @endif
@else
    <meta name="description" content="AI Consultant - AI Agency & Technology">
    <!-- Site Title -->
    <title>@yield('title', 'AI Consultant - AI Agency & Technology')</title>
@endif

<!-- Site Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/imgs/logo/favicon.png') }}" type="image/x-icon">

<!-- All CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/actova-cursor.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
<link rel="stylesheet" href="{{ asset('style.css') }}">

@stack('css')
