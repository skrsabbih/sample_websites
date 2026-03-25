<header class="lux-header">
    <div class="container-fluid px-4 px-lg-5">
        <div class="lux-navbar">
            <div class="lux-logo-wrap">
                <a href="{{ route('homepage') }}" class="lux-logo-link">
                    <div class="lux-logo-mark">
                        <span class="line line-v1"></span>
                        <span class="line line-v2"></span>
                        <span class="line line-h1"></span>
                        <span class="line line-h2"></span>
                    </div>
                    <div class="lux-logo-text">LUXURY LIVING</div>
                </a>
            </div>

            <div class="lux-menu-wrap">
                <nav class="lux-menu">
                    <ul class="lux-menu-list">
                        <li class="lux-menu-item lux-has-dropdown">
                            <a href="#">THE PROPERTIES</a>
                            <ul class="lux-dropdown">
                                <li><a href="#">Buy</a></li>
                                <li><a href="#">Rent</a></li>
                                <li><a href="#">Sell</a></li>
                                <li><a href="#">Private Listings</a></li>
                                <li><a href="#">New Developments</a></li>
                            </ul>
                        </li>

                        <li class="lux-menu-item">
                            <a href="#">THE TEAM</a>
                        </li>

                        <li class="lux-menu-item">
                            <a href="#">THE OFFICE</a>
                        </li>

                        <li class="lux-menu-item">
                            <a href="#">THE CONTACT</a>
                        </li>

                        <li class="lux-menu-item lux-wa-item">
                            <a href="https://wa.me/+8801764280085" target="_blank" class="lux-wa-link"
                                aria-label="WhatsApp">
                                {{-- <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M20.5 11.5c0 4.97-4.03 9-9 9a8.9 8.9 0 0 1-4.29-1.1L3.5 20.5l1.16-3.51A8.95 8.95 0 0 1 2.5 11.5c0-4.97 4.03-9 9-9s9 4.03 9 9z" />
                                    <path
                                        d="M8.7 7.9c.18-.4.37-.41.54-.42h.46c.14 0 .36.05.55.45.18.4.62 1.53.67 1.64.05.11.09.24.02.39-.07.14-.11.24-.22.36-.11.13-.23.28-.33.37-.11.11-.22.23-.09.45.13.22.58.96 1.25 1.56.86.77 1.58 1.01 1.8 1.12.22.11.35.09.48-.05.13-.14.55-.64.7-.86.14-.22.29-.18.48-.11.2.07 1.24.58 1.46.68.22.11.37.16.42.25.05.09.05.53-.12 1.04-.17.51-1 .97-1.37 1.03-.35.05-.8.08-1.29-.08-.3-.1-.7-.23-1.2-.44-2.11-.91-3.49-3.05-3.6-3.2-.11-.14-.85-1.13-.85-2.15 0-1.02.53-1.52.72-1.73z" />
                                </svg> --}}
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </nav>

                <button class="lux-mobile-toggle" id="luxMobileToggle" type="button" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="lux-mobile-menu" id="luxMobileMenu">
            <ul>
                <li>
                    <a href="#" id="mobilePropertyToggle">THE PROPERTIES</a>
                    <ul class="mobile-submenu" id="mobileSubmenu">
                        <li><a href="#">Buy</a></li>
                        <li><a href="#">Rent</a></li>
                        <li><a href="#">Sell</a></li>
                        <li><a href="#">Private Listings</a></li>
                        <li><a href="#">New Developments</a></li>
                    </ul>
                </li>
                <li><a href="#">THE TEAM</a></li>
                <li><a href="#">THE OFFICE</a></li>
                <li><a href="#">THE CONTACT</a></li>
            </ul>
        </div>
    </div>
</header>
