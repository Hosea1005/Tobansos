<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanModel extends Model
{
    public function allData(){
        return DB::table('laporan')->get();
    }

    public function allDataPenerima($nip){
        return DB::table('laporan')->where('nip', $nip)->get();
    }
    public function deleteData($id_laporan){
        return DB::table('laporan')
        ->where('id_laporan',$id_laporan)
        ->delete();
    }
    public function addData($data){
        return DB::table('laporan')->insert($data);
    }

    public function editData($id_laporan,$data){
        return DB::table('laporan')
        ->where('id_laporan',$id_laporan)
        ->update($data);
    }
    public function detailData($id_laporan){
        return DB::table('laporan')->where('id_laporan', $id_laporan)->first();
    }
}
