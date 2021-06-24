@extends('layout.v_templated')
@section('title','Detail User')
@section('content')
<div class="box box-primary col-md-12" style="padding: 10px; border-radius: 10px;">
  <div class="table-responsive col-md-4">
    <center><img src="{{asset('assets/')}}/img/brand/us.png" class="navbar-brand-img" alt="..." height="150px" style="margin-top: 100px;"></center>
  </div>
<div class="table-responsive col-md-8" >
        <div class="col-xl-12">
          <div div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <b><h3 style="font-weight: bold;" class="mb-">Nama</h3></b>
                </div>
                
              
            </div>
              <div style="font-size: 20px;">
                {{ $users->name }}
              </div>  
          </div>
          
        </div>

        
    

          <!--Table 3-->

        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 style="font-weight: bold;" class="mb-0">Alamat</h3>
                </div>
                
              
            </div>
            <div style="font-size: 20px;">
              {{ $users->alamat }}
            </div>
            
          </div>
          
          </div>

          <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0" style="font-weight: bold;">Jabatan</h3>
                </div>
                
              
            </div>
            <div style="font-size: 20px;">
              {{ $users->jabatan }}
            </div>
            
          </div>
          
          </div>

          <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0" style="font-weight: bold;">NIP</h3>
                </div>
                
              
            </div>
            <div style="font-size: 20px;">
              {{ $users->nip }}
            </div>
            
          </div>
          
          </div>

          <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0" style="font-weight: bold;">E-mail</h3>
                </div>
                
              
            </div>
            <div style="font-size: 20px;">
              {{ $users->email }}
            </div>
            
          </div>
          </div>
        </div>
</div>
        @endsection