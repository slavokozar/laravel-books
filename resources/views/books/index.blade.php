<html>
<head>
    <title>books</title>
</head>
<body>
<h1>Books</h1>

<div id="books">
    @foreach($books as $book)
        <div class="book">
            <img src="{{ $book->image }}" alt="title"/>
            <h2>{{ $book->title }}</h2>
            <h3>{{ $book->authors }}</h3>
        </div>
    @endforeach
</div>
</body>
</html>
