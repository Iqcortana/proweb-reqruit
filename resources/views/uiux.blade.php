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
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="/">Home</a></li>
                      <li class="scroll-to-section"><a href="/posts">Blog</a></li>
                      <li class="scroll-to-section"><a href="/contact">Contact</a></li>
                    </ul>   
                    <a class='menu-trigger'>
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
  </div>
      

  <div class="section testimonials">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 align-self-center">
            <div class="section-heading text-center"> <!-- Menambahkan kelas text-center -->
                <h1>Jasa UI/UX Terbaik di Indonesia</h1>
                <img src="/assets/images/uiux.png" alt="UI/UX Image" class="img-fluid mt-4">
                <p class="text-center">Kami menyediakan jasa UI/UX terbaik di Indonesia dengan fokus pada pengalaman pengguna yang maksimal dan desain antarmuka yang intuitif.</p>
                <div class="main-button text-center mt-5"> <!-- Menambahkan kelas text-center -->
                    <a href="/services">Pesan Sekarang!</a>
                </div>
            
                <main class="container my-5">
                    <section class="mb-5">
                        <h2 class="text-center">Fitur yang Ditawarkan</h2>
                        <div class="row text-center">
                            <div class="col-md-4 mb-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <i class="bi bi-phone-fill h1 text-primary"></i>
                                        <h4 class="card-title">Desain Responsif</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <i class="bi bi-person-fill h1 text-success"></i>
                                        <h4 class="card-title">Penelitian Pengguna</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <i class="bi bi-pencil-fill h1 text-info"></i>
                                        <h4 class="card-title">Prototyping dan Wireframing</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <i class="bi bi-check-circle-fill h1 text-warning"></i>
                                        <h4 class="card-title">Pengujian Usabilitas</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <i class="bi bi-intersect h1 text-danger"></i>
                                        <h4 class="card-title">Desain Interaksi</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <i class="bi bi-brush-fill h1 text-secondary"></i>
                                        <h4 class="card-title">Desain Visual</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2 class="text-center">Benefit</h2>
                        <div class="row text-center justify-content-center">
                            <div class="col-md-4 mb-4">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <i class="bi bi-graph-up h1"></i>
                                        <h4 class="card-title">Meningkatkan Keterlibatan Pengguna</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <i class="bi bi-hand-thumbs-up h1"></i>
                                        <h4 class="card-title">Memperbaiki Kepuasan Pengguna</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <i class="bi bi-cart-fill h1"></i>
                                        <h4 class="card-title">Meningkatkan Konversi Penjualan</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                        <i class="bi bi-currency-dollar h1"></i>
                                        <h4 class="card-title">Mengurangi Biaya Pengembangan</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">
                                        <i class="bi bi-arrow-repeat h1"></i>
                                        <h4 class="card-title">Meningkatkan Retensi Pelanggan</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2 class="text-center">Harga Jasa</h2>
                        <div class="row text-center justify-content-center">
                            <div class="col-md-5 mb-4">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        Paket UI UX
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Rp1.100.000</h3>
                                        <p class="card-text">Fitur dasar untuk startup dan usaha kecil. untuk skala bisnis yang lebih besar bisa menghubungi contact person kami dibawah ini.</p>
                                        <a href="https://wa.me/6281255170023" class="btn btn-primary">Hubungi Kami!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2 class="text-center">Informasi Hukum</h2>
                        <p class="text-center">Hak cipta &copy; 2023 Jasa UI/UX Terbaik di Indonesia. Semua hak dilindungi undang-undang.</p>
                        <p class="text-center">Kami mematuhi semua peraturan dan undang-undang yang berlaku di Indonesia terkait dengan privasi dan perlindungan data pengguna.</p>
                    </section>
                </main>
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection