

@extends('layout.main')

@section('title', 'Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">Detail Employee Activity</h1>
            <!-- <a href="/pegawai/create" class="btn btn-primary my-3">Tambah Data Pegawai</a> -->
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
  </div>
@endif      
            <ul class="list-group" >
              @foreach ( $pegawai as $pgw )
              <li class="list-group-item d-flex justify-content-between align-items-center" style="width: 700px;">
              <div><img src="img/{{ $pgw->foto }}" width="100" >
              <h2 class="d-inline">&nbsp;&nbsp;{{ $pgw->nama }}</h2></div>
              <a href="/absen/{{$pgw->id}}" class="badge badge-info">Detail</a>
              </li>
              @endforeach
            </ul>
</div>
    </div>
        </div>
@endsection

