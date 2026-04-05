<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @if(isset($global_scripts) && $global_scripts->body_scripts)
        {!! $global_scripts->body_scripts !!}
    @endif

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

    @if(isset($global_scripts) && $global_scripts->footer_scripts)
        {!! $global_scripts->footer_scripts !!}
    @endif
</body>

</html>
