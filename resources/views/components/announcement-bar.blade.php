    <div class="bg-blue-900 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-sm text-center md:text-left mb-1 md:mb-0">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: <a href="tel:{{ config('facility.phone_tel') }}"
                        class="font-semibold hover:text-blue-200">{{ config('facility.phone') }}</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">24/7 Service Available</span>
                    <a href="/booking"
                        class="text-sm bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded font-semibold transition-colors">
                        <i class="fas fa-calendar-alt mr-1"></i> Book Online
                    </a>
                </div>
            </div>
        </div>
    </div>