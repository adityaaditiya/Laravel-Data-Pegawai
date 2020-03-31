

@extends('layout.main')

@section('title', 'Data Pegawai')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>My Activity</h1>
            <a href="/tasks/create" class="btn btn-primary my-2">Tambah Activity</a>
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
  </div>
@endif   
            <table class="table" style="width: 1100px;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name Activity</th>
        <th scope="col">Date Activity</th>
        <th scope="col">Activity From</th>
        <th scope="col">Activity End</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ( $tasks as $task )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td> {{ $task->nama }}</td>
        <td> {{ $task->tanggal }}</td>
        <td> {{ $task->from }}</td>
        <td> {{ $task->end }}</td>
        <td><a href="/tasks/{{$task->id}}" class="badge badge-info">Detail</a></td>
        <!-- <a href="" class="badge badge-success"></a>
        <a href="" class="badge badge-danger"></a> -->
      </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </div>
@endsection