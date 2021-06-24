@extends('layout.v_templated')
@section('title','Hi Admin, Selamat datang di TOBANSOS')
@section('content')
<div class="box-body" style="background-color: white;">
    <table class="table table-bordered table-hover ">
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
</div>
@endsection
