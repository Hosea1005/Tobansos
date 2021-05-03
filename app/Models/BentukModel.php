<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BentukModel extends Model
{
    public function allData(){
        return DB::table('bentuk_bantuan')->get();
    }

    public function detailData($id_bantuan){
        return DB::table('bentuk_bantuan')->where('id_bb', $id_bantuan)->first();
    }

    public function addData($data){
        return DB::table('bentuk_bantuan')->insert($data);
    }
    public function editData($id_bantuan,$data){
        return DB::table('bentuk_bantuan')
        ->where('id_bb',$id_bantuan)
        ->update($data);
    }
    public function deleteData($id_bantuan){
        return DB::table('bentuk_bantuan')
        ->where('id_bb',$id_bantuan)
        ->delete();
    }
}
