<x-admin-layout>
    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('team.index') }}" class="text-sm text-blue-600 hover:underline">&larr; All team members</a>

                <h1 class="text-2xl font-semibold text-gray-900 mt-4">{{ $team->name }}</h1>
                @if ($team->title)
                    <p class="text-gray-600">{{ $team->title }}</p>
                @endif
                @if ($team->specialty)
                    <p class="text-sm text-gray-500 mt-1">{{ $team->specialty }}</p>
                @endif
                @if ($team->details)
                    <p class="mt-4 text-gray-700 whitespace-pre-line">{{ $team->details }}</p>
                @endif

                <div class="mt-6">
                    <a href="{{ route('team.edit', $team) }}"
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Edit</a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
