@extends('layout.v_templated')
@section('title','Detail Transaksi')
@section('content')
<div class="table-responsive">

        <div class="col-xl-12">
          <div div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-">Nama Bantuan</h3>
                </div>
                
              
            </div>
              <div>
                {{ $transaksi->jenis_bantuan }}
              </div>  
          </div>
          
        </div>

        
    

          <!--Table 3-->

        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0">Alamat Penerima</h3>
                </div>
                
              
            </div>
            <div>
              {{ $transaksi->alamat_penerima }}
            </div>
            
          </div>
          
          </div>

          <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              
                <div class="col">
                  <h3 class="mb-0">Nama Penerima</h3>
                </div>
                
              
            </div>
            <div>
              {{ $transaksi->nama_penerima }}
            </div>
            
          </div>
          
          </div>
        </div>
        @endsection