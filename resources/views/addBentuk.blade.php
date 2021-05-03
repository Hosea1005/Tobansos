@extends('layout.v_templated')
@section('title','Add Bentuk')
@section('content')
<div class="table-responsive">
              <form action="/bentuk/insertbantu" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="col text">
                Jenis Bantuan
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="jenis_bb" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Kapasitas
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="kapasitas" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
@endsection