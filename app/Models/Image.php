<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // use HasFactory;
    protected $table = 'image';
    protected $primaryKey = 'id_image';
    public $incrementing = 'true';
    public $timestamps = false;

    protected $fillable = [
        'id_image',
        'nama_image',
        'id_produk'
    ];

    public function item_produk(){
        return $this->belongsTo(ItemProduk::class, 'id_produk', 'id_produk');
    }
}
