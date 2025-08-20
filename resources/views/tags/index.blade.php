<x-app-layout>
    <x-slot name="header">
        <x-header title="tags list"/>
    </x-slot>
    <ul>
        @foreach ($tags as $tag)
            <li>
                <a href="{{ route('categories.show', $tag->id) }}">
                    {{ $tag->name }}
                </a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
