<h1>Categories</h1>
<ul>
    @foreach ($categories as $category)
        <li>{{ $category->name }} - Created at: {{ $category->created_at }}</li>
    @endforeach
</ul>
