@extends('layout.v_templated')
@section('title','Riwayat Transaksi')
@section('content')
        <div class="box-body" style="background-color: white;">
    <table class="table table-bordered table-hover ">
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
                <a href="/transaksiAdmin/detailtransaksi/{{ $data->id_transaksi }}" class="btn btn-sm btn-success">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
        </div>
@endsection