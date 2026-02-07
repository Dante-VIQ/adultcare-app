<section id="home" class="relative overflow-hidden">
    <div class="container mx-auto px-4 lg:px-8 py-4 lg:py-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="animate-fade-in-up justify-center items-center">
                <h1 class="text-4xl lg:text-3xl xl:text-5xl font-bold mb-6 leading-tight text-purple-950 ">
                    AFH in a serene environment in
                    <span class="text-primary">Auburn Washington</span>
                </h1>
                <p class="text-xl text-gray-600 mb-10">
                    Experience compassionate care in a safe and peaceful environment at Amazing Palace Adult Family Home
                </p>

                 <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
                    <a href="tel:+12064889285"
                        class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                        <i class="fas fa-phone-alt mr-2"></i> Contact Us Today
                    </a>
                    <a href="/gallery"
                        class="bg-sage border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                        <i class="fas fa-images mr-2"></i> View Our Facility
                    </a>
                </div>

                <!-- Trust Indicators -->
                {{-- <div class="grid grid-cols-3 gap-6">
                    <div>
                        <div class="text-3xl font-bold text-primary mb-1">500+</div>
                        <div class="text-gray-600">Events Organized</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary mb-1">2K+</div>
                        <div class="text-gray-600">Happy Customers</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary mb-1">10+</div>
                        <div class="text-gray-600">Years Experience</div>
                    </div>
                </div> --}}
            </div>

            <!-- Right Image -->
            <div class="relative animate-fade-in-up animation-delay-200">
                <div class="hero-image relative">
                    <div
                        class="bg-gradient-to-br from-primary to-green-600 rounded-3xl h-96 lg:h-[500px] overflow-hidden shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        <!-- This would be hero image -->

                        <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image" class="w-full h-full object-cover">
                    </div>
                </div>
                    <div class="absolute -top-6 -right-6 bg-purple-950 text-white p-4 rounded-2xl shadow-xl">
                        <div class="text-3xl font-bold">24/7</div>
                        <div class="text-sm">Home Support</div>
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-purple-950 p-4 rounded-2xl shadow-xl border border-gray-200">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <div class="text-white">
                                <div class="font-bold">Quality Services</div>
                                <div class="text-sm text-gray-300">Expert Caregivers</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <!-- Background Pattern -->
             <div class="absolute inset-0 bg-gradient-to-b from-transparent to-purpleLight -z-10"></div>

</section>
