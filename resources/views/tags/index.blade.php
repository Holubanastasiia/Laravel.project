<h1>Tags</h1>
<ul>
    @foreach ($tags as $tag)
        <li>{{ $tag->name }} - Created at: {{ $tag->created_at }}</li>
    @endforeach
</ul>
