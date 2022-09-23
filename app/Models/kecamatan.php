<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = "kecamatan";
    protected $primarykey = "id";
    protected $fillabel = ['id','kecamatan'];

    public function Produk()
    
    {
       return $this->hasMany(Produk::class);
    }
}
