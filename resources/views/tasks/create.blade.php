

@extends('layout.main')

@section('title', 'Form Tambah Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">New Activity</h1>
            
            <form method="post" action="/tasks">
            {{ csrf_field() }} 
              <div class="form-group">
              <label for="nama">Name</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Aktivitas" name="nama">
              </div>
              <div>
              <label for="tanggal">Date Activity</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal">
              </div>
              <div class="form-group">
              <label for="from">Activity From</label>
              <input type="time" class="form-control" id="from" name="from">
              </div>
              <div class="form-group">
              <label for="end">Activity end</label>
              <input type="time" class="form-control" id="end" name="end">
              </div>
           <button type="submit" class="btn btn-primary" >Simpan</button>
            </form>
</div>
    </div>
        </div>
@endsection