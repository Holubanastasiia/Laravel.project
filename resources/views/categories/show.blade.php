<x-app-layout>
    <x-slot name="header">
        <x-header title="{{ $category->name }}"/>
    </x-slot>
    <h1>Name: {{ $category->name }}</h1>
    <p>ID: {{ $category->id }}</p>
    <p>Created at: {{ $category->created_at }}</p>

    <a href="{{ route('categories.edit', $category->id) }}">Edit this category</a>
    <br>
    <a href="{{ route('categories.index') }}">Back to list</a>

</x-app-layout>

