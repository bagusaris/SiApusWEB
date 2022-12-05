@extends('siapus.admin_master')
@section('siapus')

 <main id="main">
    <!-- ======= Antrean Saya Section ======= -->
    <section id="antreansaya" class="antreansaya">
      <div class="container mt-5" data-aos="fade-up">
        <div class="section-title" style="margin-top: 50px;">
          <h2>Antrean Saya</h2>
        </div>
        
        <div class="row d-flex">
          <div class="col-md-10 col-sm-6 justify-content-start"  data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <table width="100%" border="0">
              <tbody>
                <tr>
                  <td valign="top">
                    <table border="0" width="100%" class="table">
                      <tbody>
                        <tr>
                          <td width="25%" valign="top" class="textt">Nama</td>
                          <td width="2%">:</td>
                          <td style="font-weight:bold">Jamal</td>
                        </tr>
                        <tr>
                          <td class="textt">NIK</td>
                          <td>:</td>
                          <td>3620********0007</td>
                        </tr>
                        <tr>
                          <td class="textt">Poli</td>
                          <td>:</td>
                          <td>Poli Umum</td>
                        </tr>
                        <tr>
                          <td class="textt">Puskesmas</td>
                          <td>:</td>
                          <td>Puskesmas Badean</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-2 mb-5 col-sm-6 order-last order-md-last d-flex align-items-center justify-content-center">
            <button class="btn btn-warning">Menunggu</button>
          </div>

          <!-- </div> -->
        </div>
        <!-- Modal 1-->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row pop-up" style="border-color: transparent;">
                  <div class="col-md-3 col-sm-1 d-flex align-items-center justify-content-center">
                    <img class="img-popupku" src="{{asset('siapus/img/pop-upantreansaya/logo_bwi.png') }}" alt="">
                  </div>
                  <div class="col-md-6 col-sm-3 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="title-popup"><strong>PUSKESMAS
                        BADEAN</strong></h5>
                  </div>
                  <div class="col-md-3 col-sm-1 d-flex align-items-center justify-content-center">
                    <img class="img-popupku" src="{{asset('siapus/img/pop-upantreansaya/logo_pus.png') }}" alt="" >
                  </div>
                </div>
                <div class="row d-flex" style="border-color: transparent; margin-top: -50px;">
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong>Kamis,
                        20-11-2022</strong></h5>
                  </div>
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong>Jam
                        08:45:15</strong></h5>
                  </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center" style="margin-top: -30px;">
                  <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px;"><strong>Nomor Antrean
                      Anda</strong></h5>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                  <h1 class="modal-title" id="exampleModalLabel" style="font-size: 52px;"><strong>A 030</strong></h1>
                </div>

              </div>
              <div class="modal-footer d-flex align-items-center justify-content-center">

                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Nama : Jamal</strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Poli Umum</strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel">Antrean Saat Ini : A 019</h5>
                </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-10 col-sm-6 justify-content-start"  data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <table width="100%" border="0">
              <tbody>
                <tr>
                  <td valign="top">
                    <table border="0" width="100%" class="table">
                      <tbody>
                        <tr>
                          <td width="25%" valign="top" class="textt">Nama</td>
                          <td width="2%">:</td>
                          <td style="font-weight:bold">Deri</td>
                        </tr>
                        <tr>
                          <td class="textt">NIK</td>
                          <td>:</td>
                          <td>3620********2756</td>
                        </tr>
                        <tr>
                          <td class="textt">Poli</td>
                          <td>:</td>
                          <td>Poli Gigi</td>
                        </tr>
                        <tr>
                          <td class="textt">Puskesmas</td>
                          <td>:</td>
                          <td>Puskesmas Jajag</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-2 mb-5 col-sm-6 order-last order-md-last d-flex align-items-center justify-content-center">
            <button class="btn btn-success">Selesai</button>
          </div>
        </div>
        <!-- Modal 2-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row pop-up" style="border-color: transparent;">
                  <div class="col-md-3 col-sm-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/pop-upantreansaya/logo_bwi.png" alt="" style="height: 80px;">
                  </div>
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px;"><strong>PUSKESMAS
                        JAJAG</strong></h5>
                  </div>
                  <div class="col-md-3 col-sm-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/pop-upantreansaya/logo_pus.png" alt="" style="height: 80px;">
                  </div>
                </div>
                <div class="row d-flex" style="border-color: transparent; margin-top: -50px;">
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong>Senin, 14-11-2022</strong></h5>
                  </div>
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong>Jam 08:00:15</strong></h5>
                  </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center" style="margin-top: -30px;">
                  <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px;"><strong>Nomor Antrean
                      Anda</strong></h5>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                  <h1 class="modal-title" id="exampleModalLabel" style="font-size: 52px;"><strong>C 005</strong></h1>
                </div>

              </div>
              <div class="modal-footer d-flex align-items-center justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Nama : Deri</strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Poli Gigi</strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel">Antrean Saat Ini : C 010</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-10 col-sm-6 justify-content-start"   data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <table width="100%" border="0">
              <tbody>
                <tr>
                  <td valign="top">
                    <table border="0" width="100%" class="table">
                      <tbody>
                        <tr>
                          <td width="25%" valign="top" class="textt">Nama</td>
                          <td width="2%">:</td>
                          <td style="font-weight:bold">Siti F******</td>
                        </tr>
                        <tr>
                          <td class="textt">NIK</td>
                          <td>:</td>
                          <td>3620********0563</td>
                        </tr>
                        <tr>
                          <td class="textt">Poli</td>
                          <td>:</td>
                          <td>Poli KIA</td>
                        </tr>
                        <tr>
                          <td class="textt">Puskesmas</td>
                          <td>:</td>
                          <td>Puskesmas Singonjuruh</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-2 mb-5 col-sm-6 order-last order-md-last d-flex align-items-center justify-content-center">
            <button class="btn btn-danger">Batal</button>
          </div>
        </div>
        <!-- Modal 3-->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row pop-up" style="border-color: transparent;">
                  <div class="col-md-3 col-sm-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/pop-upantreansaya/logo_bwi.png" alt="" style="height: 80px;">
                  </div>
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 14px;"><strong>PUSKESMAS
                        SINGONJURUH</strong></h5>
                  </div>
                  <div class="col-md-3 col-sm-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/pop-upantreansaya/logo_pus.png" alt="" style="height: 80px;">
                  </div>
                </div>
                <div class="row d-flex" style="border-color: transparent; margin-top: -50px;">
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong>Selasa, 15-11-2022</strong></h5>
                  </div>
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong>Jam 09:00:20</strong></h5>
                  </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center" style="margin-top: -30px;">
                  <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px;"><strong>Nomor Antrean
                      Anda</strong></h5>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                  <h1 class="modal-title" id="exampleModalLabel" style="font-size: 52px;"><strong>B 025</strong></h1>
                </div>

              </div>
              <div class="modal-footer d-flex align-items-center justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Nama : Si** F****** </strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Poli KIA</strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel">Antrean Saat Ini : B 023</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- End Antrean Saya Section -->
  </main>
  <!-- End #main -->

@endsection