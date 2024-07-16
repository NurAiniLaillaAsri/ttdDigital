@extends('layouts.mainlayout')

@section('title', 'Data Detail Customers')

@section('content')

<?php
$path = $customer->img_signature;
$signatureFolder = 'signatures/';
$position = strrpos($path, $signatureFolder);
$signature_name = substr($path, $position + strlen($signatureFolder));
?>

<div class="print-content">
  <input type="button" onclick="printDiv('print-content')" value="print a div!" id="print-content" />

  <div class="container row g-0">
    <div class="col-sm-6 col-md-8">
      <h3>Data Customer</h3>
    </div>
    <div class="col-6 col-md-4 text-center">

    </div>
  </div>

  <div class="container table-responsive-sm">
    <table class='table table-bordered'>
      <tbody>
        <!-- cara manggil data dari database pakai looping? -->
        <tr>
          <td><strong>Nama Lengkap</strong></td>
          <td>{{$customer->nama_depan}} {{$customer->nama_belakang}}</td>
        </tr>
        <tr>
          <td><strong>KTP</strong></td>
          <td><img src="{{asset('storage/img_ktp/' . $customer->img_ktp)}}" alt=""></td>
        </tr>
        <tr>
          <td><strong>NIK</strong></td>
          <td>{{$customer->no_ktp}}</td>
        </tr>
        <tr>
          <td><strong>Tempat Lahir</strong></td>
          <td>{{$customer->tempat_lahir}}</td>
        </tr>
        <tr>
          <td><strong>Tanggal Lahir</strong></td>
          <td>{{$customer->tanggal_lahir}}</td>
        </tr>
        <tr>
          <td><strong>Kewarganegaraan</strong></td>
          <td>{{$customer->kewarganegaraan}}</td>
        </tr>
        <tr>
          <td><strong>Jenis Kelamin</strong></td>
          <td>{{$customer->jenis_kelamin}}</td>
        </tr>
        <tr>
          <td><strong>Pendidikan Terakhir</strong></td>
          <td>{{$customer->pendidikan}}</td>
        </tr>
        <tr>
          <td><strong>Agama</strong></td>
          <td>{{$customer->agama}}</td>
        </tr>
        <tr>
          <td colspan="1"><strong>Alamat Sesuai KTP</strong></td>
          <td colspan="3">{{$customer->alamat_ktp}}</td>
        </tr>
        <tr>
          <td><strong>Kecamatan</strong></td>
          <td>{{$customer->kecamatan}}</td>
          <!-- <td><strong>Kabupaten</strong></td>
        <td>{{$customer->kabupaten}}</td> -->
        </tr>
        <tr>
          <td><strong>Kabupaten</strong></td>
          <td>{{$customer->kabupaten}}</td>
        </tr>
        <tr>
          <td><strong>Provinsi</strong></td>
          <td>{{$customer->provinsi}}</td>
          <!-- <td><strong>Negara</strong></td>
        <td>{{$customer->negara}}</td> -->
        </tr>
        <tr>
          <td><strong>Negara</strong></td>
          <td>{{$customer->negara}}</td>
        </tr>
        <tr>
          <td><strong>Alamat Surat Sama dengan KTP</strong></td>
          <td>{{ $customer->alamat_surat_sama == 1 ? 'Sama dengan KTP' : 'Berbeda dengan KTP' }}</td>
        </tr>
        <tr>
          <td><strong>No Telepon</strong></td>
          <td>{{$customer->no_hp}}</td>
        </tr>
        <tr>
          <td><strong>Email</strong></td>
          <td>{{$customer->email}}</td>
        </tr>
        <tr>
          <td><strong>Nomor SID</strong></td>
          <td>{{$customer->no_sid}}</td>
        </tr>
        <tr>
          <td><strong>Tanggal Pengajuan</strong></td>
          <td>{{$customer->created_at}}</td>
        </tr>

        <table>
          <thead>
            <tr>
              <th>{{$customer->nama_depan}} {{$customer->nama_belakang}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="{{asset('storage/signatures/' . $signature_name)}}" alt="">
              </td>
            </tr>
          </tbody>
        </table>
      </tbody>
    </table>
  </div>
</div>

<!-- <script type="text/javascript">
  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    w = window.open();
    w.document.write(printContents);
    w.print();
    w.close();
  }
</script> -->

<script src="html2pdf.bundle.min.js"></script>
<script>
const btn = document.getElementById("print-content");

btn.addEventListener("click", function(){
var element = document.getElementById('body');
html2pdf().from(element).save('filename.pdf');
});
</script>
@endsection