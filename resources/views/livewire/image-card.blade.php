<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($this->images as $image)
        <div class="gallery-item bg-white rounded-2xl overflow-hidden shadow-lg border border-palace-lavender"
            data-category="suites">

            <div class="relative overflow-hidden h-72">
                <img src="{{ asset($image->image) }}" alt="{{ $image->title }}"
                    class="w-full h-full object-cover image-zoom">
                <div
                    class="absolute top-4 right-4 purple-gradient text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                    <i class="fas fa-crown mr-1"></i> {{ $image->title }}
                </div>
            </div>
        </div>
    @endforeach
</div>
