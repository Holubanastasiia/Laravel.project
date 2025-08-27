<x-app-layout>
    <x-slot name="header">
        <x-header title="Tags list"/>
    </x-slot>

    <ul>
        @foreach ($tags as $tag)
            <li>
                <a href="{{ route('tags.show', $tag->id) }}">
                    {{ $tag->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tags.create') }}">Add new tag</a>
</x-app-layout>
