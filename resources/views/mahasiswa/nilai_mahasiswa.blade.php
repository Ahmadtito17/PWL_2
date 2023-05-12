@extends('layout.template')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Mahasiswa</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Mahasiswa</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Detail Nilai Mahasiswa</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>NIM: </b> {{ $mahasiswa->nim }}</li>
        <li class="list-group-item"><b>Nama: </b> {{ $mahasiswa->nama }}</li>
        <li class="list-group-item"><b>Kelas: </b> {{ $mahasiswa->kelas->nama_kelas }}</li>
    </ul> 
      <table class="table">
        <thead>
            <tr>
              <th>No.</th>
              <th>Kode MK</th>
              <th>Nama</th>
              <th>SKS</th>
              <th>Dosen</th>
              <th>Nilai</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $i => $m)
            <tr>
              <td>{{$i+1}}</td>
              <td>{{$m->matakuliah->kode_mk}}</td>
              <td>{{$m->matakuliah->nama_mk}}</td>
              <td>{{$m->matakuliah->sks}}</td>
              <td>{{$m->matakuliah->dosen}}</td>
              <td>{{$m->nilai}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="{{url('mahasiswa')}}" class="btn btn-default"><i class="fas fa-arrow-left pr-1"></i>Back</a>
  </div>
    </div>
    
  </div>
@endsection