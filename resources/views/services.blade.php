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
                    <!-- ***** Serach Start ***** -->
                    <!-- <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div> -->
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
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
            <div class="col-lg-12 text-center">
              <div class="section-heading">
                <h2>Form Services</h2>
              </div>
            </div>
        </div>
        <form action="/services/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone (WhatsApp)</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Your Business Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input service-checkbox" type="checkbox" value="1" id="uiux" name="uiux" data-price="1100000">
                    <label class="form-check-label" for="uiux">
                        UI/UX
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input service-checkbox" type="checkbox" value="1" id="webdevelopment" name="webdevelopment" data-price="5000000" checked>
                    <label class="form-check-label" for="webdevelopment">
                        Web Development
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input service-checkbox" type="checkbox" value="1" id="digitalmarketing" name="digitalmarketing" data-price="3000000" checked>
                    <label class="form-check-label" for="digitalmarketing">
                        Digital Marketing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input service-checkbox" type="checkbox" value="1" id="contentwriting" name="contentwriting" data-price="800000" checked>
                    <label class="form-check-label" for="contentwriting">
                        Content Writing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input service-checkbox" type="checkbox" value="1" id="brandingidentity" name="brandingidentity" data-price="1500000" checked>
                    <label class="form-check-label" for="brandingidentity">
                        Branding & Identity
                    </label>
                </div>
            </div>    
            <div class="mb-3">
                <label for="price" class="form-label">Total Price : </label>
                <input class="form-control" type="text" id="price" placeholder="Disabled input" readonly>
                <input type="hidden" id="hiddenPrice" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function formatRupiah(angka) {
            var number_string = angka.toString();
            var sisa = number_string.length % 3;
            var rupiah = number_string.substr(0, sisa);
            var ribuan = number_string.substr(sisa).match(/\d{3}/g);

            if (ribuan) {
                var separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            return 'Rp ' + rupiah;
        }

        function calculateTotalPrice() {
            var total = 0;
            $('.service-checkbox:checked').each(function() {
                total += parseInt($(this).data('price'));
            });
            var formattedPrice = formatRupiah(total);
            $('#price').val(formattedPrice);
            $('#hiddenPrice').val(total);
        }

        $('.service-checkbox').change(function() {
            calculateTotalPrice();
        });

        // Initialize total price on page load
        calculateTotalPrice();
    });
</script>
@endsection