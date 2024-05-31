@extends('layouts/main')

@section('container')
    <h1>Post Categories : {{ $category }}</h1> {{--  $category adalah param di routes web --}}

    @foreach ($posts as $post)
        <article class="mb-3">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection