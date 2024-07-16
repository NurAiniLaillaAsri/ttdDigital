@extends('layouts.mainlayout')

@section('title', 'Data Customers')

@section('content')

<table class='table'>
  <thead>
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>No Handphone</th>
      <th>Email</th>
      <th>No SID</th>
      <th>Detail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customersList as $data)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$data->nama_depan}} {{$data->nama_belakang}}</td>
      <td>{{$data->no_hp}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->no_sid}}</td>
      <td>
        <a href="customers/{{$data->id}}">Detail</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection