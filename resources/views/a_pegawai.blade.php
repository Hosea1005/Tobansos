@extends('layout.v_templated')
@section('title','Mengelola Pegawai')
@section('content')
<div class="col text-right">
                    <a href="/pegawai/add" class="btn btn-sm btn-primary">Add Pegawai</a>
                </div>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($users as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->jabatan }}</td>
            <td>@if ($data->level == 1)
                      Pengirim
                @elseif($data->level == 2)
                      Penerima
                @elseif($data->level == 3)
                      Admin
                @elseif($data->level == 4)
                      Masyarakat
                @endif</td>
            <td>
                <a href="/pegawai/detailpegawai/{{ $data->id }}" class="btn btn-sm btn-success">Detail</a>
                <a href="/pegawai/deletepegawai/{{ $data->id }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection
