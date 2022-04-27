<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panen extends Model
{
    use HasFactory;
    public $primarykey ='panenID';
    protected $fillable = [
        'productID','id_kelompok_tani','user_id',
        'perkiraanPanendate','perkiraanPanenjumlah',
        'PanenDate','PanenJumlah','satuan'
    ];
    static public function getPanen(){
        $return=DB::table('panens')
        ->join('products','panens.productID','products.productID');
        return $return;
    }
    public function product(){
        return $this->belongsTo(Product::Class,'productID','productID');
    }
    public function kelompok_tanis(){
    return $this->belongsTo(kelompok_tani::Class,'id_kelompok_tani','id_kelompok_tani');
    } 
}
