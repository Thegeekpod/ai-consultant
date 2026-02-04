<!-- start offcanvas area  -->
<div class="tp-offcanvas__area">
    <div class="tp-offcanvas__wrapper">
        <div class="tp-offcanvas__close">
            <button class="tp-offcanvas__close-btn tp-offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
        <div class="tp-offcanvas__content">
            <div class="tp-offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                <div class="tp-offcanvas__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/imgs/logo/logo-dark.svg') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="tp-main-menu-mobile d-xl-none">
                <nav class="tp-main-menu-content">
                    <ul>
                        @foreach ($menus as $menu)
                            @if ($menu->children->isEmpty())
                                <li><a href="{{ $menu->url }}">{{ $menu->name }}</a></li>
                            @elseif($menu->slug == 'industries')
                                <!-- Industries (Simplified list for mobile) -->
                                <li class="has-dropdown">
                                    <a href="{{ $menu->url }}">{{ $menu->name }}</a>
                                    <ul class="tp-submenu">
                                        @foreach ($menu->children as $child)
                                            <li><a href="{{ $child->url }}">{{ $child->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <!-- Services & Solutions (Deeply nested) -->
                                <li class="has-dropdown">
                                    <a href="{{ $menu->url }}">{{ $menu->name }}</a>
                                    <ul class="tp-submenu">
                                        @foreach ($menu->children as $child)
                                            <li class="has-dropdown">
                                                <a href="#">{{ $child->name }}</a>
                                                <ul class="tp-submenu">
                                                    @foreach ($child->children as $grandchild)
                                                        <li><a
                                                                href="{{ $grandchild->url }}">{{ $grandchild->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="tp-mobile-menu-pos"></div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- start offcanvas end  -->
