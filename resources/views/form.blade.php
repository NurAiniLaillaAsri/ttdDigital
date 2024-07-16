@extends('layouts.mainlayout')

@section('title', 'Pengajuan')
@include('sweetalert::alert')

@section('content')

<div class="container my-5">
  <form action="form" method="post" enctype="multipart/form-data">
    @csrf
    <!-- <div class="row justify-content-center">
      <div class="col-sm mb-3">
        <label for="pengajuan_pertama" class="form-label">Pengajuan Pertama</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pengajuan_pertama" id="pengajuan_pertama" value="1">
          <label class="form-check-label" for="1" checked>
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pengajuan_pertama" id="pengajuan_pertama" value="0">
          <label class="form-check-label" for="0">
            Tidak
          </label>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm">
        <button type="button" class="btn btn-primary" onclick="toggleInput()" width="100" height="50">Pengajuan
          Baru</button>
      </div>
    </div> -->

    <button id="toggleButton" type="button" class="btn btn-outline-primary active" data-bs-toggle="button"
      aria-pressed="true" onclick="toggleInput()">Pengajuan Nasabah Baru</button>
    <!-- <button type="button" onclick="toggleInput()">Toggle Hidden Input</button><br><br> -->
    <!-- <div id="hiddenInput" style="display: block;">
      <label for="extraInfo">Pengajuan Baru</label>
      <input type="text" id="extraInfo" name="extraInfo"><br><br>
    </div> -->

    <div class="row justify-content-center name-input">
      <div class="col-sm">
        <div class="mb-3">
          <label for="nama_depan" class="form-label">Nama Sesuai Identitas</label>
          <input type="text" class="form-control" id="nama_depan" name="nama_depan">
          <div id="passwordHelpBlock" class="form-text">Nama Depan</div>
        </div>
      </div>
      <div class="col-sm">
        <div class="mb-3 pt-2">
          <label for="nama_belakang" class="form-label"></label>
          <input type="text" class="form-control" id="nama_belakang" name="nama_belakang">
          <div id="passwordHelpBlock" class="form-text">Nama Belakang</div>
        </div>
      </div>
    </div>
    <div class="col-sm mb-3">
      <label for="no_ktp" class="form-label">NIK KTP</label>
      <input type="number" class="form-control" id="no_ktp" name="no_ktp">
    </div>
    <div id="hiddenInput" style="display: block;">
      <div class="row justify-content-center ktp-input">
        <div class="col-sm mb-3">
          <label for="img_ktp" class="form-label">Foto KTP</label>
          <input class="form-control" type="file" id="img_ktp" name="img_ktp" multiple>
        </div>

      </div>

      <div class="row justify-content-center placeBirth-input">
        <div class="col-sm">
          <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
          </div>
        </div>
        <div class="col-sm">
          <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
              placeholder="Example input placeholder">
          </div>
        </div>
      </div>

      <div class="row justify-content-center warganegara-input">
        <div class="col-sm mb-3">
          <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="kewarganegaraan" id="kewarganegaraan" value="WNI">
            <label class="form-check-label" for="WNI" checked>
              WNI
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="kewarganegaraan" id="kewarganegaraan" value="WNA">
            <label class="form-check-label" for="WNA">
              WNA
            </label>
          </div>
        </div>
        <div class="col-sm mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
            <option value="NULL">Pilih Jenis Kelamin</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>
      </div>

      <div class="row justify-content-center grade-input">
        <div class="col-sm mb-3">
          <label for="pendidikan" class="form-label">Latar Belakang Pendidikan</label>
          <select class="form-select" aria-label="Default select example" name="pendidikan">
            <option value="NULL">Pilih Pendidikan Terakhir</option>
            <option value="SD">SD</option>
            <option value="SPM">SMP</option>
            <option value="SMA/D1/D2">SMA/D1/D2</option>
            <option value="D4/S1">D4/S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
          </select>
        </div>
        <div class="col-sm mb-3">
          <label for="agama" class="form-label">Agama</label>
          <select class="form-select" aria-label="Default select example" name="agama">
            <option value="NULL">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Protestan">Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </div>
      </div>

      <div class="row justify-content-center address-input">
        <div class="col-sm mb-3">
          <label for="alamat_ktp" class="form-label">Alamat Sesuai KTP</label>
          <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Jl Maju RT 001 RW 001">
          <div id="passwordHelpBlock" class="form-text">Alamat Termasuk RT/RW</div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-sm mb-3">
          <input type="text" class="form-control" id="kecamatan" name="kecamatan">
          <div id="passwordHelpBlock" class="form-text">Kecamatan</div>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" id="kabupaten" name="kabupaten">
          <div id="passwordHelpBlock" class="form-text">Kota/Kabupaten</div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm mb-3">
          <input type="text" class="form-control" id="provinsi" name="provinsi">
          <div id="passwordHelpBlock" class="form-text">Provinsi</div>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" id="negara" name="negara">
          <div id="passwordHelpBlock" class="form-text">Negara</div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm mb-3">
        <label for="alamat_surat_sama" class="form-label">Alamat Surat Menyurat sama dengan Alamat KTP</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="alamat_surat_sama" id="alamat_surat_sama" value="1">
          <label class="form-check-label" for="1" checked>
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="alamat_surat_sama" id="alamat_surat_sama" value="0">
          <label class="form-check-label" for="0">
            Tidak
          </label>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm mb-3">
        <label for="no_hp" class="form-label">Nomor Handphone Aktif</label>
        <input type="number" class="form-control" id="no_hp" name="no_hp">
      </div>
      <div class="col-sm mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
      </div>
    </div>

    <div class="row justify-content-center mb-5">
      <!-- <div class="col-sm mb-3">
        <label for="img_npwp" class="form-label">Foto NPWP</label>
        <input class="form-control" type="file" id="img_npwp" name="img_npwp" multiple>
      </div> -->
      <div class="col-sm mb-3">
        <label for="no_sid" class="form-label">No SID</label>
        <input type="text" class="form-control" id="no_sid" name="no_sid">
      </div>
    </div>

    <div class="row justify-content-center mb-5 signature">
      <div class="col-sm mb-3" id="sign"></div>
      <textarea name="img_signature" id="signature" style="display: none;"></textarea>
      <button class="btn btn-secondary" id="clear">Ulangi</button>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm">
        <!-- <button type="button" class="btn btn-secondary " width="100" height="50">Kembali</button> -->
        <button type="submit" class="btn btn-primary" width="100" height="50">Kirim</button>
      </div>
    </div>
  </form>
</div>

<script>
  var sign = $('#sign').signature({ syncField: '#signature', syncFormat: 'PNG' });
  $('#clear').click(function (e) {
    e.preventDefault();
    sign.signature('clear');
    $('#signature').val('');
  });
</script>

<script>
  function toggleInput() {
    var hiddenInput = document.getElementById('hiddenInput');
    var button = document.getElementById("toggleButton");
    if (hiddenInput.style.display === 'block') {
      hiddenInput.style.display = 'none';
      button.classList.remove('active');
      button.innerText = 'Pengajuan Nasabah Lama';
    } else {
      hiddenInput.style.display = 'block';
      button.classList.add('active');
      button.innerText = 'Pengajuan Nasabah Baru';
    }
  }
</script>



@if (Session::has('message'))
  <script>
    swal("Berhasil Melakukan Pengajuan", "{{Session::get('message')}}", 'success', {
    button: true,
    button: "OK"
    })
  </script>
@endif
</div>

@endsection