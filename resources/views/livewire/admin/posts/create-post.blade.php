<div>
    <form wire:submit="save">
        <input type="text" wire:model="title" class="input">
        <div>
            @error('title') <span class="error red text-xs">{{ $message }}</span> @enderror
        </div>
        <input type="text" wire:model="content" class="input">
        <div>
            @error('content') <span class="error red text-xs">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="button blue">Save</button>
    </form>
</div>
