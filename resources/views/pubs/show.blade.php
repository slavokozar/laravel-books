<h1>{{ $pub->name }}</h1>

<ul>
    @foreach($pub->books as $book)
        <li>{{ $book->title }}</li>
    @endforeach
</ul>