                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 font-semibold text-gray-800">First Name *</label>
                                <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                            <div>
                                <label class="block mb-2 font-semibold text-gray-800">Last Name *</label>
                                <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 font-semibold text-gray-800">Email Address *</label>
                                <input type="email" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                            <div>
                                <label class="block mb-2 font-semibold text-gray-800">Phone Number *</label>
                                <input type="tel" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Subject *</label>
                            <select class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                                <option value="">Select a subject</option>
                                <option value="tour">Schedule a Tour</option>
                                <option value="admissions">Admissions Information</option>
                                <option value="pricing">Pricing & Financial Options</option>
                                <option value="care-assessment">Care Needs Assessment</option>
                                <option value="employment">Employment Opportunities</option>
                                <option value="general">General Inquiry</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Message *</label>
                            <textarea rows="5" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent" placeholder="Tell us about your specific needs or questions..."></textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="consent" required class="w-5 h-5 mr-3">
                            <label for="consent" class="text-gray-700">
                                I consent to Amazing Palace contacting me via phone or email regarding my inquiry. *
                            </label>
                        </div>
                        
                        <button type="submit" class="btn-gold w-full py-4 rounded-lg font-bold text-lg transition-all duration-300 shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                        
                        <p class="text-gray-600 text-sm text-center">
                            * Required fields. We respect your privacy and will not share your information with third parties.
                        </p>
                    </form>