<x-app-layout>
    <x-slot name="header">
        <x-header title="Tags list"/>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.tags.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Add new Tag
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($tags as $tag)
                <div class="border rounded-lg p-4 shadow hover:shadow-lg transition">
                    <a href="{{ route('admin.tags.show', $tag->slug) }}"
                       class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                        {{ $tag->name }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>


