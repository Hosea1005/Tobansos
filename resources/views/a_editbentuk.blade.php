@extends('layout.v_templated')
@section('title','Add Bantuan')
@section('content')
<div class="table-responsive">
              <form action="/bentuk/updatebantuan/{{ $bentuk->id_bb }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="col text">
                Jenis Bantuan
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="jenis_bb" class="form-control" value="{{ $bentuk->jenis_bb }}">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Kapasitas
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="kapasitas" class="form-control" value="{{ $bentuk->kapasitas }}">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
@endsection