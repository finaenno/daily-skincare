<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandProduk;
use App\Models\KategoriProduk;

class LayoutNavbarController extends Controller
{
    public function index(){
        $brandProduk = BrandProduk::all();
        $kategoriProduk = KategoriProduk::all();

        // return view('layouts.parts.brand', [
        //     'brandProduk' => $brandProduk,
        //     'kategoriProduk' => $kategoriProduk
        // ]);
        return view('layouts.parts.brand')
            ->with('kategoriProduk', 'kategoriProduk')
            ->with('brandProduk', 'brandProduk');
    }

}
