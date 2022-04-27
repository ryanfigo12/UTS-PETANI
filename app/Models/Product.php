<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    public $primarykey = 'productID';
    public function panens(){
        return $this->hasMany(Panen::class,'productID','productID');
    }
}
