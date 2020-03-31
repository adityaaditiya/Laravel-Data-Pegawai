

@extends('layout.main')

@section('title', 'Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Employee</h1>
            
            
            <div class="card" >
  <img src="/img/{{ $employee->foto }}" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">{{$employee->nama}}</h5>
    <p class="card-text">NIP : {{$employee->nip}}</p>
    <p class="card-text">ALAMAT : {{$employee->alamat}}</p>
    <p class="card-text">Tempat Tanggal Lahir : {{$employee->ttl}}</p>
    <p class="card-text">Jenis Kelamin : {{$employee->jk}}</p>
    <p class="card-text">Status Menikah : {{$employee->sm}}</p>
    <p class="card-text">Tanggal Masuk : {{$employee->created_at}}</p>
    <p class="card-text">Jabatan : {{$employee->jabatan}}</p>
    <p class="card-text">Tanggal Dibuat : {{$employee->created_at}}</p>
    <p class="card-text">Tanggal DiUpdate : {{$employee->updated_at}}</p>
    

    <a href="{{ $employee->id }}/edit" class="btn btn-primary">Ubah Data</a>
    <form action="/pegawai/{{ $employee->id }}" method="post" class="d-inline">
    <input type="hidden" name="_method" value="delete">
    {{ csrf_field() }} 
      <button onclick="return  confirm('Apakah anda yakin ingin menghapus data ini?')" type="submit" class="btn btn-danger" >Hapus</button>
    </form>
    <a href="/pegawai" class="btn btn-secondary">Kembali</a>
  </div>
</div>
            
</div>
    </div>
        </div>
@endsection