@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <style>
    .card {
      background-color: #f0f0f0;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      font-family: Arial, sans-serif;
      max-width: 400px;
      margin: 0 auto;
      text-align: center;
    }

    h1 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .info {
      color: #666;
      font-size: 18px;
      margin-bottom: 15px;
    }

    p {
      margin: 5px 0;
    }
  </style>

  <div class="card">
    <h1>Informasi Mahasiswa</h1>
    <div class="info">
      <p>Nama: <span>{!! $nama !!}</span></p>
      <p>NIM: <span>{!! $nim !!}</span></p>
      <p>Program Studi: <span>{!! $prodi !!}</span></p>
      <p>Jurusan: <span>{!! $jurusan !!}</span></p>
      <p>Perguruan Tinggi: <span>{!! $pt !!}</span></p>
    </div>
  </div>

  </div>
@endsection
