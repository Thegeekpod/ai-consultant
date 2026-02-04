<!-- header-top-area-start -->
<header>
    <div class="tp-header-top-area tp-header__style-4 tp-header__transparent">
        <div class="contianer-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="tp-main__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/imgs/logo/logo-dark.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9 d-none d-lg-block">
                    <div class="tp-main__menu d-flex justify-content-center">
                        <nav>
                            <ul>
                                @foreach ($menus as $menu)
                                    @if ($menu->children->isEmpty())
                                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a></li>
                                    @elseif($menu->slug == 'services' || $menu->slug == 'solutions')
                                        <li class="has-megamenu">
                                            <a href="{{ $menu->url }}">{{ $menu->name }} <i
                                                    class="fal fa-chevron-down"></i></a>
                                            <div class="tp-megamenu">
                                                <!-- Sidebar -->
                                                <div class="tp-megamenu__sidebar">
                                                    <span class="tp-megamenu__sidebar-title">
                                                        {{ $menu->slug == 'services' ? 'Expertise' : 'Categories' }}
                                                    </span>
                                                    @foreach ($menu->children as $index => $child)
                                                        <a href="#"
                                                            class="tp-megamenu__sidebar-item {{ $index === 0 ? 'active' : '' }}"
                                                            data-target="{{ $child->slug }}">
                                                            @if ($child->icon)
                                                                <div class="tp-megamenu__sidebar-icon"><i
                                                                        class="{{ $child->icon }}"></i></div>
                                                            @endif
                                                            <div class="tp-megamenu__sidebar-info">
                                                                <span
                                                                    class="tp-megamenu__sidebar-name">{{ $child->name }}</span>
                                                                @if ($child->description)
                                                                    <span
                                                                        class="tp-megamenu__sidebar-desc">{{ $child->description }}</span>
                                                                @endif
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>

                                                <!-- Main Content -->
                                                @foreach ($menu->children as $index => $child)
                                                    <div class="tp-megamenu__main {{ $index === 0 ? 'active' : '' }}"
                                                        data-id="{{ $child->slug }}">
                                                        <span
                                                            class="tp-megamenu__main-title">{{ strtoupper($child->name) }}</span>
                                                        <div class="tp-megamenu__grid">
                                                            @foreach ($child->children as $grandchild)
                                                                <a href="{{ $grandchild->url }}"
                                                                    class="tp-megamenu__grid-item">
                                                                    @if ($grandchild->icon)
                                                                        <div class="tp-megamenu__grid-icon"><i
                                                                                class="{{ $grandchild->icon }}"></i>
                                                                        </div>
                                                                    @endif
                                                                    {{ $grandchild->name }}
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                        <!-- Optional Footer specifically for Services/Solutions could be dynamic too or hardcoded if specific -->
                                                    </div>
                                                @endforeach
                                            </div>
                                        </li>
                                    @elseif($menu->slug == 'industries')
                                        <li class="has-megamenu">
                                            <a href="{{ $menu->url }}">{{ $menu->name }} <i
                                                    class="fal fa-chevron-down"></i></a>
                                            <div class="tp-megamenu tp-megamenu-industries">
                                                <div class="tp-megamenu-industries__content">
                                                    @foreach ($menu->children->chunk(4) as $chunk)
                                                        <div class="tp-megamenu-industries__col">
                                                            @foreach ($chunk as $child)
                                                                <a href="{{ $child->url }}"
                                                                    class="tp-megamenu-industries__item">
                                                                    @if ($child->icon)
                                                                        <div class="tp-megamenu-industries__icon">
                                                                            <i class="{{ $child->icon }}"></i>
                                                                        </div>
                                                                    @endif
                                                                    <div class="tp-megamenu-industries__text">
                                                                        <span
                                                                            class="tp-megamenu-industries__title">{{ $child->name }}</span>
                                                                        @if ($child->description)
                                                                            <span
                                                                                class="tp-megamenu-industries__desc">{{ $child->description }}</span>
                                                                        @endif
                                                                    </div>
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <!-- Right Side: Featured Card (Kept Static as designed, or could be dynamic later) -->
                                                <div class="tp-megamenu-industries__featured">
                                                    <span class="tp-megamenu-industries__featured-top">Highlight</span>
                                                    <div class="tp-megamenu-industries__card">
                                                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=400"
                                                            alt="Industry 4.0">
                                                        <div class="tp-megamenu-industries__play-btn">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="tp-megamenu-industries__link">
                                                        Industry 4.0 Report <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <!-- Fallback for other dropdowns if any -->
                                        <li class="has-dropdown">
                                            <a href="{{ $menu->url }}">{{ $menu->name }} <i
                                                    class="fal fa-chevron-down"></i></a>
                                            <ul class="tp-submenu">
                                                @foreach ($menu->children as $child)
                                                    <li><a href="{{ $child->url }}">{{ $child->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 d-none d-xl-block">
                    <div class="tp-header__right d-flex justify-content-end">
                        <div class="tp-header__action">
                            <ul>
                                <li>
                                    <div class="tp-header-btn">
                                        <a class="tp-btn-two tp-btn-anim" href="{{ route('contact') }}">
                                            <div class="tp-btn-text">Let’s Talk</div>
                                            <span>
                                                <svg width="9" height="13" viewBox="0 0 9 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 d-lg-none">
                    <div class="tp-header__right d-flex justify-content-end">
                        <div class="tp-header__action">
                            <ul>
                                <li>
                                    <button class="tp-header__burs-btn tp-offcanvas-open-btn">
                                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="2.39023" cy="2.39022" rx="2.39023" ry="2.39022"
                                                fill="black" />
                                            <ellipse cx="13.9137" cy="2.39022" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="25.441" cy="2.39022" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="2.39023" cy="12.6339" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="13.9137" cy="12.6349" rx="2.39023" ry="2.39022"
                                                fill="black" />
                                            <ellipse cx="25.441" cy="12.6349" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="2.39023" cy="23.0484" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="13.9996" cy="23.0484" rx="2.39023" ry="2.39022"
                                                fill="black" fill-opacity="0.7" />
                                            <ellipse cx="25.609" cy="23.0484" rx="2.39023" ry="2.39022"
                                                fill="black" />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-top-area-end -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarItems = document.querySelectorAll('.tp-megamenu__sidebar-item');

        sidebarItems.forEach(item => {
            item.addEventListener('mouseenter', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('data-target');
                const parent = this.closest('.tp-megamenu');

                // Remove active class from all sidebar items in this container
                parent.querySelectorAll('.tp-megamenu__sidebar-item').forEach(si => si.classList
                    .remove('active'));
                this.classList.add('active');

                // Hide all main content areas in this container
                parent.querySelectorAll('.tp-megamenu__main').forEach(main => main.classList
                    .remove('active'));

                // Show target content
                const targetContent = parent.querySelector(
                    `.tp-megamenu__main[data-id="${targetId}"]`);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
            });

            // Also handle click just in case
            item.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent jump
            });
        });
    });
</script>
