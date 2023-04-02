@extends('layouts.admin')

@section('title')
    Mengedit Item Produk
@endsection

@section('section-title')
    <h2>Mengedit Item Produk</h2>
@endsection

@section('content')
<form action="{{route('itemProduk.update'), $itemProduk->id_produk}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mt-3">
        <label for="name">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" id="nama_produk" value = "{{$itemProduk->nama_produk}}" required >
    </div>
    <div class="form-group mt-3">
        <label for="name">Deskripsi Produk</label>
        <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" required> {{$itemProduk->deskripsi_produk}}</textarea>
    </div>
    <div class="form-group mt-3">
        <label for="name">Harga Produk</label>
        <input type="text" class="form-control" name="harga_produk" id="harga_produk" value = "{{$itemProduk->harga_produk}}" required>
    </div>
    <div class="form-group mt-3">
        <label for="name">Kategori Produk</label>
        <select class="form-select" aria-label="Default select example" name="kategori_produk" id="kategori_produk">
            @foreach ($kategoriProduk as $item)
                <option value="{{$item->id_kategori_produk}}">{{$item->title_kategori_produk}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-3">
        <label for="name">Brand Produk</label>
        <select class="form-select" aria-label="Default select example" name="kategori_produk" id="kategori_produk">
            @foreach ($brandProduk as $item)
                <option value="{{$item->id_brand_produk}}">{{$item->title_brand_produk}}</option>
            @endforeach
        </select>
    </div>
    <div class="text-center"><button type="submit">Simpan</button></div>
</form>
@endsection