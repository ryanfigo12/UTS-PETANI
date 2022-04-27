<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JajanbaliModel extends Model
{
    public function allData()
    {
        return DB::table('jajanbali')->get();
    }

    public function detailData($id_jajanbali)
    {
        return DB::table('jajanbali')->where('id_jajanbali', $id_jajanbali)->first();
    }

    public function addData($data)
    {
        DB::table('jajanbali')->insert($data);
    }
    
    public function editData($id_jajanbali, $data)
    {
        DB::table('jajanbali')
            ->where('id_jajanbali', $id_jajanbali)
            ->update($data);
    }
    public function deleteData ($id_jajanbali)
    {
        DB::table ('jajanbali')
            ->where('id_jajanbali', $id_jajanbali)
            ->delete();
    }
} 