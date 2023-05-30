@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Mata Kuliah</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Mata Kuliah</li>
        </ol>
      </div>
    </div>
</div>

<section class="content">
  <style>
    .card-body {
      background-color: #f0f0f0;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      font-family: Arial, sans-serif;
      max-width: 600px;
      margin: 0 auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    th {
      background-color: #f7f7f7;
      font-weight: bold;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>

  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Kode MK</th>
          <th>Nama</th>
          <th>SKS</th>
          <th>Dosen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>MK001</td>
          <td>Pemrograman Web Lanjut</td>
          <td>3</td>
          <td>Dr. John Doe</td>
        </tr>
        <tr>
          <td>2</td>
          <td>MK002</td>
          <td>Statistik Komputasi</td>
          <td>4</td>
          <td>Prof. Jane Smith</td>
        </tr>
        <tr>
          <td>3</td>
          <td>MK003</td>
          <td>Jaringan Komputer</td>
          <td>3</td>
          <td>Dr. Michael Johnson</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
@endsection
