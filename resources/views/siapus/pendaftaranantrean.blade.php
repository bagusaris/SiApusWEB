@extends('siapus.admin_master')
@section('siapus')

 <section id="daftar">
        <section id="daftarantrean" class="daftarantrean">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="section-title" style="margin-top: 65px;">
                    <h2>Pendaftaran Antrean Pasien</h2>
                </div>
                {{-- <form method="post" action="{{route('tiket')}}"> --}}
                <form method="post" action="{{route('pasiens.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1" class="mb-2">NIK</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-address-card"></i></span>
                            </div>
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan nik anda">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1" class="mb-2">Nama</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                            </div>
                            <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" placeholder="Masukkan nama anda">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Provinsi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-globe"></i></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="provinsi" id="provinsi" class="form-select" data-live-search="true">
                                        <option selected disabled value="">Provinsi</option>
                                        @foreach($data_provinsi as $provinsi)
                                        <option value="{{$provinsi['id']}}">{{$provinsi['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Kabupaten</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="kabupaten" id="kabupaten" class="form-select" data-live-search="true">
                                        <option selected disabled value="">Pilih Kabupaten/Kota Anda</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Kecamatan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-landmark"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="kecamatan" id="kecamatan" class="form-select"
                                        data-live-search="true">
                                        <option selected disabled value="">Pilih Kecamatan Anda</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Kelurahan/Desa</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-sharp fa-solid fa-building"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="kelurahan" id="kelurahan" class="form-select"
                                        data-live-search="true">
                                        <option selected disabled value="">Pilih Kelurahan/Desa Anda</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1" class="mb-2">Alamat Lengkap</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-house"></i></span>
                            </div>
                            <input type="text" name="alamat" id="alamat" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan alamat anda ">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Puskesmas</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-sharp fa-solid fa-hospital"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="id_puskesmas" id="id_puskesmas" class="form-select"
                                        data-live-search="true">
                                        <option>Pilih Puskesmas Tujuan Anda</option>
                                        @foreach ($puskesmas as $pusk)
                                                    <option value="{{ $pusk->id_puskesmas }}" > {{ $pusk->nama_puskesmas }} </option>
                                                @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1" class="mb-2">Poli</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa-solid fa-stethoscope"></i></span>
                            </div>
                            <div class="form-control">
                                <div>
                                    <select name="id_poli" id="id_poli" class="form-select"
                                        data-live-search="true">
                                        <option>Pilih Poli Tujuan Anda</option>
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
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
     function onChangeSelect(url, id, name) {
        $.ajax({
        url: url,
        type: 'GET',
        dataType: "json",
        data: {
            id: id
        },
        success: function(data) {
            $('#' + name).empty();
            if (name == "id_poli") {
                $('#' + name).append('<option selected disabled value="">Poli</option> ');
            } else if (name == "kabupaten") {
                console.log(name);
                $('#' + name).append('<option selected disabled value="">kabupaten</option> ');
            }else if (name == "kecamatan") {
                $('#' + name).append('<option selected disabled value="">kecamatan</option> ');
            }else if (name == "kelurahan") {
                $('#' + name).append('<option selected disabled value="">kelurahan</option> ');
            }
            data.forEach(el => {
            if (el.id_poli) {
                $('#' + name).append('<option value="' + el.id_poli + '">' + el.nama_poli + '</option>');
            } else {
                $('#' + name).append('<option value="' + el.id + '">' + el.name + '</option>');
            }
            })
        }
        });
    }

  $(function() {
    $('#provinsi').on('change', function() {
      onChangeSelect('{{ route("kabupaten.kabupaten") }}', $(this).val(), 'kabupaten');
    });
    $('#kabupaten').on('change', function() {
      onChangeSelect('{{ route("kecamatan.kecamatan") }}', $(this).val(), 'kecamatan');
    });
    $('#kecamatan').on('change', function() {
      onChangeSelect('{{ route("desa.desa") }}', $(this).val(), 'kelurahan');
    });
    $('#id_puskesmas').on('change', function() {
      onChangeSelect('{{ route("puskesmas.poli") }}', $(this).val(), 'id_poli');
    });
  });
</script>