<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriProduk;


class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title_kategori_produk' => 'Fragrance'
            ],
            [
                'title_kategori_produk' => 'Skincare'
            ],
            [
                'title_kategori_produk' => 'Make Up'
            ],
            [
                'title_kategori_produk' => 'Bodycare'
            ],
            [
                'title_kategori_produk' => 'Haircare'
            ],
        ];

        KategoriProduk::insert($data);
    }
}
