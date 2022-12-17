 <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center">
      <div class="align-items-center d-md-flex">
        <i class="bi bi-clock"></i>
        <?php 
                date_default_timezone_set('Asia/Jakarta');
                echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
              ?>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center">
      <a href="{{route('puskesmas.index')}}" class="logo me-auto"><img src="{{asset('siapus/img/SiApusLogo.png') }}" alt="" href="" /></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('beranda')}}">Beranda</a></li>
          <li>
            <a class="nav-link scrollto" href="{{route('informasipoli')}}">Informasi Poli</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="{{route('pasiens.create')}}">Pendaftaran Antrean</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="{{route('tiket.index')}}">Antrean Saya</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->