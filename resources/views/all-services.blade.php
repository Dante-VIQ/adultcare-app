<x-app-layout>
    <!-- Hero Section -->
    <section class="hero-bg text-white py-24">
        <div class="container mx-auto px-4 text-center">
            <h1 class="cormorant text-5xl md:text-6xl font-bold mb-6">Our Care Services</h1>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-2xl max-w-3xl mx-auto font-light">
                Comprehensive, personalized care designed to enhance quality of life and promote independence.
            </p>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Specialized Care Programs</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-4xl mx-auto">
                    At Amazing Palace, we offer a range of specialized care services tailored to meet the unique needs of each resident. Our programs combine expert medical support with compassionate, person-centered care.
                </p>
            </div>
            
            <!-- Services Tabs -->
            <div class="mb-12">
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <button id="memory-care-tab" class="tab-active px-6 py-3 rounded-full font-semibold border-2 border-navy transition-all duration-300">
                        <i class="fas fa-brain mr-2"></i> Memory Care
                    </button>
                    <button id="assisted-living-tab" class="px-6 py-3 rounded-full font-semibold border-2 border-gray-300 hover:border-navy hover:bg-navy hover:text-white transition-all duration-300">
                        <i class="fas fa-hands-helping mr-2"></i> Assisted Living
                    </button>
                    <button id="respite-care-tab" class="px-6 py-3 rounded-full font-semibold border-2 border-gray-300 hover:border-navy hover:bg-navy hover:text-white transition-all duration-300">
                        <i class="fas fa-home mr-2"></i> Respite Care
                    </button>
                    <button id="rehab-tab" class="px-6 py-3 rounded-full font-semibold border-2 border-gray-300 hover:border-navy hover:bg-navy hover:text-white transition-all duration-300">
                        <i class="fas fa-heartbeat mr-2"></i> Rehabilitation
                    </button>
                    <button id="hospice-tab" class="px-6 py-3 rounded-full font-semibold border-2 border-gray-300 hover:border-navy hover:bg-navy hover:text-white transition-all duration-300">
                        <i class="fas fa-hand-holding-heart mr-2"></i> Hospice Support
                    </button>
                </div>
                
                <!-- Memory Care Content -->
                <div id="memory-care-content" class="service-content">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Specialized Memory Care Program</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Our dedicated memory care program provides a secure, supportive environment for residents with Alzheimer's, dementia, and other memory-related conditions. We focus on preserving dignity, maximizing abilities, and enhancing quality of life.
                            </p>
                            <p class="text-lg text-gray-700 mb-8">
                                Using evidence-based approaches, our specially trained staff creates personalized care plans that address cognitive, emotional, and physical needs in a comforting, familiar setting.
                            </p>
                            <a href="contact.html#assessment" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                <i class="fas fa-clipboard-check mr-2"></i> Schedule Memory Assessment
                            </a>
                        </div>
                        <div class="bg-navy rounded-2xl p-8 text-white">
                            <h4 class="cormorant text-2xl font-bold mb-6 text-gold">Memory Care Features</h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Secure, monitored environment with wander prevention</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Cognitive stimulation activities and memory therapy</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Structured daily routine to reduce anxiety and confusion</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Specialized staff trained in dementia care techniques</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Family support and education programs</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Medication management for cognitive symptoms</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Assisted Living Content (Hidden by default) -->
                <div id="assisted-living-content" class="service-content hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1">
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Assisted Living Services</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Our assisted living program provides the perfect balance of support and independence. We help residents with daily activities while encouraging autonomy and engagement in community life.
                            </p>
                            <p class="text-lg text-gray-700 mb-8">
                                From medication management to personal care assistance, our team works closely with residents and their families to create personalized care plans that respect individual preferences and promote dignity.
                            </p>
                            <a href="contact.html#assessment" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                <i class="fas fa-user-check mr-2"></i> Request Care Assessment
                            </a>
                        </div>
                        <div class="order-1 lg:order-2 bg-navy rounded-2xl p-8 text-white">
                            <h4 class="cormorant text-2xl font-bold mb-6 text-gold">Assisted Living Services</h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Personal care assistance (bathing, dressing, grooming)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Medication management and administration</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Mobility assistance and fall prevention</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Meal preparation and nutrition monitoring</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Housekeeping and laundry services</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Transportation coordination for appointments</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Respite Care Content (Hidden by default) -->
                <div id="respite-care-content" class="service-content hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Respite Care Services</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Our respite care program offers temporary stays for seniors, providing primary caregivers with much-needed rest while ensuring their loved ones receive exceptional care in a comfortable setting.
                            </p>
                            <p class="text-lg text-gray-700 mb-8">
                                Whether for a weekend, a week, or longer, our respite guests enjoy all the amenities and services of our full-time residents, with care tailored to their specific needs during their stay.
                            </p>
                            <a href="contact.html#respite" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                <i class="fas fa-calendar-day mr-2"></i> Book Respite Stay
                            </a>
                        </div>
                        <div class="bg-navy rounded-2xl p-8 text-white">
                            <h4 class="cormorant text-2xl font-bold mb-6 text-gold">Respite Care Benefits</h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Flexible stay durations (short-term or extended)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Full access to all facility amenities and activities</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Professional caregiving and medical oversight</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Peace of mind for primary caregivers</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Opportunity to experience our community before long-term commitment</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Seamless transition with personalized care plan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Rehabilitation Content (Hidden by default) -->
                <div id="rehab-content" class="service-content hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1">
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Rehabilitation Services</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Our rehabilitation program supports residents recovering from surgery, illness, or injury. We partner with licensed therapists to provide physical, occupational, and speech therapy right in our facility.
                            </p>
                            <p class="text-lg text-gray-700 mb-8">
                                With a focus on regaining strength, mobility, and independence, our rehabilitation services help residents return to their highest possible level of functioning in a comfortable, supportive environment.
                            </p>
                            <a href="contact.html#rehab" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                <i class="fas fa-file-medical mr-2"></i> Inquire About Rehab Services
                            </a>
                        </div>
                        <div class="order-1 lg:order-2 bg-navy rounded-2xl p-8 text-white">
                            <h4 class="cormorant text-2xl font-bold mb-6 text-gold">Rehabilitation Services</h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Physical therapy for mobility and strength</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Occupational therapy for daily living skills</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Speech therapy for communication and swallowing</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Post-operative care and recovery support</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Stroke and cardiac rehabilitation</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Fall prevention and balance training</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Hospice Support Content (Hidden by default) -->
                <div id="hospice-content" class="service-content hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="cormorant text-4xl font-bold text-navy mb-6">Hospice Support Services</h3>
                            <p class="text-lg text-gray-700 mb-6">
                                Our hospice support program provides compassionate end-of-life care in collaboration with licensed hospice agencies. We focus on comfort, dignity, and emotional support for residents and their families.
                            </p>
                            <p class="text-lg text-gray-700 mb-8">
                                In our peaceful, homelike environment, we ensure residents receive personalized attention and symptom management while honoring their wishes and providing spiritual and emotional support.
                            </p>
                            <a href="contact.html#hospice" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                                <i class="fas fa-hand-holding-medical mr-2"></i> Learn About Hospice Support
                            </a>
                        </div>
                        <div class="bg-navy rounded-2xl p-8 text-white">
                            <h4 class="cormorant text-2xl font-bold mb-6 text-gold">Hospice Support Features</h4>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Pain and symptom management</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>24/7 comfort care and monitoring</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Emotional and spiritual support</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Family counseling and bereavement support</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Collaboration with hospice agencies</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-gold text-xl mr-3 mt-1"></i>
                                    <span>Respect for cultural and religious preferences</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Daily Life & Activities -->
    <section class="py-20 assisted-living-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Daily Life & Activities</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-4xl mx-auto">
                    Beyond exceptional care, we provide a vibrant community life with engaging activities, social events, and wellness programs designed to enrich the lives of our residents.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-8 service-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-utensils text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Gourmet Dining</h3>
                    <p class="text-gray-700 mb-6">
                        Chef-prepared meals with nutritionist-approved menus, accommodating special diets and preferences in a restaurant-style dining experience.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Three nutritious meals daily</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Special dietary accommodations</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Snacks and beverages available 24/7</li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 service-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-hiking text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Wellness Programs</h3>
                    <p class="text-gray-700 mb-6">
                        Daily exercise classes, walking groups, and fitness activities tailored to individual abilities to promote physical health and mobility.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Gentle yoga and chair exercises</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Outdoor walking in secure gardens</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Balance and fall prevention training</li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 service-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-palette text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Creative Arts</h3>
                    <p class="text-gray-700 mb-6">
                        Art therapy, music sessions, crafts, and creative expression activities designed to stimulate cognitive function and provide joy.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Painting and drawing classes</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Music therapy and sing-alongs</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Reminiscence and life story projects</li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 service-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Social Events</h3>
                    <p class="text-gray-700 mb-6">
                        Regular community gatherings, holiday celebrations, game nights, and intergenerational activities to foster connections and combat loneliness.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Weekly movie nights and discussions</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Holiday parties and family events</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Book clubs and discussion groups</li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 service-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-seedling text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Outdoor Activities</h3>
                    <p class="text-gray-700 mb-6">
                        Access to beautifully landscaped gardens, patio areas, and supervised outings to local attractions, parks, and cultural events.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Gardening and horticultural therapy</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Seasonal outdoor events</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Supervised community outings</li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 service-card">
                    <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-spa text-white text-2xl"></i>
                    </div>
                    <h3 class="cormorant text-2xl font-bold text-navy mb-4">Personal Services</h3>
                    <p class="text-gray-700 mb-6">
                        On-site salon services, massage therapy, and personal grooming assistance to help residents look and feel their best.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Hair styling and barber services</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Manicures and pedicures</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Therapeutic massage</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Care Coordination Section -->
    <section class="py-20 memory-care-bg text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="cormorant text-4xl font-bold mb-6">Personalized Care Coordination</h2>
                    <div class="w-24 h-1 bg-gold mb-8"></div>
                    <p class="text-xl mb-8">
                        Every resident at Amazing Palace receives a comprehensive assessment and personalized care plan developed in collaboration with our medical team, the resident, and their family.
                    </p>
                    <p class="text-lg mb-10">
                        Our care coordination includes regular health monitoring, medication management, family consultations, and adjustments to the care plan as needs change over time.
                    </p>
                    <a href="contact.html#care-coordination" class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                        <i class="fas fa-clipboard-list mr-2"></i> Learn About Our Care Process
                    </a>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-10 border border-white/20">
                    <h3 class="cormorant text-3xl font-bold mb-6 text-gold">Our Care Process</h3>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="font-bold text-navy text-xl">1</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Comprehensive Assessment</h4>
                                <p>Initial evaluation of medical history, preferences, and care needs</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="font-bold text-navy text-xl">2</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Personalized Care Plan</h4>
                                <p>Development of tailored care strategy with resident and family input</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="font-bold text-navy text-xl">3</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Implementation & Monitoring</h4>
                                <p>Care delivery with ongoing assessment and adjustment</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="font-bold text-navy text-xl">4</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Regular Family Updates</h4>
                                <p>Transparent communication and family involvement in care decisions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing & Insurance -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="cormorant text-4xl md:text-5xl font-bold text-navy mb-4">Pricing & Insurance</h2>
                <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-xl text-gray-700 max-w-4xl mx-auto">
                    We work with families to navigate financial options and ensure access to quality care. Contact us for a personalized cost assessment based on your specific needs.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-light-blue rounded-2xl p-10">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-hand-holding-usd text-white text-3xl"></i>
                        </div>
                        <h3 class="cormorant text-2xl font-bold text-navy mb-4">Private Pay</h3>
                    </div>
                    <p class="text-gray-700 mb-6 text-center">
                        Comprehensive monthly rates that include room, board, care services, amenities, and activities.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> All-inclusive pricing</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> No long-term contracts required</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Month-to-month arrangements available</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Transparent billing with no hidden fees</li>
                    </ul>
                </div>
                
                <div class="bg-navy text-white rounded-2xl p-10 relative overflow-hidden">
                    <div class="absolute top-4 right-4 bg-gold text-navy px-4 py-1 rounded-full font-bold">
                        MOST COMMON
                    </div>
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gold rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-shield-alt text-navy text-3xl"></i>
                        </div>
                        <h3 class="cormorant text-2xl font-bold text-gold mb-4">Long-Term Care Insurance</h3>
                    </div>
                    <p class="mb-6 text-center">
                        We work directly with most long-term care insurance providers to simplify the claims process for our residents.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Direct billing to insurance companies</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Assistance with claims paperwork</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Coordination with insurance case managers</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Verification of benefits</li>
                    </ul>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-10">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-navy rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-heartbeat text-white text-3xl"></i>
                        </div>
                        <h3 class="cormorant text-2xl font-bold text-navy mb-4">Medicaid/Apple Health</h3>
                    </div>
                    <p class="text-gray-700 mb-6 text-center">
                        We are a Medicaid/Apple Health certified provider, offering accessible care options for qualifying individuals.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Medicaid/Apple Health approved</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Assistance with application process</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Understanding of eligibility requirements</li>
                        <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Coordination with DSHS case workers</li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
                    <strong>Note:</strong> All pricing is based on individual care needs. Contact us for a personalized assessment and detailed cost breakdown.
                </p>
                <a href="contact.html#pricing" class="inline-block bg-navy hover:bg-royal-blue text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-lg">
                    <i class="fas fa-calculator mr-2"></i> Request Pricing Information
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-navy text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="cormorant text-4xl md:text-5xl font-bold mb-6">Ready to Learn More?</h2>
            <div class="w-32 h-1 bg-gold mx-auto mb-8"></div>
            <p class="text-xl max-w-3xl mx-auto mb-10">
                Contact us today to discuss your specific care needs, schedule a tour, or request a personalized care assessment.
            </p>
            <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-8">
                <a href="contact.html#tour" class="btn-gold px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-xl">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: (206) 555-1234
                </a>
                <a href="contact.html" class="bg-transparent border-2 border-white hover:bg-white hover:text-navy text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300">
                    <i class="fas fa-envelope mr-2"></i> Email Us
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer-card />

</x-app-layout>