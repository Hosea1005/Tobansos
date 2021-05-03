@extends('layout.v_templated')
@section('title','Add Pegawai')
@section('content')
<div class="table-responsive">
              <form action="/pegawai/insert" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="col text">
                Nama Lengkap
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="name" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Alamat
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="alamat" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Jabatan
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="jabatan" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                NIP
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nip" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col text">
                Role
                <br>
                
                    <div class="form-group-right">
                    <select name="level">
                            <option value="2">Penerima</option>
                            <option value="1">Pengirim</option>
                         </select>
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                E-mail
                <br>
                
                    <div class="form-group-right">
                    <input type="email" name="email" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Password
                <br>
                
                    <div class="form-group-right">
                    <input type="password" name="password" class="form-control">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
@endsection