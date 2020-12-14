@extends('layouts.master')
@section('title', 'Detail Siswa')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Siswa</h3>
  </div>
  <div class="card-body">
    <p>NIS : {{$siswa->nis}}</p>
    <p>Nama : {{$siswa->nama}}</p>
    <p>Tanggal Lahir : {{$siswa->tgl_lahir}}</p>
    <p>Tahun Ajar : {{$siswa->tahun_ajar}}</p>
    <form action="/admin/siswa/{{$siswa->nis}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger float-right ml-2" type="submit">Hapus</button>
    </form>
    <a href="/admin/siswa/{{$siswa->nis}}/ubah" class="btn btn-warning float-right">Ubah</a>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Kelas</h3>
  </div>
  <div class="card-body">
    <p>Nama Kelas : {{$siswa->kelas->nama_kelas}}</p>
    <p>Jurusan : {{$siswa->kelas->jurusan}}</p>
  </div>
</div>
@endsection
