@extends('dashboard/layouts/main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 block">Add New Team Members</h1>
  </div>

  <div class="col-md-12">
    <form method="POST" action="/dashboard/add-team" class="mb-5" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="image" class="form-label">Profile Picture</label>
        <img alt="preview image" class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="job_position" class="form-label">Job Position</label>
        <input type="text" class="form-control @error('job_position') is-invalid @enderror" id="job_position" name="job_position" value="{{ old('job_position') }}" required>
        @error('job_position')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Add Teams</button>
    </form>
  </div>

  <script>

    // mematikan fungsi tombol "attach file"
    document.addEvenListener("trix-file-accept", function(e) {
      e.preventDefault();
    })

    // image preview
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
  
  </script>
@endsection