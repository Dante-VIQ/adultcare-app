<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<header class="sticky top-0 z-50 bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo Section -->
            <div class="flex-shrink-0 flex items-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo5.jpg') }}" alt="Amazing Palace Logo"
                         class="h-12 w-auto sm:h-16 object-contain">
                    <div class="ml-3 hidden sm:block">
                        <h1 class="cormorant text-xl sm:text-2xl font-bold text-navy leading-tight">Amazing Palace</h1>
                        <p class="text-xs font-semibold text-navy tracking-wider">ADULT FAMILY HOME</p>
                    </div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-6">
                <a href="/" class="font-semibold text-gray-700 hover:text-gold transition duration-200">Home</a>
                <a href="/all-about" class="font-semibold text-gray-700 hover:text-gold transition duration-200">About</a>
                <a href="/all-services" class="font-semibold text-gray-700 hover:text-gold transition duration-200">Services</a>
                <a href="/facility" class="font-semibold text-gray-700 hover:text-gold transition duration-200">Facility</a>
                <a href="/careteam" class="font-semibold text-gray-700 hover:text-gold transition duration-200">Care Team</a>
                <a href="/contact" class="font-semibold text-gray-700 hover:text-gold transition duration-200">Contact</a>

                <!-- Auth for Desktop -->
                @auth
                    <div x-data="{ show: false }" @click.away="show = false" class="relative">
                        <button @click="show = !show" class="flex items-center space-x-2 text-gray-700 hover:text-gold focus:outline-none">
                            <div class="text-right">
                                <div class="font-medium text-base">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-xs text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                            <i class="fas fa-chevron-down text-sm" :class="{ 'rotate-180': show }"></i>
                        </button>

                        <div x-show="show" x-cloak x-transition
                             class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50 border border-gray-100">
                            <!-- <a href="route('profile.edit')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                Profile
                            </a> -->
                            <button wire:click="logout" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                Log Out
                            </button>
                        </div>
                    </div>
                @endauth

                @guest
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-gold">Login</a>
                        <a href="{{ route('register') }}" class="bg-navy text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-navy-dark transition">
                            Register
                        </a>
                    </div>
                @endguest
            </nav>

            <!-- Mobile menu button -->
            <div class="flex items-center lg:hidden space-x-4">
                @auth
                    <div class="hidden sm:block text-right">
                        <div class="font-medium text-sm text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                @endauth

                <button id="mobile-menu-button" class="text-gray-700 hover:text-gold focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <!-- Mobile Logo Text -->
            <div class="pb-4 mb-4 border-b border-gray-100 sm:hidden">
                <h1 class="cormorant text-2xl font-bold text-navy">Amazing Palace</h1>
                <p class="text-sm font-semibold text-navy tracking-wider">ADULT FAMILY HOME</p>
            </div>

            <!-- Navigation Links -->
            <a href="/" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">Home</a>
            <a href="/all-about" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">About</a>
            <a href="/all-services" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">Services</a>
            <a href="/facility" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">Facility</a>
            <a href="/careteam" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">Care Team</a>
            <a href="/contact" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">Contact</a>

            <a href="#tour" class="block mt-4 bg-gradient-to-r from-gold to-yellow-500 text-white px-5 py-3 rounded-full font-semibold text-center shadow-lg hover:shadow-xl transition">
                <i class="fas fa-calendar-alt mr-2"></i> Schedule a Tour
            </a>

            <!-- Auth for Mobile -->
            @auth
                <div class="pt-6 mt-6 border-t border-gray-200">
                    <div class="px-4 mb-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                    <!-- <a href="route('profile.edit')" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">
                        Profile
                    </a> -->
                    <button wire:click="logout" class="block w-full text-left py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">
                        Log Out
                    </button>
                </div>
            @endauth

            @guest
                <div class="pt-6 mt-6 border-t border-gray-200 space-y-3">
                    <a href="{{ route('login') }}" class="block py-3 px-4 text-base font-semibold text-gray-700 hover:text-gold hover:bg-gray-50 rounded-lg transition">Login</a>
                    <a href="{{ route('register') }}" class="block bg-navy text-white px-4 py-3 rounded-full text-base font-semibold text-center hover:bg-navy-dark transition">
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </div>
</header>


