<x-admin-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold text-gray-900 mb-6">Care Team Members</h1>
                <div class="mb-4">
                    <a href="{{ route('team.create') }}"
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        <i class="fas fa-plus mr-2"></i> Add New Member
                    </a>
                </div>
                {{-- <x-team-members-table :teamMembers="$teamMembers" /> --}}
            </div>
        </div>
    </div>
@props(['teamMembers'])

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach($teamMembers as $member)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="h-64 bg-navy flex items-center justify-center">
                @if($member->image)
                    <img src="{{ $member->image_url }}"
                         alt="{{ $member->name }}"
                         class="w-full h-full object-cover">
                @else
                    <i class="{{ $member->icon_class }} text-white text-8xl"></i>
                @endif
            </div>
            <div class="p-8">
                <h3 class="cormorant text-2xl font-bold text-navy mb-2">{{ $member->name }}</h3>
                <p class="text-gold font-semibold mb-4">{{ $member->title }}</p>
                <p class="text-gray-700">{{ $member->details }}</p>
            </div>
        </div>
    @endforeach
</div>
</x-admin-layout>