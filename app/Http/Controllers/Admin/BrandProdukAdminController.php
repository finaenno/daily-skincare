<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BrandProduk;

class BrandProdukAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $brandProduk = BrandProduk::all();

        return view('pages.admin.brandProduk.index',[
            'brandProduk' => $brandProduk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.brandProduk.create');
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
