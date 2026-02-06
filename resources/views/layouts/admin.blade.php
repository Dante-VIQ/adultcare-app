<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <meta name="robots" content="noindex, nofollow">

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 h-16 bg-gradient-to-r from-[#0b1c2d] to-[#6f42c1] flex items-center px-4 z-20 shadow-md">
        <!-- Mobile Hamburger -->
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <!-- Brand -->
        <a href="{{ route('analysis') }}" class="text-white font-bold text-lg ml-4 md:ml-0 flex items-center">
            <i class="fas fa-car mr-2"></i> Amazing Palace
        </a>
        <!-- Spacer -->
        <div class="flex-1"></div>
        <!-- User Dropdown -->
        <div class="relative">
            <button id="user-menu-button" class="text-white flex items-center space-x-1 focus:outline-none">
                <i class="fas fa-user-circle"></i> <span>Admin</span>
            </button>
            <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg overflow-hidden z-30">
                {{-- <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-purple-100">Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-purple-100">Settings</a> --}}
                <hr>
                <a href="/" class="block px-4 py-2 text-gray-800 hover:bg-purple-100">Back to Site</a>
            </div>
        </div>
    </nav>

    <!-- SIDEBAR (Desktop & Mobile) -->
    <div class="flex pt-16">

        <!-- Desktop Sidebar -->
        <aside class="hidden md:flex flex-col w-64 bg-gradient-to-b from-[#0b1c2d] to-[#111827] text-white fixed h-screen overflow-y-auto">
            <div class="px-4 py-6">
                @include('admin.partials.sidebar')
            </div>
        </aside>

        <!-- Mobile Sidebar (off-canvas) -->
        <aside id="mobile-sidebar" class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-[#0b1c2d] to-[#111827] text-white transform -translate-x-full transition-transform duration-300 ease-in-out z-40 md:hidden">
            <div class="px-4 py-6">
                <button id="mobile-menu-close" class="mb-4 text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                @include('admin.partials.sidebar')
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 ml-0 md:ml-64 p-6">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const mobileMenuClose = document.getElementById('mobile-menu-close');

        mobileMenuButton.addEventListener('click', () => {
            mobileSidebar.classList.remove('-translate-x-full');
        });

        mobileMenuClose.addEventListener('click', () => {
            mobileSidebar.classList.add('-translate-x-full');
        });

        // User dropdown toggle
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenu = document.getElementById('user-menu');

        userMenuButton.addEventListener('click', () => {
            userMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
