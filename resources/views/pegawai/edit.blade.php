

@extends('layout.main')

@section('title', 'Form Ubah Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Form Update Data Employee</h1>
            
            <form method="post" action="/pegawai/{{ $employee->id }}">
            <input type="hidden" name="_method" value="patch">
            {{ csrf_field() }} 
              <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $employee->nama }}">
              </div>
              <div class="form-group">
              <label for="nip">NIP</label>
              <input type="text" class="form-control" id="nip" placeholder="Masukan NIP" name="nip" value="{{ $employee->nip }}">
              </div>
              <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="{{ $employee->alamat }}">
              </div>
              <div class="form-group">
              <label for="ttl">Tempat Tangal Lahir</label>
              <input type="text" class="form-control" id="ttl" placeholder="Masukan Tempat Tangal Lahir" name="ttl" value="{{ $employee->ttl }}">
              </div>
              <!-- <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <input type="text" class="form-control" id="jk" placeholder="Masukan Jenis Kelamin" name="jk">
              </div> -->
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk" value="{{ $employee->nama }}">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                </div>
              <!-- <div class="form-group">
              <label for="sm">Status Menikah</label>
              <input type="text" class="form-control" id="sm" placeholder="Masukan Status Menikah" name="sm">
              </div> -->
              <div class="form-group">
                    <label for="sm">Status Pernikahan</label>
                        <select class="form-control" id="sm" name="sm" value="{{ $employee->sm }}">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                        </select>
                </div>
              <div class="form-group">
              <label for="tm">Tanggal Masuk</label>
              <input type="datetime" class="form-control" id="tm" placeholder="Masukan Tanggal Masuk" name="tm" value="{{ $employee->created_at }}">
              </div>
              <!-- <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" placeholder="Masukan Jabatan" name="jabatan">
              </div> -->
              <div class="form-group">
                    <label for="jabatan">Pilih Jabatan</label>
                        <select class="form-control" id="jabatan" name="jabatan" value="{{ $employee->jabatan }}">
                            <option value="Manager">Manager</option>
                            <option value="Sistem Analyst">Sistem Analyst</option>
                            <option value="Programmer">Programmer</option>
                            <option value="Software Designer">Software Designer</option>
                            <option value="Software Tester">Software Tester</option>
                        </select>
                </div>
              <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" class="form-control-file" id="foto" name="foto" value="{{ $employee->foto }}">
              </div>
           <button type="submit" class="btn btn-primary" >Simpan</button>
            </form>
</div>
    </div>
        </div>
@endsection