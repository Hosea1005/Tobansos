@extends('layout.v_template')
@section('title','Pegawai')
@section('content')
    <div class="box-body" style="background-color: white;">
    <table class="table table-bordered table-hover ">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
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
            <td>
                <a href="/pegawai/detailpegawai/{{ $data->id }}" class="btn btn-sm btn-success">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection
