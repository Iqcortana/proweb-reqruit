@extends('dashboard/layouts/main')

@section('container')
<div class="table-responsive">
  <table class="table table-striped col-lg-12">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Job Type</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($contact as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->name }}</td>
          <td>{{ $post->email }}</td>
          <td>{{ $post->call }}</td>
          <td>{{ $post->radio }}</td>
          <td>{{ $post->message }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection