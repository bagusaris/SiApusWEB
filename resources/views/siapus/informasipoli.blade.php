@extends('siapus.admin_master')
@section('siapus')

   <main id="main">

        <!-- Hero Section -->
        <section id="info">
            <section id="infopoli" class="infopoli">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title" style="margin-top: 65px;">
                        <h2>Informasi Poli</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card-informasipoli">
                                <div class="card-body">
                                    <img src="{{asset('./siapus/img/poli/UMUM.png') }}" class="card-img" alt="..">
                                    <h5 class="card-title"><b>Poli Umum </b></h5>
                                    <p class="card-text">Poli umum adalah jenis layanan di Puskesmas yang memberikan
                                        pelayanan kedokteran berupa pemeriksaan kesehatan. </p>
                                    <a href="#popup" class="card-link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card-informasipoli">
                                <div class="card-body">
                                    <img src="{{asset('./siapus/img/poli/KIA.png') }}" class="card-img" alt="..">
                                    <h5 class="card-title"><b>Poli KIA</b></h5>
                                    <p class="card-text">Poli KIA adalah jenis layanan di Puskesmas yang memberikan
                                        pelayanan ibu hamil, ibu bersalin, imunisasi dan lainnya.</p>
                                    <a href="#popupkia" class="card-link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card-informasipoli">
                                <div class="card-body mb-50">
                                    <img src="{{asset('./siapus/img/poli/GIGI.png') }}" class="card-img" alt="..">
                                    <h5 class="card-title"><b>Poli Gigi</b></h5>
                                    <p class="card-text">Poli Gigi adalah jenis layanan di Puskesmas yang memberikan
                                        pelayanan seputar kesehatan mulut dan gigi.</p>
                                    <a href="#popupgigi" class="card-link">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- panduan section -->
            <section id="panduan" class="panduan">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Panduan Pendaftaran</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card-panduan">
                                <div class="card-body">
                                    <img src="{{asset('./siapus/img/panduanpendaftaran/1.png') }}" class="card-img-panduan" alt="..">
                                    <p class="card-text">Setelah anda masuk halaman utama, pilih menu pendaftaran
                                        antrean</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card-panduan">
                                <div class="card-body">
                                    <img src="{{asset('./siapus/img/panduanpendaftaran/2.png') }}" class="card-img-panduan" alt="..">
                                    <p class="card-text">Isi formulir data diri lalu ok maka data anda akan muncul pada
                                        tiket</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                            <div class="card-panduan">
                                <div class="card-body">
                                    <img src="{{asset('./siapus/img/panduanpendaftaran/3.png') }}" class="card-img-panduan" alt="..">
                                    <p class="card-text">Tiket pendaftaran dapat di cek pada menu “Antrean Saya” lalu
                                        klik detail</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- pop up start-->
            <div class="popup" id="popup">
                <div class="popup-content">
                        <div class="popup-header">
                            <h2><b>Poli Umum</b></h2>
                            <a href="#" class="popup-close">&times;</a>
                        </div>
                        <div class="popup-img">
                            <img src="{{asset('./siapus/img/poli/UMUM.png') }}" alt="">
                        </div>
                        <div class="popup-text">
                            <p>Poli umum merupakan salah satu dari jenis layanan di Puskesmas yang memberikan pelayanan
                                kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau
                                masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.
                            </p>
                        </div>
                    </div>
                </div>
                </div>
    
                <div class="popupkia" id="popupkia">
                    <div class="popup-content">
                            <div class="popup-header">
                                <h2><b>Poli KIA</b></h2>
                                <a href="#" class="popup-close">&times;</a>
                            </div>
                            <div class="popup-img">
                                <img src="{{asset('./siapus/img/poli/KIA.png') }}" alt="">
                            </div>
                            <div class="popup-text">
                                <p>Poli KIA adalah jenis layanan di Puskesmas yang memberikan pelayanan ibu hamil, ibu bersalin, imunisasi, pengobatan bayi dan balita, kesehatan reproduksi remaja termasuk calon pengantin, pelayanan pil KB dan implan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="popupgigi" id="popupgigi">
                    <div class="popup-content">
                            <div class="popup-header">
                                <h2><b>Poli Gigi</b></h2>
                                <a href="#" class="popup-close">&times;</a>
                            </div>
                            <div class="popup-img">
                                <img src="{{asset('./siapus/img/poli/GIGI.png') }}" alt="">
                            </div>
                            <div class="popup-text">
                                <p>Poli Gigi adalah jenis layanan di Puskesmas yang memberikan pelayanan seputar kesehatan mulut dan gigi berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut seperti penambalan gigi, pencabutan gigi dan pembersihan karang gigi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </main>

@endsection