<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiModel extends Model
{
    public function allData(){
        return DB::table('transaksi')->get();
    }

    public function detailData($id_transaksi){
        return DB::table('transaksi')->where('id_transaksi', $id_transaksi)->first();
    }

    public function addData($data){
        return DB::table('transaksi')->insert($data);
    }
    public function editData($id_transaksi,$data){
        return DB::table('transaksi')
        ->where('id_transaksi',$id_transaksi)
        ->update($data);
    }
    public function deleteData($id_transaksi){
        return DB::table('transaksi')
        ->where('id_transaksi',$id_transaksi)
        ->delete();
    }
}
