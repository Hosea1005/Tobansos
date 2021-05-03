@extends('layout.v_template')
@section('title','Laporan')
@section('content')
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Bantuan</th>
            <th>Penerima</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($laporan as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->nama_bantuan }}</td>
            <td>{{ $data->penerima }}</td>
            <td>
                @if ($data->status == 1)
                      Diterima
                @elseif($data->status == 2)
                      Ditolak
                @elseif($data->status == 0)
                      Belum di approve
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
