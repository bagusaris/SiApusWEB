@extends('siapus.admin_master')
@section('siapus')

 <section id="daftar">
        <section id="daftarantrean" class="daftarantrean">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="section-title" style="margin-top: 65px;">
                    <h2>Pendaftaran Antrean Pasien</h2>
                </div>
                {{-- <form method="post" action="{{route('tiket')}}"> --}}
                <form action="{{route('tiket')}}">
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1" class="mb-2">NIK</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-person-lines-fill"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Masukkan nik anda">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1" class="mb-2">Nama</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-person-fill"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Masukkan nama anda">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Provinsi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-globe"></i></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="provinsi" class="selectpicker form-control"
                                        data-live-search="true">
                                        <option>Pilih Provinsi Anda</option>
                                        <option>Jawa Timur</option>
                                        <option>Jawa Barat</option>
                                        <option>Jawa Tengah</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Kabupaten</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-geo-fill"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="kota" class="selectpicker form-control"
                                        data-live-search="true">
                                        <option>Pilih Kabupaten/Kota Anda</option>
                                        <option>Kab. Banyuwangi</option>
                                        <option>Kota Malang</option>
                                        <option>Kab. Jember</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Kecamatan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-geo-alt-fill"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="kecamatan" class="selectpicker form-control"
                                        data-live-search="true">
                                        <option>Pilih Kecamatan Anda</option>
                                        <option>Kec. Kabat</option>
                                        <option>Kec. Blimbingsari</option>
                                        <option>Kec. Rogojampi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Kelurahan/Desa</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-geo-alt"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="desa" class="selectpicker form-control"
                                        data-live-search="true">
                                        <option>Pilih Kelurahan/Desa Anda</option>
                                        <option>Kel. Kertosari</option>
                                        <option>Desa Blimbingsari</option>
                                        <option>Desa Macan Putih</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1" class="mb-2">Alamat Lengkap</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-house-door-fill"></i></span>
                            </div>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan alamat anda ">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Puskesmas</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-hospital-fill"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="puskesmas" class="selectpicker form-control"
                                        data-live-search="true">
                                        <option>Pilih Puskesmas Tujuan Anda</option>
                                        <option>Puskesmas Kertosari</option>
                                        <option>Puskesmas Sobo</option>
                                        <option>Puskesmas Mojopanggung</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Poli</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="bi bi-file-medical-fill"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="poli" class="selectpicker form-control"
                                        data-live-search="true">
                                        <option>Pilih Poli Tujuan Anda</option>
                                        <option>Poli Umum</option>
                                        <option>Poli KIA</option>
                                        <option>Poli Gigi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-12 mt-3">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Saya setuju dengan syarat dan ketentuan yang berlaku
                        </label>
                        <div class="invalid-feedback">
                            Anda harus setuju sebelum mendaftar.
                        </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-flex justify-content-center">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    </div>
                </form>
        </section>


        <div class="popupdaftar" id="popupdaftar">
            <div class="popup-content-daftar">
                <div >
                    <img class="popup-img-daftar" src="{{asset('./siapus/img/pop-up/pendaftaran.png') }}" alt="">
                </div>
                <div class="popup-text-daftar">
                    <p>Apakah data yang anda masukkan sudah benar?</p>
                </div>
                <a href="{{route('daftar')}}" class="btn popup-btn1"> Tidak </a>
                <a href="{{route('tiket')}}" class="btn popup-btn2"> Ya </a>

            </div>
        </div>

    </section>

@endsection