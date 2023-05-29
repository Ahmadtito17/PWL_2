@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Pengalaman Kuliah</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Pengalaman Kuliah</li>
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
      margin-bottom: 20px;
    }

    p {
      color: #666;
      font-size: 18px;
      margin-bottom: 10px;
    }
  </style>

  <div class="card">
    <h1>Merasakan Perbedaan Kuliah Online dan Offline</h1>
    <p>Studi menunjukkan bahwa kuliah online memiliki keuntungan dan tantangan yang berbeda dibandingkan kuliah offline:</p>
    <ul>
      <li>Mahasiswa dapat mengakses materi kuliah kapan saja dan di mana saja.</li>
      <li>Interaksi tatap muka dengan dosen dan teman sekelas dapat berkurang.</li>
      <li>Kuliah online memerlukan koneksi internet yang stabil.</li>
      <li>Fleksibilitas waktu belajar dapat meningkat.</li>
      <li>Adanya hambatan dalam membangun hubungan sosial dan networking.</li>
    </ul>
  </div>
@endsection
