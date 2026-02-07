            <div class="relative animate-fade-in-up animation-delay-200">
                <div class="hero-image relative">
                    <div
                        class="bg-gradient-to-br from-primary to-green-600 rounded-3xl h-96 lg:h-[500px] overflow-hidden shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        <!-- This would be hero image -->

                        <div class="swiper hero-slider">
                            <div class="swiper-wrapper">
                                @if (!empty($Images) && count($Images) > 0)
                                    @foreach ($Images as $image)
                                        <div class="swiper-slide">
                                            <div class="relative w-full h-full">
                                                <img src="{{ asset($image->image) }}" alt="Hero Image"
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <!-- Fallback if no images -->
                                    <div class="swiper-slide">
                                        <div
                                            class="w-full h-full bg-gradient-to-r from-blue-900 to-gray-800 flex items-center justify-center">
                                            <div class="text-center text-white p-8">
                                                <i class="fas fa-camera text-6xl mb-6 opacity-50"></i>
                                                <h2 class="text-3xl font-bold mb-4">Gallery Images Coming Soon</h2>
                                                <p class="opacity-75 text-lg">Explore our gallery for amazing visuals
                                                </p>
                                                <div class="mt-6">
                                                    <a href="/gallery"
                                                        class="inline-block px-6 py-3 bg-white text-gray-900 font-semibold rounded-lg mr-4 hover:bg-gray-100">
                                                        View Gallery
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="absolute -top-6 -right-6 bg-purple-950 text-white p-4 rounded-2xl shadow-xl z-50">
                            <div class="text-3xl font-bold">24/7</div>
                            <div class="text-sm">Home Support</div>
                        </div>

                        <div
                            class="absolute z-50 -bottom-6 -left-6 bg-purple-950 p-4 rounded-2xl shadow-xl border border-gray-200">
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
