@extends('layouts/main')

@section('container')
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="/" class="logo">
                          <h1>REQRUIT</h1>
                      </a>
                      <!-- ***** Logo End ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#aboutus">About Us</a></li>
                          <li class="scroll-to-section"><a href="#Services">Services</a></li>
                          <li class="scroll-to-section"><a href="#team">Team</a></li>
                          <li class="scroll-to-section"><a href="/posts">Blog</a></li>
                          <li class="scroll-to-section"><a href="/testimonial">Branding</a></li>
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
  
    <div class="main-banner" id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-banner">
              <div class="item item-1">
                <div class="header-text">
                  <span class="category">Our Facts</span>
                  <h2>"With Reqruit , Everything Is Easier"</h2>
                  <p>Start-Up digital yang bisa membantu anda sebagai pelaku usaha untuk mengembangkan bisnis anda menjadi lebih luas lagi</p>
                  <div class="buttons">
                  </div>
                </div>
              </div>
              <div class="item item-3">
                <div class="header-text">
                  <span class="category">Marketing</span>
                  <h2>"The start-up that can help you every time."</h2>
                  <p>Kami selalu sedia kapanpun dan dimanapun secara maksimal untuk anda!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="section about-us" id="aboutus">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Dari mana kita memulainya ?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Kita memulai dari sebuah tim kecil yang ingin membantu para pemilik usaha yang kesulitan dalam mengembangkan usaha mereka. Hingga saat ini kami telah membantu banyak orang dalam mengembangkan usahanya dan kami juga memutuskan untuk membuat start-up dari tim kecil kami.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Bagaimana kami dapat bekerja sama dengan anda ?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Tidak perlu prosedur yang rumit, anda hanya mengunjungi website kami dan memilih layanan bantuan yang anda inginkan, tim kami akan langsung menghubungi anda lebih lanjut. Atau anda bisa menghubungi kontak yang tersedia disini.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Mengapa Reqruit yang terbaik ?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Kami memberikan layanan dengan kualitas terbaik tanpa harus mengeluarkan biaya yang berlebih. Layanan yang kami berikan juga langsung ditangani oleh orang-orang professional dalam bidangnya.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Apakah kami mendapat dukungan terbaik?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Tentu, tim kami terdiri dari orang-orang professional bersertifikat yang pasti akan memberikan layanan terbaik untuk kebutuhan anda.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <div class="section-heading">
              <h6>About Us</h6>
              <h2>Apa yang membuat kita sebagai Start Up terbaik <</h2>
              <p>Kami memberikan bantuan untuk meningkatkan kualitas bisnis yang anda kembangkan, tentunya bantuan yang kami berikan sudah melewati berbagai pengujian dan sudah dipercaya oleh banyak pemilik usaha.</p>
              <div class="main-button">
                <a href="#">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <section class="section Services" id="Services" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-heading">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row" style="justify-content: center">
          <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <a href="/services/uiux">
              <div class="events_item">
                <div class="thumb">
                  <img src="/assets/images/uiux.png" alt="">
                  <!-- <span class="category">Webdesign</span> -->
                  
                </div>
                <div class="down-content">
                  <h4>UI/UX Design</h4>
                  <p>Kami menyediakan layanan ini sebagai gambaran anda apabila ingin mengembangkan atau membuat website anda lebih menarik</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
            <a href="/services/digitalmarketing">
              <div class="events_item">
                <div class="thumb">
                  <img src="/assets/images/digmart.png" alt="">
                  <!-- <span class="category">Development</span> -->
                  <span class="price"><h6><em>Disc.%</em></h6></span>
                </div>
                <div class="down-content">
                  <h4>Digital Marketing</h4>
                  <p>Kami menyediakan layanan ini untuk menyebarkan pemasaran dan promosi merk dan produk anda menggunakan media digital.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
            <a href="/services/contentwriting">
              <div class="events_item">
                <div class="thumb">
                  <img src="/assets/images/cont.png" alt="">
                  <!-- <span class="category">Wordpress</span> -->
                  
                </div>
                <div class="down-content">
                  <!-- <span class="author">Content Writing</span> -->
                  <h4>Content Writing</h4>
                  <p>Kami menyediakan layanan ini untuk meningkatkan engagement dan interaksi masyarakat terhadap konten bisnis anda, Sehingga produk anda akan dikenal luas</p>
    
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
            <a href="/services/webdevelopment">
              <div class="events_item">
                <div class="thumb">
                  <img src="/assets/images/webdev.png" alt="">
                  <!-- <span class="category">Development</span> -->
                  
                </div>
                <div class="down-content">
                  <h4>Web Development</h4>
                  <p>Kami menyediakan layanan ini untuk para perintis usaha dengan membuat website dari merk atau produk masing-masing agar lebih dikenal oleh masyarakat luas.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 webdesign">
            <a href="/services/brandingidentity">
              <div class="events_item">
                <div class="thumb">
                  <img src="/assets/images/brandy.png" alt="">
                  <!-- <span class="category">Webdesign</span> -->
                  <span class="price"><h6><em>Baru!</em></h6></span>
                </div>
                <div class="down-content">
                  <h4>Branding & Identity</h4>
                  <p>Kami menyediakan layanan ini untuk memberikan identisas pada merk atau produk anda sehingga dapat membantu anda membedakan brand anda dari pesaing.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <div class="team section" id="team">
      <div class="container">
        <div class="row" style="justify-content: center">
          @foreach ($add_team as $team)
            <div class="col-lg-3 col-md-6">
              <div class="team-member">
                <div class="main-content">
                  <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" style=" box-shadow: 0px 0px 10px rgba(0,0,0,0.2); background-color: #86A7FC;">
                  <span class="category">{{ $team->job_position }}</span>
                  <h4>{{ $team->name }}</h4>
                  <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div> 
  
    <div class="section testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="owl-carousel owl-testimonials">
              <div class="item">
                <p>“Start Up yang sangat luar biasa, sangat membantu saya untuk menjalankan bisnis-bisnis baru saya!"</p>
                <div class="author">
                  <img src="/assets/images/marsel.jpg" alt="">
                  <span class="category">Selebgram</span>
                  <h4>Marselino Ferdinand</h4>
                </div>
              </div>
              <div class="item">
                <p>“Gapernah nemu start up sebagus ini untuk meningkatkan engagement ke publik terhadap brand-brand yang gue punya”</p>
                <div class="author">
                  <img src="/assets/images/baqi.jpg" alt="">
                  <span class="category">Pengusaha Muda</span>
                  <h4>Ahmad Baihaqi</h4>
                </div>
              </div>
              <div class="item">
                <p>“Terima kasih Reqruit, sudah membantu meningkatkan usaha saya kepada masyarakat lumayan omset naik drastis”</p>
                <div class="author">
                  <img src="/assets/images/mrv.jpg" alt="">
                  <span class="category">Florist</span>
                  <h4>Marva Zaneta</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <div class="section-heading">
              <h6>TESTIMONIALS</h6>
              <h2>Apa yang mereka katakan tentang kami?</h2>
              <p>Berikut testimoni yang diberikan oleh pelanggan-pelanggan kami!!</p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection