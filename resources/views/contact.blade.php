<x-app-layout>
    <!-- Hero Section -->
    <section class="relative contact-hero-bg text-white py-24">
        <div class="absolute inset-0 bg-gradient-to-r from-purpleDeep to-purpleLight"></div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="cormorant text-5xl md:text-6xl font-bold mb-6">Contact Us</h1>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-2xl max-w-3xl mx-auto font-light">
                We're here to answer your questions and help you make the best decision for your loved one's care.
            </p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Get in Touch</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Multiple ways to connect with our team. We typically respond within 24 hours.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white rounded-2xl shadow-lg p-8 contact-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-phone-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy text-center mb-4">Call Us</h3>
                    <p class="text-gray-700 text-center mb-6">
                        Speak directly with our care coordinator during business hours.
                    </p>
                    <div class="text-center">
                        <a href="tel:2065551234" class="text-2xl font-bold text-navy hover:text-gold transition">(206) 488-9285</a>
                        <p class="text-gray-600 mt-2">Mon-Fri: 9am-5pm | Sat: 10am-2pm</p>
                        <p class="text-gray-600">24/7 Emergency Line Available</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 contact-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy text-center mb-4">Email Us</h3>
                    <p class="text-gray-700 text-center mb-6">
                        Send us a message and we'll respond promptly.
                    </p>
                    <div class="text-center">
                        <a href="mailto:amazingpalaceafh@gmail.com" class="text-sm font-bold text-navy hover:text-gold transition block mb-2 text-wrap">amazingpalaceafh@gmail.com</a>
                        {{-- <a href="mailto:admissions@amazingpalaceseattle.com" class="text-xl font-bold text-navy hover:text-gold transition block">amazingpalaceafh@gmail.com</a> --}}
                        <p class="text-gray-600 mt-2">For admissions inquiries</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 contact-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy text-center mb-4">Visit Us</h3>
                    <p class="text-gray-700 text-center mb-6">
                        Schedule a tour to see our facility in person.
                    </p>
                    <div class="text-center">
                        <p class="text-lg font-bold text-navy">2638 26th pl SE</p>
                        <p class="text-lg text-gray-700">Auburn, WA 98002</p>
                        <p class="text-gray-600 mt-2">Tours by appointment only</p>
                        <a href="#tour" class="inline-block mt-4 bg-navy hover:bg-royal-blue text-white px-6 py-3 rounded-full font-semibold transition-all duration-300">
                            <i class="fas fa-directions mr-2"></i> Get Directions
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Emergency Contact Banner -->
            <div class="bg-gradient-to-r from-red-600 to-red-800 text-white rounded-2xl p-8 mb-16">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 md:mr-8">
                        <h3 class="cormorant text-3xl font-bold mb-2">24/7 Emergency Contact</h3>
                        <p class="text-lg">For urgent matters outside business hours</p>
                    </div>
                    <div class="text-center md:text-right">
                        <a href="tel:2065559999" class="text-3xl font-bold block mb-2">(206) 488-9285</a>
                        <p class="text-sm">This line is monitored 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section class="py-20 contact-section-bg" id="contact-form-section">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="cormorant text-4xl font-bold text-navy mb-6">Send Us a Message</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-gray-700 mb-8">
                        Fill out the form below and our team will contact you within 24 hours. For immediate assistance, please call us directly.
                    </p>
                    
                    @include('components.partials.form')
                </div>
                
                <!-- Map & Location Information -->
                <div>
                    <div class="mb-10">
                        <h2 class="cormorant text-4xl font-bold text-navy mb-6">Our Location</h2>
                        <div class="w-24 h-1 bg-gold mb-8"></div>
                        
                        <!-- Map Placeholder (In a real implementation, you would embed Google Maps or similar) -->
                        <div class="map-container bg-gray-200 mb-8 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt text-gray-400 text-6xl mb-4"></i>
                                <p class="text-gray-600 font-semibold">Interactive Map Would Appear Here</p>
                                <p class="text-gray-500 text-sm">(Google Maps integration)</p>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-lg">
                            <h3 class="cormorant text-2xl font-bold text-navy mb-4">Amazing Palace Adult Family Home</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <i class="fas fa-map-marker-alt text-gold text-xl mr-3 mt-1"></i>
                                    <div>
                                        <p class="font-semibold">Address</p>
                                        <p class="text-gray-700">2638 26th pl SE, Auburn, WA 98002</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-clock text-gold text-xl mr-3 mt-1"></i>
                                    <div>
                                        <p class="font-semibold">Business Hours</p>
                                        <p class="text-gray-700">Monday-Friday: 9:00 AM - 5:00 PM</p>
                                        <p class="text-gray-700">Saturday: 10:00 AM - 2:00 PM</p>
                                        <p class="text-gray-700">Sunday: Closed (Tours by appointment only)</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-car text-gold text-xl mr-3 mt-1"></i>
                                    <div>
                                        <p class="font-semibold">Parking</p>
                                        <p class="text-gray-700">Free visitor parking available on-site</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    {{-- <div class="bg-navy text-white rounded-xl p-8">
                        <h3 class="cormorant text-2xl font-bold mb-6 text-gold">Quick Links</h3>
                        <div class="space-y-4">
                            <a href="/all-services" class="flex items-center p-3 bg-white/10 rounded-lg hover:bg-white/20 transition">
                                <i class="fas fa-list-alt text-gold mr-3"></i>
                                <span>View Our Services</span>
                            </a>
                            <a href="/facility" class="flex items-center p-3 bg-white/10 rounded-lg hover:bg-white/20 transition">
                                <i class="fas fa-images text-gold mr-3"></i>
                                <span>Virtual Facility Tour</span>
                            </a>
                            <a href="#faq" class="flex items-center p-3 bg-white/10 rounded-lg hover:bg-white/20 transition">
                                <i class="fas fa-question-circle text-gold mr-3"></i>
                                <span>Frequently Asked Questions</span>
                            </a>
                            <a href="/booking" class="flex items-center p-3 bg-white/10 rounded-lg hover:bg-white/20 transition">
                                <i class="fas fa-calendar-check text-gold mr-3"></i>
                                <span>Schedule an In-Person Tour</span>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule a Tour Section -->
    {{-- <section class="py-20" id="tour">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Schedule a Tour</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Experience Amazing Palace firsthand with a personalized tour of our facility.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="cormorant text-3xl font-bold text-navy mb-6">What to Expect on Your Tour</h3>
                    <p class="text-lg text-gray-700 mb-8">
                        During your personalized tour, you'll have the opportunity to see our facility, meet our care team, and get all your questions answered in person.
                    </p>
                    
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-home text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-lg">Facility Walkthrough</h4>
                                <p class="text-gray-700">See our private rooms, common areas, dining facilities, and outdoor spaces.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-users text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-lg">Meet the Team</h4>
                                <p class="text-gray-700">Interact with our caregivers and learn about our approach to senior care.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-clipboard-list text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-lg">Care Assessment Discussion</h4>
                                <p class="text-gray-700">Discuss specific care needs and how we can support your loved one.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-question-circle text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-lg">Q&A Session</h4>
                                <p class="text-gray-700">Get all your questions answered about services, pricing, and next steps.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl p-10">
                    <h3 class="cormorant text-3xl font-bold text-navy mb-6">Book Your Tour</h3>
                    <p class="text-gray-700 mb-8">Select your preferred date and time for a personal tour of Amazing Palace.</p>
                    
                    <form id="tourForm" class="space-y-6">
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Preferred Tour Date *</label>
                            <input type="date" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Preferred Time *</label>
                            <select class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                <option value="">Select a time</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="1:00">1:00 PM</option>
                                <option value="2:00">2:00 PM</option>
                                <option value="3:00">3:00 PM</option>
                                <option value="4:00">4:00 PM</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Number of Attendees *</label>
                            <select class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                <option value="1">1 person</option>
                                <option value="2" selected>2 people</option>
                                <option value="3">3 people</option>
                                <option value="4">4 people</option>
                                <option value="5">5+ people</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Special Requests</label>
                            <textarea rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent" placeholder="Any specific areas you'd like to focus on during the tour..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-gold w-full py-4 rounded-lg font-bold text-lg transition-all duration-300 shadow-lg">
                            <i class="fas fa-calendar-check mr-2"></i> Schedule Tour
                        </button>
                        
                        <p class="text-gray-600 text-sm text-center">
                            A confirmation email with tour details will be sent within 24 hours.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- FAQ Section -->
    {{-- <section class="py-20 contact-section-bg" id="faq">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Frequently Asked Questions</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Common questions about Amazing Palace and our services.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="faq-item">
                    <button class="faq-question w-full text-left py-6 flex justify-between items-center">
                        <span class="cormorant text-xl font-bold text-navy">What makes Amazing Palace different from other adult family homes?</span>
                        <i class="fas fa-chevron-down text-gold"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-6">
                            <p class="text-gray-700 mb-4">Amazing Palace combines luxury amenities with expert, personalized care in a true home-like environment. Our low resident-to-caregiver ratio ensures individual attention, and our facility features upscale finishes, gourmet dining, and a wide range of activities rarely found in traditional care settings.</p>
                            <p class="text-gray-700">Additionally, our specialized memory care program, 24/7 licensed nursing oversight, and family-centered approach set us apart as Auburn's premier adult family home.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question w-full text-left py-6 flex justify-between items-center">
                        <span class="cormorant text-xl font-bold text-navy">What is included in your monthly pricing?</span>
                        <i class="fas fa-chevron-down text-gold"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-6">
                            <p class="text-gray-700 mb-4">Our all-inclusive monthly rate covers:</p>
                            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                <li>Private or semi-private room with ensuite bathroom</li>
                                <li>Three gourmet meals daily plus snacks</li>
                                <li>24/7 caregiving and supervision</li>
                                <li>Medication management and administration</li>
                                <li>Personal care assistance (bathing, dressing, grooming)</li>
                                <li>Housekeeping and laundry services</li>
                                <li>All utilities including cable TV and WiFi</li>
                                <li>Daily activities and social programs</li>
                                <li>Access to all common areas and outdoor spaces</li>
                            </ul>
                            <p class="text-gray-700 mt-4">Additional services like physical therapy or specialized medical equipment may incur extra charges.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question w-full text-left py-6 flex justify-between items-center">
                        <span class="cormorant text-xl font-bold text-navy">Do you accept Medicaid/Apple Health?</span>
                        <i class="fas fa-chevron-down text-gold"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-6">
                            <p class="text-gray-700 mb-4">Yes, Amazing Palace is a certified Medicaid/Apple Health provider. We accept qualified residents through Washington State's Medicaid program. However, availability for Medicaid beds may be limited, and there is typically a waiting list.</p>
                            <p class="text-gray-700">We also work with long-term care insurance policies and private pay arrangements. Our admissions coordinator can help you understand all payment options and assist with the application process for Medicaid if needed.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question w-full text-left py-6 flex justify-between items-center">
                        <span class="cormorant text-xl font-bold text-navy">What is your staff-to-resident ratio?</span>
                        <i class="fas fa-chevron-down text-gold"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-6">
                            <p class="text-gray-700 mb-4">We maintain a staff-to-resident ratio of 1:3 during daytime hours and 1:5 during nighttime hours, which exceeds Washington State requirements. This ensures our residents receive the attention and care they deserve.</p>
                            <p class="text-gray-700">Our care team includes certified nursing assistants (CNAs), licensed practical nurses (LPNs), and a registered nurse (RN) who oversees all clinical care. All staff members undergo comprehensive background checks and receive ongoing training in senior care best practices.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question w-full text-left py-6 flex justify-between items-center">
                        <span class="cormorant text-xl font-bold text-navy">How do you handle medical emergencies?</span>
                        <i class="fas fa-chevron-down text-gold"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-6">
                            <p class="text-gray-700 mb-4">We have comprehensive emergency protocols in place:</p>
                            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                <li>24/7 staff trained in first aid and CPR</li>
                                <li>Direct communication lines with local hospitals and emergency services</li>
                                <li>Emergency response systems in all resident rooms and common areas</li>
                                <li>Partnerships with local physicians who make regular visits to our facility</li>
                                <li>Established relationships with nearby hospitals for quick transfers when needed</li>
                                <li>Detailed emergency plans for natural disasters and other crises</li>
                            </ul>
                            <p class="text-gray-700 mt-4">We also maintain complete medical records for each resident and have advance directives on file as appropriate.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question w-full text-left py-6 flex justify-between items-center">
                        <span class="cormorant text-xl font-bold text-navy">Can residents bring their own furniture and personal items?</span>
                        <i class="fas fa-chevron-down text-gold"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-6">
                            <p class="text-gray-700 mb-4">Absolutely! We encourage residents to bring personal items, photos, and small pieces of furniture to make their room feel like home. We provide the bed, nightstand, dresser, and chair, but residents are welcome to bring additional items within reason and space constraints.</p>
                            <p class="text-gray-700">We believe familiar surroundings contribute to emotional well-being, especially for those with memory challenges. Our team will work with you to determine what items will fit comfortably and safely in the room.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question w-full text-left py-6 flex justify-between items-center">
                        <span class="cormorant text-xl font-bold text-navy">What is your COVID-19 safety protocol?</span>
                        <i class="fas fa-chevron-down text-gold"></i>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-6">
                            <p class="text-gray-700 mb-4">We follow all Washington State Department of Health guidelines for senior care facilities and have implemented additional safety measures:</p>
                            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                <li>Regular testing of staff and residents as recommended</li>
                                <li>Enhanced cleaning and disinfection protocols</li>
                                <li>PPE requirements for all staff and visitors</li>
                                <li>Vaccination requirements for all employees</li>
                                <li>Isolation protocols for any suspected cases</li>
                                <li>Virtual visitation options when in-person visits are restricted</li>
                            </ul>
                            <p class="text-gray-700 mt-4">Our current visitor policy and safety measures are updated regularly based on public health recommendations.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-xl text-gray-700 mb-8">
                    Have a question that's not answered here?
                </p>
                <a href="#contact-form-section" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                    <i class="fas fa-question-circle mr-2"></i> Ask Your Question
                </a>
            </div>
        </div>
    </section> --}}

    <!-- CTA Section -->
    <section class="py-20 bg-navy text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="cormorant text-4xl md:text-5xl font-bold mb-6">Ready to Take the Next Step?</h2>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-xl max-w-3xl mx-auto mb-10">
                Whether you're ready to schedule a tour or just have questions, our caring team is here to help.
            </p>
            <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-8">
                <a href="tel:2064889285" class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: (206) 4889285
                </a>
                {{-- <a href="/booking" class="bg-transparent border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                    <i class="fas fa-calendar-alt mr-2"></i> Schedule a Tour
                </a> --}}
            </div>
        </div>
    </section>

    <!-- Footer -->
 <x-footer-card />
    <!-- Form Submission Modal -->
    <div id="successModal" class="fixed inset-0 bg-black/70 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-10 text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-green-600 text-3xl"></i>
            </div>
            <h3 class="cormorant text-3xl font-bold text-navy mb-4">Message Sent Successfully!</h3>
            <p class="text-gray-700 mb-8">
                Thank you for contacting Amazing Palace. Our team will respond to your inquiry within 24 hours.
            </p>
            <button onclick="closeSuccessModal()" class="btn-gold px-8 py-3 rounded-full font-bold text-lg transition-all duration-300 shadow-lg w-full">
                Close
            </button>
        </div>
    </div>

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
        
        // FAQ Accordion functionality
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('i');
                
                // Toggle current answer
                answer.classList.toggle('open');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
                
                // Close other answers
                faqQuestions.forEach(otherQuestion => {
                    if (otherQuestion !== question) {
                        const otherAnswer = otherQuestion.nextElementSibling;
                        const otherIcon = otherQuestion.querySelector('i');
                        otherAnswer.classList.remove('open');
                        otherIcon.classList.remove('fa-chevron-up');
                        otherIcon.classList.add('fa-chevron-down');
                    }
                });
            });
        });
        
        // Form submission handling
        const contactForm = document.getElementById('contactForm');
        const tourForm = document.getElementById('tourForm');
        const successModal = document.getElementById('successModal');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // In a real implementation, this would send data to your backend
            // For demo purposes, we'll just show a success message
            showSuccessModal();
            contactForm.reset();
        });
        
        tourForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // In a real implementation, this would send data to your backend
            // For demo purposes, we'll just show a success message
            showSuccessModal();
            tourForm.reset();
        });
        
        function showSuccessModal() {
            successModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeSuccessModal() {
            successModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside
        successModal.addEventListener('click', function(e) {
            if (e.target.id === 'successModal') {
                closeSuccessModal();
            }
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
        
        // Set minimum date for tour scheduling to today
        const today = new Date().toISOString().split('T')[0];
        const tourDateInput = document.querySelector('input[type="date"]');
        if (tourDateInput) {
            tourDateInput.min = today;
        }
    </script>
</x-app-layout>