 <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center">
      <div class="align-items-center d-md-flex">
        <i class="bi bi-clock"></i> Senin - Sabtu, 08.00-11.00
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="{{route('beranda')}}" class="logo me-auto"><img src="{{asset('siapus/img/logosiapus.png') }}" alt="" href="" /></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('beranda')}}">Beranda</a></li>
          <li>
            <a class="nav-link scrollto" href="{{route('informasipoli')}}">Informasi Poli</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="{{route('daftar')}}">Pendaftaran Antrean</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="{{route('tiket')}}">Antrean Saya</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->