@extends('layout.v_templated')
@section('title','Add Bantuan')
@section('content')
<div class="table-responsive">
              <form action="/bantuan/insertbantu" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="col text">
                Nama Kecamatan
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="lokasi" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Jumlah Penerima
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="jlh_penerima" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
@endsection