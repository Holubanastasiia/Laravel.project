<div class="max-w-2xl mx-auto p-6 bg-white shadow rounded-lg">
    <h2 class="text-xl font-bold mb-4">Edit post</h2>

    @if (session()->has('success'))
        <div class="p-2 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="update" class="space-y-4">
        <div>
            <label class="block font-medium">Post Title</label>
            <input type="text" wire:model="title"
                   class="w-full border rounded p-2" />
            @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Slug</label>
            <input type="text" wire:model="slug"
                   class="w-full border rounded p-2" />
            @error('slug') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Content</label>
            <textarea wire:model="content" rows="5" class="w-full border rounded p-2"></textarea>
            @error('content') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Cover</label>
            <input type="file" wire:model="cover" class="w-full border rounded p-2" />
            @if ($post->cover)
                <img src="{{ asset('storage/' . $post->cover) }}" class="mt-2 w-32 rounded">
            @endif
            @error('cover') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center">
            <input type="checkbox" wire:model="published_at" class="mr-2">
            <label>Published</label>
        </div>

        <button type="submit"
                class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700">
            Save
        </button>
    </form>
</div>
