<x-app-layout>
    <x-slot name="header">
        <x-header title="{{ $tag->name }}"/>
    </x-slot>

    <div class="max-w-2xl mx-auto py-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $tag->name }}</h1>

            <div class="text-gray-700 mb-4">
                <span class="font-semibold">Created at:</span> {{ $tag->created_at }}
            </div>

            <div class="flex space-x-4">
                <a href="{{ route('admin.tags.edit', $tag->slug) }}"
                   class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                    Edit this tag
                </a>

                <a href="{{ route('admin.tags.index') }}"
                   class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">
                    Back to list
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

