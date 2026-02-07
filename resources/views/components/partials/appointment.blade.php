                                        <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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