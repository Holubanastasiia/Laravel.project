<div>
    <form wire:submit="save">
        <label for="product_name">Product</label>
        <input type="text" name="product_name" wire:model="name">
        <div>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <label for="price">Enter price</label>
        <input type="text" name="price" wire:model="price">
        <div>
            @error('price') <span class="error">{{ $message }}</span> @enderror
        </div>
        <label for="description"> Description</label>
        <input type="text" name="description" wire:model="description">
        <div>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <fieldset>
            <legend>Select a status:</legend>
            @foreach ($productStatus as $item)
                <div>
                    <input type="radio" id="id{{ $item }}" wire:model="status" value="{{ $item->value }}" />
                    <label for="huey">{{ $item->name }}</label>
                </div>
            @endforeach
        </fieldset>

        <button type="submit" >Save</button>
    </form>
</div>
