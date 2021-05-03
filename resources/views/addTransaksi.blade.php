@extends('layout.v_template')
@section('title','Add Transaksi')
@section('content')
<div class="table-responsive">
              <form action="/transaksi/inserttrans" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col text">
                Nama Pengirim
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nama_pengirim" class="form-control" value="{{ Auth::user()->name }}" readonly>
                    </div>
                    
                </div>
              <div class="col text">
                Nama Penerima
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nama_penerima" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                NIP Penerima
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nip_penerima" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Alamat Penerima
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="alamat_penerima" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Jenis Bantuan
                <br>
                
                    <div class="form-group-right">
                      <input type="text" name="jenis_bantuan" class="form-control">
                    </div>
                    

                </div>
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
@endsection