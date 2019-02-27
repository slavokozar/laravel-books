@extends('layouts.app')


@section('content')
    <div class="container">


        <form method="post" action="{{ action('BookController@store') }}">

            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Authors</label>
                <input type="text" name="authors" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label>Publisher</label>
                <select name="publisher_id" class="form-control">
                    @foreach($publishers as $publisher)
                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Bookshops</label>
                <select name="bookshops_id[]" class="form-control" multiple>

                    @foreach($bookshops as $shop)
                        <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                    @endforeach

                </select>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection