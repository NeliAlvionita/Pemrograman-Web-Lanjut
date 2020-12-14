@extends('layouts.master')
@section('title', 'Tambah Data Siswa')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Data Siswa</h3>
  </div>
  <div class="card-body">
    <form action="/admin/siswa" method="POST">
      @csrf
      <div class="form-group">
        <label for="nis">NIS</label>
        <input type="text" name="nis" id="nis" class="form-control" placeholder="NIS" aria-describedby="helpId"
          readonly>
        <small id="helpId" class="text-muted">Isi dengan NIS Siswa</small>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Siswa"
          aria-describedby="helpId">
        <small id="helpId" class="text-muted">Nama sesuai dengan Akta</small>
      </div>
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Tanggal Lahir"
          aria-describedby="helpId">
        <small id="helpId" class="text-muted">Tanggal Lahir sesuai akta</small>
      </div>
      <div class="form-group">
        <label for="tahun_ajar">Tahun Ajar</label>
        <input type="number" name="tahun_ajar" id="tahun_ajar" class="form-control" placeholder="Tahun Ajar"
          aria-describedby="helpId">
        <small id="helpId" class="text-muted">Tahun Ajar</small>
      </div>
      <div class="form-group">
        <label for="">Kelas</label>
        <select name="id_kelas" id="id_kelas" class="form-control">
          @foreach ($listKelas as $kelas)
          <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
          @endforeach
        </select>
        <small id="helpId" class="text-muted">Kelas yang dimasuki</small>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>
@endsection