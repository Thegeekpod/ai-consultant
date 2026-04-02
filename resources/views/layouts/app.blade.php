<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>

    {{-- @include('partials.preloader') --}}

    <!-- Scroll to top -->
    <button id="scroll_top" class="scroll--top">
        <i class="fal fa-arrow-up"></i>
    </button>

    @include('partials.offcanvas')

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @include('partials.scripts')
    @include('partials.lead-popup')

</body>

</html>
