@extends('dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 block">Add New Admin</h1>
  </div>

  @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

  @if(session()->has('deleted'))
    <div class="alert alert-danger col-lg-8" role="alert">
      {{ session('deleted') }}
    </div>
  @endif

  @if(session()->has('updated'))
    <div class="alert alert-primary col-lg-8" role="alert">
      {{ session('updated') }}
    </div>
  @endif

  <a href="/dashboard/add-admin/create" class="btn btn-primary my-3" type="button">Add New Admin</a>

  <div class="table-responsive">
    <table class="table table-striped col-lg-12">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email Address</th>
          <th scope="col">Password</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($add_admin as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->username }}</td>
            <td>{{ $post->email }}</td>
            <td>{{ $post->password }}</td>
            <td>
              <a href="/dashboard/add-admin/{{ $post->id }}/edit" class="badge bg-warning"><span data-feather="edit" ></span></a>
              <form action="/dashboard/add-admin/{{ $post->id }}" method="POST" class="d-inline">
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