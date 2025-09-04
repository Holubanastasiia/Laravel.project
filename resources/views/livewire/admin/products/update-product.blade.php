<div class="max-w-2xl mx-auto p-6 bg-white shadow rounded-lg">
    <h2 class="text-xl font-bold mb-4">Edit product</h2>

    @if (session()->has('success'))
        <div class="p-2 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="save" class="space-y-4">
        <div>
            <label class="block font-medium">Product Name</label>
            <input type="text" wire:model="form.name"
                   class="w-full border rounded p-2" />
            @error('form.name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Price</label>
            <input type="text" wire:model="form.price"
                   class="w-full border rounded p-2" />
            @error('form.price') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Description</label>
            <textarea wire:model="form.description" rows="5" class="w-full border rounded p-2"></textarea>
            @error('form.description') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Status</label>
            <select wire:model="form.status" class="w-full border rounded p-2">
                @foreach($productStatus as $status)
                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                @endforeach
            </select>
            @error('form.status') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit"
                class="button bg-blue-600 px-4 py-2 rounded hover:bg-blue-700">
            Save
        </button>
    </form>
</div>
