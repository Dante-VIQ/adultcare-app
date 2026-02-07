<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($this->images as $image)
        <div class="gallery-item bg-white rounded-2xl overflow-hidden shadow-lg border border-palace-lavender"
            data-category="suites">

            <div class="relative overflow-hidden h-72">
                <img src="{{ asset($image->image) }}" alt="{{ $image->title }}"
                    class="w-full h-full object-cover image-zoom">
                
            </div>
        </div>
    @endforeach
</div>
