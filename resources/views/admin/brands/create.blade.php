<x-admin>
    <div class="max-w-lg mx-auto py-6">
        <div class="bg-white shadow rounded-lg p-6">
            <form action="{{ route('admin.brands.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Brand Name:</label>
                    <input type="text"
                           name="name"
                           id="name"
                           required
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500 px-3 py-2">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Brand Description:</label>
                    <textarea
                           name="description"
                           id="description"
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500 px-3 py-2"></textarea>
                    @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex space-x-4">
                    <button type="submit"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
                        Add
                    </button>

                    <a href="{{ route('admin.brands.index') }}"
                       class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-admin>
