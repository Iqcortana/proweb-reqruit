@extends('layouts/main')

@section('container')
    <h1>Post Categories</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-white">
                            <img src="https://source.unsplash.com/500x350?{{ $category->name }}" class="card-img" alt="gambar {{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill my-2 p-4 fs-3" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- @foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>    
    @endforeach --}}

@endsection