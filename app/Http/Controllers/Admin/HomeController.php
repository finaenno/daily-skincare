<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;

class HomeController extends Controller
{
    //
    public function index(){
        $kategoriProduk = KategoriProduk::all();
        //$kategoriProduk2 = KategoriProduk::all();

        return view('pages.admin.home',[
            'kategoriProduk' => $kategoriProduk
        ]);
        // return view('pages.admin.home', $kategoriProduk)->nest('layout.admin', $kategoriProduk2);
    }
}
