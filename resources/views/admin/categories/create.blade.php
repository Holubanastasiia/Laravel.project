<x-admin>
    <x-slot name="breadcrumb">
        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>{{ $breadcrumb }}</li>
                </ul>
                <a href="{{ route('admin.categories.index') }}" class="button blue">
                    <span>All categories</span>
                </a>

            </div>
        </section>
    </x-slot>
    <div class="max-w-lg mx-auto py-6">
        <div class="bg-white shadow rounded-lg p-6">
            <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Category Name:</label>
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
                        <a href="{{ route('admin.categories.index') }}"
                           class="button red">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin>
