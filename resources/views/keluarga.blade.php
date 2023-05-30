@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Keluarga</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Keluarga</li>
        </ol>
      </div>
    </div>
</div>

<section class="content">
  <style>
    .card {
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

  <div class="card">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Peran</th>
          <th>Jenis Kelamin</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>Ayah</td>
          <td>Laki-laki</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Doe</td>
          <td>Ibu</td>
          <td>Perempuan</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Doe</td>
          <td>Anak</td>
          <td>Laki-laki</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Sarah Doe</td>
          <td>Anak</td>
          <td>Perempuan</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
@endsection
