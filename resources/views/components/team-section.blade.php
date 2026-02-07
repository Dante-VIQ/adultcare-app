@props(['teamMembers'])

<div class="grid grid-cols-2 md:grid-cols-3 gap-8">
    @foreach($teamMembers as $member)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="h-64 bg-navy flex items-center justify-center">
                @if($member->image)
                    <img src="{{ asset($member->image) }}"
                         alt="{{ $member->name }}"
                         class="w-full h-full object-cover">
                @else
                    <i class="{{ $member->icon_class }} text-white text-8xl"></i>
                @endif
            </div>
            <div class="p-8">
                <h3 class="cormorant text-2xl font-bold text-navy mb-2">{{ $member->name }}</h3>
                {{-- <p class="text-gold font-semibold mb-4">{{ $member->title }}</p>
                <p class="text-gray-700">{{ $member->details }}</p> --}}
            </div>
        </div>
    @endforeach
</div>
