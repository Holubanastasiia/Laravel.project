<x-admin>
    <div class="max-w-2xl mx-auto py-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $category->name }}</h1>

            <div class="text-gray-700 mb-2">
                <span class="font-semibold">ID:</span> {{ $category->id }}
            </div>
            <div class="text-gray-700 mb-4">
                <span class="font-semibold">Created at:</span> {{ $category->created_at }}
            </div>


            <div class="field grouped">


                <div class="control">
                    <a href="{{ route('admin.categories.edit', $category->slug) }}"
                       class="button green">
                        Edit this category
                    </a>
                </div>
                <div class="control">
                    <a href="{{ route('admin.categories.index') }}"
                       class="button blue">
                        Back to list
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin>
