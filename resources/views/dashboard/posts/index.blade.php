@extends('dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 block">My Posts</h1>
  </div>

  @if(session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
      {{ session('success') }}
    </div>
  @endif

  @if(session()->has('deleted'))
    <div class="alert alert-danger col-lg-12" role="alert">
      {{ session('deleted') }}
    </div>
  @endif

  @if(session()->has('updated'))
    <div class="alert alert-primary col-lg-12" role="alert">
      {{ session('updated') }}
    </div>
  @endif

  <a href="/dashboard/posts/create" class="btn btn-primary my-3" type="button">Create new post</a>

  <div class="table-responsive">
    <table class="table table-striped col-lg-12">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td> {{-- fungsi untuk perulangan $loop --}}
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye" ></span></a> {{-- href jalan karena di model ada getRouteKey --}}
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit" ></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm ('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
  </div>

@endsection