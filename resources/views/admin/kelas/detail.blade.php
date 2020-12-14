@extends('layouts.master')
@section('title', 'Detail Kelas')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{$detail->nama_kelas}}</h3>
  </div>
  <div class="card-body">
    <p>Nama Kelas : {{$detail->nama_kelas}}</p>
    <p>Jurusan : {{$detail->jurusan}}</p>
    <p>Jumlah Siswa : {{$detail->jumlah_siswa}}</p>
    

    <form action="/admin/kelas/{{$detail->id}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger float-right ml-2" type="submit">Hapus</button>
    </form>
    <a href="/admin/kelas/{{$detail->id}}/ubah" class="btn btn-warning float-right">Ubah</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Siswa</h3>
  </div>
  <div class="card-body p-0">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No.</th>
          <th>NIS</th>
          <th>Nama</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($detail->siswa as $index => $item)
        <tr>
          <td>{{$index + 1}}</td>
          <td>{{$item->nis}}</td>
          <td>{{$item->nama}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection