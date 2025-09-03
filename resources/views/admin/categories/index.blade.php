<x-admin>
    <x-slot name="breadcrumb">
        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>{{ $breadcrumb }}</li>
                </ul>
                <a href="{{ route("admin.categories.create") }}" class="button blue">
                    <span>Create new</span>
                </a>
                <a href="{{ route("admin.categories.trashed") }}" class="button blue">
                    <span>Trashed categories</span>
                </a>
                {{ $categories->links() }}
            </div>
        </section>
    </x-slot>
    <div class="max-w-4xl mx-auto py-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($categories as $category)
                <div class="border rounded-lg p-4 shadow hover:shadow-lg transition flex flex-row items-center justify-between">
                    <a href="{{ route('admin.categories.show', $category->slug) }}"
                       class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                        {{ $category->name }}
                    </a>
                    <form method="POST" style="display: inline-block;" action="{{ route('admin.categories.destroy', $category->slug) }}">
                        @csrf @method('DELETE')
                        <button type="submit" class="button red">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-admin>

