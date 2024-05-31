@extends('layouts/main')

@section('container')
    <h1>Post Authors : {{ $author }}</h1> {{--  $user adalah param di routes web --}}

    @foreach ($posts as $post)
        <article class="mb-3">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            {!! $post->body !!}
        </article>
    @endforeach

@endsection