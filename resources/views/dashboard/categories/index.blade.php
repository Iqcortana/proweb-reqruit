@extends('dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 block">Available Categories</h1>
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

  <div class="table-responsive">
    <table class="table table-striped col-lg-12">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td> {{-- fungsi untuk perulangan $loop --}}
          <td>{{ $category->name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection