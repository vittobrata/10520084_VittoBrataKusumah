<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = [
        'kategori_produk',
        'nama_produk',
        'stok',
        'harga_produk',
    ];

    //public funtion getFotoProdukAttributes();
    //{
      //  $foto_produk - $this->attributes['foto_produk'];
    //    if (empty($foto_produk))return'https://via.placeholder.com/100?text-produk';
  //          else return Storage::url('produk/'. $foto_produk);
 //
    //}
}
