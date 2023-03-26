<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use App\Models\KategoriProduk;

class KategoriProdukAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriProduk = KategoriProduk::all();

        return view('pages.admin.kategoriProduk.index', [
            'kategoriProduk' => $kategoriProduk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kategoriProduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_kategori_produk'
        ]);

        $kategoriProduk = new KategoriProduk;
        $kategoriProduk->title_kategori_produk = $request->input('title_kategori_produk');

        $kategoriProduk->save();

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
