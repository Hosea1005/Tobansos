@extends('layout.v_templatet')
@section('title','Detail Transaksi')
@section('content')
<div class="table-responsive">
              <form action="/laporanpenerima/updatelaporan/{{ $laporan->id_laporan }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="col text">
                Nama Bantuan
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nama_bantuan" class="form-control" value="{{ $laporan->nama_bantuan }}" disabled>
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Lokasi
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="keterangan_laporan" class="form-control" value="{{ $laporan->keterangan_laporan }}" disabled>
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Pengirim
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nama_pengirim" class="form-control" value="{{ $laporan->nama_pengirim }}" disabled>
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Action
                <br>
                
                    <div class="form-group-right">
                        <select name="status">
                            <option value="0">Tidak ada action</option>
                            <option value="2">Tolak</option>
                            <option value="1">Terima</option>
                         </select>

                    </div>
                    
                </div>
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
        @endsection