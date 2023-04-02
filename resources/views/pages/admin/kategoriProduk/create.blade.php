@extends('layouts.admin')

@section('title')
    Menambahkan Kategori Produk
@endsection

@section('section-title')
<h2>Menambahkan Kategori Produk</h2>
@endsection

@section('content')
            <form action="{{route('kategoriProduk.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group mt-3">
                    <label for="name">Kategori Produk</label>
                    <input type="text" class="form-control" name="title_kategori_produk" id="title_kategori_produk" required>
                </div>
                <br>
                <div class="text-center"><button type="submit">Simpan</button></div>

        </div>
@endsection

