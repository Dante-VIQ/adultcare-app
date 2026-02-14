<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Basic Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title --}}
    <title>@yield('title', 'Amazing Palace Adult Family Home | Home-Styled Care in Auburn, WA')</title>

    {{-- Primary Meta Tags --}}
    <meta name="description" content="@yield('description', 'Amazing Palace Adult Family Home provides exceptional Home-Styled care in Auburn, WA.')">
    <meta name="keywords" content="@yield('keywords', 'adult family home Auburn,  assisted living Auburn, Home-Styled living, dementia care, respite care, geriatric care, Alzheimer\'s care, senior housing Auburn')">
    <meta name="author" content="Amazing Palace Adult Family Home">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="@yield('og:type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og:title', 'Amazing Palace Adult Family Home | Home-Styled Care in Auburn, WA')">
    <meta property="og:description" content="@yield('og:description', 'Premium adult family home offering exceptional senior care services in Auburn, Washington. Specialized memory care, assisted living, and respite services.')">
    <meta property="og:image" content="@yield('og:image', asset('images/og-image.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Amazing Palace Adult Family Home - Home-Styled Living Facility in Auburn">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Amazing Palace Adult Family Home">

    {{-- Twitter --}}
    <meta name="twitter:card" content="@yield('twitter:card', 'summary_large_image')">
    <meta name="twitter:site" content="@yield('twitter:site', '@AmazingPalaceAFH')">
    <meta name="twitter:creator" content="@AmazingPalaceAFH">
    <meta name="twitter:title" content="@yield('twitter:title', 'Amazing Palace Adult Family Home | Auburn, WA')">
    <meta name="twitter:description" content="@yield('twitter:description', 'Luxury senior care with compassion and expertise in Auburn, WA. Specialized memory care and assisted living services.')">
    <meta name="twitter:image" content="@yield('twitter:image', asset('images/twitter-card.jpg'))">
    <meta name="twitter:image:alt" content="Amazing Palace facility exterior and caring staff">

    {{-- Additional Meta Tags --}}
    <meta name="theme-color" content="#0a2463">
    <meta name="msapplication-TileColor" content="#0a2463">
    <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">

    {{-- Icons & Favicons --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo0.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo0.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo0.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#0a2463">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    @push('head')
        <link rel="canonical" href="{{ url('/') }}">
    @endpush

    @stack('schema')

    <style>
        .care_one {
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .section-bg {
            background-color: #f9f7f2;
        }

        .room-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1758&q=80');
            background-size: cover;
            background-position: center;
        }

        .care-bg {
            background-image: url('images/care_bg.jpg');
            background-size: cover;
            background-position: center;
        }

        .logo-text {
            font-family: 'Cormorant Garamond', serif;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .hero-bg {
            background-image: linear-gradient(rgba(160, 80, 180, 0.2), rgba(151, 98, 156, 0.5)), url('images/hero.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-opacity: 0.9;
        }

        .story-bg {
            background-image: linear-gradient(rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.95)), url('https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80');
            background-size: cover;
            background-position: center;
        }

        .values-bg {
            background-color: #f9f7f2;
        }

        .btn-gold {
            background: linear-gradient(to right, #d4af37, #f7ef8a);
            color: #0a2463;
            font-weight: 600;
        }

        .btn-gold:hover {
            background: linear-gradient(to right, #b8941f, #e6d97a);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background-color: #d4af37;
        }

        .service-card {
            transition: all 0.3s ease;
            border-top: 4px solid #d4af37;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .memory-care-bg {
            background-image: url('https://images.unsplash.com/photo-1581579431531-5c65f537180d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }

        .assisted-living-bg {
            background-color: #f9f7f2;
        }

        .tab-active {
            background-color: #0a2463;
            color: white;
            border-color: #0a2463;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }

            .hero-bg {
                background-attachment: scroll;
            }
        }

        .team-hero-bg {
            background-image: url('images/pave.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .team-bg {
            background-color: #f9f7f2;
        }

        .team-card {
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-top: 4px solid #d4af37;
        }

        .btn-gold {
            background: linear-gradient(to right, #d4af37, #f7ef8a);
            color: #0a2463;
            font-weight: 600;
        }

        .btn-gold:hover {
            background: linear-gradient(to right, #b8941f, #e6d97a);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .team-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .team-modal.active {
            display: flex;
        }

        .modal-content {
            background-color: white;
            border-radius: 1rem;
            max-width: 800px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
        }

        .cert-badge {
            display: inline-block;
            background-color: #e8f0f7;
            color: #0a2463;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-right: 8px;
            margin-bottom: 8px;
        }

        @media (max-width: 768px) {
            .team-hero-bg {
                background-attachment: scroll;
            }
        }

        .facility-hero-bg {
            background-image: url('images/yard.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .amenities-bg {
            background-color: #f9f7f2;
        }

        .room-card {
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #d4af37;
        }

        .btn-gold {
            background: linear-gradient(to right, #d4af37, #f7ef8a);
            color: #0a2463;
            font-weight: 600;
        }

        .btn-gold:hover {
            background: linear-gradient(to right, #b8941f, #e6d97a);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .image-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .image-modal.active {
            display: flex;
        }

        .modal-image {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }

        .tab-button {
            transition: all 0.3s ease;
        }

        .tab-button.active {
            background-color: #0a2463;
            color: white;
            border-color: #0a2463;
        }

        @media (max-width: 768px) {
            .facility-hero-bg {
                background-attachment: scroll;
            }
        }

        .contact-hero-bg {
            background-image: url('https://images.unsplash.com/photo-1581579431531-5c65f537180d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .contact-section-bg {
            background-color: #f9f7f2;
        }

        .map-container {
            height: 400px;
            border-radius: 1rem;
            overflow: hidden;
        }

        .btn-gold {
            background: linear-gradient(to right, #d4af37, #f7ef8a);
            color: #0a2463;
            font-weight: 600;
        }

        .btn-gold:hover {
            background: linear-gradient(to right, #b8941f, #e6d97a);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-card {
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-top: 4px solid #d4af37;
        }

        .faq-item {
            border-bottom: 1px solid #e5e7eb;
            overflow: hidden;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-answer.open {
            max-height: 500px;
        }

        @media (max-width: 768px) {
            .contact-hero-bg {
                background-attachment: scroll;
            }
        }

        .line-clamp-2 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .line-clamp-3 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }

        .hover-scale {
            transition: transform 0.2s ease;
        }

        .hover-scale:hover {
            transform: translateY(-2px);
        }

        .bg-light-blue {
            background-color: #f0f8ff;
        }

        .gallery-item {
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(107, 33, 168, 0.2);
        }

        .purple-gradient {
            background: linear-gradient(135deg, #6D28D9 0%, #8B5CF6 100%);
        }

        .light-purple-gradient {
            background: linear-gradient(135deg, #EDE9FE 0%, #FAF5FF 100%);
        }

        .image-zoom {
            transition: transform 0.5s ease;
        }

        .image-zoom:hover {
            transform: scale(1.05);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #6D28D9 0%, #8B5CF6 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(107, 33, 168, 0.3);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#E6D7FF', // Soft Amethyst
                        'royal-blue': '#5B2D8B', // 'royal-purple': '#5E83DB',
                        'navy': '#2A123F', //deep purple
                        'cream': '#f5f2e9',
                        'purpleDeep': 'rgba(91, 45, 120, 0.35)',
                        'purpleLight': 'rgba(155, 109, 255, 0.25)',
                        'light-blue': '#e8f0f7',
                        'sage': '#87a96b',
                        'taupe': '#b8a99a',
                        'palace-purple': '#6D28D9',
                        'palace-purple-light': '#8B5CF6',
                        'palace-purple-dark': '#5B21B6',
                        'palace-lavender': '#EDE9FE',
                        'palace-gold': '#FBBF24',
                        'palace-cream': '#FAF5FF',
                    },
                    fontFamily: {
                        'cormorant': ['Cormorant Garamond', 'serif'],
                        'montserrat': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" > --}}

    {{-- @include('style.css') --}}
    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-serif">
    <livewire:layout.navigation />
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main>
            {{-- {{ $slot }} --}}
            @yield('content')
        </main>
    </div>
    @livewireScripts

    <!-- JavaScript Libraries -->
    <!-- jQuery FIRST (no defer) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Bootstrap Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Your Template Script (depends on jQuery) -->
    {{-- <script src="js/main.js" defer></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                // Toggle between bars and X icon
                const icon = mobileMenuButton.querySelector('i');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                }
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenu.classList.contains('hidden') &&
                    !mobileMenu.contains(event.target) &&
                    !mobileMenuButton.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    const icon = mobileMenuButton.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // Close mobile menu when clicking a link
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    const icon = mobileMenuButton.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const heroSwiper = new Swiper('.hero-slider', {
                // Optional parameters
                direction: 'horizontal',
                loop: {{ !empty($heroImages) && count($heroImages) > 1 ? 'true' : 'false' }},
                speed: 1000,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },

                // Navigation arrows
                navigation: {{ !empty($heroImages) && count($heroImages) > 1
                    ? `{
                                                                                nextEl: '.swiper-button-next',
                                                                                prevEl: '.swiper-button-prev',
                                                                            }`
                    : 'false' }},

                // Pagination
                pagination: {{ !empty($heroImages) && count($heroImages) > 1
                    ? `{
                                                                                el: '.swiper-pagination',
                                                                                clickable: true,
                                                                                dynamicBullets: true,
                                                                            }`
                    : 'false' }},

                // Only enable autoplay if we have multiple images
                {{ empty($heroImages) || count($heroImages) <= 1 ? 'autoplay: true,' : '' }}
            });

            // Pause autoplay on hover (only if we have autoplay)
            @if (!empty($heroImages) && count($heroImages) > 1)
                heroSwiper.el.addEventListener('mouseenter', function() {
                    heroSwiper.autoplay.stop();
                });

                heroSwiper.el.addEventListener('mouseleave', function() {
                    heroSwiper.autoplay.start();
                });
            @endif
        });

        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            const viewButtons = document.querySelectorAll('.gallery-item button');
            const lightboxModal = document.getElementById('lightbox-modal');
            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxTitle = document.getElementById('lightbox-title');
            const closeLightbox = document.getElementById('close-lightbox');

            // Filter functionality
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    // Show/hide gallery items
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') ===
                            filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Lightbox functionality
            viewButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const galleryItem = this.closest('.gallery-item');
                    const imageSrc = galleryItem.querySelector('img').src;
                    const title = galleryItem.querySelector('h3').textContent;

                    lightboxImage.src = imageSrc;
                    lightboxTitle.textContent = title;
                    lightboxModal.classList.remove('hidden');
                    lightboxModal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                });
            });

            // Close lightbox
            closeLightbox.addEventListener('click', function() {
                lightboxModal.classList.add('hidden');
                lightboxModal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            });

            // Close lightbox when clicking outside image
            lightboxModal.addEventListener('click', function(e) {
                if (e.target === lightboxModal) {
                    lightboxModal.classList.add('hidden');
                    lightboxModal.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                }
            });

            // Close lightbox with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !lightboxModal.classList.contains('hidden')) {
                    lightboxModal.classList.add('hidden');
                    lightboxModal.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                }
            });

            // Mobile menu toggle (simplified)
            const mobileMenuBtn = document.querySelector('button.md\\:hidden');
            mobileMenuBtn.addEventListener('click', function() {
                alert(
                    'Mobile menu would open here. In a full implementation, this would toggle a mobile navigation menu.'
                );
            });
        });

        // Hotel location using Plus Code
        const hotelLocation = {
            plusCode: "V+4W, Auburn", // Your Plus Code
            displayPlusCode: "V+4W, Auburn, WA",
            address: "2638 26th pl SE, Auburn, WA USA",
            name: "Amazing Palace",
            // Optional: Convert Plus Code to coordinates for maps that need lat/lng
            // You can get these from https://plus.codes/ or Google Maps
            lat: 47.3069, // Approximate coordinates for M4PJ+XRG Nakuru
            lng: -122.2285 // Approximate coordinates for M4PJ+XRG Nakuru
        };

        // Convert Plus Code to coordinates for mapping
        function convertPlusCodeToCoordinates(plusCode) {
            // For M4PJ+XRG format, we can use the Open Location Code library
            // Or use a simple conversion if you know the approximate coordinates
            return {
                lat: hotelLocation.lat,
                lng: hotelLocation.lng
            };
        }

        // Initialize OpenStreetMap using Plus Code
        function initOpenStreetMapWithPlusCode() {
            const mapElement = document.getElementById('hotel-map');
            if (!mapElement) return;

            const coords = convertPlusCodeToCoordinates(hotelLocation.plusCode);

            // OpenStreetMap iframe centered on coordinates
            const mapUrl =
                `https://www.openstreetmap.org/export/embed.html?bbox=${coords.lng - 0.01}%2C${coords.lat - 0.01}%2C${coords.lng + 0.01}%2C${coords.lat + 0.01}&layer=mapnik&marker=${coords.lat}%2C${coords.lng}`;

            mapElement.innerHTML = `
            <iframe
                class="w-full h-full border-0"
                src="${mapUrl}"
                title="Hotel Location Map"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="hidden bottom-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg p-3 shadow-lg">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-hotel-gold" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/>
                        <circle cx="12" cy="12" r="4"/>
                    </svg>
                    <div>
                        <p class="text-xs text-gray-600">Plus Code:</p>
                        <p class="text-sm font-mono text-hotel-navy">${hotelLocation.plusCode}</p>
                    </div>
                </div>
                <a href="https://www.openstreetmap.org/?mlat=${coords.lat}&mlon=${coords.lng}#map=17/${coords.lat}/${coords.lng}"
                   target="_blank"
                   class="mt-2 block text-xs text-hotel-gold hover:text-yellow-600 transition flex items-center gap-1">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/>
                    </svg>
                    View Larger Map
                </a>
            </div>
        `;
        }

        // Open directions in Google Maps using Plus Code
        function openDirections() {
            const startAddress = document.getElementById('start-address').value;

            if (startAddress) {
                // With starting address and Plus Code destination
                const encodedStart = encodeURIComponent(startAddress);
                const encodedPlusCode = encodeURIComponent(hotelLocation.plusCode);
                window.open(`https://www.google.com/maps/dir/${encodedStart}/${encodedPlusCode}`, '_blank');
            } else {
                // Just Plus Code destination
                openGoogleMapsWithPlusCode();
            }
        }

        // Open Google Maps with Plus Code
        function openGoogleMapsWithPlusCode() {
            // Google Maps directly supports Plus Codes!
            const encodedPlusCode = encodeURIComponent(hotelLocation.plusCode);
            window.open(`https://www.google.com/maps/search/?api=1&query=${encodedPlusCode}`, '_blank');
        }

        // Open Apple Maps (may need coordinates, so we convert Plus Code)
        function openAppleMapsWithPlusCode() {
            const coords = convertPlusCodeToCoordinates(hotelLocation.plusCode);
            const encodedName = encodeURIComponent(hotelLocation.name);
            window.open(`http://maps.apple.com/?ll=${coords.lat},${coords.lng}&q=${encodedName}`, '_blank');
        }

        // Open Waze with coordinates (converted from Plus Code)
        function openWazeWithPlusCode() {
            const coords = convertPlusCodeToCoordinates(hotelLocation.plusCode);
            window.open(`https://www.waze.com/ul?ll=${coords.lat},${coords.lng}&navigate=yes`, '_blank');
        }

        // Open OpenStreetMap with coordinates
        function openOpenStreetMapWithPlusCode() {
            const coords = convertPlusCodeToCoordinates(hotelLocation.plusCode);
            window.open(
                `https://www.openstreetmap.org/?mlat=${coords.lat}&mlon=${coords.lng}#map=17/${coords.lat}/${coords.lng}`,
                '_blank');
        }

        // Copy Plus Code to clipboard
        function copyPlusCode() {
            navigator.clipboard.writeText(hotelLocation.plusCode).then(() => {
                // Show success feedback
                const button = event.target.closest('button');
                const originalHTML = button.innerHTML;
                button.innerHTML = `
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Copied!
            `;
                button.classList.remove('text-hotel-gold');
                button.classList.add('text-green-600');

                setTimeout(() => {
                    button.innerHTML = originalHTML;
                    button.classList.remove('text-green-600');
                    button.classList.add('text-hotel-gold');
                }, 2000);
            });
        }

        // Show Plus Code in a QR code for easy mobile sharing
        function showPlusCodeQR() {
            // Optional: Generate QR code for the Plus Code
            const qrCodeUrl =
                `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(`https://plus.codes/${hotelLocation.plusCode.replace('+', '').replace(' ', '')}`)}`;

            // Create modal or show QR code
            const qrModal = document.createElement('div');
            qrModal.className = 'fixed inset-0 bg-black/50 flex items-center justify-center z-50';
            qrModal.innerHTML = `
            <div class="bg-white rounded-2xl p-6 max-w-sm mx-4">
                <div class="text-center">
                    <h3 class="text-lg font-medium text-hotel-navy mb-4">Scan to Navigate</h3>
                    <img src="${qrCodeUrl}" alt="Plus Code QR Code" class="mx-auto mb-4">
                    <p class="text-sm text-gray-600 mb-2">Scan this QR code with your phone's camera</p>
                    <p class="font-mono text-hotel-gold mb-4">${hotelLocation.plusCode}</p>
                    <button onclick="this.closest('.fixed').remove()"
                            class="mt-2 text-hotel-gold hover:text-yellow-600">
                        Close
                    </button>
                </div>
            </div>
        `;
            document.body.appendChild(qrModal);
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize map using Plus Code
            initOpenStreetMapWithPlusCode();

            // Add QR code button if desired
            const plusCodeSection = document.querySelector('.mt-6.pt-6.border-t');
            if (plusCodeSection) {
                const qrButton = document.createElement('button');
                qrButton.innerHTML = `
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
                </svg>
                QR Code
            `;
                qrButton.className =
                    'text-hotel-gold hover:text-yellow-600 transition flex items-center gap-2 ml-4';
                qrButton.onclick = showPlusCodeQR;
                plusCodeSection.querySelector('.flex').appendChild(qrButton);
            }

            // Auto-fill current location in directions field
            if (navigator.geolocation) {
                const locationInput = document.getElementById('start-address');
                locationInput.addEventListener('click', function() {
                    if (!this.dataset.autoFilled) {
                        this.placeholder = 'Detecting your location...';
                        navigator.geolocation.getCurrentPosition(
                            (position) => {
                                const {
                                    latitude,
                                    longitude
                                } = position.coords;
                                // Use Plus Code API to get address from coordinates
                                fetch(`https://plus.codes/api?address=${latitude},${longitude}`)
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.plus_code && data.plus_code.global_code) {
                                            this.value = data.plus_code.global_code;
                                            this.dataset.autoFilled = 'true';
                                        }
                                        this.placeholder = 'Enter your starting address';
                                    })
                                    .catch(() => {
                                        this.placeholder = 'Enter your starting address';
                                    });
                            },
                            () => {
                                this.placeholder = 'Enter your starting address';
                            }
                        );
                    }
                });
            }
        });

        // Plus Code validation and formatting
        function formatPlusCode(plusCode) {
            // Format Plus Code for display: M4PJ+XRG Nakuru
            const parts = plusCode.split(' ');
            const code = parts[0];
            const location = parts.slice(1).join(' ');

            if (code.includes('+')) {
                return `<span class="font-mono">${code}</span> ${location ? `<span class="text-gray-600">${location}</span>` : ''}`;
            }
            return plusCode;
        }
    </script>
</body>

</html>
