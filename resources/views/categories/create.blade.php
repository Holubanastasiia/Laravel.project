<x-app-layout>
    <x-slot name="header">
        <x-header title="Create new category"/>
    </x-slot>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Category Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <button type="submit">Add</button>
    </form>
</x-app-layout>
