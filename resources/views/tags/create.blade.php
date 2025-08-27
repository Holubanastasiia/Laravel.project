<x-app-layout>
    <x-slot name="header">
        <x-header title="Create new tag"/>
    </x-slot>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Tag Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <button type="submit">Add</button>
    </form>
</x-app-layout>
