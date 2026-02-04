    <section id="home" class="hero-bg text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="cormorant text-4xl md:text-6xl font-bold mb-6">
                    Luxury Adult Care in <span class="text-gold">Seattle</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto font-light">
                    Experience the perfect blend of compassionate care and luxury living at Amazing Palace Adult Family
                    Home.
                </p>
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
                    <button onclick="openContactModal()"
                        class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                        <i class="fas fa-phone-alt mr-2"></i> Contact Us Today
                    </button>
                    <a href="/booking"
                        class="bg-transparent border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                        <i class="fas fa-images mr-2"></i> View Our Facility
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 section-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Welcome to Amazing Palace</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Seattle's premier adult family home offering expert care in a luxurious, homelike environment.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="cormorant text-3xl font-bold text-navy mb-6">A Home That Feels Like Home</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        At Amazing Palace, we've redefined senior living by combining expert medical care with the
                        comfort and elegance of a luxury residence. Located in the beautiful Seattle area, our facility
                        offers personalized attention in a warm, inviting atmosphere.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Our team of highly trained caregivers provides 24/7 support while respecting each resident's
                        independence and dignity. We specialize in memory care, assisted living, and respite services.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">Licensed & Certified</h4>
                                <p class="text-gray-600 text-sm">State-licensed facility</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user-md text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">Expert Caregivers</h4>
                                <p class="text-gray-600 text-sm">24/7 professional staff</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <livewire:header-image />
                    <div class="absolute -bottom-6 -left-6 bg-gold text-navy p-6 rounded-2xl shadow-xl max-w-xs">
                        <h4 class="cormorant text-2xl font-bold mb-2">15+ Years</h4>
                        <p class="font-semibold">Of Excellence in Senior Care</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Our Premium Services</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Comprehensive care tailored to individual needs with attention to every detail.
                </p>
            </div>

            <livewire:service-card />

            <div class="text-center mt-12">
                <button onclick="openContactModal()"
                    class="bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                    <i class="fas fa-file-alt mr-2"></i> View Full Services List
                </button>
            </div>
        </div>
    </section>

    <!-- Facility Tour -->
    <section id="facility" class="py-20 care-bg text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold mb-4">Our Luxurious Facility</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl max-w-3xl mx-auto font-light">
                    Experience the comfort and elegance of our Seattle home designed specifically for senior living.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl text-gold mb-6">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold mb-4">Private Suites</h3>
                    <p class="mb-6">Spacious, elegantly furnished private rooms with ensuite bathrooms and emergency
                        call systems.</p>
                    <a href="#" class="text-gold font-semibold hover:text-yellow-300 transition">View Gallery <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl text-gold mb-6">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold mb-4">Gourmet Dining</h3>
                    <p class="mb-6">Chef-prepared meals with nutritionist-approved menus tailored to individual
                        dietary needs.</p>
                    <a href="#" class="text-gold font-semibold hover:text-yellow-300 transition">View Sample Menu
                        <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl text-gold mb-6">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold mb-4">Amenities & Activities</h3>
                    <p class="mb-6">Beautifully landscaped gardens, activity rooms, and daily social and recreational
                        programs.</p>
                    <a href="#" class="text-gold font-semibold hover:text-yellow-300 transition">See Activities <i
                            class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <div class="mt-16 text-center">
                <button onclick="openContactModal()"
                    class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                    <i class="fas fa-video mr-2"></i> Schedule a Virtual Tour
                </button>
            </div>
        </div>
    </section>

    <!-- Care Team -->
    <section id="team" class="py-20 section-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Meet Our Expert Care Team</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Our compassionate, highly trained professionals are dedicated to providing exceptional care.
                </p>
            </div>

            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-64 bg-navy flex items-center justify-center">
                        <i class="fas fa-user-md text-white text-8xl"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">Dr. Emily Thompson</h3>
                        <p class="text-gold font-semibold mb-4">Medical Director</p>
                        <p class="text-gray-700">Board-certified geriatrician with 20+ years of experience in senior
                            care.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-64 bg-navy flex items-center justify-center">
                        <i class="fas fa-user-nurse text-white text-8xl"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">Maria Rodriguez</h3>
                        <p class="text-gold font-semibold mb-4">Head Care Manager</p>
                        <p class="text-gray-700">RN with specialized training in dementia care and 15 years of
                            experience.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-64 bg-navy flex items-center justify-center">
                        <i class="fas fa-heartbeat text-white text-8xl"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="cormorant text-2xl font-bold text-navy mb-2">James Wilson</h3>
                        <p class="text-gold font-semibold mb-4">Therapy & Wellness Director</p>
                        <p class="text-gray-700">Physical therapist specializing in geriatric rehabilitation and
                            mobility.</p>
                    </div>
                </div>
            </div> --}}
            @php
                $teamMembers = App\Models\Team::orderBy('order')->get();
            @endphp

            @if ($teamMembers->count() > 0)
                <x-team-section :teamMembers="$teamMembers" />
            @endif
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-navy text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="cormorant text-4xl md:text-5xl font-bold mb-6">Contact Amazing Palace</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-xl mb-8">
                        We're here to answer your questions and help you make the best decision for your loved one's
                        care.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="cormorant text-xl font-bold mb-1">Our Location</h4>
                                <p class="text-gray-300">123 Luxury Lane, Seattle, WA 98101</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-phone-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="cormorant text-xl font-bold mb-1">Call Us</h4>
                                <p class="text-gray-300">(206) 555-1234</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h4 class="cormorant text-xl font-bold mb-1">Email Us</h4>
                                <p class="text-gray-300">info@amazingpalaceseattle.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h4 class="cormorant text-2xl font-bold mb-4">License & Accreditation</h4>
                        <div class="flex flex-wrap gap-4">
                            <div class="bg-white/10 px-4 py-2 rounded-lg">
                                <p class="font-semibold">WA State License</p>
                                <p class="text-sm text-gray-300">#AFH-123456</p>
                            </div>
                            <div class="bg-white/10 px-4 py-2 rounded-lg">
                                <p class="font-semibold">Medicaid Approved</p>
                                <p class="text-sm text-gray-300">Provider #WA98765</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <h3 class="cormorant text-3xl font-bold mb-6">Schedule a Tour</h3>
                    <p class="mb-8">Contact us to schedule a personal tour of our facility or a virtual consultation.
                    </p>

                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 font-semibold">First Name</label>
                                <input type="text"
                                    class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
                            </div>
                            <div>
                                <label class="block mb-2 font-semibold">Last Name</label>
                                <input type="text"
                                    class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 font-semibold">Email Address</label>
                            <input type="email"
                                class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
                        </div>

                        <div>
                            <label class="block mb-2 font-semibold">Phone Number</label>
                            <input type="tel"
                                class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
                        </div>

                        <div>
                            <label class="block mb-2 font-semibold">Message</label>
                            <textarea rows="4"
                                class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-gold"></textarea>
                        </div>

                        <button type="submit"
                            class="btn-gold w-full py-4 rounded-lg font-bold text-lg transition-all duration-300 shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy py-12 border-t border-white/10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-crown text-navy text-xl"></i>
                        </div>
                        <div>
                            <h2 class="cormorant text-2xl font-bold text-white">Amazing Palace</h2>
                            <p class="text-xs font-semibold text-gold tracking-widest">ADULT FAMILY HOME</p>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-4 max-w-md">
                        Providing exceptional, compassionate care in a luxurious home environment in Seattle,
                        Washington.
                    </p>
                </div>

                <div class="text-center md:text-right">
                    <p class="text-gray-400 mb-4">&copy; 2023 Amazing Palace Adult Family Home. All rights reserved.
                    </p>
                    <div class="flex space-x-4 justify-center md:justify-end">
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Contact Modal -->
    <div id="contactModal" class="fixed inset-0 bg-black/70 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="cormorant text-3xl font-bold text-navy">Schedule a Tour</h3>
                    <button onclick="closeContactModal()" class="text-gray-500 hover:text-gray-700 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <p class="text-gray-700 mb-8">Fill out the form below and our team will contact you within 24 hours to
                    schedule a personal tour of Amazing Palace.</p>

                @include('components.partials.appointment')
            </div>
        </div>
    </div>

    <script>
        // Contact modal functions
        function openContactModal() {
            document.getElementById('contactModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeContactModal() {
            document.getElementById('contactModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('contactModal').addEventListener('click', function(e) {
            if (e.target.id === 'contactModal') {
                closeContactModal();
            }
        });



        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
