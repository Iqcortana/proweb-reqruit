@extends('dashboard/layouts/main')

@section('container')
<style>
  .profile-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
    width: 300px;
  }
  .profile-card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-bottom: 20px;
  }
  .profile-card .title {
    color: #6c63ff;
    font-size: 1.1em;
    margin-bottom: 10px;
  }
  .profile-card .name {
    color: #333;
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 20px;
  }
  .profile-card .social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
  }
  .profile-card .social-icons a {
    color: #fff;
    background: #6c63ff;
    border-radius: 50%;
    padding: 10px;
    display: inline-block;
    text-decoration: none;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background 0.3s;
  }
  .profile-card .social-icons a:hover {
    background: #5753d3;
  }
</style>

  <div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-3">{{ $add_team->name }}</h1>
            <a href="/dashboard/add-team" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my Teams</a>
            <a href="/dashboard/add-team/{{ $add_team->id }}/edit" class="btn btn-warning"><span data-feather="edit" ></span> Edit</a>
            <form action="/dashboard/add-team/{{ $add_team->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm ('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            <div class="profile-card">
              <img src="{{ asset('storage/' . $add_team->image) }}" alt="{{ $add_team->name }}">
              <div class="title">{{ $add_team->job_position }}</div>
              <div class="name">{{ $add_team->name }}</div>
              <div class="social-icons">
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div> 
        </div>
    </div>
  </div>

@endsection