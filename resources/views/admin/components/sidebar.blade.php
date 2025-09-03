<aside class="w-64 bg-white border-r min-h-screen p-4">
    <h2 class="text-xl font-bold mb-4">Admin</h2>
    <ul>
        <li class="mb-2">
            <a href="{{ route('admin.brands.index') }}" class="text-blue-600 hover:underline">Brands</a>
        </li>
        <li class="mb-2">
            <a href="{{ route('admin.categories.index') }}" class="text-blue-600 hover:underline">Categories</a>
        </li>
        <li class="mb-2">
            <a href="{{ route('admin.tags.index') }}" class="text-blue-600 hover:underline">Tags</a>
        </li>
    </ul>
</aside>
