

@extends('layout.main')

@section('title', 'Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Data Aktiviatas Pegawai</h1>
            <!-- <a href="/tasks/create" class="btn btn-primary my-2">Tambah Activity</a> -->
<!-- @if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
  </div>
@endif    -->
            <table class="table" style="width: 1100px;">
    <thead class="thead-dark">
      <tr>
         

        <th scope="col">Employee Name</th>
        <th scope="col">NIP</th>
        <th scope="col">Name Activity</th>
        <th scope="col">Date Activity</th>
        <th scope="col">Activity From</th>
        <th scope="col">Activity End</th>
        
        </tr>
    </thead>
    <tbody>
   
    @foreach ( $tasks as $task )
      <tr>
        <td> {{ $pegawai->nama }}</td>
        <td> {{ $pegawai->nip }}</td>
        <td> {{ $task->nama }}</td>
        <td> {{ $task->tanggal }}</td>
        <td> {{ $task->from }}</td>
        <td> {{ $task->end }}</td>
       
      </tr>
    @endforeach
   
    </tbody>
</table>
        </div>
    </div>
@endsection