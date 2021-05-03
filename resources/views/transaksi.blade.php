@extends('layout.v_template')
@section('title','Transaksi')
@section('content')
                <div class="col text-right">
                  {{-- <a href="#!" class="btn btn-sm btn-primary">Tampilkan Semua</a> --}}
                    <a href="/transaksi/add" class="btn btn-sm btn-primary">Add Transaksi</a>

                </div>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Bantuan</th>
            <th>Penerima</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($transaksi as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->jenis_bantuan }}</td>
            <td>{{ $data->nama_penerima }}</td>
            <td>
                <a href="/transaksi/detailtransaksi/{{ $data->id_transaksi }}" class="btn btn-sm btn-success">Detail</a>
                {{-- <a href="" class="btn btn-sm btn-warning">Edit</a> --}}
                <a href="/transaksi/delete/{{ $data->id_transaksi }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection
