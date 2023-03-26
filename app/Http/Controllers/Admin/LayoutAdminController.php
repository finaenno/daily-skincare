<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;

class LayoutAdminController extends Controller
{
    public function index(){
    $kategoriProduk = KategoriProduk::all();

    return view('layout.admin', [
        'kategoriProduk' => $kategoriProduk
    ]);
}
}
