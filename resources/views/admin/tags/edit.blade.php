<x-app-layout>
    <x-slot name="header">
        <x-header title="Edit category {{ $tag->name }}"/>
    </x-slot>

    <div class="max-w-lg mx-auto py-6">
        <div class="bg-white shadow rounded-lg p-6">
            <form action="{{ route('admin.tags.update', $tag->slug) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Tag Name:</label>
                    <input type="text"
                           name="name"
                           id="name"
                           value="{{ $tag->name }}"
                           required
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500 px-3 py-2">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex space-x-4">
                    <button type="submit"
                            class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 transition">
                        Update
                    </button>

                    <a href="{{ route('admin.tags.index') }}"
                       class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>


