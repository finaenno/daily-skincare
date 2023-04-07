<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BrandProduk;
use App\Models\KategoriProduk;

class BrandProdukAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $brandProduk = BrandProduk::all();
        $kategoriProduk = KategoriProduk::all();

        return view('pages.admin.brandProduk.index',[
            'kategoriProduk' => $kategoriProduk,
            'brandProduk' => $brandProduk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brandProduk = BrandProduk::all();
        $kategoriProduk = KategoriProduk::all();

        return view('pages.admin.brandProduk.create', [
            'kategoriProduk' => $kategoriProduk,
            'brandProduk' => $brandProduk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_brand_produk'
        ]);

        $brandProduk = new BrandProduk;
        $brandProduk->title_brand_produk = $request->input('title_brand_produk');

        $brandProduk->save();

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
