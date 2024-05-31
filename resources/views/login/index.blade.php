<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Contact</title>
  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="/assets/css/fontawesome.css">
  <link rel="stylesheet" href="/assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="/assets/css/owl.css">
  <link rel="stylesheet" href="/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="/assets/css/custom-radio.css">
</head>

<body>
    <div class="header-text">
    </div>

    <div class="contact-us section" id="contact">
    <div class="container">
        <div class="row">
        <div class="col-lg-6  align-self-center">
            <div class="section-heading">
            <h2>Login Sebagai Admin</h2>
            <h5>Belum Terdaftar?<a href="https://wa.me/6281255170023"> Contact Admin!</a></h5><br>
            <h6>Atur Jadwal Pertemuan dengan Admin? <a href="https://calendly.com/faiq-id2017/30min" class="mt-5">Calendly.com</a></h6>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact-us-content">
            <form id="contact-form" action="/login" method="post">
                @csrf
                <div class="row">
                <div class="col-lg-12">
                    <fieldset>
                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Emailanda@email.com" value="{{ old('email') }}" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                    <input type="password" name="password" id="password" required>
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Login</button>
                    </fieldset>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                @if(session()->has('success')) 
                    <div class="alert alert-success alert-dismissible show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('loginError')) 
                    <div class="alert alert-danger alert-dismissible show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="form-login" action="/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal text-center">Admin Login</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email" value="{{ old('username') }}">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                    <button class="btn btn-lg btn-danger w-100" type="submit">Login</button>
                </form>
                <small>You're not registered?<a href="https://wa.me/6281255170023">Contact Admin!</a></small>
            </div>
        </div>
    </div> --}}
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/isotope.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/counter.js"></script>
  <script src="/assets/js/custom.js"></script>

</body>

</html>
