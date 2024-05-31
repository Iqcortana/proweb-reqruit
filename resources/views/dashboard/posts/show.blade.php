@extends('dashboard/layouts/main')

@section('container')
  <div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-3">{{ $post->title }}</h1>
            {{-- <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>  gadipake ini --}}
            
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" ></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm ('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($post->image)
              <div style="max-height: 400px; display: block; overflow:scroll" class="mt-3">
                <img src="{{ asset('storage/' . $post->image) }}" class="image-fluid" alt="gambar {{ $post->category->name }}">
              </div>
            @else
              <img src="https://source.unsplash.com/1000x400?{{$post->category->name }}" class="image-fluid mt-3" alt="gambar {{ $post->category->name }}">
            @endif
            <article class="fs-5">
                {{--  {{ $post->body }} gapake tag karena tag sdh include didalam body, tapi gbisa dipake karena blade ini escape tag html --}}
                {!! $post->body !!}
                {{-- diatas adalah pengganti blade kalau ada tag html didalam datanya --}}
            </article>
        </div>
    </div>
  </div>

@endsection