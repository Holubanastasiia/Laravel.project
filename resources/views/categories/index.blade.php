<x-app-layout>
    <x-slot name="header">
        <x-header title="Categories list"/>
    </x-slot>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</x-app-layout>

