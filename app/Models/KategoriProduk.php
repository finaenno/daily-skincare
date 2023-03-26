<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    //use HasFactory;
    protected $table = 'kategori_produk';
    protected $primaryKey = 'id_kategori_produk';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'id_kategori_produk',
        'title_kategori_produk'
    ];
}
