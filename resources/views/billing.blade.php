@extends('layouts.main')

@section('container')
<style>
    #contact-form input {
        height: 38px; /* Sesuaikan tinggi sesuai kebutuhan Anda */
    }
</style>

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
              <li class="scroll-to-section"><a href="/posts">Blog</a></li>
              <li class="scroll-to-section"><a href="/contact">Contact</a></li>
            </ul>
            <a class="menu-trigger">
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="header-text">
    <!-- Header text content here -->
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <div class="accordion" id="paymentAccordion">
                <!-- Accordion Item for Bank Mandiri -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="bankMandiri">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBankMandiri" aria-expanded="true" aria-controls="collapseBankMandiri">
                      Bank Mandiri
                    </button>
                  </h2>
                  <div id="collapseBankMandiri" class="accordion-collapse collapse show" aria-labelledby="bankMandiri" data-bs-parent="#paymentAccordion">
                    <div class="accordion-body">
                        <p>Informasi pembayaran untuk Virtual Account Bank Mandiri di sini.</p>
                        <p>Nomor Virtual Account: 1234567890</p>
                        <p>Nama Penerima: PT REQRUIT IT SOLUTION</p>                
                    </div>
                  </div>
                </div>
              
                <!-- Accordion Item for Bank BCA -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="bankBCA">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBankBCA" aria-expanded="false" aria-controls="collapseBankBCA">
                      Bank BCA
                    </button>
                  </h2>
                  <div id="collapseBankBCA" class="accordion-collapse collapse" aria-labelledby="bankBCA" data-bs-parent="#paymentAccordion">
                    <div class="accordion-body">
                        <p>Informasi pembayaran untuk Virtual Account Bank BCA di sini.</p>
                        <p>Nomor Virtual Account: 1234567890</p>
                        <p>Nama Penerima: PT REQRUIT IT SOLUTION</p>
                    </div>
                  </div>
                </div>

                <!-- Accordion Item for Bank BRI -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="bankBRI">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBankBRI" aria-expanded="false" aria-controls="collapseBankBRI">
                      Bank BRI
                    </button>
                  </h2>
                  <div id="collapseBankBRI" class="accordion-collapse collapse" aria-labelledby="bankBRI" data-bs-parent="#paymentAccordion">
                    <div class="accordion-body">
                        <p>Informasi pembayaran untuk Virtual Account Bank BRI di sini.</p>
                        <p>Nomor Virtual Account: 1234567890</p>
                        <p>Nama Penerima: PT REQRUIT IT SOLUTION</p>
                    </div>
                  </div>
                </div>

                <!-- Accordion Item for Bank BNI -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="bankBNI">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBankBNI" aria-expanded="false" aria-controls="collapseBankBNI">
                      Bank BNI
                    </button>
                  </h2>
                  <div id="collapseBankBNI" class="accordion-collapse collapse" aria-labelledby="bankBNI" data-bs-parent="#paymentAccordion">
                    <div class="accordion-body">
                        <p>Informasi pembayaran untuk Virtual Account Bank BNI di sini.</p>
                        <p>Nomor Virtual Account: 1234567890</p>
                        <p>Nama Penerima: PT REQRUIT IT SOLUTION</p>
                    </div>
                  </div>
                </div>
              </div>          
            </div>
        </div>

        <div class="col-lg-6">
          <div class="contact-us-content">
            <form action="/services/billing/store" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group my-2">
                    <label for="name" class="text-white">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
                  </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group my-2">
                      <label for="photo" class="text-white">Upload Payment Proof:</label>
                      <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required multiple>
                      <small class="form-text text-white mt-2">Accepted formats: JPG, PNG, GIF. Max file size: 5MB.</small>
                    </div>
                </div>
                <div class="col-lg-12">
                  <button type="submit" id="form-submit" class="btn btn-info">Send</button>
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
