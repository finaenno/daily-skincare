<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use App\Models\BrandProduk;

class GratisOngkirController extends Controller
{
    public function index(){
        $kategoriProduk = KategoriProduk::all();
        $brandProduk = BrandProduk::all();

        return view('pages.admin.gratis-ongkir',[
            'kategoriProduk' => $kategoriProduk,
            'brandProduk' => $brandProduk
        ]);
        // return view('pages.admin.home', $kategoriProduk)->nest('layout.admin', $kategoriProduk2);
    }
}

