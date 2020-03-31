

@extends('layout.main')

@section('title', 'Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Aktivitas Pegawai</h1>
            
            
            <div class="card" >
    <p class="card-text mt-3">&nbsp Nama Aktivitas : {{$task->nama}}</p>
    <p class="card-text">&nbsp Tanggal Aktivitas : {{$task->tanggal}}</p>
    <p class="card-text">&nbsp Waktu Dimulai : {{$task->from}}</p>
    <p class="card-text">&nbsp Waktu Selesai : {{$task->end}}</p>
        
    <div>
    <a href="{{ $task->id }}/edit" class="btn btn-primary">Ubah Data</a>
    <form action="/tasks/{{ $task->id }}" method="post" class="d-inline">
    <input type="hidden" name="_method" value="delete">
    {{ csrf_field() }} 
      <button onclick="return  confirm('Apakah anda yakin ingin menghapus data ini?')" type="submit" class="btn btn-danger" >Hapus</button>
    </form>
    <a href="/tasks" class="btn btn-secondary">Kembali</a>
    </div>
    <br>
  </div>
</div>

            
</div>
    </div>
        </div>
@endsection