<section id="home" class="relative overflow-hidden">
    <div class="container mx-auto px-4 lg:px-8 py-8 lg:py-12">
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <!-- Left Content -->
            <div class="w-full animate-fade-in-up order-2 lg:order-1">
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4 lg:mb-6 leading-tight text-purple-950 text-center lg:text-left">
                    Discover Family Style Living in an AFH in
                    <span class="text-primary block sm:inline">Auburn Washington</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-600 mb-8 lg:mb-10 text-center lg:text-left">
                    Experience compassionate care in a safe and peaceful environment at Amazing Palace Adult Family Home
                </p>

                <div class="flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4 lg:space-x-6">
                    <a href="{{ route('booking.index') }}"
                        class="btn-gold px-6 py-3 sm:px-8 sm:py-4 rounded-full font-bold text-base sm:text-lg transition-all duration-300 shadow-xl text-center">
                        <i class="fas fa-calendar-check mr-2"></i> Book a Tour
                    </a>
                    <a href="tel:{{ config('facility.phone_tel') }}" style="background-color:#5B21B6"
                        class="bg-palace-purple-dark border-2 border-white hover:bg-white hover:text-navy text-white px-6 py-3 sm:px-8 sm:py-4 rounded-full font-bold text-base sm:text-lg transition-all duration-300 shadow-xl text-center">
                        <i class="fas fa-phone-alt mr-2"></i> Call {{ config('facility.phone') }}
                    </a>
                </div>
                <p class="mt-4 text-center lg:text-left text-sm text-gray-600">
                    Tours take about an hour &middot; No obligation &middot;
                    <a href="/gallery" class="underline text-primary hover:text-purple-950">See photos of the home</a>
                </p>
            </div>

            <!-- Right Image -->
            <div class="relative w-full order-1 lg:order-2 mb-8 lg:mb-0">
                <div class="hero-image relative">
                    <div class="swiper hero-slider">
                        <livewire:gallery-card />
                    </div>

                    <!-- Badge 1 -->
                    <div class="absolute -top-4 -right-4 sm:-top-6 sm:-right-6 bg-purple-950 text-white p-2 sm:p-4 rounded-xl sm:rounded-2xl shadow-xl z-10">
                        <div class="text-xl sm:text-2xl md:text-3xl font-bold">24/7</div>
                        <div class="text-xs sm:text-sm">Home Support</div>
                    </div>

                    <!-- Badge 2 -->
                    <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 bg-purple-950 p-2 sm:p-4 rounded-xl sm:rounded-2xl shadow-xl border border-gray-200 z-10">
                        <div class="flex items-center space-x-2 sm:space-x-4">
                            <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 bg-primary rounded-lg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-white text-base sm:text-lg md:text-xl"></i>
                            </div>
                            <div class="text-white">
                                <div class="font-bold text-sm sm:text-base">Quality Services</div>
                                <div class="text-xs sm:text-sm text-gray-300">Expert Caregivers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>