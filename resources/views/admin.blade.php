@extends('layout.v_templated')
{{-- @section('title','Selamat datang di TOBANSOS') --}}
@section('content')
<h2>Jumlah Penerima Bantuan</h2>
                    <div class="col text-right">
                  {{-- <a href="#!" class="btn btn-sm btn-primary">Tampilkan Semua</a> --}}
                    <a href="/bantuan/add" class="btn btn-sm btn-primary">Add Bantuan</a>

                </div>
    <div class="box-body" style="background-color: white;">
        <form action="/" method="GET">
            <div class="col-md-8">
            <input class="form-control" name="cari" placeholder="Search lokasi.." type="search" value="{{ old('cari') }}">
            </div>      
            <div class="col-md-4">
                  <input type="submit" value="CARI" class="btn btn-sm btn-success" >
            </div>
        </form>
    <table class="table table-bordered table-hover ">
    <thead>
        <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Jumlah Penerima</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($bantuan as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->lokasi }}</td>
            <td>{{ $data->jlh_penerima }} penerima</td>
            <td>
                <a href="/bantuan/editbantuan/{{ $data->id_bantuan }}" class="btn btn-sm btn-success">Edit</a>
                {{-- <a href="" class="btn btn-sm btn-warning">Edit</a> --}}
                <a href="/bantuan/delete/{{ $data->id_bantuan }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
<br>
<br>
<br>
<h2>Bentuk Bantuan Sosial</h2>
                    <div class="col text-right">
                  {{-- <a href="#!" class="btn btn-sm btn-primary">Tampilkan Semua</a> --}}
                    <a href="/bentuk/add" class="btn btn-sm btn-primary">Add Bentuk Bantuan</a>

                </div>
    <div class="box-body" style="background-color: white;">
    <table class="table table-bordered table-hover ">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Bantuan</th>
            <th>Kapasitas</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($bentuk as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->jenis_bb }}</td>
            <td>{{ $data->kapasitas }}</td>
            <td>
                <a href="/bentuk/editbantuan/{{ $data->id_bb }}" class="btn btn-sm btn-success">Edit</a>
                {{-- <a href="" class="btn btn-sm btn-warning">Edit</a> --}}
                <a href="/bentuk/delete/{{ $data->id_bb }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection
