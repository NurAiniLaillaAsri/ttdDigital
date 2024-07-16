<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
// use App\Http\Controllers\Storage;
use Illuminate\Support\Facades\Storage;
use PDF;

class CustomerController extends Controller
{
  public function index()
  {
    $customers = Customer::all();
    return view("form", $customers);
  }

  public function store(Request $request)
  {
    // dd($request->all());

    $newImgKtp = '';
    $file = '';

    if ($request->file('img_ktp')) {
      $extension = $request->file("img_ktp")->getClientOriginalExtension();
      $newImgKtp = $request->nama_depan . '-' . $request->nama_belakang . '-' . now()->timestamp . '.' . $extension;
      $request->file('img_ktp')->storeAs('img_ktp', $newImgKtp);
    }

    // return $request->file('img_ktp')->store('img_ktp');  // bisa masuk ke public/img_ktp tanpa rename 

    // signature
    $folderPath = storage_path('app/public/signatures/');
    $image_parts = explode(";base64,", $request->img_signature);

    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];

    $image_base64 = base64_decode($image_parts[1]);

    $file = $folderPath . uniqid() . '.' . $image_type;
    file_put_contents($file, $image_base64);
    back()->with('success', 'success Full upload signature');

    $customer = Customer::create(array_merge($request->all(), ['img_ktp' => $newImgKtp, 'img_signature' => $file]));

    if ($customer) {
      return back()->with('message', 'Silakan Tunggu Proses Selanjutnya');
    }
  }

  // menampilkan data customer untuk bagian admin

  public function dataCustomers(Request $request)
  {
    $customers = Customer::all();
    return view("customers", ['customersList' => $customers]);
  }

  // Detail data customer
  public function show($id)
  {
    $customer = Customer::findOrFail($id);
    return view('detail', ['customer' => $customer]);
  }

  // public function generatePDF($id)
  // {
  //   $customer = Customer::find($id);
  //   $pdf = PDF::loadView('customer.pdf', compact('customer'));

  //   return $pdf->download('customer_details.pdf');
  // }

}
