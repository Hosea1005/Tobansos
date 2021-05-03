<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BantuanModel extends Model
{
    public function allData(){
        return DB::table('batuan_lokasi')->get();
    }

    public function detailData($id_bantuan){
        return DB::table('batuan_lokasi')->where('id_bantuan', $id_bantuan)->first();
    }

    public function addData($data){
        return DB::table('batuan_lokasi')->insert($data);
    }
    public function editData($id_bantuan,$data){
        return DB::table('batuan_lokasi')
        ->where('id_bantuan',$id_bantuan)
        ->update($data);
    }
    public function deleteData($id_bantuan){
        return DB::table('batuan_lokasi')
        ->where('id_bantuan',$id_bantuan)
        ->delete();
    }
}
