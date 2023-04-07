<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandProduk extends Model
{
    //use HasFactory;
    protected $table = 'brand_produk';
    protected $primaryKey = 'id_brand_produk';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'id_brand_produk',
        'title_brand_produk',
        // 'id_kategori_produk                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 '
    ];
    // public function kategori_produk(){
    //     return $this->belongsTo(KategoriProduk::class, 'id_kategori_produk', 'id_kategori_produk');
    // }
}
