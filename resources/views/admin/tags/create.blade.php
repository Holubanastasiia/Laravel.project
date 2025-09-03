<x-admin>
    <div class="max-w-lg mx-auto py-6">
        <div class="bg-white shadow rounded-lg p-6">
            <form action="{{ route('admin.tags.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Tag Name:</label>
                    <input type="text"
                           name="name"
                           id="name"
                           required
                           class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500 px-3 py-2">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field grouped">
                    <div class="control">
                        <button type="submit"
                                class="button green">
                            Add
                        </button>
                    </div>
                    <div class="control">
                        <a href="{{ route('admin.tags.index') }}"
                           class="button red">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin>

