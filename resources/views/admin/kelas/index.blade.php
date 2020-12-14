@extends('layouts.master')

@section('title', 'Data Kelas')

@section('content')
@if (session('message'))
<div class="alert alert-success alert-dismissible">
  {{ session('message') }}
</div>
@endif
<div class="row">
  @foreach ($kelas as $item)
  <div class="col-md-4">
    <a href="/admin/kelas/{{$item->id}}/detail" class="card">
      <div class="card-body">
        <h4 class="card-title">{{$item->nama_kelas}}</h4>
        <p class="card-text">{{$item->jurusan}}</p>
      </div>
    </a>
  </div>
  @endforeach
</div>
<a href="/admin/kelas/tambah" class="btn btn-primary float-right">Tambah</a>

@endsection
