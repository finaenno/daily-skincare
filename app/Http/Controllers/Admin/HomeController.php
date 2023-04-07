<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use App\Models\BrandProduk;

class HomeController extends Controller
{
    //
    public function index(){
        $kategoriProduk = KategoriProduk::all();
        $brandProduk = BrandProduk::all();

        return view('pages.admin.home',[
            'kategoriProduk' => $kategoriProduk,
            'brandProduk' => $brandProduk
        ]);
        // return view('pages.admin.home', $kategoriProduk)->nest('layout.admin', $kategoriProduk2);
    }
}
