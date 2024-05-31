@extends('layouts/main')

@section('container')
    <h1>Post User</h1>
    @foreach ($authors as $author)
    <ul>
        <li>
            <h2><a href="/authors/{{ $author->username }}">{{ $author->name }}</a></h2>
        </li>
    </ul>    
    @endforeach

@endsection