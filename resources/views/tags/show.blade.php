<x-app-layout>
    <x-slot name="header">
        <x-header title="{{ $tag->name }}"/>
    </x-slot>
    <h1>{{ $tag->name }}</h1>
    <p>ID: {{ $tag->id }}</p>
    <p>Created at: {{ $tag->created_at }}</p>

    <a href="{{ route('tags.edit', $tag->id) }}">Edit this tag</a>
    <br>
    <a href="{{ route('tags.index') }}">Back to list</a>

</x-app-layout>
