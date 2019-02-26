<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except('index');
    }


    public function index()
    {
        $books = Book::take(100)->get();

        return view('books/index', compact(['books']));
    }


    public function create()
    {
        return view('books.create');
    }


    public function store(Request $request)
    {
        $book = new Book;

        $book->title = $request->title;
        $book->authors = $request->authors;
        $book->image = $request->image;

        $book->save();

        return redirect(action('BookController@index'));
    }
}
