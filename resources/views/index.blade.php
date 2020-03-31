

@extends('layout.main')

@section('title', 'Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Data Employee</h1>
            <table class="table" style="width: 1100px;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Foto</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tempat & Tanggal Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Status Menikah</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Jabatan</th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $pegawai as $pgw )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> <img src="img/{{ $pgw->foto }}" width="150" ></td>
        <td> {{ $pgw->nama }}</td>
        <td> {{ $pgw->nip }}</td>
        <td> {{ $pgw->alamat }}</td>
        <td> {{ $pgw->ttl }}</td>
        <td> {{ $pgw->jk }}</td>
        <td> {{ $pgw->sm }}</td>
        <td> {{ $pgw->tm }}</td>
        <td> {{ $pgw->jabatan }}</td>
        <!-- <a href="" class="badge badge-success"></a>
        <a href="" class="badge badge-danger"></a> -->
      </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </div>
@endsection