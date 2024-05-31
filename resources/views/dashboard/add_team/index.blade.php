@extends('dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 block">My Teams</h1>
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

  <a href="/dashboard/add-team/create" class="btn btn-primary my-3" type="button">Add New Team's Member</a>

  <div class="table-responsive">
    <table class="table table-striped col-lg-12">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Profile Picture</th>
          <th scope="col">Name</th>
          <th scope="col">Job Position</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($add_team as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}'s Profile Picture" class="rounded-circle" width="50" height="50"></td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->job_position }}</td>
            <td>
              <a href="/dashboard/add-team/{{ $post->id }}" class="badge bg-info"><span data-feather="eye" ></span></a>
              <a href="/dashboard/add-team/{{ $post->id }}/edit" class="badge bg-warning"><span data-feather="edit" ></span></a>
              <form action="/dashboard/add-team/{{ $post->id }}" method="POST" class="d-inline">
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