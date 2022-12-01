@extends('siapus.admin_master')
 @section('siapus')

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('siapus/img/slide/slide-1.jpg') }})">
          <div class="container">
            <h2>Selamat Datang di <span>SI APUS</span></h2>
            <p>SI APUS merupakan Sistem Antrean Puskesmas Banyuwangi</p>
            <p>DENGAN SI APUS KE PUSKESMAS JADI MULUS</p>
            <a href="#about" class="btn-get-started scrollto">Pendaftaran Antrean</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('siapus/img/slide/slide-2.jpg') }})">
          <div class="container">
            <h2>Selamat Datang di <span>SI APUS</span></h2>
            <p>SI APUS merupakan Sistem Antrean Puskesmas Banyuwangi</p>
            <p>DENGAN SI APUS KE PUSKESMAS JADI MULUS</p>
            <a href="#about" class="btn-get-started scrollto">Pendaftaran Antrean</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{asset('siapus/img/slide/slide-0.jpg') }})">
          <div class="container">
            <h2>Selamat Datang di <span>SI APUS</span></h2>
            <p>SI APUS merupakan Sistem Antrean Puskesmas Banyuwangi</p>
            <p>DENGAN SI APUS KE PUSKESMAS JADI MULUS</p>
            <a href="#about" class="btn-get-started scrollto">Pendaftaran Antrean</a>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= infoPus Section ======= -->
    <section id="infoPus" class="infoPus">
      <div class="container-fluid container-lg mt-5" data-aos="fade-up">
        <div class="section-title">
          <h2>Informasi Puskesmas</h2>
        </div>
        <div class="row g-5">
          <!-- <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first"> -->
            <!-- <h3>Alias sunt quas <em>Cupiditate</em> oluptas hic minima</h3>
              <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </p>
              <a class="cta-btn align-self-start" href="#">Call To Action</a> -->
            <div class="row d-flex">

              <div class="col-md-6 col-sm-6 justify-content-start">

                <div class="card">

                  <div class="input-box">
                    <input type="text" class="form-control" placeholder="Cari Puskesmas">
                    <i class="fa fa-search"></i>
                  </div>
                  <div class="list border-bottom">

                    <!-- <i class="fa fa-fire"></i> -->
                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Sobo</span>
                      <!-- <small>#politics - may - @max</small> -->
                    </div>
                  </div>
                  <div class="list border-bottom">

                    <!-- <i class="fa fa-yelp"></i> -->
                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Jajag</span>
                      <!-- <small>#news - nov - @settings</small> -->
                    </div>
                  </div>
                  <div class="list border-bottom">

                    <!-- <i class="fa fa-fire"></i> -->
                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Badean</span>
                      <!-- <small>#entertainment - dec - @tunes</small> -->
                    </div>
                  </div>
                  <div class="list">

                    <!-- <i class="fa fa-weibo"></i> -->
                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Singonjuruh</span>
                      <!-- <small>#politics - may - @max</small> -->
                    </div>
                  </div>

                </div>

              </div>
              <div class="col-md-6 mb-5 col-sm-6 order-first order-md-last d-flex align-items-center justify-content-center">
                <div class="img">
                  <img src="{{asset('siapus/img/panduanpendaftaran/1.png') }}" alt="" class="img-fluid"/>
                </div>
              </div>
            </div>
            
          <!-- </div> -->
        </div>

        <!-- <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
          <div class="img">
            <img src="assets/img/departments-1.jpg" alt="" class="img-fluid" />
          </div>
        </div> -->
      </div>
      </div>
    </section>
    <!-- End infoPus Us Section -->

    <!-- ======= Puskesmas Terpilih Section ======= -->
    <section id="aboutPus" class="aboutPus">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Puskesmas Badean</h2>
        </div>
        <div class="row d-flex align-items-center justify-content-center">
          <div class="image col-lg-6" style="background-image: url('{{asset('siapus/img/aboutPus.png') }}')" data-aos="zoom-in"></div>
          <div class="col-lg-4 order-2 order-lg-1 mx-5" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bi bi-geo-alt"></i>
              <h4>Alamat</h4>
              <p>
                Jl Raya Badean No 74 Badean Kec. Blimbingsari - Banyuwangi,
                68461
              </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bi bi-telephone"></i>
              <h4>Nomor Handphone</h4>
              <p>0333-630987 / 081259753040</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bi bi-envelope"></i>
              <h4>Email</h4>
              <p>Pkm_Badean@yahoo.co.id</p>
            </div>
            <!-- <div class="icon-box mt-5">
                <i class="bx bx-shield"></i>
                <h4>Beatae veritatis</h4>
                <p>
                  Expedita veritatis consequuntur nihil tempore laudantium vitae
                  denat pacta
                </p>
              </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Puskesmas Terpilih Section -->

    <!-- ======= Informasi Nomor Antrean Section ======= -->
    <section id="infonomorantrean" class="infonomorantrean">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Informasi Nomor Antrean</h2>
        </div>
        <div class="row no-gutters d-flex align-items-center justify-content-center">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-5">
            <div class="count-box">
              <img class="imginfoantrean mx-auto" src="{{asset('siapus/img/poli/UMUM.png') }}" alt="" />
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                class="purecounter d-flex align-items-center justify-content-center"></span>

              <p class="namapoli" style="font-size: 20px">
                <strong>POLI UMUM</strong>
              </p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-5">
            <div class="count-box">
              <img class="imginfoantrean mx-auto" src="{{asset('siapus/img/poli/KIA.png') }}" alt="" />
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                class="purecounter d-flex align-items-center justify-content-center"></span>
              <p class="namapoli" style="font-size: 20px">
                <strong>POLI KIA</strong>
              </p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-5">
            <div class="count-box">
              <img class="imginfoantrean mx-auto" src="{{asset('siapus/img/poli/GIGI.png') }}" alt="" />
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                class="purecounter d-flex align-items-center justify-content-center"></span>
              <p class="namapoli" style="font-size: 20px">
                <strong>POLI GIGI</strong>
              </p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Informasi Nomor Antrean Section -->
  </main>
  <!-- End #main -->
</body>

 @endsection