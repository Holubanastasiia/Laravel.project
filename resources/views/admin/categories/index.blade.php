<x-app-layout>
    <x-slot name="header">
        <x-header title="Categories list"/>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.categories.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Add new category
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($categories as $category)
                <div class="border rounded-lg p-4 shadow hover:shadow-lg transition">
                    <a href="{{ route('admin.categories.show', $category->slug) }}"
                       class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                        {{ $category->name }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

