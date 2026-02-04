                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Your Name</label>
                            <input type="text"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold">
                        </div>
                        <div>
                            <label class="block mb-2 font-semibold text-gray-800">Phone Number</label>
                            <input type="tel"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold">
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 font-semibold text-gray-800">Email Address</label>
                        <input type="email"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold">
                    </div>

                    <div>
                        <label class="block mb-2 font-semibold text-gray-800">Preferred Tour Date</label>
                        <input type="date"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold">
                    </div>

                    <div>
                        <label class="block mb-2 font-semibold text-gray-800">Additional Information</label>
                        <textarea rows="4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gold"
                            placeholder="Tell us about your specific needs or questions..."></textarea>
                    </div>

                    <button type="submit"
                        class="btn-gold w-full py-4 rounded-lg font-bold text-lg transition-all duration-300 shadow-lg">
                        <i class="fas fa-calendar-check mr-2"></i> Request Tour
                    </button>
                </form>