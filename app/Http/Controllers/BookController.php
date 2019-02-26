<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

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
//        $book = new Book;
//
//        $book->title = $request->title;
//        $book->authors = $request->authors;
//        $book->image = $request->image;
//
//        $book->save();

        $data = $request->all();

        $book = Book::create($data);

        return redirect(action('BookController@index'));
    }


    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }


    public function update($id, Request $request)
    {



        $book = Book::findOrFail($id);


//        $book->title = $request->title;
//        $book->authors = $request->authors;
//        $book->image = $request->image;
//
//        $book->save();

        $data = $request->all();

        $book->update($data);

        return redirect(action('BookController@index'));
    }

}
