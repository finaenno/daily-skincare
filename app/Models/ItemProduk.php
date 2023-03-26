<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemProduk extends Model
{
    //use HasFactory;
    protected $table = 'item_produk';
    protected $primaryKey = 'id_produk';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'id_produk',
        'nama_produk',
        'deskripsi_produk',
        'harga_produk',
        'id_kategori_produk'
    ];

    public function kategori_produk(){
        return $this->belongsTo(KategoriProduk::class, 'id_kategori_produk', 'id_kategori_produk');
    }
}
