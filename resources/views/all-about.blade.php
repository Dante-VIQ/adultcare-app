<x-app-layout>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-24">
        <div class="container mx-auto px-4 text-center">
            <h1 class="cormorant text-5xl md:text-6xl font-bold mb-6">Our Story & Mission</h1>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-2xl max-w-3xl mx-auto font-light">
                Redefining excellence in senior care through compassion, expertise, and a commitment to dignity.
            </p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold text-navy mb-6">Welcome to Amazing Palace</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6">
                        At Amazing Palace Adult Family Home, we believe that aging should be a journey marked by dignity, comfort, and joy. Founded with a vision to transform senior care in Seattle, we've created a sanctuary where expert medical support meets the warmth of a loving home.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Our name reflects our commitment to providing not just care, but an amazing living experience for every resident. We understand that choosing a care facility is one of the most important decisions a family can make, and we strive to exceed expectations at every turn.
                    </p>
                    <p class="text-lg text-gray-700">
                        Located in the heart of Seattle, our facility combines the convenience of city living with the tranquility of a private residence, creating the perfect environment for seniors to thrive.
                    </p>
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" 
                             alt="Comfortable living room at Amazing Palace" 
                             class="w-full h-96 object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-gold text-navy p-6 rounded-2xl shadow-xl max-w-xs">
                        <h4 class="cormorant text-2xl font-bold mb-2">Family-Owned</h4>
                        <p class="font-semibold">Since 2008</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 values-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Our Mission & Vision</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Guided by compassion and driven by excellence in everything we do.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white rounded-2xl shadow-lg p-10">
                    <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mb-8 mx-auto">
                        <i class="fas fa-bullseye text-white text-3xl"></i>
                    </div>
                    <h3 class="cormorant text-3xl font-bold text-navy text-center mb-6">Our Mission</h3>
                    <p class="text-gray-700 text-lg mb-6 text-center">
                        To provide exceptional, personalized care that enhances the quality of life for our residents while supporting their families with compassion and understanding.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                            <span>Deliver individualized care plans tailored to each resident's unique needs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                            <span>Maintain the highest standards of safety, comfort, and medical care</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                            <span>Create a nurturing environment that feels like home</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-10">
                    <div class="w-20 h-20 bg-gold rounded-full flex items-center justify-center mb-8 mx-auto">
                        <i class="fas fa-eye text-navy text-3xl"></i>
                    </div>
                    <h3 class="cormorant text-3xl font-bold text-navy text-center mb-6">Our Vision</h3>
                    <p class="text-gray-700 text-lg mb-6 text-center">
                        To be recognized as Seattle's premier adult family home, setting the standard for luxury senior care through innovation, compassion, and unwavering commitment to excellence.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-star text-gold text-xl mr-3 mt-1"></i>
                            <span>Transform the perception of senior living through exceptional service</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-gold text-xl mr-3 mt-1"></i>
                            <span>Expand access to high-quality care for seniors in our community</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-gold text-xl mr-3 mt-1"></i>
                            <span>Lead the industry in caregiver training and development</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Timeline -->
    <section class="py-20 story-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Our Journey</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    A timeline of our growth and commitment to senior care excellence.
                </p>
            </div>
            
            <div class="relative timeline pt-12">
                <!-- Timeline Item 1 -->
                <div class="flex flex-col md:flex-row items-center mb-16">
                    <div class="md:w-1/2 md:text-right md:pr-12 mb-6 md:mb-0">
                        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md ml-auto">
                            <h3 class="cormorant text-2xl font-bold text-navy mb-3">The Beginning</h3>
                            <p class="text-gray-700 mb-4">Founded by the Johnson family after their personal experience caring for aging parents, Amazing Palace began as a single-family home dedicated to compassionate senior care.</p>
                            <div class="flex items-center text-gold font-semibold">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>2008</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 md:relative md:left-0 md:transform-none flex items-center justify-center w-12 h-12 bg-gold rounded-full z-10">
                        <i class="fas fa-home text-white text-xl"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-12">
                        <!-- Empty for alignment -->
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="flex flex-col md:flex-row items-center mb-16">
                    <div class="md:w-1/2 md:pr-12">
                        <!-- Empty for alignment -->
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 md:relative md:left-0 md:transform-none flex items-center justify-center w-12 h-12 bg-navy rounded-full z-10">
                        <i class="fas fa-award text-white text-xl"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-12 mt-6 md:mt-0">
                        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md">
                            <h3 class="cormorant text-2xl font-bold text-navy mb-3">Expansion & Recognition</h3>
                            <p class="text-gray-700 mb-4">After receiving multiple awards for excellence in care, we expanded our facility to accommodate more residents while maintaining our intimate, home-like atmosphere.</p>
                            <div class="flex items-center text-gold font-semibold">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>2014</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="flex flex-col md:flex-row items-center mb-16">
                    <div class="md:w-1/2 md:text-right md:pr-12 mb-6 md:mb-0">
                        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md ml-auto">
                            <h3 class="cormorant text-2xl font-bold text-navy mb-3">Specialized Memory Care</h3>
                            <p class="text-gray-700 mb-4">Introduced our specialized memory care program with dedicated staff trained in dementia and Alzheimer's care, establishing ourselves as leaders in cognitive support.</p>
                            <div class="flex items-center text-gold font-semibold">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 md:relative md:left-0 md:transform-none flex items-center justify-center w-12 h-12 bg-gold rounded-full z-10">
                        <i class="fas fa-brain text-white text-xl"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-12">
                        <!-- Empty for alignment -->
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-12">
                        <!-- Empty for alignment -->
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 md:relative md:left-0 md:transform-none flex items-center justify-center w-12 h-12 bg-navy rounded-full z-10">
                        <i class="fas fa-crown text-white text-xl"></i>
                    </div>
                    <div class="md:w-1/2 md:pl-12 mt-6 md:mt-0">
                        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md">
                            <h3 class="cormorant text-2xl font-bold text-navy mb-3">Today: The Amazing Palace Standard</h3>
                            <p class="text-gray-700 mb-4">Now recognized as Seattle's premier adult family home, we continue to innovate while staying true to our founding principles of compassion, dignity, and excellence.</p>
                            <div class="flex items-center text-gold font-semibold">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>Present</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Our Core Values</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    The principles that guide every decision and interaction at Amazing Palace.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-light-blue rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Compassion</h3>
                    <p class="text-gray-700">We approach every resident and family with empathy, understanding, and genuine care, recognizing the unique journey of each individual.</p>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-user-shield text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Dignity</h3>
                    <p class="text-gray-700">We honor the inherent worth of every resident, preserving their independence and respecting their life experiences and choices.</p>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Excellence</h3>
                    <p class="text-gray-700">We maintain the highest standards in care, facility maintenance, and staff training, continually striving to improve our services.</p>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Integrity</h3>
                    <p class="text-gray-700">We operate with transparency, honesty, and ethical practices in all our interactions with residents, families, and partners.</p>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Community</h3>
                    <p class="text-gray-700">We foster a sense of belonging and connection among residents, staff, and families, creating an extended family environment.</p>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Innovation</h3>
                    <p class="text-gray-700">We embrace new approaches, technologies, and best practices in senior care to enhance the well-being of our residents.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Accreditation & Licensing -->
    <section class="py-20 values-bg">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold text-navy mb-6">Accreditation & Licensing</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6">
                        Amazing Palace Adult Family Home meets and exceeds all Washington State requirements for senior care facilities. Our commitment to regulatory compliance ensures the highest standards of safety and care for our residents.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                            <span><strong>State Licensed:</strong> Fully compliant with Washington State Department of Social and Health Services (DSHS) regulations</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                            <span><strong>Medicaid Approved:</strong> Certified to accept Medicaid/Apple Health residents</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                            <span><strong>Regular Inspections:</strong> Consistently receive excellent ratings during state inspections</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                            <span><strong>Staff Certification:</strong> All caregivers are certified, background-checked, and receive ongoing training</span>
                        </li>
                    </ul>
                    <a href="contact.html#licensing" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                        <i class="fas fa-file-certificate mr-2"></i> View Our Credentials
                    </a>
                </div>
                <div class="bg-white rounded-2xl shadow-xl p-10">
                    <div class="text-center mb-8">
                        <i class="fas fa-award text-gold text-6xl mb-6"></i>
                        <h3 class="cormorant text-3xl font-bold text-navy mb-4">Our Accolades</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-center p-4 bg-light-blue rounded-xl">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-medal text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">Excellence in Senior Care Award</h4>
                                <p class="text-gray-600">Washington State Senior Care Association, 2022</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-light-blue rounded-xl">
                            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-star text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">Top Rated Facility</h4>
                                <p class="text-gray-600">SeniorAdvisor.com, 2021-2023</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-light-blue rounded-xl">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-heart text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy">Family Choice Award</h4>
                                <p class="text-gray-600">Seattle Families Magazine, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-navy text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="cormorant text-4xl md:text-5xl font-bold mb-6">Experience the Amazing Palace Difference</h2>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-xl max-w-3xl mx-auto mb-10">
                Discover why families throughout Seattle trust us with their loved ones' care. Schedule a personal tour to see our facility and meet our team.
            </p>
            <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-8">
                <a href="contact.html#tour" class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                    <i class="fas fa-calendar-check mr-2"></i> Schedule a Tour
                </a>
                <a href="contact.html" class="bg-transparent border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                    <i class="fas fa-phone-alt mr-2"></i> Contact Us Today
                </a>
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
                        Seattle's premier adult family home offering luxury care with compassion and expertise.
                    </p>
                </div>
                
                <div class="text-center md:text-right">
                    <p class="text-gray-400 mb-4">&copy; 2023 Amazing Palace Adult Family Home. All rights reserved.</p>
                    <div class="flex space-x-4 justify-center md:justify-end">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-white/10 text-center text-gray-400 text-sm">
                <p>123 Luxury Lane, Seattle, WA 98101 | (206) 555-1234 | info@amazingpalaceseattle.com</p>
                <p class="mt-2">WA State License #AFH-123456 | Medicaid Provider #WA98765</p>
            </div>
        </div>
    </footer>

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
</x-app-layout>