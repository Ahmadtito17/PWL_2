@extends('layout.template')

@section('content')
<script>alert('Selamat Datang')</script>
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
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
      line-height: 1.5;
    }

    .card h3 {
      margin-bottom: 0.5em;
    }

    .card h5 {
      margin-top: 0.5em;
      margin-bottom: 0.5em;
    }

    .card p {
      margin-bottom: 0;
    }
  </style>

  <div class="card">
    <h3><b>Selamat Datang di</b></h3>

    <h5>
      <p>Mata Kuliah Pemrograman Web Lanjut</p>
      <p>Jurusan Teknologi Informasi</p>
      <p>Politeknik Negeri Malang</p>
    </h5>
  </div>


@endsection
