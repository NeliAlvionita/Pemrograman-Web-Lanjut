@extends('layouts.master')

@section('title', 'Data Siswa')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Semua Siswa</h3>
    <a href="/admin/siswa/tambah" class="btn btn-primary float-right">Tambah</a>
  </div>
  <div class="card-body p-0">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Tahun Ajar</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($siswa as $index => $item)
        <tr>
          <td>{{$index + 1}}</td>
          <td>{{$item->nis}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->tahun_ajar}}</td>
          <td>{{$item->kelas->nama_kelas}}</td>
          <td>
            <a href="/admin/siswa/{{$item->nis}}/detail" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection