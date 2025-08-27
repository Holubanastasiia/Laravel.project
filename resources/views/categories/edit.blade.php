<x-app-layout>
    <x-slot name="header">
        <x-header title="Edit category {{ $category->name }}"/>
    </x-slot>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Category Name:</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}" required>
        </div>

        <button type="submit">Update</button>
    </form>
</x-app-layout>
