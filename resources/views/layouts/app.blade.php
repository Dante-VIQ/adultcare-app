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
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Icons & Favicons --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo0.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo0.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo0.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#0a2463">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <style>
        .care_one{
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
            background-image: url('images/hero1.jpg');
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
        .gallery-image {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .gallery-image:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
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

.text-navy {
    color: #001f3f;
}
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#E6D7FF',              // Soft Amethyst
                        'royal-blue': '#5B2D8B',     // 'royal-purple': '#5E83DB',
                        'navy': '#2A123F', //deep purple
                        'cream': '#f5f2e9',
                        'purpleDeep': 'rgba(91, 45, 139, 0.55)',
                        'purpleLight': 'rgba(155, 109, 255, 0.35)',
                        'light-blue': '#e8f0f7',
                        'sage': '#87a96b',
                        'taupe': '#b8a99a',
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
        <main class="p-5">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts

    <!-- JavaScript Libraries -->
    <!-- jQuery FIRST (no defer) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Your Template Script (depends on jQuery) -->
    {{-- <script src="js/main.js" defer></script> --}}

<!-- Add this JavaScript for mobile menu toggle -->
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
</script>


</body>

</html>
