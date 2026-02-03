<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     {{-- Basic Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title --}}
    <title>@yield('title', 'Amazing Palace Adult Family Home | Luxury Senior Care in Seattle, WA')</title>

    {{-- Primary Meta Tags --}}
    <meta name="description" content="@yield('description', 'Amazing Palace Adult Family Home provides exceptional luxury senior care in Seattle, WA. Expert memory care, assisted living, and respite services in a premium residential setting.')">
    <meta name="keywords" content="@yield('keywords', 'adult family home Seattle, senior care Seattle, memory care Washington, assisted living Seattle, luxury senior living, dementia care, respite care, geriatric care, Alzheimer\'s care, senior housing Seattle')">
    <meta name="author" content="Amazing Palace Adult Family Home">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="@yield('og:type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og:title', 'Amazing Palace Adult Family Home | Luxury Senior Care in Seattle')">
    <meta property="og:description" content="@yield('og:description', 'Premium adult family home offering exceptional senior care services in Seattle, Washington. Specialized memory care, assisted living, and respite services.')">
    <meta property="og:image" content="@yield('og:image', asset('images/og-image.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Amazing Palace Adult Family Home - Luxury Senior Living Facility in Seattle">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Amazing Palace Adult Family Home">

    {{-- Twitter --}}
    <meta name="twitter:card" content="@yield('twitter:card', 'summary_large_image')">
    <meta name="twitter:site" content="@yield('twitter:site', '@AmazingPalaceAFH')">
    <meta name="twitter:creator" content="@AmazingPalaceAFH">
    <meta name="twitter:title" content="@yield('twitter:title', 'Amazing Palace Adult Family Home | Seattle')">
    <meta name="twitter:description" content="@yield('twitter:description', 'Luxury senior care with compassion and expertise in Seattle, WA. Specialized memory care and assisted living services.')">
    <meta name="twitter:image" content="@yield('twitter:image', asset('images/twitter-card.jpg'))">
    <meta name="twitter:image:alt" content="Amazing Palace facility exterior and caring staff">

    {{-- Additional Meta Tags --}}
    <meta name="theme-color" content="#0a2463">
    <meta name="msapplication-TileColor" content="#0a2463">
    <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Icons & Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#0a2463">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#d4af37',
                        'royal-blue': '#00308F',
                        'navy': '#0a2463',
                        'cream': '#f5f2e9',
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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .section-bg {
            background-color: #f9f7f2;
        }
        .room-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1758&q=80');
            background-size: cover;
            background-position: center;
        }
        .care-bg {
            background-image: linear-gradient(rgba(10, 36, 99, 0.85), rgba(10, 36, 99, 0.85)), url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80');
            background-size: cover;
            background-position: center;
        }
        .logo-text {
            font-family: 'Cormorant Garamond', serif;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

                .hero-bg {
            background-image: linear-gradient(rgba(10, 36, 99, 0.85), rgba(10, 36, 99, 0.8)), url('https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
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
            background-image: linear-gradient(rgba(10, 36, 99, 0.9), rgba(10, 36, 99, 0.9)), url('https://images.unsplash.com/photo-1581579431531-5c65f537180d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
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
    </style>
    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-serif">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- JavaScript Libraries -->
    <!-- jQuery FIRST (no defer) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Your Template Script (depends on jQuery) -->
    <script src="js/main.js" defer></script>

    <script>
        //  Simple animations
        document.addEventListener('DOMContentLoaded', function() {
                    const quoteBox = document.querySelector('.quote-box');

                    // Pulsing animation for the quote box
                    setInterval(() => {
                        quoteBox.style.transform = 'scale(1.03)';
                        setTimeout(() => {
                            quoteBox.style.transform = 'scale(1)';
                        }, 300);
                    }, 5000);
    </script>
        <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Tab functionality
        const tabs = document.querySelectorAll('button[id$="-tab"]');
        const contents = document.querySelectorAll('.service-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                tabs.forEach(t => {
                    t.classList.remove('tab-active');
                    t.classList.add('border-gray-300');
                    t.classList.remove('border-navy', 'bg-navy', 'text-white');
                });

                // Add active class to clicked tab
                tab.classList.add('tab-active');
                tab.classList.remove('border-gray-300');
                tab.classList.add('border-navy', 'bg-navy', 'text-white');

                // Hide all content
                contents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show corresponding content
                const contentId = tab.id.replace('-tab', '-content');
                document.getElementById(contentId).classList.remove('hidden');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if(href === '#' || href.includes('.html')) return;

                e.preventDefault();

                const targetElement = document.querySelector(href);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    @livewireScripts


</body>

</html>
