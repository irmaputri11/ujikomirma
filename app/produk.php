<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable = [
        'kd_produk','nama_produk','id_jenis_produk',
        'satuan','stok','harga','deskripsi','foto'
    ];
     public $timestamps = true;

     public function jenis_produk()
     {
         return $this->belongsTo('App\jenis_produk','id_jenis_produk');
     }
}
