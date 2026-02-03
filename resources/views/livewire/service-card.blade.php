<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @unless ($services->isEmpty())
        @foreach ($services as $service)
            <div
                class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 border-t-4 border-gold">
                <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-brain text-white text-2xl"></i>
                </div>
                <h3 class="cormorant text-2xl font-bold text-navy mb-4">{{ $service->title }}</h3>
                <p class="text-gray-700 mb-6">
                    {{ $service->description }}
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Cognitive stimulation activities
                    </li>
                    <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Secure, monitored environment
                    </li>
                    <li class="flex items-center"><i class="fas fa-check text-gold mr-2"></i> Personalized care plans</li>
                </ul>
            </div>
        @endforeach
    @else
        <div class="col-12">
            <p class="text-center justify-center">No services content available yet.</p>
        </div>
    @endunless

</div>
