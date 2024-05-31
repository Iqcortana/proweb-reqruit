@extends('layouts/main')

@section('container')
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h1>Reqruit</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="/">Home</a></li>
              <li class="scroll-to-section"><a href="/posts">Blog</a></li>
              <li class="scroll-to-section"><a href="/contact" class="active">Contact</a></li>
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
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h2>Silahkan Hubungi kami kapan saja!</h2>
            <h5>Atur Jadwal Meeting anda dengan kami disini :</h5><br>
            <h6><a href="https://calendly.com/faiq-id2017/30min" class="mt-5">Calendly.com</a></h6>
            <p>Mengatur jadwal meeting anda menggunakan calendly.com tentu saja akan sangat memudahkan kedua belah pihak, sehingga rapat akan terlaksana sesuai jadwal yang sudah ditentukan. </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="/contact/store" method="post">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Nama anda" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Emailanda@email.com" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="call" id="call" placeholder="Nomor Telepon anda" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <div class="custom-radio">
                      <input type="radio" id="freelance" name="radio" value="freelance">
                      <label for="freelance">Freelance</label>
                      <input type="radio" id="team" name="radio" value="team">
                      <label for="team">Team</label>
                      <input type="radio" id="business" name="radio" value="business">
                      <label for="business">Business</label>
                    </div>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Masukkan Penawaran anda"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Berikan Penawaran!</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast Container for notifications -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    @if(session('success'))
      <div id="liveToast" class="toast show text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto text-success">Success</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          {{ session('success') }}
        </div>
      </div>
    @endif

    @if($errors->any())
      <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">Error</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif
  </div>
  
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Initialize Toasts -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var toastElList = [].slice.call(document.querySelectorAll('.toast'))
      var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, { delay: 3000 })
      });
      toastList.forEach(toast => toast.show());
    });
  </script>
@endsection