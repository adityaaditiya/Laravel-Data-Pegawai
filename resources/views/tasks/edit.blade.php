

@extends('layout.main')

@section('title', 'Form Tambah Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">New Activity</h1>
            
            <form method="post" action="/tasks/{{ $task->id }}">
            <input type="hidden" name="_method" value="patch">
            {{ csrf_field() }} 
              <div class="form-group">
              <label for="nama">Name</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Aktivitas" name="nama" value="{{ $task->nama }}">
              </div>
              <div class="form-group">
              <label for="tanggal">Date Activity</label>
              <input type="date" class="form-control" id="tanggal" placeholder="Masukan tanggal Aktivitas" name="tanggal" value="{{ $task->tanggal }}">
              </div>
              <div class="form-group">
              <label for="from">Activity From</label>
              <input type="time" class="form-control" id="from" name="from" value="{{ $task->from }}">
              </div>
              <div class="form-group">
              <label for="end">Activity end</label>
              <input type="time" class="form-control" id="end" placeholder="Masukan Tanggal Masuk" name="end" value="{{ $task->end }}">
              </div>
           <button type="submit" class="btn btn-primary" >Simpan</button>
            </form>
</div>
    </div>
        </div>
@endsection