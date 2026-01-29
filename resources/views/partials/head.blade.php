<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="actova HTML5 Template">

<!-- Site Title -->
<title>@yield('title', 'Actova - AI Agency & Technology HTML Template')</title>

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
