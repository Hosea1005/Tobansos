@extends('layout.v_template')
@section('title','Detail Transaksi')
@section('content')
<div class="table-responsive">

        <div class="col-xl-12">
          <div div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-">Nama</h3>
                </div>
                
              
            </div>
              <div>
                {{ $users->name }}
              </div>  
          </div>
          
        </div>

        
    

          <!--Table 3-->

        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0">Alamat</h3>
                </div>
                
              
            </div>
            <div>
              {{ $users->alamat }}
            </div>
            
          </div>
          
          </div>

          <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0">Jabatan</h3>
                </div>
                
              
            </div>
            <div>
              {{ $users->jabatan }}
            </div>
            
          </div>
          
          </div>

          <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0">NIP</h3>
                </div>
                
              
            </div>
            <div>
              {{ $users->nip }}
            </div>
            
          </div>
          
          </div>

          <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0">E-mail</h3>
                </div>
                
              
            </div>
            <div>
              {{ $users->email }}
            </div>
            
          </div>
          </div>
        </div>
        @endsection