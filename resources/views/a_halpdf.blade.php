@extends('layout.v_templated')
@section('title','Add Pegawai')
@section('content')
<div class="table-responsive">
              <form action="/hpdf" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="col text">
                Nama Lengkap Mahsiswa
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                NIM
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nim" class="form-control" value="{{ Auth::user()->nip }}" disabled>
                    </div>
                    
                </div>
                <br>
                angkatan
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="angkatan" class="form-control" >
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                NIDN
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nidn" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Nama Dosen Wali
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="ndw" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
@endsection