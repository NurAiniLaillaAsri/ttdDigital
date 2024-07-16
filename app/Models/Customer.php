<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  use HasFactory;

  protected $fillable = [
    "nama_depan",
    "nama_belakang",
    "img_ktp",
    "no_ktp",
    "tempat_lahir",
    "tanggal_lahir",
    "kewarganegaraan",
    "jenis_kelamin",
    "pendidikan",
    "agama",
    "alamat_ktp",
    "kecamatan",
    "kabupaten",
    "provinsi",
    "negara",
    "alamat_surat_sama",
    "no_hp",
    "email",
    "no_sid",
    "img_signature",
  ];
}
