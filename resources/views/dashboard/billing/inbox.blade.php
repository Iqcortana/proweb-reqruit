@extends('dashboard/layouts/main')

@section('container')
<div class="table-responsive">
  <h2>Tabel Pemesanan</h2>
  <table class="table table-striped col-lg-12">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Business Location</th>
        <th scope="col">UI UX</th>
        <th scope="col">Web Dev</th>
        <th scope="col">Dig. Marketing</th>
        <th scope="col">Content Writing</th>
        <th scope="col">Branding & Identity</th>
        <th scope="col" colspan="2">Total Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->name }}</td>
          <td>{{ $post->email }}</td>
          <td>{{ $post->phone }}</td>
          <td>{{ $post->location }}</td>
          <td>{{ $post->uiux }}</td>
          <td>{{ $post->webdevelopment }}</td>
          <td>{{ $post->digitalmarketing }}</td>
          <td>{{ $post->contentwriting }}</td>
          <td>{{ $post->brandingidentity }}</td>
          <td colspan="2">Rp {{ number_format($post->price, 0, ',', '.') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="table-responsive">
  <h2>Tabel Bukti Pembayaran</h2>
  <table class="table table-striped col-lg-12">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Picture of Payments</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($inboxes as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->name }}</td>
          <td><img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->name }}'s Payments Picture" class="rounded-circle" width="50" height="50"></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection