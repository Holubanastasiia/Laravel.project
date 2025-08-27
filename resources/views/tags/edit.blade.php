<x-app-layout>
    <x-slot name="header">
        <x-header title="Edit tag {{ $tag->name }}"/>
    </x-slot>

    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Tag Name:</label>
            <input type="text" name="name" id="name" value="{{ $tag->name }}" required>
        </div>

        <button type="submit">Update</button>
    </form>
</x-app-layout>

