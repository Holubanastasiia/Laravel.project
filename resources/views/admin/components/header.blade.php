<header class="bg-white border-b p-4 flex justify-between items-center">
    <h1 class="text-2xl font-semibold">@yield('title')</h1>
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-600 hover:underline">Logout</button>
        </form>
    </div>
</header>
