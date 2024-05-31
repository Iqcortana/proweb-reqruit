@extends('layouts/main')

@section('container')
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <h1>Reqruit</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="/">Home</a></li>
              <li class="scroll-to-section"><a href="/posts" class="active">Blog</a></li>
              <li class="scroll-to-section"><a href="/contact">Contact</a></li>
            </ul>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div class="header-text">
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <h1 class="mb-3 text-center">{{ $title }}</h1>

      <div class="row justify-content-center">
          <div class="col-md-6">
              <form action="/posts" method="get">
                  @if (request('category'))
                  <input type="hidden" name="category" value="{{ request('category') }}">
                  @endif
                  @if (request('author'))
                  <input type="hidden" name="author" value="{{ request('author') }}">
                  @endif
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="search.." name="search" value="{{ request('search') }}">
                      <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                      </svg></button>
                  </div>
              </form>
          </div>
      </div>

      @if ($posts->count())
          <div class="card mb-3">
              @if ($posts[0]->image)
                  <div style="max-height: 400px; max-width:600px; display: block; overflow: hidden">
                      <img src="{{ asset('storage/' . $posts[0]->image) }}" class="image-fluid" alt="gambar {{ $posts[0]->category->name }}">
                  </div>
              @else
                  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="gambar {{ $posts[0]->category->name }}">
              @endif
              <div class="card-body text-center">
                  <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
                  <p>
                      <small class="text-muted">
                          By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                      </small>
                  </p>
                  <p class="card-text">{{ $posts[0]->excerpt }}</p>
                  <a class="btn btn-primary" href="/posts/{{ $posts[0]->slug }}" role="button">Read More</a>
              </div>
          </div>

          <div class="container">
              <div class="row">
                  @foreach ($posts->skip(1) as $post)
                      <div class="col-md-4 mb-3">
                          <div class="card">
                              <span class="position-absolute badge bg-secondary"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a></span>
                              @if ($post->image)
                                  <img src="{{ asset('storage/' . $post->image) }}" class="
                                  image-fluid card-img-top" style="max-height: 250px" alt="gambar {{ $post->category->name }}">
                              @else
                                  <img src="https://source.unsplash.com/500x350?{{ $post->category->name }}" class="card-img-top" alt="gambar {{ $post->category->name }}">
                              @endif
                              <div class="card-body">
                                  <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h2>
                                  <p>
                                      <small class="text-muted">
                                          @if ($post->author)
                                              By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                          @else
                                              <span class="text-decoration-none">Unknown Author</span>
                                          @endif
                                      </small>
                                  </p>
                                  <p class="card-text">{{ $post->excerpt }}</p>
                                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Baca</a>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>

      @else
          <p class="fs-4 text-center">Posts Not Found.</p>
      @endif
      {{ $posts->links() }}
    </div>
  </div>
  {{-- @if ($posts->count())
    <section class="section Services" id="Posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-heading">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row event_box">
          @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="events_item">
                <div class="thumb">
                  <a href="/posts/{{ $post->slug }}">
                    @if ($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" style="max-height: 250px; width: 100%; object-fit: cover;" alt="gambar {{ $post->category->name }}">
                    @else
                      <img src="https://source.unsplash.com/500x350?{{ $post->category->name }}" style="max-height: 250px; width: 100%; object-fit: cover;" alt="gambar {{ $post->category->name }}">
                    @endif
                  </a>
                  <span class="price">
                    <h6><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a></h6>
                  </span>
                </div>
                <div class="down-content">
                  <h4><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h4>
                  <small class="text-muted">
                    @if ($post->author)
                        By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    @else
                        <span class="text-decoration-none">Unknown Author</span>
                    @endif
                  </small>
                  <p>{{ $post->excerpt }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @else
    <p class="fs-4 text-center">Posts Not Found.</p>
  @endif --}}
  
  
  @endsection