<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use App\Models\ItemProduk;
use App\Models\KategoriProduk;
use App\Models\BrandProduk;
use Illuminate\Support\Facades\DB;

class ItemProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itemProduk = ItemProduk::all();

        return view('pages.admin.itemProduk.index',[
            'itemProduk' => $itemProduk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $kategoriProduk = DB::table('item_produk')
        //     ->join('kategori_produk', 'item_produk.id_kategori_produk', '=', 'kategori_produk.id_kategori_produk')
        //     ->select('kategori_produk.title_kategori_produk', 'item_produk.id_kategori_produk')
        //     ->get();
        $kategoriProduk = KategoriProduk::all();
        $brandProduk = BrandProduk::all();

        return view('pages.admin.ItemProduk.create',[
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
            'nama_produk',
            'deskripsi_produk',
            'harga_produk',
            'id_kategori_produk',
            'id_brand_produk'
        ]);

        $itemProduk = new ItemProduk;
        $itemProduk->nama_produk = $request->input('nama_produk');
        $itemProduk->deskripsi_produk = $request->input('deskripsi_produk');
        $itemProduk->harga_produk = $request->input('harga_produk');
        $itemProduk->id_kategori_produk = $request->input('id_kategori_produk');
        $itemProduk->id_brand_produk = $request->input('id_brand_produk');

        $itemProduk->save();

        return redirect(route('itemProduk.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $itemProduk = ItemProduk::find($id);

        // return view('pages.admin.itemProduk.detail',[
        //     'itemProduk' => $itemProduk,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $itemProduk = ItemProduk::find($id);

        return view('pages.admin.itemProduk.edit',[
            'itemProduk' => $itemProduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk',
            'deskripsi_produk',
            'harga_produk',
            'id_kategori_produk',
            'id_brand_produk'
        ]);

        $itemProduk = ItemProduk::find($id);
        $itemProduk->nama_produk = $request->input('nama_produk');
        $itemProduk->deskripsi_produk = $request->input('deskripsi_produk');
        $itemProduk->harga_produk = $request->input('harga_produk');
        $itemProduk->id_kategori_produk = $request->input('id_kategori_produk');
        $itemProduk->id_brand_produk = $request->input('id_brand_produk');

        $itemProduk->save();

        return redirect(route('itemProduk.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $itemProduk = ItemProduk::find($id);
        $itemProduk->delete();

        return redirect(route('itemProduk.index'));
    }
}
