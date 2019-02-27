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

            @if($book->publisher)
                <p>Publisher: {{ $book->publisher->name }}</p>
            @endif


            @if($book->bookshops->count() > 0)
                <p>
                    Book is available at these shops:
                    <ul>
                        @foreach($book->bookshops as $shop)
                            <li>{{ $shop->name }}</li>
                        @endforeach
                    </ul>
                </p>
            @else
                <p>This book is not available :(</p>
            @endif


        </div>
        <hr>
    @endforeach
</div>
</body>
</html>
