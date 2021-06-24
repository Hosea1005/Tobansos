@extends('layout.v_templated')
@section('title','Add Pegawai')
@section('content')
<div class="table-responsive">
              <form action="/user/updatePeng/{{ $userku->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="col text">
                Nama Lengkap
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="name" class="form-control" value="{{ $userku->name }}">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Alamat
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="alamat" class="form-control" value="{{ $userku->alamat }}">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                Jabatan
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="jabatan" class="form-control" value="{{ $userku->jabatan }}">
                    </div>
                    
                </div>
                <br>
                <div class="col text">
                NIP
                <br>
                
                    <div class="form-group-right">
                    <input type="text" name="nip" class="form-control" value="{{ $userku->nip }}">
                    </div>
                </div>
                <br>
                {{-- <div class="col text">
                Role
                <br>
                    <div class="form-group-right">
                    @if ($userku->level == 1)
                      <input type="text" name="level" class="form-control" value="pengirim">
                    @elseif($userku->level == 2)
                      <input type="text" name="level" class="form-control" value="penerima">

                      @elseif($userku->level == 3)
                      <input type="text" name="level" class="form-control" value="admin">

                      @elseif($userku->level == 4)
                      <input type="text" name="level" class="form-control" value="masayaralat">
                    @endif</td>
                    
                    </div>
                </div> --}}
                {{-- <br> --}}
                <div class="col text">
                E-mail
                <br>
                
                    <div class="form-group-right">
                    <input type="email" name="email" class="form-control" value="{{ $userku->email }}">
                    </div>
                    
                </div>
                <br>
                {{-- <div class="col text">
                Password
                <br>
                
                    <div class="form-group-right">
                    <input type="password" name="password" class="form-control">
                    </div>
                    
                </div> --}}
                <br>
                <div class="col text">
                <button  class="btn btn-success float-right">Simpan</button>
                </div>
                </form>
            </div>
@endsection