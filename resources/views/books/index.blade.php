<html>
<head>
    <title>books</title>
</head>
<body>
<h1>Books</h1>
<a href="{{ action('BookController@create') }}">Create</a>
<div id="books">

    @foreach($books as $book)
        <div class="book">
            <img style="height:100px;" src="{{ $book->image }}" alt="title"/>
            <a href="{{ action('BookController@edit', $book->id) }}">Edit</a>
            <h2>{{ $book->title }}</h2>
            <h3>{{ $book->authors }}</h3>
        </div>
    @endforeach
</div>
</body>
</html>
