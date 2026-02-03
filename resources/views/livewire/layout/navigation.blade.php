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
    <div class="max-w-7xl mx-auto container px-4 py-4">
        <div class="flex">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    {{-- <div class="w-14 h-14 rounded-full flex items-center justify-center mr-3"> --}}
                    {{-- <i class="fas fa-crown text-gold text-xl"></i> --}}
                    <img src="{{ asset('images/logo5.jpg') }}" alt="Logo"
                        class="object-cover w-auto h-16 rounded-full mr-3 bg-white">
                    {{-- </div> --}}
                    {{-- <div>
                    <h1 class="cormorant text-2xl font-bold text-navy">Amazing Palace</h1>
                    <p class="text-xs font-semibold text-navy tracking-widest">ADULT FAMILY HOME</p>
                </div> --}}
                </div>

                <nav class="hidden lg:flex space-x-6 items-center">
                    <a href="/" class="font-semibold text-gray-700 hover:text-gold transition">Home</a>
                    <a href="all-about" class="font-semibold text-gray-700 hover:text-gold transition">About</a>
                    <a href="/all-services" class="font-semibold text-gray-700 hover:text-gold transition" >Services</a>
                    <a href="/facility" class="font-semibold text-gray-700 hover:text-gold transition">Facility</a>
                    <a href="/careteam" class="font-semibold text-gray-700 hover:text-gold transition">Care Team</a>
                    <a href="/contact" class="font-semibold text-gray-700 hover:text-gold transition">Contact</a>

                    <a href="#tour"
                        class="btn-gold px-4 py-3 rounded-full font-semibold transition-all duration-300 shadow-lg">
                        <i class="fas fa-calendar-alt mr-2"></i> Schedule a Tour
                    </a>
                </nav>

                {{-- <div class="hidden lg:block">

                </div> --}}



                <button id="mobile-menu-button" class="lg:hidden text-gray-700 text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            @auth
                <div x-data="{ show: false }" @click.away="show = false" class="relative flex items-center pb-1 border-t border-gray-200 justify-end">
                    <div @click="show = !show" class="px-4 cursor-pointer">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                    <div x-show="show" x-cloak x-transition class="absolute right-0 mt-12 w-48 bg-white shadow-lg rounded-md py-2 space-y-1 z-50">
                        {{-- <x-responsive-nav-link href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link> --}}
                        <!-- Authentication -->
                        <x-responsive-nav-link wire:click="logout">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </div>
                </div>
            @endauth
            @guest
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4 flex gap-3">
                        <a href="{{ route('login') }}" class="block text-sm text-gray-700 underline py-2">Login</a>
                        <a href="{{ route('register') }}" class="block text-sm text-gray-700 underline py-2">Register</a>
                    </div>
                </div>
            @endguest
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden mt-4 pb-4 border-t border-gray-100 pt-4">
            <div class="flex flex-col space-y-4">
                <a href="index.html" class="font-semibold text-gray-700 hover:text-gold transition">Home</a>
                <a href="/all-about" class="font-semibold text-gray-700 hover:text-gold transition">About</a>
                <a href="/all-services" class="font-semibold text-gray-700 hover:text-gold transition active:">Services</a>
                <a href="/facility" class="font-semibold text-gray-700 hover:text-gold transition">Facility</a>
                <a href="/careteam" class="font-semibold text-gray-700 hover:text-gold transition">Care Team</a>
                <a href="/contact" class="font-semibold text-navy hover:text-gold transition">Contact</a>
                <a href="#tour"
                    class="btn-gold px-6 py-3 rounded-full font-semibold transition-all duration-300 shadow-lg w-full text-center mt-2">
                    <i class="fas fa-calendar-alt mr-2"></i> Schedule a Tour
                </a>
            </div>
            @auth
                <div x-data="{ show: false }" @click.away="show = false" class="flex flex-col pt-4 pb-1 border-t border-gray-200">
                    <div @click="show = !show" class="px-4 cursor-pointer">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                    <div x-show="show" x-cloak x-transition class="mt-3 space-y-1">
                        {{-- <x-responsive-nav-link href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link> --}}
                        <!-- Authentication -->
                        <x-responsive-nav-link wire:click="logout">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </div>
                </div>
            @endauth
            @guest
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <a href="{{ route('login') }}" class="block text-sm text-gray-700 underline py-2">Login</a>
                        <a href="{{ route('register') }}" class="block text-sm text-gray-700 underline py-2">Register</a>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</header>
