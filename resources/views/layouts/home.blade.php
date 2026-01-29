<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.preloader')

    <!-- Scroll to top -->
    <button id="scroll_top" class="scroll--top">
        <i class="fal fa-arrow-up"></i>
    </button>

    @include('partials.offcanvas')

    @include('partials.header')

    <div id="smooth-wrapper">
        <div id="smooth-content">

            @yield('content')

            @include('partials.footer')

        </div>
    </div>

    @include('partials.scripts')

</body>

</html>
