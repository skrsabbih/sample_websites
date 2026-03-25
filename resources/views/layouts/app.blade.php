<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Living Website</title>
    {{-- Bootstrap css cdn including this project --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lato Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- Swiper cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    {{-- Add custom css link --}}
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
</head>

<body>

    @yield('content')

    {{-- Swiper cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Bootstrap javascript cdn including this project --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- mobile toggle and swiper js code is here --}}
    <script>
        const luxMobileToggle = document.getElementById('luxMobileToggle');
        const luxMobileMenu = document.getElementById('luxMobileMenu');
        const mobilePropertyToggle = document.getElementById('mobilePropertyToggle');
        const mobileSubmenu = document.getElementById('mobileSubmenu');

        if (luxMobileToggle) {
            luxMobileToggle.addEventListener('click', function() {
                luxMobileMenu.classList.toggle('active');
            });
        }

        if (mobilePropertyToggle) {
            mobilePropertyToggle.addEventListener('click', function(e) {
                e.preventDefault();
                mobileSubmenu.classList.toggle('active');
            });
        }
        {{-- add swiper js here --}}
        const luxHeroSlider = new Swiper('.luxHeroSlider', {
            loop: true,
            effect: 'fade',
            speed: 1200,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.lux-hero-pagination',
                clickable: true,
            },
        });
    </script>

</body>

</html>
