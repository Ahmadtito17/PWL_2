@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Hobi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Hobi</li>
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
          <th>Hobi</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Main Futsal</td>
          <td>Menikmati bermain futsal bersama teman-teman di lapangan.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Mendengarkan Lagu</td>
            <td>Mendengarkan lagu adalah hobi yang menyenangkan. Lagu-lagu dapat mempengaruhi suasana hati dan memberikan hiburan atau inspirasi. Hobi ini juga dapat membantu mengurangi stres dan meningkatkan konsentrasi.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Memasak</td>
            <td>Memasak adalah hobi yang menggabungkan kreativitas, ketelitian, dan keahlian dalam mengolah bahan makanan menjadi hidangan lezat. Memasak juga dapat meningkatkan keterampilan mengatur waktu, pengorganisasian, dan kreativitas dalam menciptakan kombinasi rasa dan penampilan yang menarik.</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
@endsection
