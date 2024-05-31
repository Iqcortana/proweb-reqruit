@extends('layouts/main')

@section('container')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>{{ $post->title }}</h1>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                
                <img src="https://source.unsplash.com/1000x400?{{ $post->category->name }}" class="card-img-top my-2" alt="gambar {{ $post->category->name }}">

                <article class="fs-5">
                    {{--  {{ $post->body }} gapake tag karena tag sdh include didalam body, tapi gbisa dipake karena blade ini escape tag html --}}
                    {!! $post->body !!}
                    {{-- diatas adalah pengganti blade kalau ada tag html didalam datanya --}}
                </article>
            </div>
        </div>
    </div>

@endsection
