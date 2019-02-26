@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>My private profile</h1>
        <h1>{{ $user->id }}</h1>
        <h3>{{ $user->password }}</h3>
        <h3>{{ bcrypt('secret') }}</h3>
        <h3>{{ bcrypt('secret') }}</h3>
        <h3>{{ bcrypt('secret') }}</h3>
        <h3>{{ bcrypt('secret') }}</h3>
        <h3>{{ bcrypt('secret') }}</h3>
        <h2>{{ $user->name }}</h2>
        <h3>{{ $user->email }}</h3>
    </div>

@endsection